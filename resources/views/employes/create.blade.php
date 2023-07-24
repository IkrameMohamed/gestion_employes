@extends('adminlte::page')




@section('title')
    Add New Employe | Laravel Employes App
@endsection

@section('content_header')
    <h1>Add New Employe </h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">

            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Add New Employe</h4>
                        </div>
                    </div>
                    <div class="card-body">
            <form action="{{route('employes.store')}}" method="post" class="mt-3">
                   @csrf
                <div class="form-group mb-3">
                    <label for="registration_number">registration number</label>
                    <input type="text" class="form-control" name="registration_number" placeholder="registration number"
                    value="{{old('registration_number')}}">
                </div>

                <div class="form-group mb-3">
                    <label for="fullname">Fullname</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Fullname"
                           value="{{old('fullname')}}">
                </div>


                <div class="form-group mb-3">
                    <label for="departemant">departemant</label>
                    <input type="text" class="form-control" name="depart" placeholder="departemant"
                           value="{{old('depart')}}">
                </div>

                <div class="form-group mb-3">
                    <label for="hire_date">hire date</label>
                    <input type="date" class="form-control" name="hire_date" placeholder="hire_date"
                           value="{{old('hire_date')}}">
                </div>

                <div class="form-group mb-3">
                    <label for="phone">phone</label>
                    <input type="tel" class="form-control" name="phone" placeholder="phone"
                           value="{{old('phone')}}">
                </div>


                <div class="form-group mb-3">
                    <label for="address">address</label>
                    <input type="text" class="form-control" name="address" placeholder="address"
                           value="{{old('address')}}">
                </div>

                <div class="form-group mb-3">
                    <label for="city">city</label>
                    <input type="text" class="form-control" name="city" placeholder="city"
                           value="{{old('city')}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        submit
                    </button>
                </div>

            </form>

                </div>
                </div>
            </div>
        </div>
    </div>

@endsection

