@extends('hospital.master')

@section('mainContent')
<br>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div class="text-center" style="font-size: 18px; padding: 9px; border: 2px solid #00B1E6;">
                     {{ Session::get('message') }}
                    </div>
                </div>
            @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/doctor/add') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Doctor </a>
                </div>
            </div>
        </div>
    <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Doctor </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Doctor Name</th>
                        <th>Designation</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>

                    @foreach($doctors as $doctor)
                    <tr class="text-center">
                        <td>{{ ++$i }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->Designation }}</td>
                        <td>{{ $doctor->Mobile }}</td>
                        <td>{{ $doctor->Gender }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ url('/doctor/edit/'.$doctor->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>   <a class="btn btn-danger btn-sm" href="{{ url('/doctor/delete/'.$doctor->id) }}"><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection

<!-- tootip text code -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>