@extends('doctor.master')

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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Patient </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>patient ID</th>
                        <th>patient Name</th>
                        <th>Mobile</th>
                        <th>visited</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>

                    @foreach($patients as $patient)
                    <tr class="text-center">
                        <td>{{ ++$i }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->mobile }}</td>
                        <td>{{ ($patient->visit) == 1? 'Yes' : 'No' }}</td>
                        <td><a class="btn btn-info btn-sm" href="#"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>   <a class="btn btn-danger btn-sm" href="#"><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a></td>
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