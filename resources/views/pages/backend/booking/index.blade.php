@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Booking</h4>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#bookingModalgetbootstrap" data-whatever="@getbootstrap"> <i
                                    data-feather="plus-square"> </i>New Booking</button>
                            <div class="modal fade" id="bookingModalgetbootstrap" tabindex="-1" role="dialog"
                                aria-labelledby="bookingModalgetbootstrap" aria-hidden="true">
                                @include('pages.backend.booking.create')
                            </div>
                            <form autocomplete="off" method="POST" action="{{ route('booking.datefilter') }}">
                                @method('PUT')
                                @csrf
                                <div style="display: flex">
                                    <div style="margin-right: 10px;"><input type="date" name="from_date"  required
                                            class="form-control from_date" value="{{ $today }}"></div>
                                    <div style="margin-right: 10px;"><input type="submit" class="btn btn-success"
                                            value="Search" /></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Date</th>
                                        <th>Plot No</th>
                                        <th>Customer</th>
                                        <th>Father / Husband</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $keydata => $bookingsdata)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $bookingsdata['date']   }}</td>
                                            <td></td>
                                            <td>{{ $bookingsdata['customername']   }}</td>
                                            <td>{{ $bookingsdata['fathername']   }}{{ $bookingsdata['husbandname']   }}</td>
                                            <td>{{ $bookingsdata['mobileno']   }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <button class="btn btn-success active" type="button" title="btn btn-success active"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#bookingModalgetbootstrapedit"
                                                            data-whatever="@getbootstrap"> Edit</button>
                                                        <div class="modal fade" id="bookingModalgetbootstrapedit"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="bookingModalgetbootstrapedit"
                                                            aria-hidden="true">
                                                            @include('pages.backend.booking.edit')
                                                        </div>
                                                    </li>
                                                    <li class="delete">
                                                        <button class="btn btn-danger active" type="button"
                                                            title="btn btn-danger active">Delete</button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
