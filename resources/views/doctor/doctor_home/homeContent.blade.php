@extends('doctor.master')

@section('mainContent')

     <div class="row pt-2 pb-2" style="background: #FFFFFF; margin-top: -8px;">
        <div class="col-sm-10">
            <h3 class="page-title">Bank List</h3>
       </div>
       <div class="col-sm-2">
       <div class="btn-group float-sm-right pt-3" style="margin-right: 0px;">
        <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><i class="icon-bell" style="font-size: 20px; margin-left: -25px;"></i></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
            <div class="media-body">
              <table id="default-datatable" class="table table-bordered">
                <tbody>
                    <tr class="text-center text-dark">
                        <td>Rubel</td>
                        <td>0175635465</td>
                        <td><a class="btn btn-info btn-sm" href="#"><i style="font-size: 14px;" class="fa fa-plus" data-toggle="tooltip" title="Add"></i></a>   <a class="btn btn-danger btn-sm" href="#"><i style="font-size: 14px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>
          </a>
        </li>
      </ul>
    </li>

      </div>
     </div>
     </div>
     </div>
     </div>

	    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
          <div class="card bg-pattern-primary">
            <div class="card-body text-center">
              <h1  style="color: #ffffff">Welcome to doctorghor.com</h1>
              <h4  style="color: #ffffff">Doctor Dashboard</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-primary">
            <img style="height: 320px;" src="{{ asset('public/frontend') }}/assets/img/doctor_banner.jpg">
          </div>
        </div>
      </div>
    </div>
@endsection
  

@section('footer')
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Doctor Ghor
        </div>
      </div>
    </footer>
@endsection

