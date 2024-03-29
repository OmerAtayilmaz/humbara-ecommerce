@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Slide Show Detail</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th><td>1</td>
                                </tr>
                                <tr>
                                    <th>User Id</th><td>1</td>
                                </tr>
                                <tr>
                                    <th>Image</th><td><img src="..." alt=""></td>
                                </tr>
                                <tr>
                                    <th>Title</th><td>User</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th><td>User</td>
                                </tr>
                                <tr>
                                    <th>Description</th><td>User</td>
                                </tr>
                                <tr>
                                    <th>Priority</th><td>User</td>
                                </tr>
                                <tr>
                                    <th>Status</th><td>User</td>
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