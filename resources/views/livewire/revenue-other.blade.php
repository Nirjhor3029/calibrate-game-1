<div>
    @section('nextUrl', $nextUrl)
    @section('previousUrl', $previousUrl)

        @if (session()->has('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        @if (!$check_null)
            <div class="alert alert-danger">
                Field can not be empty
            </div>
        @endif
        @if (!$check_previous_game)
            <div class="alert alert-danger">
                Play BD Revenue & Nepal Revenue 1st.
            </div>
        @endif

        {{-- New Page Bangladesh --}}
        <h3 style="margin-top: 50px;margin-bottom:20px">Bangladesh</h3>
        <div class="row revenue_row">
            <div class="col-md-7 revenue_row_chart" style="min-height: 300px;">
                <livewire:livewire-column-chart key="{{ $product_1->reactiveKey() }}" :column-chart-model="$product_1" />
            </div>


            <div class="col-md-5 revenue_row_fields">
                <div class="box-rev">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">A M1 rev</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="bn_AM1_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="bn_AM1_revenue" readonly /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">A M2</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" wire:click="minus('bd',2)">-</button>
                                        <input type="text" wire:model="bn_AM2" value="0">
                                        <button class="counter-plus btn" wire:click="plus('bd',2)">+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name="" wire:model="bn_AM2" /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">

                                    <span class="lbl">A M2 rev</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="bn_AM2_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="bn_AM2_revenue" readonly /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">

                                    <span class="lbl">B M1 rev</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="bn_BM1_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="bn_BM1_revenue" readonly /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">B M2</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" wire:click="minus('bd',5)">-</button>
                                        <input type="text" wire:model="bn_BM2" value="0">
                                        <button class="counter-plus btn" wire:click="plus('bd',5)">+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name="" wire:model="bn_BM2" /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">B M2 rev</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="bn_BM2_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="bn_BM2_revenue" readonly /> --}}
                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- <div class="row row-title">
                        <div class="col-md-12">
                            Bangladesh
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>


        {{-- New Page Nepal --}}
        <h3 style="margin-top: 50px;margin-bottom:20px">Nepal</h3>
        <div class="row revenue_row">
            <div class="col-md-7 revenue_row_chart" style="min-height: 300px;">
                <livewire:livewire-column-chart key="{{ $product_2->reactiveKey() }}" :column-chart-model="$product_2" />
            </div>

            <div class="col-md-5 revenue_row_fields">
                <div class="box-rev">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">A M1 rev</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="np_AM1_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="np_AM1_revenue" readonly /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">A M2</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" wire:click="minus('np',2)">-</button>
                                        <input type="text" wire:model="np_AM2" value="0">
                                        <button class="counter-plus btn" wire:click="plus('np',2)">+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name="" wire:model="np_AM2" /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">A M2 rev</span>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="np_AM2_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="np_AM2_revenue" readonly /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">B M1 rev</span>

                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="np_BM1_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="np_BM1_revenue" readonly /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">B M2</span>

                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" wire:click="minus('np',5)">-</button>
                                        <input type="text" wire:model="np_BM2" value="0">
                                        <button class="counter-plus btn" wire:click="plus('np',5)">+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name="" wire:model="np_BM2" /> --}}
                                </div>

                            </div>
                            <div class="row single-field-rev">
                                <div class="col-md-4 ">
                                    <span class="lbl">B M1 rev</span>

                                </div>
                                <div class="col-md-8 ">
                                    <div class="handle-counter" id="">
                                        <button class="counter-minus btn" disabled>-</button>
                                        <input type="text" wire:model="np_BM2_revenue" value="0" readonly>
                                        <button class="counter-plus btn" disabled>+</button>
                                    </div>
                                    {{-- <input type="number" class="form-control input-field" name=""
                                        wire:model="np_BM2_revenue" readonly /> --}}
                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- <div class="row row-title">
                        <div class="col-md-12">
                            Nepal
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

    </div>
