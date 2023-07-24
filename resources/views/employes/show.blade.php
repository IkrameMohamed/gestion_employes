@extends('adminlte::page')




@section('title')
    Show Employe
@endsection

@section('content_header')
    <h1>Show Employe </h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">

            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3> {{$employe->fullname}} </h3>
                        </div>
                    </div>

                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                       <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">
                           vacation request
                       </a>
                        <a href="{{route('certivicate.request',$employe->registration_number)}}" class="btn btn-outline-danger">
                           work request
                        </a>

                    </div>
                    <hr>
                    <div class="card-body">

                            <div class="form-group mb-3">
                                <label for="registration_number">registration number</label>
                                <input type="text" disabled class="form-control rounded-0" name="registration_number" placeholder="registration number"
                                       value="{{$employe->registration_number}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="fullname">Fullname</label>
                                <input type="text" disabled class="form-control rounded-0" name="fullname" placeholder="Fullname"
                                       value="{{$employe->fullname}}">
                            </div>


                            <div class="form-group mb-3">
                                <label for="departemant">departemant</label>
                                <input type="text" disabled class="form-control rounded-0" name="depart" placeholder="departemant"
                                       value="{{$employe->depart}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="hire_date">hire date</label>
                                <input type="date" disabled class="form-control rounded-0" name="hire_date" placeholder="hire_date"
                                       value="{{$employe->hire_date}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">phone</label>
                                <input type="tel" disabled class="form-control rounded-0" name="phone" placeholder="phone"
                                       value="{{$employe->phone}}">
                            </div>


                            <div class="form-group mb-3">
                                <label for="address">address</label>
                                <input type="text" disabled class="form-control rounded-0" name="address" placeholder="address"
                                       value="{{$employe->address}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="city">city</label>
                                <input type="text" disabled class="form-control rounded-0" name="city" placeholder="city"
                                       value="{{$employe->city}}">
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

