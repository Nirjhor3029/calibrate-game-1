<div class="row  product-box">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Product A
            </div>
            <div class="card-body">
                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_A_pc_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('bd','a',1)">-</button>
                            <input type="text" value="0" wire:model="bn_a_productCost" id="bn_a_productCost">
                            <button class="counter-plus btn" wire:click="plus('bd','a',1)">+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Production cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_A_opx_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="bn_a_opex" readonly>
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>OPEX</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_A_tc_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="bn_a_totalCost" readonly>
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Total cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_A_cp_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('bd','a',4)">-</button>
                            <input type="text" value="0" wire:model="bn_a_competitorsPrice">
                            <button class="counter-plus btn" wire:click="plus('bd','a',4)">+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Competitor’s Price</p>
                    </div>
                </div>

                <div class="row mb-10">
                    <div class="col-md-7">
                        <div class="row ml-0 mr-0">
                            <div class="col-3 col-sm-3 markup-txt">
                                <p><span class="markup_number" id="bd_pa_markup_number"></span>%</p>
                            </div>
                            <div class="col-9 col-sm-9 slidecontainer">
                                <input type="range" min="1" max="100" value="0" class="slider" id="bd_pa_markup_range"
                                    wire:model="bn_a_markup">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <p>Mark up %</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 price">
                        <p class="price-txt">Price:</p>
                        <div class="price-input">
                            <input type="number" value="0" wire:model="bn_a_price" readonly>
                        </div>
                    </div>
                    <div class="col-md-5">

                    </div>
                </div>

            </div>
        </div>

        <div class="unit_sold">
            <div class="txt">
                Units Sold
            </div>
            <div class="radio_btn">
                <label class="radio_lbl" for="radio_0">
                    <input type="radio" class="radio_input" id="radio_0" name="unit_sold_radio"
                        wire:model="bn_a_unitSold" value="0">
                    <p>0</p>
                </label>
                <label class="radio_lbl" for="radio_20">
                    <input type="radio" class="radio_input" id="radio_20" name="unit_sold_radio"
                        wire:model="bn_a_unitSold" value="20">
                    <p>20</p>
                </label>
                <label class="radio_lbl" for="radio_30">
                    <input type="radio" class="radio_input" id="radio_30" name="unit_sold_radio"
                        wire:model="bn_a_unitSold" value="30">
                    <p>30</p>
                </label>
                <label class="radio_lbl" for="radio_40">
                    <input type="radio" class="radio_input" id="radio_40" name="unit_sold_radio"
                        wire:model="bn_a_unitSold" value="40">
                    <p>40</p>
                </label>
                <label class="radio_lbl" for="radio_50">
                    <input type="radio" class="radio_input" id="radio_50" name="unit_sold_radio"
                        wire:model="bn_a_unitSold" value="50">
                    <p>50</p>
                </label>
            </div>
        </div>

        <div class="unit_sold">
            <div class="txt">
                Revenue
            </div>
            <div class="radio_btn">
                <input class="revenue_input" type="text" wire:model="bn_a_revenue" readonly value="0">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Product B
            </div>
            <div class="card-body">
                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_B_pc_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('bd','b',1)">-</button>
                            <input type="text" wire:model="bn_b_productCost" value="0">
                            <button class="counter-plus btn" wire:click="plus('bd','b',1)">+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Production cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_B_opx_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" wire:model="bn_b_opex" readonly value="0">
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>OPEX</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_B_tc_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" wire:model="bn_b_totalCost" readonly value="0">
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Total cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="bd_B_cp__handleCounter">
                            <button class="counter-minus btn" wire:click="minus('bd','b',4)">-</button>
                            <input type="text" wire:model="bn_b_competitorsPrice" value="0">
                            <button class="counter-plus btn" wire:click="plus('bd','b',4)">+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Competitor’s Price</p>
                    </div>
                </div>


                <div class="row mb-10">
                    <div class="col-md-7">
                        <div class="row ml-0 mr-0">
                            <div class="col-3 col-sm-3 markup-txt">
                                <p><span class="markup_number" id="bd_pb_markup_number"></span>%</p>
                            </div>
                            <div class="col-9 col-sm-9 slidecontainer">
                                <input type="range" min="1" max="100" value="0" class="slider" id="bd_pb_markup_range"
                                    wire:model="bn_b_markup">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <p>Mark up %</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 price">
                        <p class="price-txt">Price:</p>
                        <div class="price-input">
                            <input type="number" wire:model="bn_b_price" readonly value="0">
                        </div>
                    </div>
                    <div class="col-md-5">

                    </div>
                </div>

            </div>
        </div>

        <div class="unit_sold">
            <div class="txt">
                Units Sold
            </div>
            <div class="radio_btn">
                <label class="radio_lbl" for="radio_bdb_0">
                    <input type="radio" class="radio_input" id="radio_bdb_0" name="unit_sold_bd_b_radio"
                        wire:model="bn_b_unitSold" value="0">
                    <p>0</p>
                </label>
                <label class="radio_lbl" for="radio_bdb_20">
                    <input type="radio" class="radio_input" id="radio_bdb_20" name="unit_sold_bd_b_radio"
                        wire:model="bn_b_unitSold" value="20">
                    <p>20</p>
                </label>
                <label class="radio_lbl" for="radio_bdb_30">
                    <input type="radio" class="radio_input" id="radio_bdb_30" name="unit_sold_bd_b_radio"
                        wire:model="bn_b_unitSold" value="30">
                    <p>30</p>
                </label>
                <label class="radio_lbl" for="radio_bdb_40">
                    <input type="radio" class="radio_input" id="radio_bdb_40" name="unit_sold_bd_b_radio"
                        wire:model="bn_b_unitSold" value="40">
                    <p>40</p>
                </label>
                <label class="radio_lbl" for="radio_bdb_50">
                    <input type="radio" class="radio_input" id="radio_bdb_50" name="unit_sold_bd_b_radio"
                        wire:model="bn_b_unitSold" value="50">
                    <p>50</p>
                </label>
            </div>
        </div>

        <div class="unit_sold">
            <div class="txt">
                Revenue
            </div>
            <div class="radio_btn">
                <input class="revenue_input" type="text" wire:model="bn_b_revenue" readonly value="0">
            </div>
        </div>
    </div>
</div>

{{-- <div>
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

    <div class="box">
        <div class="row">
            <div class="col-md-6 ">
                Product A
                <div class="sub-box">
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_a_productCost" />
                            @error('bn_a_productCost') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            Production cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_a_opex" readonly/>
                        </div>
                        <div class="col-md-6">
                            OPEX
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_a_totalCost" readonly/>
                        </div>
                        <div class="col-md-6">
                            Total cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_a_competitorsPrice" />
                        </div>
                        <div class="col-md-6">
                            Competitor’s Price
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="range" step="1"  class="markUp_slider input-field" name="" wire:model="bn_a_markup" min="0" max="100" value="0"/>
                            {{$bn_a_markup}}%
                        </div>
                        <div class="col-md-6">
                            Mark up %
                        </div>
                    </div>
                </div>

                <div class="row row-price">
                    <div class="col-md-6 price-txt">
                        Price
                    </div>
                    <div class="col-md-6">
                        <input type="number"  class="form-control input-field" name="" wire:model="bn_a_price" readonly/>
                    </div>
                </div>
                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Units Sold
                    </div>
                </div>
                <div class="row revenue_radio_box">
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_a_unitSold" value="0" /> 0
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_a_unitSold" value="20" /> 20
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_a_unitSold" value="30"/> 30
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_a_unitSold" value="40"/> 40
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_a_unitSold" value="50"/> 50
                    </div>
                </div>
                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Revenue
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <input type="number"  class="form-control input-field" name="" wire:model="bn_a_revenue" readonly/>
                    </div>
                </div>

            </div>

            <div class="col-md-6 ">
                Product B
                <div class="sub-box">
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_b_productCost"/>
                        </div>
                        <div class="col-md-6">
                            Production cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_b_opex" readonly/>
                        </div>
                        <div class="col-md-6">
                            OPEX
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_b_totalCost" readonly/>
                        </div>
                        <div class="col-md-6">
                            Total cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="bn_b_competitorsPrice" />
                        </div>
                        <div class="col-md-6">
                            Competitor’s Price
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="range" step="1"  class="markUp_slider input-field" name="" wire:model="bn_b_markup" min="0" max="100"  />
                            {{$bn_b_markup}}%
                        </div>
                        <div class="col-md-6">
                            Mark up %
                        </div>

                    </div>


                </div>



                <div class="row row-price">
                    <div class="col-md-6 price-txt">
                        Price
                    </div>
                    <div class="col-md-6">
                        <input type="number"  class="form-control input-field" name="" wire:model="bn_b_price" readonly/>
                    </div>
                </div>

                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Units Sold
                    </div>
                </div>
                <div class="row revenue_radio_box">
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_b_unitSold" value="0"/> 0
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_b_unitSold" value="20"/> 20
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_b_unitSold" value="30"/> 30
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_b_unitSold" value="40"/> 40
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold" wire:model="bn_b_unitSold" value="50"/> 50
                    </div>
                </div>

                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Revenue
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <input type="number"  class="form-control input-field" name="" wire:model="bn_b_revenue" readonly/>
                    </div>
                </div>
            </div>

        </div>

        <div class="row row-title">
            <div class="col-md-12">
                <h3>Bangladesh</h3>
            </div>
        </div>

    </div>


</div>

<script>
    function popup() {
        alert("Can’t insert any value here.This is inconsistent to the case.");
    }
</script> --}}
