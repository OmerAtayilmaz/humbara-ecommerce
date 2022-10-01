@extends('layouts.backoffice')
@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Message Detail</h3>
        </div>
        <div class="card-body">
            <a href="{{route('admin.contactmessages')}}" class="btn btn-info my-3">Back to Contact Messages List</a>
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$message->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>{{$message->name}}</td>
                                </tr>
                                <tr>
                                    <th>IP Address</th><td>{{$message->ip_address}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{$message->email}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th><td>{{$message->status}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th><td>{{$message->message}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th><td>{{$message->created_at}}</td>
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