@extends('layouts.game1_app')

@section('content')
    <div class="overview">
        <div class="row title">
            <div class="title-content col-sm-7 ">
                <h3>Welcome to Game name</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially
                </p>
            </div>
            <div class="title-video col-sm-5">
                <div class="video">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zblQdr-Qd1c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row details">
            <div class="col-sm-12 col-md-6 col ">
                <div class="content mr-14">
                    <div class="content-title">
                        <img class="icon" src="{{ asset('assets/images/icons') }}/Summary.svg" alt="Summery icon">
                        <h4>Summary</h4>
                    </div>
                    <p>
                        WalKart is a furniture manufacturer which wants to expand its buisness in south east Asia. Their
                        flagship brand, Teaco is a household name and they are not available in the region. Currently, the
                        size of the industry in Bangladesh is 1000 BDT, and there are 5 players who are purely
                        manufacturers. T mart is the market leader having 25% share. Now you are assigned as commercial head
                        who would launch Teaco in Bangladesh first, and then in Nepal…
                        <a class="readmore" href="" data-toggle="modal" data-target="#modal_summary"> Read More</a>
                    </p>
                </div>

                <div class="content mr-14">
                    <div class="content-title">
                        <img class="icon" src="{{ asset('assets/images/icons') }}/Recruitment.svg" alt="Recruitment icon">
                        <h4>Recruitment</h4>
                    </div>
                    <p>
                        You need to recruit 3 managers, one HR manager, and one BDM, and 1 Sales manager in your team. For
                        that you have only 5 BDT budget, and sales manager can only have salaries in sales, no fixed amount
                        therefore. And CEO’s salary is 3 BDT…
                        <a class="readmore" href="" data-toggle="modal" data-target="#modal_Recruitment"> Read More</a>
                    </p>
                </div>

                <div class="content mr-14">
                    <div class="content-title">
                        <img class="icon" src="{{ asset('assets/images/icons') }}/Budgeting.svg" alt="Budgeting icon">
                        <h4>Budgeting</h4>
                    </div>
                    <p>
                        You have total 15 BDT to launch Teaco. You need to decide how much would you spend in Bangladesh and
                        in Nepal. Remember, Bangladesh has 3X more consumers than Nepal…
                        <a class="readmore" href="" data-toggle="modal" data-target="#modal_Budgeting"> Read More</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col btn-game1-parent">
                <div class="content">
                    <div class="content-title">
                        <img class="icon" src="{{ asset('assets/images/icons') }}/Financial_statements.svg"
                            alt="Financial statements icon">
                        <h4>Financial statements</h4>
                    </div>
                    <p>
                        You need to make a cash flow statement, and profit and loss statement from the table. To make it
                        perfect please choose from the list…
                        <a class="readmore" href="" data-toggle="modal" data-target="#modal_Financial_statements"> Read
                            More</a>
                    </p>
                </div>

                <div class="content ">
                    <div class="content-title">
                        <img class="icon" src="{{ asset('assets/images/icons') }}/Revenue.svg" alt="Revenue icon">
                        <h4>Revenue</h4>
                    </div>
                    <p>
                        You need to make sure you sell 2 items ( A, B)from the day you launch Teaco in Bangladesh, and 1
                        items in Nepal. ( A). For each products to produce, cost will be: A: 2 BDT, B: 1 BDT. Now, you need
                        to project how many items do you need to sell to gain 10% of the market share in Bangladesh. You
                        should bear in mind that competitor for A priced at 3 BDT, and B priced at 6 BDT. Put your price
                        too. Based on your pricing, what would be the revenues you would get in month 1, and if you gain 10%
                        additional sales in B plus 30% additional sales for B in Month 2, how much would you revenue you
                        would earn in 2 months timeline…
                        <a class="readmore" href="" data-toggle="modal" data-target="#modal_Revenue"> Read More</a>
                    </p>
                </div>

                <a href="{{ URL::to('/recruitment') }}" class="btn btn-game1 btn-next">
                    Next
                    <img class="icon" src="{{ asset('assets/images/icons') }}/Next.svg" alt="Next icon">
                </a>
            </div>
        </div>


        <div class="modals">

            <!-- modal_summary -->
            <div class="modal fade " id="modal_summary" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl overview-modal modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="modal-title">
                                <img class="icon" src="{{ asset('assets/images/icons') }}/Summary.svg" alt="Summery icon">
                                <h4>Summary</h4>
                            </div>

                            <p>
                                WalKart is a furniture manufacturer which wants to expand its buisness in south east Asia.
                                Their flagship brand, Teaco is a household name and they are not available in the region.
                                Currently, the size of the industry in Bangladesh is 1000 BDT, and there are 5 players who
                                are purely manufacturers. T mart is the market leader having 25% share. Now you are assigned
                                as commercial head who would launch Teaco in Bangladesh first, and then in Nepal.
                                <br><br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                <br><br><br>
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                            </p>
                            <a class="btn modal-done" data-dismiss="modal">Done</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- modal_Recruitment -->
            <div class="modal fade " id="modal_Recruitment" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl overview-modal modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="modal-title">
                                <img class="icon" src="{{ asset('assets/images/icons') }}/Recruitment.svg"
                                    alt="Summery icon">
                                <h4>Recruitment</h4>
                            </div>

                            <p>
                                You need to recruit 3 managers, one HR manager, and one BDM, and 1 Sales manager in your
                                team. For that you have only 5 BDT budget, and sales manager can only have salaries in
                                sales, no fixed amount therefore. And CEO’s salary is 3 BDT
                                <br><br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                <br><br><br>
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                            </p>
                            <a class="btn modal-done" data-dismiss="modal">Done</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal_Budgeting -->
            <div class="modal fade " id="modal_Budgeting" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl overview-modal modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="modal-title">
                                <img class="icon" src="{{ asset('assets/images/icons') }}/Budgeting.svg"
                                    alt="Summery icon">
                                <h4>Budgeting</h4>
                            </div>

                            <p>
                                You have total 15 BDT to launch Teaco. You need to decide how much would you spend in
                                Bangladesh and in Nepal. Remember, Bangladesh has 3X more consumers than Nepal
                                <br><br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                <br><br><br>
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                            </p>
                            <a class="btn modal-done" data-dismiss="modal">Done</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- modal_Financial statements -->
            <div class="modal fade " id="modal_Financial_statements" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl overview-modal modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="modal-title">
                                <img class="icon" src="{{ asset('assets/images/icons') }}/Financial_statements.svg"
                                    alt="Summery icon">
                                <h4>Financial statements</h4>
                            </div>

                            <p>
                                You need to make a cash flow statement, and profit and loss statement from the table. To
                                make it perfect please choose from the list
                                <br><br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                <br><br><br>
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                            </p>
                            <a class="btn modal-done" data-dismiss="modal">Done</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal_Revenue -->
            <div class="modal fade " id="modal_Revenue" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl overview-modal modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="modal-title">
                                <img class="icon" src="{{ asset('assets/images/icons') }}/Revenue.svg"
                                    alt="Summery icon">
                                <h4>Revenue</h4>
                            </div>

                            <p>
                                You need to make sure you sell 2 items ( A, B)from the day you launch Teaco in Bangladesh,
                                and 1 items in Nepal. ( A). For each products to produce, cost will be: A: 2 BDT, B: 1 BDT.
                                Now, you need to project how many items do you need to sell to gain 10% of the market share
                                in Bangladesh. You should bear in mind that competitor for A priced at 3 BDT, and B priced
                                at 6 BDT. Put your price too. Based on your pricing, what would be the revenues you would
                                get in month 1, and if you gain 10% additional sales in B plus 30% additional sales for B in
                                Month 2, how much would you revenue you would earn in 2 months timeline
                                <br><br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged. It was popularised in the
                                1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                <br><br><br>
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                            </p>
                            <a class="btn modal-done" data-dismiss="modal">Done</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection




{{-- Old Overview Page --}}

{{-- <x-app-layout>
    <?php
    $previousUrl = null;
    $nextUrl = '/recruitment';
    ?>
    @section('nextUrl', $nextUrl)
    @section('previousUrl', $previousUrl)


    @include('partials.subnavbar')

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:40px;box-sizing:border-box">


                <div class="row">
                    <div class="col-md-6">
                        @include('partials.aside_timeline')
                    </div>
                    <div class="col-md-6">
                        @foreach (DB::table('tutorial_placeholder')->get() as $placeholder)
                            {!! $placeholder->placeholder!!}
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

    @section('next_previous')
         <!--nextUrl & previousUrl assigned from livewire individual views-->
        <div class="next_previous_container">
            <a href="{{(isset($nextUrl))? $nextUrl : "#"}}" id="arrow_next"
               class="arrow"><span>&#9658;&#9658;</span></a>

        </div>
    @endsection
</x-app-layout> --}}
