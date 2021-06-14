@extends('layouts.game1_app')

@section('content')
    <div class="budgeting">
        <div class="recruitment">
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
        </div>


        {{-- <livewire:budgeting /> --}}
        @livewire('budgeting')

        <div class="prev_next_div">
            <a href="{{ URL::to('/recruitment') }}" class="btn btn-game1 btn-next">
                Previous
                <img class="icon" src="{{ asset('assets/images/icons') }}/previous.svg" alt="Previous icon">
            </a>
            <a href="{{ URL::to('/revenue') }}" class="btn btn-game1 btn-next">
                Next
                <img class="icon" src="{{ asset('assets/images/icons') }}/Next.svg" alt="Next icon">
            </a>
        </div>


        <script>
            // $('#bd_r_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_m_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_l_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#bd_o_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })


            // $('#np_r_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_m_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_l_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })
            // $('#np_o_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: null,
            // })

        </script>
    </div>

@endsection

{{-- <x-app-layout>
    @include('partials.subnavbar')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:40px;box-sizing:border-box">

                <div class="row">
                    <div class="col-md-6">
                        @include('partials.aside')

                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout> --}}
