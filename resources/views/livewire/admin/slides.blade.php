<div>

    @if(session()->get('form'))
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">
                  @if(session()->get('status')=='edit') Edit @else Add @endif Slide {{session()->get('edit')}}
            </h3>
        </div>
        <div class="card-body">
            <form @if(session()->get('status')=='edit')  wire:submit.prevent="update" @else wire:submit.prevent="create" @endif enctype="multipart/form-data">

                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input wire:model="image" name="image" type="file" class="form-control" id="image">
                        @error('image') <small class="error">{{ $message }}</small> @enderror

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input wire:model="title" name="title" type="text" class="form-control" id="title">
                        @error('title') <small class="error">{{ $message }}</small> @enderror
                     </div>
                </div>
                <div class="mb-3 row">
                    <label for="subtitle" class="col-sm-2 col-form-label">Sub Title</label>
                    <div class="col-sm-10">
                        <input wire:model="subtitle"   name="subtitle" type="text" class="form-control" id="subtitle">
                        @error('subtitle') <small class="error">{{ $message }}</small> @enderror

                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="priority" class="col-sm-2 col-form-label">Priority</label>
                    <div class="col-sm-10">
                        <input wire:model="priority"  name="priority" type="number" class="form-control" id="priority">
                        @error('priority') <small class="error">{{ $message }}</small> @enderror
                     </div>
                </div>
                <div class="mb-3 row">
                    <label for="btn_text" class="col-sm-2 col-form-label">Button Text</label>
                    <div class="col-sm-10">
                        <input wire:model="button_text"  name="button_text" type="text" class="form-control" id="btn_text">
                        @error('button_text') <small class="error">{{ $message }}</small> @enderror
                     </div>
                </div>
                <div class="mb-3 row">
                    <label for="button_link" class="col-sm-2 col-form-label">Button Link</label>
                    <div class="col-sm-10">
                        <input wire:model="button_link"  name="button_link" type="text" class="form-control" id="button_link">
                        @error('button_link') <small class="error">{{ $message }}</small> @enderror
                     </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select wire:model="status"  name="status" class="form-control" id="status">
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="PENDING" selected>PENDING</option>
                        </select>
                        @error('status') <small class="error">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <a wire:click="toggleForm(null)" class="btn btn-secondary" id="cancel-slides">Cancel</a>
                    @if(session()->get('status')=='edit')
                    <button type="submit" class="btn btn-success ml-3">Update</button>
                    @else
                    <button type="submit" class="btn btn-success ml-3">Save</button>
                    @endif
                    <script>
                        var addSlides = document.querySelector('#add-slides');
                        var cancelSlides = document.querySelector('#cancel-slides');
                        addSlides.addEventListener('click', slideAdd);
                        cancelSlides.addEventListener('click', slideCancel);
                        function slideAdd() {
                            swal("Good job!", "You add the slide!", "success");
                        }
                        function slideCancel() {
                            swal("Slide add cancelled!");
                        }
                    </script>
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
            <h3 class="m-0 font-weight-bold card-title-text">Slide List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a  wire:click="toggleForm('create')" class="btn btn-primary btn-large card-btn">Add Slide</a>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                                        <th>Id</th>
                                        <th>Creator</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Button Text</th>
                                        <th>Button Link</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slides as $slide)
                                    <tr class="odd">
                                        <td>{{$slide->id}}</td>
                                        <td>{{$slide->owner->name}}</td>
                                        <td><img src="{{Storage::url($slide->image)}}" width="100"></td>
                                        <td>{{$slide->title}}</td>
                                        <td>{{$slide->subtitle}}</td>
                                        <td>{{$slide->button_text}}</td>
                                        <td>{{$slide->button_link}}</td>
                                        <td>{{$slide->priority}}</td>
                                        <td>{{$slide->status}}</td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a  ><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="{{route('admin.slideshow',['slideid'=>3])}}"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a wire:click="deleteConfirm({{$slide->id}})" id="delete-slides"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            {{$slides->links('vendor.pagination.custom')}}
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
