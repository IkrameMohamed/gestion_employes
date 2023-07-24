@extends('adminlte::page')

@section('title')
    Vacation Request
@endsection


@section('content')
  <div class="container">
      <div class="row ">
          <div class="col-md-8 mx-auto">
              <div class="card p-3 my-5">
                  <div class="card-header">
                      <h3>Vacation Request</h3>
                  </div>
                  <div class="card-body">
                      <p class="lead">
                          <b>{{$employe->fullname}}</b> is presently employed with me on the following
                      </p>
                      <p class="lead">
                          <b>{{$employe->depart}}</b> department
                      </p>
                      <p class="lead">
                          he is requesting a vacation from <b>_________</b>
                      </p>
                      <p class="lead">
                          and ends on <b>________</b>
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
