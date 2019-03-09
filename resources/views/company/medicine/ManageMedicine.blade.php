@extends('company.master')

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

        
        <!-- Alert button -->
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/medicine/add') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Medicine </a>
                </div>
            </div>
        </div>
    <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Medicine </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Medicine Name</th>
                        <th>Unit</th>
                        <th>Generic Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>

                    @foreach($medicine as $medicine)
                    <tr class="text-center">
                        <td>{{ ++$i }}</td>
                        <td>{{ $medicine->name }}</td>
                        <td>{{ $medicine->unit }}</td>
                        <td>{{ $medicine->generic }}</td>
                        <td>{{ $medicine->price }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ url('/medicine/edit/'.$medicine->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>   <a class="btn btn-danger btn-sm" href="{{ url('/medicine/delete/'.$medicine->id) }}"><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a></td>
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