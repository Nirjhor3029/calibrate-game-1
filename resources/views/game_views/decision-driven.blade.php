@extends('layouts.game1_app')

@section('content')
    <div class="decision_driven">

        <livewire:decision-driven />

        

        <div class="prev_next_div">
            <a href="" class="btn btn-game1 btn-next">
                Previous
                <img class="icon" src="{{ 'assets/images/icons/' }}/Previous.svg" alt="Previous icon">
            </a>
            <a href="" class="btn btn-game1 btn-next">
                Next
                <img class="icon" src="{{ 'assets/images/icons/' }}/Next.svg" alt="Next icon">
            </a>
        </div>

    </div>

@endsection

{{-- <x-app-layout>
    @include('partials.subnavbar')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden" style="padding:40px;box-sizing:border-box">
                <livewire:decision-driven/>
            </div>
        </div>
    </div>

</x-app-layout> --}}
