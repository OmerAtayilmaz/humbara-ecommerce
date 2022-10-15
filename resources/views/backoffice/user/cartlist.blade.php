@extends('layouts.backoffice')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold card-title-text">Cart Course List</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th>Id</th>
                                                        <th>User Id</th>
                                                        <th>Course id</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($cartItemsList as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>
                                                        <a class="btn btn-outline-primary" href="{{route('admin.usershow',['userid'=>$item->user_id])}}">{{$item->user->name}}</a>
                                                        </td>
                                                        <td><a class="btn btn-outline-primary" href="{{route('admin.coursedetail',['courseid'=>$item->course_id])}}">Course Detail </a>
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
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection