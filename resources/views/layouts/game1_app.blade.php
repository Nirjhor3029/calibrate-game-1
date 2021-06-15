<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Upscale</title>

    {{-- Bootsrap - 4 --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    {{-- Bootsrap - 4 --}}


    @livewireStyles

    <link rel="stylesheet" href="{{ asset('/css') }}/game1.css">
    <link rel="stylesheet" href="{{ asset('/css') }}/handle-counter.css">


    {{-- For input field --}}
    <script src="{{ asset('js') }}/handleCounter.js"></script>


    {{-- Livewire chart --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="{{ asset('assets/images/icons') }}/logo.svg" alt="">
        </a>

        <nav>
            <ul class="nav__links">
                <li>
                    <a class="{{ request()->routeIs('overview') ? 'nav_item_active' : '' }}"
                        href="{{ route('overview') }}">
                        Overview
                    </a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('recruitment') ? 'nav_item_active' : '' }}"
                        href="{{ route('recruitment') }}">
                        Recruitment
                    </a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('budgeting') ? 'nav_item_active' : '' }}"
                        href="{{ route('budgeting') }}">
                        Budgeting
                    </a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('revenue') ? 'nav_item_active' : '' }}"
                        href="{{ route('revenue') }}">
                        Revenue
                    </a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('financial-statement') ? 'nav_item_active' : '' }}"
                        href="{{ route('financial-statement') }}">
                        Financial Statements
                    </a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('decision-driven') ? 'nav_item_active' : '' }}"
                        href="{{ route('decision-driven') }}">
                        Dicision Driven
                    </a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('course-points') ? 'nav_item_active' : '' }}"
                        href="{{ route('course-points') }}">
                        Course Points
                    </a>
                </li>
            </ul>
        </nav>

        <a class="profile" href="#">
            <img src="{{ asset('assets/images/icons') }}/User.svg" alt="user">
        </a>
    </header>
    {{-- <li><a href="#">Overview</a></li> --}}

    <main>
        <div class="main-content">
            @yield('content')
        </div>
    </main>

    @livewireScripts


</body>

</html>
