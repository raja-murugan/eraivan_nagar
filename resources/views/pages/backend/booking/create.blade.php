<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">


        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">

        <div class="card ">
            <h3 class="modal-header justify-content-center border-0">New Booking</h3>
            <div class="modal-body border">
                <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('booking.store') }}">
                    @csrf


                    <h6>Personal Details</h6>
                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="date" id="date" type="date" required="" >
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Customer<span class="txt-danger">*</span></label>
                              <input class="form-control" id="customername"  name="customername" type="text" placeholder="Enter Customer" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">FatherName/HusbandName<span class="txt-danger">*</span></label>
                              <input class="form-control" id="fathername" name="fathername" type="text" placeholder="Enter Father Name / Husband Name" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Mobile No<span class="txt-danger">*</span></label>
                              <input class="form-control" id="mobileno"  name="mobileno" type="number" placeholder="Mobile No" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">ID Proof<span class="txt-danger">*</span></label>
                              <input class="form-control" id="idproof_no"  name="idproof_no" type="text" placeholder="ID Proof" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Proof<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="idproofone">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 <option value="Aadhaar">Aadhaar</option>
                                 <option value="Pan card">Pan card</option>
                                 <option value="Driving Licence">Driving Licence</option>
                                 <option value="Voter Id">Voter Id</option>
                                 <option value="Ration Card">Ration Card</option>
                            </select>
                           </div>
                        </div>
<br/>
                     <h6>Address Details</h6>

                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Address<span class="txt-danger">*</span></label>
                              <input class="form-control" id="address"  name="address" type="text" placeholder="Address" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Street<span class="txt-danger">*</span></label>
                              <input class="form-control" id="street"  name="street" type="text" placeholder="Street" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Area<span class="txt-danger">*</span></label>
                              <input class="form-control" id="area"  name="area" type="text" placeholder="Area" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">City<span class="txt-danger">*</span></label>
                              <input class="form-control" id="city"  name="city" type="text" placeholder="City" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Pincode<span class="txt-danger">*</span></label>
                              <input class="form-control" id="pincode"  name="pincode" type="number" placeholder="Pincode" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date Of Site Visit<span class="txt-danger">*</span></label>
                              <input class="form-control" id="dateof_site_visit"  name="dateof_site_visit" type="date" placeholder="Date Of Site Visit" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Reference<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="reference">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 @foreach ($Reference as $References)
                                 <option value="{{ $References->id }}">{{ $References->name }}</option>
                                 @endforeach
                            </select>
                           </div>
                        </div>


                        <br/>
                     <h6>Plot Details</h6>

                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">ProjectName<span class="txt-danger">*</span></label>
                              <input class="form-control" id="projectname"  name="projectname" type="text" placeholder="ProjectName" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Block<span class="txt-danger">*</span></label>
                              <input class="form-control" id="block"  name="block" type="text" placeholder="Block" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="table-responsive col-lg-10 col-sm-12 col-12">
                              <table class="table">
                                 <thead>
                                    <tr style="background: #f8f9fa;">
                                        <th style="font-size:15px;">Plot No</th>
                                        <th style="font-size:15px;">Sqft</th>
                                        <th style="font-size:15px;">Action </th>
                                    </tr>
                                </thead>
                                <tbody class="bookingplot_fields">
                                    <tr>
                                       <td>
                                          <input type="hidden"id="bookingplot_id"name="bookingplot_id[]" />
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id"required>
                                                <option selected="" disabled="" value="">Choose...</option>
                                                @foreach ($Plot as $Plots)
                                                    <option value="{{ $Plots->id }}">{{ $Plots->plot_no }}
                                                    </option>
                                                @endforeach
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet" id="square_feet" name="square_feet[]"
                                                placeholder="Squarefeet" value="" required /></td>
                                       <td></td>
                                    </tr>
                                </tbody>
                              </table>
                           </div>
                        </div>


                        <br/>

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
         </div>


        </div>


        
    </div>
</div>
