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
            <form @if(session()->get('status')=='edit')  wire:submit.prevent="update" @else wire:submit.prevent="create" @endif>
              
                <div class="mb-3 row">
                    <label for="slideImage" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" type="file" class="form-control" id="slideImage">
                        @error('question') <small class="error">{{ $message }}</small> @enderror

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="slideTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="slideTitle">
                        @error('question') <small class="error">{{ $message }}</small> @enderror
                     </div>
                </div>
                <div class="mb-3 row">
                    <label for="slideKeyword" class="col-sm-2 col-form-label">Keywords</label>
                    <div class="col-sm-10">
                        <input name="keywords" type="text" class="form-control" id="slideKeyword">
                        @error('question') <small class="error">{{ $message }}</small> @enderror

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputQuestion" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea id="editor" name="description" rows="4" cols="50" class="form-control"></textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                       @error('question') <small class="error">{{ $message }}</small> @enderror

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="slidePriorty" class="col-sm-2 col-form-label">Priority</label>
                    <div class="col-sm-10">
                        <select name="priority" class="form-control" id="slidePriorty">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                        @error('question') <small class="error">{{ $message }}</small> @enderror

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="slideStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="slideStatus">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                        @error('question') <small class="error">{{ $message }}</small> @enderror

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
                                        <th>User Id</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>1</td>
                                        <td>Accountant</td>
                                        <td><img src="..." alt=""></td>
                                        <td>Admin</td>
                                        <td>Admin</td>
                                        <td>Admin</td>
                                        <td>Admin</td>
                                        <td>Admin</td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="slides-edit.html"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="slides-show.html"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="#" id="delete-slides"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                        <script>
                                            var deleteSlide = document.querySelector('#delete-slides');
                                            deleteSlide.addEventListener('click', deleteItem);
                                            function deleteItem() {
                                                swal({
                                                        title: "Are you sure?",
                                                        text: "Once deleted, you will not be able to recover this slide!",
                                                        icon: "warning",
                                                        buttons: true,
                                                        dangerMode: true,
                                                })
                                                .then((willDelete) => {
                                                    if (willDelete) {
                                                        swal("Poof! Your slide has been deleted!", {
                                                        icon: "success",
                                                        });
                                                    } else {
                                                        swal("Your slide is safe!");
                                                    }
                                                });
                                            }
                                        </script>
                                    </tr>
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
<!-- /.container-fluid -->
</div>
