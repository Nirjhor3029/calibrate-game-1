<div class="row  product-box">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Product A
            </div>
            <div class="card-body">
                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_A_pc_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('np','a',1)">-</button>
                            <input type="text" value="0" wire:model="np_a_productCost">
                            <button class="counter-plus btn" wire:click="plus('np','a',1)">+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Production cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_A_opx_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="np_a_opex" readonly>
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>OPEX</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_A_tc_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="np_a_totalCost" readonly>
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Total cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_A_cp_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('np','a',4)">-</button>
                            <input type="text" value="0" wire:model="np_a_competitorsPrice">
                            <button class="counter-plus btn" wire:click="plus('np','a',4)">+</button>
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
                                <p><span class="markup_number" id="np_pa_markup_number"></span>%</p>
                            </div>
                            <div class="col-9 col-sm-9 slidecontainer">
                                <input type="range" min="1" max="100" value="0" class="slider" id="np_pa_markup_range"
                                    wire:model="np_a_markup">
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
                            <input type="number" value="0" wire:model="np_a_price" readonly>
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
                <label class="radio_lbl" for="radio_np_0">
                    <input type="radio" class="radio_input" id="radio_np_0" name="np_unit_sold_radio"
                        wire:model="np_a_unitSold" value="0">
                    <p>0</p>
                </label>
                <label class="radio_lbl" for="radio_np_20">
                    <input type="radio" class="radio_input" id="radio_np_20" name="np_unit_sold_radio"
                        wire:model="np_a_unitSold" value="20">
                    <p>20</p>
                </label>
                <label class="radio_lbl" for="radio_np_30">
                    <input type="radio" class="radio_input" id="radio_np_30" name="np_unit_sold_radio"
                        wire:model="np_a_unitSold" value="30">
                    <p>30</p>
                </label>
                <label class="radio_lbl" for="radio_np_40">
                    <input type="radio" class="radio_input" id="radio_np_40" name="np_unit_sold_radio"
                        wire:model="np_a_unitSold" value="40">
                    <p>40</p>
                </label>
                <label class="radio_lbl" for="radio_np_50">
                    <input type="radio" class="radio_input" id="radio_np_50" name="np_unit_sold_radio"
                        wire:model="np_a_unitSold" value="50">
                    <p>50</p>
                </label>
            </div>
        </div>

        <div class="unit_sold">
            <div class="txt">
                Revenue
            </div>
            <div class="radio_btn">
                <input class="revenue_input" type="text" wire:model="np_a_revenue" readonly value="0">
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
                        <div class="handle-counter" id="np_B_pc_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('np','b', 1)">-</button>
                            <input type="text" value="0" wire:model="np_b_productCost">
                            <button class="counter-plus btn" wire:click="plus('np','b', 1)">+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Production cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_B_opx_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="np_b_opex" readonly>
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>OPEX</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_B_tc_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="np_b_totalCost" readonly>
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p>Total cost</p>
                    </div>
                </div>

                <div class="input_field row">
                    <div class="col-md-7">
                        <div class="handle-counter" id="np_B_cp__handleCounter">
                            <button class="counter-minus btn" wire:click="plus('np','b',4)">-</button>
                            <input type="text" value="0" wire:model="np_b_competitorsPrice">
                            <button class="counter-plus btn" wire:click="plus('np','b',4)">+</button>
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
                                <p><span class="markup_number" id="np_pb_markup_number"></span>%</p>
                            </div>
                            <div class="col-9 col-sm-9 slidecontainer">
                                <input type="range" min="1" max="100" value="1" class="slider" id="np_pb_markup_range"
                                    wire:model="np_b_markup">
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
                            <input type="number" value="0" wire:model="np_b_price" readonly>
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
                <label class="radio_lbl" for="radio_npb_0">
                    <input type="radio" class="radio_input" id="radio_npb_0" name="unit_sold_np_b_radio"
                        wire:model="np_b_unitSold" value="0">
                    <p>0</p>
                </label>
                <label class="radio_lbl" for="radio_npb_20">
                    <input type="radio" class="radio_input" id="radio_npb_20" name="unit_sold_np_b_radio"
                        wire:model="np_b_unitSold" value="20">
                    <p>20</p>
                </label>
                <label class="radio_lbl" for="radio_npb_30">
                    <input type="radio" class="radio_input" id="radio_npb_30" name="unit_sold_np_b_radio"
                        wire:model="np_b_unitSold" value="30">
                    <p>30</p>
                </label>
                <label class="radio_lbl" for="radio_npb_40">
                    <input type="radio" class="radio_input" id="radio_npb_40" name="unit_sold_np_b_radio"
                        wire:model="np_b_unitSold" value="40">
                    <p>40</p>
                </label>
                <label class="radio_lbl" for="radio_npb_50">
                    <input type="radio" class="radio_input" id="radio_npb_50" name="unit_sold_np_b_radio"
                        wire:model="np_b_unitSold" value="50">
                    <p>50</p>
                </label>
            </div>
        </div>

        <div class="unit_sold">
            <div class="txt">
                Revenue
            </div>
            <div class="radio_btn">
                <input class="revenue_input" type="text" value="0" wire:model="np_b_revenue" readonly>
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
                            <input type="number"  class="form-control input-field" name="" wire:model="np_a_productCost"/>
                        </div>
                        <div class="col-md-6">
                            Production cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_a_opex" readonly/>
                        </div>
                        <div class="col-md-6">
                            OPEX
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_a_totalCost" readonly/>
                        </div>
                        <div class="col-md-6">
                            Total cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_a_competitorsPrice" />
                        </div>
                        <div class="col-md-6">
                            Competitor’s Price
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="range" step="1"  class="markUp_slider input-field" name="" wire:model="np_a_markup" min="0" max="100"/>
                            {{$np_a_markup}}%
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
                        <input type="number"  class="form-control input-field" name="" wire:model="np_a_price" readonly/>
                    </div>
                </div>

                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Units Sold
                    </div>
                </div>
                <div class="row revenue_radio_box">
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_a_unitSold" value="0"/> 0
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_a_unitSold" value="20"/> 20
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_a_unitSold" value="30"/> 30
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_a_unitSold" value="40"/> 40
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_a_unitSold" value="50"/> 50
                    </div>
                </div>

                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Revenue
                    </div>
                </div>
                <div class="row row-unitsold">
                    <div class="col-md-12">
                        <input type="number"  class="form-control input-field" name="" wire:model="np_a_revenue" readonly/>
                    </div>
                </div>

            </div>

            <div class="col-md-6 ">
                Product B
                <div class="sub-box">
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_b_productCost"/>
                        </div>
                        <div class="col-md-6">
                            Production cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_b_opex" readonly/>
                        </div>
                        <div class="col-md-6">
                            OPEX
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_b_totalCost" readonly/>
                        </div>
                        <div class="col-md-6">
                            Total cost
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="number"  class="form-control input-field" name="" wire:model="np_b_competitorsPrice" />
                        </div>
                        <div class="col-md-6">
                            Competitor’s Price
                        </div>
                    </div>
                    <div class="row single-field">
                        <div class="col-md-6 ">
                            <input type="range" step="1"  class="markUp_slider input-field" name="" wire:model="np_b_markup" min="0" max="100"/>
                            {{$np_b_markup}}%
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
                        <input type="number"  class="form-control input-field" name="" wire:model="np_b_price" readonly/>
                    </div>
                </div>
                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Units Sold
                    </div>
                </div>
                <div class="row revenue_radio_box">
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_b_unitSold" value="0"/> 0
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_b_unitSold" value="20"/> 20
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_b_unitSold" value="30"/> 30
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_b_unitSold" value="40"/> 40
                    </div>
                    <div class="col-md-2 revenue_radio">
                        <input type="radio"  class="form-control input-field input_unitsold"  wire:model="np_b_unitSold" value="50"/> 50
                    </div>
                </div>
                <div class="row row-unitsold">
                    <div class="col-md-12 col-unitsold ">
                        Revenue
                    </div>
                </div>
                <div class="row row-unitsold">
                    <div class="col-md-12">
                        <input type="number"  class="form-control input-field" name="" wire:model="np_b_revenue" readonly/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-title">
            <div class="col-md-12">
                <h3>Nepal</h3>
            </div>
        </div>
    </div>

</div>

<script>
    function popup() {
        alert("Can’t insert any value here.This is inconsistent to the case.");
    }
</script> --}}
