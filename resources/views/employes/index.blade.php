@extends('adminlte::page')

@section('plugins.Datatables', true)


@section('title')
    List of employes | Laravel Employes App
@endsection

@section('content_header')
    <h1>List of employes </h1>
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                          <h4>Employes</h4>
                        </div>
                    </div>

                <div class="card-body">
                    <table id="mytable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>department</th>
                            <th>hired</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employes as $key=> $employe )
                           <tr>
                               <td>{{$key+=1}}</td>
                               <td>{{$employe->fullname}}</td>
                               <td>{{$employe->depart}}</td>
                               <td>{{$employe->hire_date}}</td>
                               <td class="d-flex justify-content-center align-items-center">
                                <a href="{{route('employes.show',$employe->registration_number)}}" class="btn btn-sm btn-primary">
                               <i class="fas fa-eye"></i>
                                   </a>
                               <a href="{{route('employes.edit',$employe->registration_number)}}" class="btn btn-sm btn-warning mx-2">
                               <i class="fas fa-edit"></i>
                                   </a>
                               <form id="{{$employe->registration_number}}" action="{{route('employes.destroy',$employe->registration_number)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                               </form>
                               <button type="submit" onclick="deleteEmp({{$employe->registration_number}})" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                               </button>
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

@endsection

@section('js')
    <script>
  $(document).ready(function (){
     $('#mytable').DataTable({
         dom :'Bfrtip',
         buttons : [
             'copy', 'excel', 'csv', 'pdf','print', 'colvis']
     });


      });
  function deleteEmp(id) {
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById(id).submit();
              Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
              )
          }
      })


  }




    </script>

    @if(session()->has('success'))
     <script>
         Swal.fire({
             position: 'top-end',
             icon: 'success',
             title: "{{session()->get('success')}}",
             showConfirmButton: false,
             timer: 2500
         })

     </script>
    @endif
@endsection
