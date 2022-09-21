<div>
    @if(session()->get('form'))
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold card-title-text">
                    @if(session()->get('status')=='edit') Edit @else Add @endif Lesson {{session()->get('edit')}}
                    </h3>
                </div>
                <div class="card-body">
                    <form @if(session()->get('status')=='edit')  wire:submit.prevent="update" @else wire:submit.prevent="create" @endif>
                        <div class="mb-3 row">
                            <label for="lessontitle" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input wire:model="title" name="title" type="text" class="form-control" id="lessontitle">
                                @error('title') <small class="error">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="order" class="col-sm-2 col-form-label">Order</label>
                            <div class="col-sm-10">
                                <input wire:model="priority" name="order" type="text" class="form-control" id="order">
                                @error('priority') <small class="error">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="video_url" class="col-sm-2 col-form-label">video_url</label>
                            <div class="col-sm-10">
                                <input wire:model="video_url" name="video_url" type="text" class="form-control" id="video_url">
                                @error('video_url') <small class="error">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="video_subtitle" class="col-sm-2 col-form-label">video_subtitle</label>
                            <div class="col-sm-10">
                                <input wire:model="video_subtitle" name="video_subtitle" type="text" class="form-control" id="video_subtitle">
                                @error('video_subtitle') <small class="error">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="videoInputStatus" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select wire:model="status" name="status" class="form-control" id="videoInputStatus">
                                    <option selected value="ACTIVE">Active</option>
                                    <option value="INACTIVE">Inactive</option>
                                </select>
                                @error('status') <small class="error">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row justify-content-center">
                            @if(session()->get('status')=='edit')
                                <button type="submit" class="btn btn-success ml-3">Update</button>
                            @else
                                <button type="submit" class="btn btn-success ml-3">Save</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Content List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a wire:click="toggleForm('create')" class="btn btn-primary btn-large card-btn">Add Course Content</a>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"  wire:model="search">
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
                                        <th>Lesson Title</th>
                                        <th>Title</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courseContent as $lesson)
                                        <tr class="odd">
                                            <td>{{$lesson->title}}    </td>
                                            <td>{{$lesson->video_url}}</td>
                                            <td>{{$lesson->priority}} </td>
                                            <td>{{$lesson->status}}   </td>
                                            <td class="d-flex align-items-center justify-content-between border">
                                                <a wire:click="edit('{{$lesson->id}}')"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                                <a wire:click="deleteConfirm({{$lesson->id}})" id="delete-faq"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            {{$courseContent->links('vendor.pagination.custom')}}
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
