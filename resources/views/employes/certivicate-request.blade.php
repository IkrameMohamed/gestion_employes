@extends('adminlte::page')

@section('title')
   Work Certivicate Request
@endsection


@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>  Work Certivicate Request</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>{{$employe->fullname}}</b> is presently employed with me on the following
                        </p>
                        <p class="lead">
                            <b>{{$employe->depart}}</b> department
                        </p>
                        <p class="lead">
                            his empoyment began <b>{{$employe->hire_date}}</b>
                        </p>
                        <p class="lead">
                            this certivication is issued open the request of <b>{{$employe->fullname}}</b> for whatever legal pupose it may serve
                        </p>
                        <p class="lead">
                            Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toDateString()}}</b>
                        </p>


                        <p class="m-5">
                            __________
                            __________
                        </p>

                        <div class="my-4">
                            <a href="#" onclick="document.getElementById('printLink').style.display='none';
                          setTimeout(function (){
                              document.getElementById('printLink').style.display='inline-block';
                          } , 2000);
                          window.print()" class="btn btn-sm btn-primary" id="printLink">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


@endsection
