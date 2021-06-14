@extends('layouts.game1_app')

@section('content')
    <div class="revenue">
        <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Revenue.svg" alt="Revenue icon">
                        <h3>Revenue Bangladesh</h3>
                    </div>

                    <p>
                        You need to make sure you sell 2 items ( A, B)from the day you launch Teaco in Bangladesh, and 1
                        items in Nepal. ( A). For each products to produce, cost will be: A: 2 BDT, B: 1 BDT. Now, you need
                        to project how many items do you need to sell to gain 10% of the market share in Bangladesh. You
                        should bear in mind that competitor for A priced at 3 BDT, and B priced at 6 BDT. Put your price
                        too. Based on your pricing, what would be the revenues you would get in month 1, and if you gain 10%
                        additional sales in B plus 30% additional sales for B in Month 2, how much would you revenue you
                        would earn in 2 months timeline.
                    </p>
                </div>

            </div>
        </div>

        <div class="details">
            <div class="revenue-tabs">
                <a href="javascript:void(0)" id="btn-bd" class="btn btn-revenue-tabs btn-bd bd-active">Revenue BD</a>
                <a href="javascript:void(0)" id="btn-np" class="btn btn-revenue-tabs btn-np">Revenue NP</a>
                <a href="javascript:void(0)" id="btn-chart" class="btn btn-revenue-tabs btn-chart">Revenue
                    Chart</a>
            </div>

            {{-- BD --}}
            <div class="bd">
                @livewire('revenue')
            </div>



            {{-- NP --}}
            <div class="np">
                @livewire('revenue-np')
            </div>

            {{-- Chart --}}
            <div class="revenue-chart">
                @livewire('revenue-other')
            </div>

        </div>





        <div class="prev_next_div">
            <a href="{{ URL::to('/budgeting') }}" class="btn btn-game1 btn-next">
                Previous
                <img class="icon" src="{{ 'assets/images/icons/' }}/Previous.svg" alt="Previous icon">
            </a>
            <a href="{{ URL::to('/financial-statement') }}" class="btn btn-game1 btn-next">
                Next
                <img class="icon" src="{{ 'assets/images/icons/' }}/Next.svg" alt="Next icon">
            </a>
        </div>


        <script>
            // function plus() {
            //     let bn_a_PC = $("#bn_a_productCost").val();
            //     $("#bn_a_productCost").val(++bn_a_PC);

            //     var element = document.getElementById('bn_a_productCost');
            //     element.dispatchEvent(new Event('input'));
            // }

            // BD - input number
            // Product-A
            // $('#bd_A_pc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_A_opx_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_A_tc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_A_cp_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // // Product b
            // $('#bd_B_pc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_B_opx_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_B_tc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_B_cp__handleCounter  ').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })

            // NP - input number
            // Product-A
            // $('#np_A_pc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_A_opx_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_A_tc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_A_cp_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // // Product b
            // $('#np_B_pc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_B_opx_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_B_tc_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_B_cp__handleCounter  ').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })



            // BD
            var slider_bd_pa = document.getElementById("bd_pa_markup_range");
            var output_bd_pa = document.getElementById("bd_pa_markup_number");
            var slider_bd_pb = document.getElementById("bd_pb_markup_range");
            var output_bd_pb = document.getElementById("bd_pb_markup_number");

            var slider_np_pa = document.getElementById("np_pa_markup_range");
            var output_np_pa = document.getElementById("np_pa_markup_number");

            var slider_np_pb = document.getElementById("np_pb_markup_range");
            var output_np_pb = document.getElementById("np_pb_markup_number");



            output_bd_pa.innerHTML = slider_bd_pa.value;
            slider_bd_pa.oninput = function() {
                output_bd_pa.innerHTML = this.value;
            }
            output_bd_pb.innerHTML = slider_bd_pb.value;
            slider_bd_pb.oninput = function() {
                output_bd_pb.innerHTML = this.value;
            }



            // NP
            output_np_pa.innerHTML = slider_np_pa.value;
            slider_np_pa.oninput = function() {
                output_np_pa.innerHTML = this.value;
            }
            output_np_pb.innerHTML = slider_np_pb.value;
            slider_np_pb.oninput = function() {
                output_np_pb.innerHTML = this.value;
            }


            $(document).ready(function() {
                let btnBd = $("#btn-bd");
                let btnNp = $("#btn-np");
                let btnChart = $("#btn-chart");

                let bd = $(".bd");
                let np = $(".np");
                let chart = $(".revenue-chart");

                btnBd.click(function() {
                    let that = $(this);
                    if (!that.hasClass("bd-active")) {
                        that.addClass("bd-active");
                        btnNp.removeClass("np-active");
                        btnChart.removeClass("chart-active");

                        bd.show()
                        np.hide();
                        chart.hide();
                    }
                });
                btnNp.click(function() {
                    let that = $(this);
                    if (!that.hasClass("np-active")) {

                        btnBd.removeClass("bd-active");
                        that.addClass("np-active");
                        btnChart.removeClass("chart-active");

                        bd.hide()
                        np.show();
                        chart.hide();
                    }
                });
                btnChart.click(function() {
                    let that = $(this);
                    if (!that.hasClass("chart-active")) {

                        btnBd.removeClass("bd-active");
                        btnNp.removeClass("np-active");
                        that.addClass("chart-active");

                        bd.hide()
                        np.hide();
                        chart.show();
                    }
                });

            });

        </script>
    </div>

@endsection

{{-- <x-app-layout>
    @include('partials.subnavbar')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:40px;box-sizing:border-box">


                <div class="row">
                    <div class="col-md-6 ">
                        @include('partials.aside')
                        @include('partials.revenue_urls')
                    </div>
                    <div class="col-md-6">
                        @livewire('revenue')
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout> --}}
