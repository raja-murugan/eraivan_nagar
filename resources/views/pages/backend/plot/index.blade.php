@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Plot Details</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap"> <i
                                    data-feather="plus-square"> </i>New Plot</button>
                            <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
                                @include('pages.backend.plot.create')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-sm-4 g-3">
                            @foreach ($data as $keydata => $plotdata)
                                <div class="col-xl-3 col-md-6">
                                    <div class="prooduct-details-box">
                                        <div class="media">
                                            <div class="media-body ms-3">
                                                <div class="product-name">
                                                    <h6><a href="#">Plot No :
                                                            {{ $plotdata->plot_no }}<span></span></a></h6>
                                                </div>
                                                <div class="price d-flex">
                                                    <div class="text-muted me-2">Sq.ft : {{ $plotdata->Sq_ft }} X
                                                        {{ $plotdata->rate_per_Sq_ft }} =
                                                        {{ $plotdata->Sq_ft * $plotdata->rate_per_Sq_ft }}<span></span>
                                                    </div>
                                                </div>
                                                <div class="price d-flex">
                                                    <div class="text-muted me-2">Facing :
                                                        {{ $plotdata->facing }}<span></span></div>
                                                </div>
                                                <div class="avaiabilty">
                                                    @if ($plotdata->status == 'open')
                                                        <div class="text-success">{{ $plotdata->status }}</div>
                                                    @else
                                                        <div class="text-danger">{{ $plotdata->status }}</div>
                                                    @endif
                                                </div>
                                                <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalgetbootstrapedit"
                                                    data-whatever="@getbootstrap"> Edit</button>
                                                <div class="modal fade" id="exampleModalgetbootstrapedit" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalgetbootstrapedit"
                                                    aria-hidden="true">
                                                    @include('pages.backend.plot.edit')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
