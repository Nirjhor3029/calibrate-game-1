@extends('layouts.game1_app')

@section('content')
    <div class="recruitment">
        <div class="row title">
            <div class="title-content col-sm-12 ">
                <div class="title-header">
                    <img class="icon" src="{{ 'assets/images/icons/' }}/Recruitment.svg" alt="Summery icon">
                    <h3>Recruitment</h3>
                </div>

                <p>
                    You need to recruit 3 managers, one HR manager, and one BDM, and 1 Sales manager in your team. For that
                    you have only 5 BDT budget, and sales manager can only have salaries in sales, no fixed amount
                    therefore. And CEO’s salary is 3 BDT
                </p>
            </div>

        </div>

        @livewire('recruitment')

        <script>
            // $('#hr_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: 5,
            // })

            // $('#bdm_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: 5,
            // })

            // $('#sm_handleCounter').handleCounter({
            //     minimum: 0,
            //     maximize: 5,
            // })

        </script>
    </div>

@endsection


{{-- Old --}}
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
                        @livewire('recruitment')
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout> --}}
