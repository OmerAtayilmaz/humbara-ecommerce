@extends('layouts.backoffice')
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">User Detail</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <tr>
                                        <th>Id</th><td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Surname</th><td>{{$user->surname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th><td>User</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th><td>User</td>
                                    </tr>
                                    <tr>
                                        <th>User Cart</th><td>
                                            <a class="btn btn-outline-primary" href="{{route('admin.user.shopcart',['id'=>$user->id])}}">Shopping Cart List </a>
                                        </td>
                                    </tr>
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