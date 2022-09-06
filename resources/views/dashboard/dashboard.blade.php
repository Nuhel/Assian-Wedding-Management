@extends('layout.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content pt-5">

            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/bd/Indian_wedding_Delhi.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Assian Wedding Service</h5>
                              <p class="card-text">
                                Make your dream wedding designable,  perfect and flawless.
                              </p>
                              <a href="{{route('orders.create',[
                                "is_assian" => 1
                              ])}}" class="btn btn-primary">Take Order</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <img src="https://www.stylegods.com/wp-content/uploads/2020/06/tailor-sewing-jacket-closeup-ALYJDBW-1024x683.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Tailor Service</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{route('orders.create')}}" class="btn btn-primary">Take Order</a>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h5>Today's Service</h5>
                                <div class="d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <span>Total Service: </span>
                                        <span>{{$serviceData->total}}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span>NetPayable: </span>
                                        <span>{{$serviceData->netpayable}}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span>Total Paid: </span>
                                        <span>{{$serviceData->paid}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <h5>Today's Sale</h5>
                                <div class="d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <span>Total Sale: </span>
                                        <span>{{$saleData->total}}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span>NetPayable: </span>
                                        <span>{{$saleData->netpayable}}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span>Total Paid: </span>
                                        <span>{{$saleData->paid}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <h5>Today's Purchase</h5>
                                <div class="d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <span>Total Purchase: </span>
                                        <span>{{$purchaseData->total}}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span>Payable: </span>
                                        <span>{{$purchaseData->netpayable}}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span>Total Paid: </span>
                                        <span>{{$purchaseData->paid}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


