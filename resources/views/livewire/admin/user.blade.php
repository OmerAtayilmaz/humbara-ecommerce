<div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">User List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="input-group">
                                <input wire:model="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary search-nav" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                             <label class="p-2" for="limit">Limit:</label>
                                <input id="limit" wire:model="limit" type="number" min="1" class="form-control bg-light border-0 small" placeholder="Limit: " aria-label="Search" aria-describedby="basic-addon2">
                               
                            </div>
                        </div>
                        <div class="col-sm-12">   
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Roles</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($userList)<=0)
                                    <tr>
                                        <td colspan="7">No users found</td>
                                    </tr>
                                @else
                                    @foreach($userList as $user)
                                    <tr class="odd">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->surname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->email_verified_at?"Active":"Unconfirmed"}}</td>
                                        <td>
                                            user 
                                            <a href="{{route('admin.userroles',['userid'=>2])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=600')">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </a>
                                        </td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="user-edit.html"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="{{route('admin.usershow',['userid'=>2])}}"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="#" id="delete-user"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                </div>
                    </div>
                        <div class="row justify-content-center">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
