@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Receipt</h4>
                        </div>
                        <div class="col-md-4">
                        <button  onclick="printDiv('printableArea')"  class="btn-success btn" ><i class="fa fa-print"></i> Print</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">

                <div  id="printableArea">
                    <div class="card-body">

                        <h5 style="text-align:center;text-decoration: underline;margin-bottom:30px;color: #783545;">RECEIPT</h5>
                           
                        <table class="table">
                            <tr class="border" style="">
                                <td class="border" style="width:35%;font-size:14px;border: 1px solid #d37088! important;color: #783545;">Receipt No :  <span style="font-weight:500;">{{ $BookingPaymentdata->bill_no }}</span></td>
                                <td class="border" style="width:35%;font-size:14px;border: 1px solid #d37088! important;color: #783545;">Receipt Date :  <span style="font-weight:500;">{{ date('d-m-Y', strtotime($BookingPaymentdata->date)) }}</span></td>
                                <td class="border" style="width:30%;font-size:14px;border: 1px solid #d37088! important;color: #783545;">Plot No : <span style="font-weight:500;">{{ $BookingPaymentdata->plot_no }}</span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #d37088! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #d37088! important;color: #783545;">Customer Name : </td>
                                <td class="" style="border: 1px solid #d37088! important;color: #783545;"><span style="font-weight:500;font-size:14px;">{{ $BookingData->customername }}</span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #d37088! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #d37088! important;color: #783545;">Address : </td>
                                <td class="" style="border: 1px solid #d37088! important;"><span style="font-weight:500;font-size:14px;color: #783545;">
                                            {{ $BookingData->address }}, {{ $BookingData->street }}, {{ $BookingData->area }}, {{ $BookingData->city }} - {{ $BookingData->pincode }}
                                            </span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #d37088! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #d37088! important;color: #783545;">Contact Number : <span style="font-weight:500;font-size:14px;">{{ $BookingData->mobileno }}</span></td>
                                <td class="" style="font-size:14px;border: 1px solid #d37088! important;color: #783545;">Project Name : <span style="font-weight:500;font-size:14px;"> ERAIVAN NAGAR </span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #d37088! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #d37088! important;color: #783545;">Project Location : <span style="font-weight:500;font-size:14px;"> ARIYALUR </span></td>
                                <td class="" style="font-size:14px;border: 1px solid #d37088! important;color: #783545;">Total Sqft : <span style="font-weight:500;">{{ $BookingPaymentdata->sqft }}</span></td>
                            </tr>
                        </table>

                            <br/>

                        <table class="table">
                            <tr class="border"style="border: 1px solid #d37088! important;">
                                <td  style="width:35%;font-size:14px;border-bottom: 1px solid #d37088! important;color: #783545;font-weight:500;">S No</td>
                                <td  style="width:35%;font-size:14px;border-bottom: 1px solid #d37088! important;color: #783545;font-weight:500;">Particulars</td>
                                <td class="border" style="width:30%;font-size:14px;border: 1px solid #d37088! important;color: #783545;font-weight:500;">Amount</td>
                            </tr>

                            <tr class="border" style="border: 1px solid #d37088! important;">
                                <td style="font-weight:500;font-size:14px;border: 1px solid #d37088! important;color: #783545;">1.</td>
                                <td style="font-weight:500;font-size:14px;border: 1px solid #d37088! important;color: #783545;">{{ $BookingPaymentdata->block }} Block - Plot No {{ $BookingPaymentdata->plot_no }}</td>
                                <td class="border" style="font-weight:500;font-size:14px;border: 1px solid #d37088! important;color: #783545;">{{ $total }}</td>
                            </tr>
                            <tr class="border" style="border: 1px solid #d37088! important;">
                                <td style="border-bottom: 1px solid #d37088! important;"></td>
                                <td style="text-align:right;font-size:14px;border-bottom: 1px solid #d37088! important;color: #783545;font-weight:500;">Total : </td>
                                <td class="border" style="font-weight:500;font-size:14px;border: 1px solid #d37088! important;color: #783545;">{{ $total }}</td>
                            </tr>
                            <tr class="border"style="border: 1px solid #d37088! important;">
                                <td style="border: 1px solid #d37088! important;color: #783545;font-weight:500;">In Words : </td>
                                <td class="" style="font-weight:500;font-size:14px;border-bottom: 1px solid #d37088! important;color: #783545;">{{$get_amount}}</td>
                            </tr>
                        </table>


                    </div>
                </div>



                </div>
            </div>
        </div>
    </div>
@endsection
