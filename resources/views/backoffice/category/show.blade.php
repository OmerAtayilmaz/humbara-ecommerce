@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Content -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Category Detail</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th><td>{{$category->id}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th><td><img src="..."></td>
                                </tr>
                                <tr>
                                    <th>Category</th><td>{{$category->parent_id}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th><td>{{$category->title_tr}}</td>
                                </tr>
                                <tr>
                                    <th>Keyword</th><td>{{$category->keywords_tr}}</td>
                                </tr>
                                <tr>
                                    <th>User Id</th><td>{{$category->creator_id}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th><td>{{$category->status}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- /.container-fluid -->
@endsection