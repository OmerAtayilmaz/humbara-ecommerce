<div>
     <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Content -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Message List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <input wire:model="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary search-nav" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contactMessagesList as $message)
                                    <tr class="odd">
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{substr($message->message,0,25)}}</td>
                                        <td>{{$message->status}}</td>
                                        <td class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('admin.contactmessages.show',['messageid'=>$message->id])}}"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a wire:click="deleteConfirm('{{$message->id}}')"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                           {{$contactMessagesList->links('vendor.pagination.custom')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@section('bottom-scripts')
@include('backoffice.messages.swal2')
@endsection
</div>
