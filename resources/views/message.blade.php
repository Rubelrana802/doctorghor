<form role="form" action="{{url("/sendMessage")}}" method="post">
                                {{csrf_field()}}
                                <textarea type="hidden" class="form-control" row="4">Write Text</textarea><br>
                                <input type="submit" class="pull-left btn btn-primary btn-small" value="Send"/><br /><br />

                                <input type="checkbox" id="select_all" name="select_all"/> Select All<br/><br />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                New Converts / First Timer
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="dataTable_wrapper">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Name</th>
                                                            <th>Phone Number</th>
                                                            <th>Home Address</th>
                                                            <th>Email Address</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($record as $record)

                                                                <tr class="odd gradeX">
                                                                    <td><input type="checkbox" class="checkbox" name="mobile[]" value="{{$record->phone}}"></td>
                                                                    <td>{{$record->first_name}} - {{$record->last_name}}</td>
                                                                    <td>{{$record->phone}}</td>
                                                                    <td>{{$record->home_address}}</td>
                                                                    <td>{{$record->email}}</td>
                                                                    <td>{{ Carbon\Carbon::parse($record->created_at)->format('d-m-Y H:i:s') }}</td>
                                                                    <td><div class="">
                                                                            <a href="{{URL::to('/editNewConvert')}}/{{$record->id}}" class="btn btn-primary btn-xs">Edit</a>
                                                                            <a href="{{URL::to('/deleteNewConvert')}}/{{$record->id}}" class="btn btn-danger btn-xs">Delete</a>
                                                                        </div></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
</form>