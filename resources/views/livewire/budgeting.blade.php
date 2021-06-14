<div class="details">
    <div class="row">
        <div class="col-md-5 budget-box">
            <div class="card">
                <div class="card-header">
                    <h3>Budget of BD</h3>
                    <h3><span>{{ $output_total_budget }}</span> BDT</h3>
                </div>
                <div class="card-body">
                    <div class="input_field">
                        <p>Recruitment</p>
                        <div class="handle-counter" id="bd_r_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="recruitment_bd" readonly onclick="popup()">
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>

                    <div class="input_field">
                        <p>Manufacturing</p>
                        <div class="handle-counter" id="bd_m_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="manufacturing_bd" readonly onclick="popup()">
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>

                    <div class="input_field">
                        <p>Launch</p>
                        <div class="handle-counter" id="bd_l_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('bd',3)">-</button>
                            <input type="text" value="0" wire:model="launch_bd">
                            <button class="counter-plus btn" wire:click="plus('bd',3)">+</button>
                        </div>
                    </div>

                    <div class="input_field">
                        <p>Others</p>
                        <div class="handle-counter" id="bd_o_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('bd',4)">-</button>
                            <input type="text" value="0" wire:model="other_bd">
                            <button class="counter-plus btn" wire:click="plus('bd',4)">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NP Market -->
        <div class="col-md-5 budget-box">
            <div class="card">
                <div class="card-header">
                    <h3>Budget of NP</h3>
                    <h3><span>{{ $output_total_budget_np }}</span> BDT</h3>
                </div>
                <div class="card-body">
                    <div class="input_field">
                        <p>Recruitment</p>
                        <div class="handle-counter" id="np_r_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="recruitment_np" readonly onclick="popup()">
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>

                    <div class="input_field">
                        <p>Manufacturing</p>
                        <div class="handle-counter" id="np_m_handleCounter">
                            <button class="counter-minus btn" disabled>-</button>
                            <input type="text" value="0" wire:model="manufacturing_np" readonly onclick="popup()">
                            <button class="counter-plus btn" disabled>+</button>
                        </div>
                    </div>

                    <div class="input_field">
                        <p>Launch</p>
                        <div class="handle-counter" id="np_l_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('np',3)">-</button>
                            <input type="text" value="0" wire:model="launch_np">
                            <button class="counter-plus btn" wire:click="plus('np',3)">+</button>
                        </div>
                    </div>

                    <div class="input_field">
                        <p>Others</p>
                        <div class="handle-counter" id="np_o_handleCounter">
                            <button class="counter-minus btn" wire:click="minus('np',4)">-</button>
                            <input type="text" value="0" wire:model="other_np">
                            <button class="counter-plus btn" wire:click="plus('np',4)">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 budget-box">
            <div class="card ">
                <div class="card-body total">
                    <p class="txt">Total Budget</p>
                    <p class="bdt"><span>{{ $output_total_budget_np + $output_total_budget }}</span> BDT</p>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="https://freedesignfile.com/upload/2017/12/Alert-Icon.jpg" class="alert_img"
                                alt="">
                        </div>
                        <div class="col-sm-10">
                            Can’t insert any value here.This is inconsistent to the case.
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <script>
        function popup() {
            // alert("Can’t insert any value here.This is inconsistent to the case.");
            $('#exampleModal').modal('show');
        }

    </script>
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



        <!--start for bd market -->
        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#5B9BD5">
                    <h4 style="text-align:center;color:white;">Total Budget BD</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#7030A0">
                <h4 style="text-align:center;color:white;">{{ $output_total_budget }} BDT</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Recruitment</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="recruitment_bd" readonly
                    onclick="popup()" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Manufacturing</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="manufacturing_bd" readonly
                    onclick="popup()" />
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Launch</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="launch_bd" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Other</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="other_bd" />
            </div>
        </div>
        <!--end for bd market -->


        <!--start for bd market -->
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#5B9BD5">
                    <h4 style="text-align:center;color:white;">Total Budget NP</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#7030A0">
                <h4 style="text-align:center;color:white;">{{ $output_total_budget_np }} BDT</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Recruitment</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="recruitment_np" readonly
                    onclick="popup()" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Manufacturing</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="manufacturing_np" readonly
                    onclick="popup()" />
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Launch</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="launch_np" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#D0CECE">
                    <h4 style="text-align:center;color:white;">Other</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#F4F5F7">
                <input type="number" step=".001" class="form-control" name="" wire:model="other_np" />
            </div>
        </div>
        <!--end for bd market -->

        <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
                <div style="padding:20px 20px 10px 20px;background-color:#5B9BD5">
                    <h4 style="text-align:center;color:white;">Total Budget</h4>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px 20px 10px 20px;background-color:#7030A0">
                <h4 style="text-align:center;color:white;">{{ $output_total_budget_np + $output_total_budget }} BDT</h4>
            </div>
        </div>


    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="https://freedesignfile.com/upload/2017/12/Alert-Icon.jpg" class="alert_img" alt="">
                        </div>
                        <div class="col-sm-10">
                            Can’t insert any value here.This is inconsistent to the case.
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <script>
        function popup() {
            // alert("Can’t insert any value here.This is inconsistent to the case.");
            $('#exampleModal').modal('show');
        }

    </script>

    </div> --}}
