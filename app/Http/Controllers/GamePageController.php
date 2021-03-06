<?php

namespace App\Http\Controllers;

use App\Models\Game\Budget;
use App\Models\Game\FinancialOptions;
use App\Models\Game\ResultProcess;
use App\Models\Recruitment;
use App\Models\Revenue;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use Config;
use DB;
use App\Models\Game\FinancialStatement;
use App\Models\Game\FinancialStatementItems;
use App\Models\Game\CashFlowStatement;
use App\Models\Game\CashFlowStatementItems;

class GamePageController extends Controller
{
    //

    public function startTheGame()
    {
    }


    public function overview()
    {
        return view('game_views.overview');
    }

    public function budgeting()
    {
        return view('game_views.budgeting');
    }

    public function recruitment()
    {
        return view('game_views.recruitment');
    }

    public function revenue()
    {
        return view('game_views.revenue');
    }

    public function revenue_np()
    {
        return view('game_views.revenue-np');
    }

    public function revenueOther()
    {
        return view('game_views.revenue-other');
    }

    public function financialStatements()
    {
        $result_array = $this->statement_data();

        $options = FinancialOptions::select(['title', 'value'])->whereStatus(0)->get();


        $financial = FinancialStatement::where(['game_id' => Session::get('game_id'), 'user_id' => Auth::guard('web')->user()->id, 'session_id' => Session::getId()])->get()->first();

        $revenueData = null;
        $expensesData = null;
        $total_revenue = 0;
        $total_expenses = 0;
        $total_income = 0;

        if (!is_null($financial)) {
            $total_revenue = $financial->total_revenue;
            $total_expenses = $financial->total_expanses;
            $total_income = $total_revenue - $total_expenses;
            $revenueData = FinancialStatementItems::where(['financial_id' => $financial->id, 'type' => 'revenue'])->get();
            $expensesData = FinancialStatementItems::where(['financial_id' => $financial->id, 'type' => 'expenses'])->get();
        }
        return view('game_views.finalcial-statement', [
            'revenueData' => $revenueData,
            'expensesData' => $expensesData,
            'options' => $options,
            'options_dynamic' => $result_array,
            'total_revenue' => $total_revenue,
            'total_expenses' => $total_expenses,
            'total_income' => $total_income,
        ]);
    }


    public function cashFlowStatements()
    {
        $options = FinancialOptions::get();

        $financial = CashFlowStatement::where(['game_id' => Session::get('game_id'), 'user_id' => Auth::guard('web')->user()->id, 'session_id' => Session::getId()])->get()->first();

        $revenueData = null;
        $expensesData = null;
        $total_revenue = 0;
        $total_expenses = 0;
        $total_income = 0;
        $calculated_data = 0;

        $expenses_type = [
            "operating_expenses" => 2,
            "cash_to_suppliers" => 3,
            "cash_for_interest" => 4,
            "cash_for_taxes" => 5,
        ];
        if (!is_null($financial)) {
            $total_revenue = $financial->total_revenue;
            $total_expenses = $financial->total_expanses;
            $total_income = $total_revenue - $total_expenses;
            $revenueData = CashFlowStatementItems::where(['cash_flow_statement_id' => $financial->id, 'type' => 1])->get();

            $expensesData = CashFlowStatementItems::where(['cash_flow_statement_id' => $financial->id])->get();
            $calculated_data = $expensesData->mapToGroups(function ($item, $key) {
                return [$item->type => $item->value];
            })->map(function ($item) {
                return $item->sum();
            });
            //    return([$expensesData, $calculated_data]);
        }


        // dd($total_expenses);
        return view('game_views.cash-flow-statement', [
            'revenueData' => $revenueData,
            'expensesData' => $expensesData,
            'expensesType' => $expenses_type,
            'options' => $options,
            'total_revenue' => $total_revenue,
            'total_expenses' => $total_expenses,
            'total_income' => $total_income,
            'calculate_data' => $calculated_data
        ]);
    }


    public function decisionDriven()
    {
        return view('game_views.decision-driven');
    }


    public $userId;
    public $gameId;

    public function coursePoints()
    {

        $this->userId = Auth::guard('web')->user()->id;
        $this->gameId = Session::get("game_id");
        $resultProcess = ResultProcess::where('user_id', $this->userId)->where('game_id', $this->gameId)->get();

        if (count($resultProcess)) {
            $result_done = 1;
        } else {
            $result_done = 0;
        }
        // return $resultProcess;

        $min_max = [];
        foreach ($resultProcess as $result) {
            $min_max[] = [
                "process_id" => $result->process_id,
                "max" => $result->point_value,
                "actual" => $result->mark_value
            ];
        }

        return view('game_views.course-points', compact('min_max', 'result_done'));
    }

    public function statement_data(): object
    {
        $financial_options = array_column(
            array_filter(Config::get('game.financialOption'), function ($key, $val) {
                return $key['status'] == 1; //manually filter by status 1
            }, ARRAY_FILTER_USE_BOTH),
            'name'
        );


        $records = DB::table('revenues')
            ->join('revenue_others', 'revenues.id', '=', 'revenue_others.revenue_id')
            ->join('products', 'revenues.product_id', '=', 'products.id')
            ->join('marketplaces', 'revenues.market_place_id', '=', 'marketplaces.id')
            ->select('marketplaces.name as market', 'products.name', 'revenues.revenue', 'revenue_others.*')
            ->where(['revenues.game_id' => Session::get('game_id'), 'revenues.user_id' => Auth::guard('web')->user()->id])
            ->get();
        // dd($records);
        $revenue = array('A' => 0, 'B' => 0);
        if ($records->isNotEmpty()) {
            foreach ($records as $key => $val) {
                $total = $val->revenue + $val->month2_revenue;
                array_key_exists($val->name, $revenue) ? $revenue["$val->name"] += $total : $revenue["$val->name"] = $total;
            }
        }

        $budgeting_results = Budget::where(['game_id' => Session::get('game_id'), 'user_id' => Auth::guard('web')->user()->id])->get();

        $total_budgeting = 0;
        if ($budgeting_results->isNotEmpty()) {

            $budgeting_data = $budgeting_results->map(function ($item, $key) {
                return ($item->recruitment + $item->manufacturing + $item->launch + $item->other);
            })->toArray();
            $total_budgeting = array_sum($budgeting_data);
        }
        // calculate budgeting/OPEX/salary expense

        $recruitment_result = Recruitment::where(['game_id' => Session::get('game_id'), 'user_id' => Auth::guard('web')->user()->id])
            ->get()->map(function ($item) {
                return $item->hr_manager + $item->bdm + $item->sales_manager;
            })->toArray();
        $recruitment_result = $recruitment_result ?? 0;
        // dd([$revenue, $total_budgeting, $recruitment_result]);
        $data_value = collect([$revenue, $total_budgeting, $recruitment_result])->flatten(); // arrange data value

        return $result_object = collect($financial_options)->combine($data_value); // combine financial_option with data value

    }

    public function financialStatement()
    {
        $f_result_array = $this->statement_data();
        $financial_options = FinancialOptions::select(['title', 'value'])->whereStatus(0)->get();
        $financial = FinancialStatement::where(['game_id' => Session::get('game_id'), 'user_id' => Auth::guard('web')->user()->id, 'session_id' => Session::getId()])->get()->first();

        $f_revenueData = null;
        $f_expensesData = null;
        $f_total_revenue = 0;
        $f_total_expenses = 0;
        $f_total_income = 0;
        $minus_options = [];
        if (!is_null($financial)) {
            $f_total_revenue = $financial->total_revenue;
            $f_total_expenses = $financial->total_expanses;
            $f_total_income = $f_total_revenue - $f_total_expenses;
            $f_revenueData = FinancialStatementItems::where(['financial_id' => $financial->id, 'type' => 'revenue'])->get();
            $f_expensesData = FinancialStatementItems::where(['financial_id' => $financial->id, 'type' => 'expenses'])->get();
            $minus_options = $f_revenueData->pluck('title');
            $minus_options = $minus_options->concat($f_expensesData->pluck('title'))->all();
            //dd($minus_options);
        }
        // cash flow
        $cashFlow_options = FinancialOptions::select(['title', 'value'])->get();
        $cashFlow = CashFlowStatement::where(['game_id' => Session::get('game_id'), 'user_id' => Auth::guard('web')->user()->id, 'session_id' => Session::getId()])->get()->first();

        $c_revenueData = null;
        $c_expensesData = null;
        $c_total_revenue = 0;
        $c_total_expenses = 0;
        $c_total_income = 0;
        $c_calculated_data = 0;
        $c_minus_options = [];
        $c_expenses_type = [
            "operating_expenses" => 2,
            "cash_to_suppliers" => 3,
            "cash_for_interest" => 4,
            "cash_for_taxes" => 5,
        ];
        if (!is_null($cashFlow)) {
            $c_total_revenue = $cashFlow->total_revenue;
            $c_total_expenses = $cashFlow->total_expanses;
            $c_total_income = $c_total_revenue - $c_total_expenses;
            $c_revenueData = CashFlowStatementItems::where(['cash_flow_statement_id' => $cashFlow->id, 'type' => 1])->get();
            $c_expensesData = CashFlowStatementItems::where(['cash_flow_statement_id' => $cashFlow->id])->get();
            $c_calculated_data = $c_expensesData->mapToGroups(function ($item, $key) {
                return [$item->type => $item->value];
            })->map(function ($item) {
                return $item->sum();
            });
            $c_minus_options = $c_revenueData->pluck('title');
            $c_minus_options = $c_minus_options->concat($c_expensesData->pluck('title'))->all();
            //    return([$expensesData, $calculated_data]);
        }
        return view('game_views.financial-statement-new', [
            'financial_options' => $financial_options,
            'financial_minus_options' => $minus_options,
            'financial_revenue_data' => $f_revenueData,
            'financial_expenses_data' => $f_expensesData,
            'financial_options_dynamic' => $f_result_array,
            'financial_total_revenue' => $f_total_revenue,
            'financial_total_expenses' => $f_total_expenses,
            'financial_total_income' => $f_total_income,

            'cashFlow_options' => $cashFlow_options,
            'cashFlow_minus_options' => $c_minus_options,
            'cashFlow_revenue_data' => $c_revenueData,
            'cashFlow_expenses_data' => $c_expensesData,
            'cashFlow_expenses_type' => $c_expenses_type,
            'cashFlow_total_revenue' => $c_total_revenue,
            'cashFlow_total_expenses' => $c_total_expenses,
            'cashFlow_total_income' => $c_total_income,
            'cashFlow_calculate_data' => $c_calculated_data
        ]);
    }
}
