@extends('layouts.game1_app')
@php $minus_options = $financial_minus_options; @endphp
@section('content')
    <div class="financial_statement">
        <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Financial_statements.svg" alt="Summery icon">
                        <h3>Financial statements</h3>
                    </div>

                    <p>
                        You need to make a cash flow statement, and profit and loss statement from the table. To make it
                        perfect please choose from the list.
                    </p>
                </div>

            </div>
        </div>

        <div class="details">
            <div class="row">
                <div class="col-6">
                    <a href="javascript:void(0)" id="btn-fs" class="btn btn-fs flex-column-center fs-active">
                        Financial statements
                    </a>
                </div>
                <div class="col-6 ">
                    <a href="javascript:void(0)" id="btn-cfs" class="btn btn-cfs flex-column-center">
                        Cash flow statement
                    </a>
                </div>
            </div>

            {{-- Financial Statement --}}
            <div class="row fs" style="margin-top: 36px">
                <div class="col-4">
                    <div class="items-container">
                        <ul id="financial_sortable">
                            @foreach ($financial_options as $financial_option)
                                @if (!in_array(trim($financial_option->title), $minus_options))
                                    <li class="item" draggable="false" data-tag="{{ $financial_option->title }}"
                                        data-pay="{{ $financial_option->value }}">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">{{ $financial_option->title }}</p>
                                        <p class="bdt">BDT {{ $financial_option->value }}</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card revenue">
                        <div class="card-header flex-column-center">Revenue</div>
                        <div class="card-body">
                            <div class="items-container" id="financial_revenue">
                                @if (!is_null($financial_revenue_data))
                                    @foreach ($financial_revenue_data as $f_revenue_data)
                                        @php $minus_options[] = $f_revenue_data->title; @endphp
                                        <li class="item" draggable="false" data-tag="{{ $f_revenue_data->title }}"
                                            data-pay="{{ $f_revenue_data->value }}">
                                            <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg"
                                                alt="Summery icon">
                                            <p class="name">{{ $f_revenue_data->title }}</p>
                                            <p class="bdt">BDT {{ $f_revenue_data->value }}</p>
                                            <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                                alt="Summery icon">
                                        </li>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="card-footer">
                            <p>Total Net Revenue</p>
                            <p id="total_revenues">BDT {{ $financial_total_revenue }}</p>
                        </div>
                    </div>
                    <div class="card expenses">
                        <div class="card-header flex-column-center">Expenses</div>
                        <div class="card-body">
                            <div class="items-container" id="financial_expenses">
                                @if (!is_null($financial_expenses_data))
                                    @foreach ($financial_expenses_data as $f_expenses_data)
                                        @php $minus_options[] = $financial_option->title; @endphp
                                        <li class="item" draggable="false" data-tag="{{ $f_expenses_data->title }}"
                                            data-pay="{{ $f_expenses_data->value }}">
                                            <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg"
                                                alt="Summery icon">
                                            <p class="name">{{ $f_expenses_data->title }}</p>
                                            <p class="bdt">BDT {{ $f_expenses_data->value }}</p>
                                            <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                                alt="Summery icon">
                                        </li>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <p>Total Expenses</p>
                            <p id="total_expenses">BDT {{ $financial_total_expenses }}</p>
                        </div>
                    </div>


                </div>
            </div>


            {{-- Cash Flow Statement --}}
            <div class="cfs">
                <div class="row" style="margin-top: 36px">
                    <div class="col-4">
                        <div class="items-container">
                            <ul id="cashFlow_sortable">
                                @foreach ($cashFlow_options as $cashFlow_option)
                                    <li class="item" draggable="false" data-tag="{{ $cashFlow_option->title }}"
                                        data-pay="{{ $cashFlow_option->value }}">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">{{ $cashFlow_option->title }}</p>
                                        <p class="bdt">BDT {{ $cashFlow_option->value }}</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card ">
                            <div class="card-header flex-column-center">Cash from customer</div>
                            <div class="card-body">
                                <div class="items-container" id="cash_for_customer" data-id="1">

                                </div>

                            </div>
                            <div class="card-footer">
                                <p>Total Net Revenue</p>
                                <p id="cashFlow_total_revenue">BDT 40</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash for operating Expenses</div>
                            <div class="card-body">
                                <div class="items-container" id="cash_for_expense" data-id="2">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash to suppliers</div>
                            <div class="card-body">
                                <div class="items-container" id="cash_to_supplier" data-id="3">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash for interest</div>
                            <div class="card-body">
                                <div class="items-container" id="cash_for_interest" data-id="4">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash for Taxes</div>
                            <div class="card-body">
                                <div class="items-container" id="cash_for_tax" data-id="5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="cfs-total-expenses">
                    <p class="txt">Total Expenses</p>
                    <p class="bdt" id="cashFlow_total_expenses">BDT 00</p>
                </div>
                <div class="">
                    <div class="net-cashflow flex-column-center">
                        Net Cash flow: <span id="net_income">BDT 00</span>
                    </div>
                </div>
            </div>


            <div class="prev_next_div">
                <a href="" class="btn btn-game1 btn-next">
                    Previous
                    <img class="icon" src="{{ asset('assets/images/icons') }}/previous.svg" alt="Previous icon">
                </a>
                <a href="" class="btn btn-game1 btn-next">
                    Next
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Next.svg" alt="Next icon">
                </a>
            </div>
        </div>


        <script>
            var net_income = 0;
            var net_total_rev = 0;
            var net_total_exp = 0;

            $("#financial_sortable").sortable({
                cursor: "move",
                cursorAt: {
                    left: 25
                },
                connectWith: ["#financial_revenue", "#financial_expenses"]
            });

            $("#financial_revenue").sortable({
                connectWith: "#financial_sortable",
                update: function(e, ui) {
                    var data = processData('financial_revenue');
                    sendFinancialData(data.result, data.total, 1);
                    $("#total_revenues").html("BDT " + data.total);
                    net_total_rev = data.total;
                    net_income = net_total_rev - net_total_exp;
                    $("#netincome_result").html(net_income + " BDT");

                }
            });
            $("#financial_expenses").sortable({
                connectWith: "#financial_expenses",
                update: function(e, ui) {
                    var data = processData('financial_expenses');
                    sendFinancialData(data.result, data.total, 2);
                    $("#total_expenses").html("BDT " + data.total);
                    net_total_exp = data.total;
                    netincome = net_total_rev - net_total_exp;
                    $("#netincome_result").html(net_income + " BDT");

                }
            });

            function processData(selector_id) {
                var resultData = [];
                var total_revenues = 0;
                $("#" + selector_id).children().each(function(idx, val) {
                    var result = {
                        'tag': $(val).data('tag'),
                        'pay': parseFloat($(val).data('pay')),
                    }
                    total_revenues += parseFloat($(val).data('pay'));
                    resultData.push(result);
                });
                return data = {
                    'result': resultData,
                    'total': total_revenues
                }
            }

            // ajax call for financial statement data
            function sendFinancialData(array_data, total, type) {
                $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var data = {
                        sendData: array_data,
                        totalreview: total,
                        type: type
                    };

                    $.ajax({
                        type: "POST",
                        url: "add-financial-data",
                        data: data,
                        success: function(data) {
                            console.log(data);
                        }
                    });

                });
            }

            //------------------- cash flow ---------------------------

            $("#cashFlow_sortable").sortable({
                cursor: "move",
                cursorAt: {
                    left: 25
                },
                connectWith: ["#cash_for_customer", "#cash_for_expense", "#cash_to_supplier", "#cash_for_interest",
                    "#cash_for_tax"
                ]
            });
            var expense = new Map();


            /*  for (let key in data) {
                  expense.set(parseInt(key), data[key]) // set data value on page load
              }*/

            function sum(expense) {
                let exp = 0;
                let rev = 0;
                let total = 0;
                for (let [k, v] of expense) {
                    if (k === 1) {
                        rev = v;
                    } else {
                        exp += v;
                    }
                    //  console.log(k, v);
                }
                total = rev - exp;
                return {
                    'revenue': rev,
                    'expense': exp,
                    'total': total,
                };
            }

            function calculateData(id, total) {
                expense.set(id, total);
                return sum(expense);
            }


            $("#cash_for_customer, #cash_for_expense, #cash_to_supplier, #cash_for_interest, #cash_for_tax").sortable({
                connectWith: "#cashFlow_sortable",
                update: function(e, ui) {
                    let index_id = $(this).attr('id'); /* get attribute id name */
                    let data_id = $(this).data('id'); /* get attribute data id */
                    let data = processData(index_id);
                    let totalData = calculateData(data_id, data.total);
                    sendCashFlowData(data_id, index_id, data.result, totalData);
                    $("#cashFlow_total_revenue").html(totalData.revenue);
                    $("#cashFlow_total_expenses").html("BDT " + totalData.expense);
                    $("#net_income").html("BDT " + totalData.total);

                }
            });

            // ajax call for cash flow statement data
            function sendCashFlowData(dataType, index_id, array_data, total) {
                $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    let data = {
                        dataId: dataType,
                        id: index_id,
                        sendData: array_data,
                        totalreview: total
                    };
                    $.ajax({
                        type: "POST",
                        url: "add-cash-flow-data",
                        data: data,
                        success: function(data) {
                            console.log(data);
                        }
                    });
                });
            }

            // tab select script
            $(document).ready(function() {
                let btnFs = $("#btn-fs");
                let btnCfs = $("#btn-cfs");
                let fs = $(".fs");
                let cfs = $(".cfs");
                btnFs.click(function() {
                    let that = $(this);
                    if (!that.hasClass("fs-active")) {
                        that.addClass("fs-active");
                        btnCfs.removeClass("cfs-active");

                        cfs.hide()
                        fs.show();
                    }
                });
                btnCfs.click(function() {
                    let that = $(this);
                    if (!that.hasClass("cfs-active")) {
                        that.addClass("cfs-active");
                        btnFs.removeClass("fs-active");

                        fs.hide()
                        cfs.show();
                    }
                });
            });

        </script>

    </div>

@endsection
