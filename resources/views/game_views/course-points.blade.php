@extends('layouts.game1_app')

@section('content')
    <div class="cp">
        {{-- <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Budgeting.svg" alt="Summery icon">
                        <h3>Budgeting</h3>
                    </div>

                    <p>
                        You have total 15 BDT to launch Teaco. You need to decide how much would you spend in Bangladesh and
                        in Nepal. Remember, Bangladesh has 3X more consumers than Nepal.
                    </p>
                </div>

            </div>
        </div> --}}

        <div class="row details">
            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="box">
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Market_share.svg" alt="Summery icon">
                    <h3>Market Share</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $min_max[0]['actual'] }}"
                            aria-valuemin="0" aria-valuemax="{{ $min_max[1]['max'] }}"
                            style="width:{{ $min_max[0]['actual'] }}%">
                            <span class="sr-only">{{ $min_max[0]['actual'] }}% Complete</span>
                        </div>
                    </div>
                    <p class="percent">{{ $min_max[0]['actual'] }} %</p>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="box">
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Revenue.svg" alt="Summery icon">
                    <h3>Revenue</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $min_max[1]['actual'] }}"
                            aria-valuemin="0" aria-valuemax="{{ $min_max[1]['max'] }}"
                            style="width:{{ $min_max[1]['actual'] }}%">
                            <span class="sr-only">{{ $min_max[1]['actual'] }}% Complete</span>
                        </div>
                    </div>
                    <p class="percent">{{ $min_max[1]['actual'] }} %</p>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="box">
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Cost.svg" alt="Summery icon">
                    <h3>Cost</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                            aria-valuemax="{{ $min_max[2]['max'] }}" style="width:{{ $min_max[2]['actual'] }}%">
                            <span class="sr-only">{{ $min_max[2]['actual'] }}% Complete</span>
                        </div>
                    </div>
                    <p class="percent">{{ $min_max[2]['actual'] }} %</p>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="box">
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Unit_sales.svg" alt="Summery icon">
                    <h3>Unit Sales in countries </h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $min_max[3]['actual'] }}"
                            aria-valuemin="0" aria-valuemax="{{ $min_max[3]['max'] }}"
                            style="width:{{ $min_max[3]['actual'] }}%">
                            <span class="sr-only">{{ $min_max[3]['actual'] }}% Complete</span>
                        </div>
                    </div>
                    <p class="percent">{{ $min_max[3]['actual'] }} %</p>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="box">
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Net_profit.svg" alt="Summery icon">
                    <h3>Net Profit</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $min_max[4]['max'] / 2 }}"
                            aria-valuemin="0" aria-valuemax="{{ $min_max[4]['max'] }}"
                            style="width:{{ $min_max[4]['actual'] }}%">
                            <span class="sr-only">{{ $min_max[4]['actual'] }}% Complete</span>
                        </div>
                    </div>
                    <p class="percent">{{ $min_max[4]['max'] }} %</p>
                </div>

            </div>


        </div>

    </div>

    <div class="prev_next_div">
        <a href="{{ URL::to('/decision-driven') }}" class="btn btn-game1 btn-next">
            Previous
            <img class="icon" src="{{ asset('assets/images/icons') }}/previous.svg" alt="Previous icon">
        </a>
        {{-- <a href="{{ URL::to('/overview') }}" class="btn btn-game1 btn-next">
            Next
            <img class="icon" src="{{ asset('assets/images/icons') }}/Next.svg" alt="Next icon">
        </a> --}}
    </div>

@endsection



{{-- <x-app-layout>
    <?php $previousUrl = '/decision-driven'; ?>
    @section('previousUrl', $previousUrl)

    @include('partials.subnavbar')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden" style="padding:40px;box-sizing:border-box">


                @if (!$result_done)
                    <div class="row">
                        Result Not Process yet !!!
                    </div>
                @else

                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p style="margin-top:10px;text-align:center;font-weight:bolder;font-size:22px">
                                        Market share
                                    <p>




                                    <div class="progress-bar-container">
                                        <progress max="{{$min_max[0]['max']}}" value="{{$min_max[0]['actual']}}"
                                                  class="html5 progress-custom">
                                        </progress>
                                        <span style="margin-left: {{$min_max[0]['actual']/2}}%"
                                              class="progress-inner-label">{{$min_max[0]['actual']}}</span>
                                    </div>
                                    <p>{{$min_max[0]['max']}}</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p style="margin-top:10px;text-align:center;font-weight:bolder;font-size:22px">
                                        Revenue
                                    <p>


                                    <div class="progress-bar-container">
                                        <progress max="{{$min_max[1]['max']}}" value="{{$min_max[1]['actual']}}"
                                                  class="html5 progress-custom">
                                        </progress>
                                        <span style="margin-left: {{$min_max[1]['actual']/2}}%"
                                              class="progress-inner-label">{{$min_max[1]['actual']}}</span>
                                    </div>
                                    <p>{{$min_max[1]['max']}}</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p style="margin-top:10px;text-align:center;font-weight:bolder;font-size:22px">Cost
                                    <p>


                                    <div class="progress-bar-container">
                                        <progress max="{{$min_max[2]['max']}}" value="{{$min_max[2]['actual']}}"
                                                  class="html5 progress-custom">
                                        </progress>
                                        <span style="margin-left: {{$min_max[2]['actual']/2}}%"
                                              class="progress-inner-label">{{$min_max[2]['actual']}}</span>
                                    </div>
                                    <p>{{$min_max[2]['max']}}</p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row" style="margin-top: 30px;">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p style="margin-top:10px;text-align:center;font-weight:bolder;font-size:22px">Unit
                                        sales in countries
                                    <p>


                                    <div class="progress-bar-container">
                                        <progress max="{{$min_max[3]['max']}}" value="{{$min_max[3]['actual']}}"
                                                  class="html5 progress-custom">
                                        </progress>
                                        <span style="margin-left: {{$min_max[3]['actual']/2}}%"
                                              class="progress-inner-label">{{$min_max[3]['actual']}}</span>
                                    </div>
                                    <p>{{$min_max[3]['max']}}</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p style="margin-top:10px;text-align:center;font-weight:bolder;font-size:22px">Net
                                        profit
                                    <p>


                                    <div class="progress-bar-container">
                                        <progress max="{{$min_max[4]['max']}}" value="{{$min_max[4]['actual']}}"
                                                  class="html5 progress-custom">
                                        </progress>
                                        <span style="margin-left: {{$min_max[4]['actual']/2}}%"
                                              class="progress-inner-label">{{$min_max[4]['actual']}}</span>
                                    </div>
                                    <p>{{$min_max[4]['max']}}</p>
                                </div>
                            </div>
                        </div>


                    </div>
                @endif


            </div>
        </div>
    </div>

</x-app-layout> --}}
