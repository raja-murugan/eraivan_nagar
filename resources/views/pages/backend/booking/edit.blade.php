<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">


        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">

        <div class="card ">
            <h3 class="modal-header justify-content-center border-0">Update Booking</h3>
            <div class="modal-body border">
                <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('booking.update', ['unique_key' => $bookingsdata['unique_key']]) }}" enctype="multipart/form-data">
                @method('PUT')
               @csrf


                    <h6>Personal Details</h6>
                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="date" id="date" type="date" required="" value="{{$bookingsdata['date']}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Customer<span class="txt-danger">*</span></label>
                              <input class="form-control" id="customername"  name="customername" value="{{$bookingsdata['customername']}}" type="text" placeholder="Enter Customer" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">FatherName/HusbandName<span class="txt-danger">*</span></label>
                              <input class="form-control" id="fathername" name="fathername" value="{{$bookingsdata['fathername']}}" type="text" placeholder="Enter Father Name / Husband Name" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Mobile No<span class="txt-danger">*</span></label>
                              <input class="form-control" id="mobileno"  name="mobileno" type="number" value="{{$bookingsdata['mobileno']}}" placeholder="Mobile No" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Proof<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="idproofone">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 <option value="Aadhaar"@if ('Aadhaar' === $bookingsdata['idproofone']) selected='selected' @endif>Aadhaar</option>
                                 <option value="Pan card"@if ('Pan card' === $bookingsdata['idproofone']) selected='selected' @endif>Pan card</option>
                                 <option value="Driving Licence"@if ('Driving Licence' === $bookingsdata['idproofone']) selected='selected' @endif>Driving Licence</option>
                                 <option value="Voter Id"@if ('Voter Id' === $bookingsdata['idproofone']) selected='selected' @endif>Voter Id</option>
                                 <option value="Ration Card"@if ('Ration Card' === $bookingsdata['idproofone']) selected='selected' @endif>Ration Card</option>
                            </select>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">ID Proof<span class="txt-danger">*</span></label>
                              <input class="form-control" id="idproof_no"  name="idproof_no" type="text" placeholder="ID Proof" value="{{$bookingsdata['idproof_no']}}" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
<br/>
                     <h6>Address Details</h6>

                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Address<span class="txt-danger">*</span></label>
                              <input class="form-control" id="address"  name="address" type="text" value="{{$bookingsdata['address']}}"placeholder="Address" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Street<span class="txt-danger">*</span></label>
                              <input class="form-control" id="street"  name="street" type="text" value="{{$bookingsdata['street']}}" placeholder="Street" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Area<span class="txt-danger">*</span></label>
                              <input class="form-control" id="area"  name="area" type="text" value="{{$bookingsdata['area']}}" placeholder="Area" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">City<span class="txt-danger">*</span></label>
                              <input class="form-control" id="city"  name="city" type="text" value="{{$bookingsdata['city']}}" placeholder="City" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Pincode<span class="txt-danger">*</span></label>
                              <input class="form-control" id="pincode"  name="pincode" type="number" value="{{$bookingsdata['pincode']}}" placeholder="Pincode" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date Of Site Visit<span class="txt-danger">*</span></label>
                              <input class="form-control" id="dateof_site_visit"  name="dateof_site_visit" value="{{$bookingsdata['dateof_site_visit']}}" type="date" placeholder="Date Of Site Visit" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Reference<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="reference">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 @foreach ($Reference as $References)
                                 <option value="{{ $References->id }}"@if ($References->id === $bookingsdata['reference']) selected='selected' @endif>{{ $References->name }}</option>
                                 @endforeach
                            </select>
                           </div>
                        </div>


                        <br/>
                     <h6>Plot Details</h6>

                        <div class="row">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Block<span class="txt-danger">*</span></label>
                              <select class="form-select" id="booking_block" name="booking_block" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                                 <option value="A"@if ('A' === $bookingsdata['block']) selected='selected' @endif>A</option>
                                 <option value="B"@if ('B' === $bookingsdata['block']) selected='selected' @endif>B</option>
                                 <option value="C"@if ('C' === $bookingsdata['block']) selected='selected' @endif>C</option>
                                 <option value="D"@if ('D' === $bookingsdata['block']) selected='selected' @endif>D</option>
                              </select>
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
                                    </tr>
                                </thead>
                                <tbody class="bookingplot_fields">
                                @foreach ($bookingsdata['plot_terms'] as $index => $plot_terms_arr)
                                    @if ($plot_terms_arr['booking_id'] == $bookingsdata['id'])
                                    <tr>
                                       <td>
                                          <input type="hidden" id="bookingplot_id" name="bookingplot_id[]" value="{{ $plot_terms_arr['id'] }}"/>
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id1" required>
                                                <option selected="" disabled="" value="">Choose...</option>
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet" id="square_feet1" name="square_feet[]"
                                                placeholder="Square Feet" value="" readonly />
                                             <input type="hidden" class="form-control plot_no" id="plot_no1" name="plot_no[]"/></td>
                                       <td><button style="width: 35px;"class="py-1 text-white font-medium rounded-lg text-sm  text-center btn btn-primary addproductfields"
                                                type="button" id="" value="Add">+</button></td>
                                    </tr>
                                    @endif
                                 @endforeach
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
