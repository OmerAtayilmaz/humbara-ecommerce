<div>      
     
    @if(session()->has('CREATE_CATEGORY'))
     
                <form wire:submit.prevent="save"  class="p-5">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name="parent_id" class="form-control" id="categoryInput">
                                <option selected="selected">Main Category</option>
                                @if(count($categoryList)<=0)
                                    @foreach($categoryList as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                @endif
    
                            </select>
                            @error('parent_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input wire:model="image" type="file" class="form-control" id="image">
                            @error('image') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="title_en" class="col-sm-2 col-form-label">Title En</label>
                        <div class="col-sm-10">
                            <input wire:model="title_en"   type="text" class="form-control" id="title_en">
                            @error('title_en') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="title_tr" class="col-sm-2 col-form-label">Title Tr</label>
                        <div class="col-sm-10">
                            <input wire:model="title_tr"   type="text" class="form-control" id="title_tr">
                            @error('title_tr') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="keywords_en" class="col-sm-2 col-form-label">Keyword En</label>
                        <div class="col-sm-10">
                            <input wire:model="keywords_en" type="text" class="form-control" id="keywords_en">
                            @error('keywords_en') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="keywords_tr" class="col-sm-2 col-form-label">Keyword TR</label>
                        <div class="col-sm-10">
                            <input wire:model="keywords_tr" type="text" class="form-control" id="keywords_tr">
                            @error('keywords_tr') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Description_en</label>
                        <div class="col-sm-10">
                            <textarea wire:model="description_en" id="editor" name="answer" rows="4" cols="50" class="form-control"></textarea>
                            @error('description_en') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Description_tr</label>
                        <div class="col-sm-10">
                            <textarea wire:model="description_tr" id="editor" name="answer" rows="4" cols="50" class="form-control"></textarea>
                            @error('description_tr') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select wire:model="status" name="status" class="form-control" id="status">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                    </div>
                    <a wire:click="create" class="btn btn-success btn-large card-btn w-100">Save</a>
                </form>
    @endif
   
     <!-- Page Content -->
     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Category List</h3>
        </div>
        
        <div class="card-body">
            <div class="col-sm-12 col-md-6 mb-4">
                <a wire:click="showPanel" class="btn btn-primary btn-large card-btn">Create Panel</a>
            </div>
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row p-3">
                       
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
                                        <th>Image</th>
                                        <th>Parent</th>
                                        <th>Title EN</th>
                                        <th>Title TR</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($categoryList)<=0)
                                    <tr class="odd text-center">
                                        <td colspan="8">NO DATA</td>
                                    </tr>
                                    @else
                                        @foreach($categoryList as $category)
                                        <tr class="odd">
                                            <td>{{$category->id}}</td>
                                            <td><img src="{{Storage::url($category->image_path)}}" width="60"></td>
                                            <td>{{$category->parent_id}}</td>
                                            <td>{{$category->title}}</td>

                                            <td>{{$category->user->name}}</td>
                                            <td>{{$category->status}}</td>
                                            <td class="d-flex align-items-center justify-content-between">
                                                <a href="category-edit.html"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                                <a href="category-show.html"><i class="fa-solid fa-eye fa-lg"></i></a>
                                                <a href="#" id="delete-category"><i class="fas fa-trash fa-lg text-danger"></i></a>
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
    <script>
       /*  var alertCategory = document.querySelector('#delete-category');
        alertCategory.addEventListener('click', categoryDelete);
        function categoryDelete() {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this category!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your category has been deleted!", {
                    icon: "success",
                    });
                } else {
                    swal("Your category is safe!");
                }
            });
        }
        
   
        var addCategory = document.querySelector('#add-category');
        var cancelCategory = document.querySelector('#cancel-category');
        addCategory.addEventListener('click', addItem);
        cancelCategory.addEventListener('click', cancelItem);
        function addItem() {
            swal("Good job!", "You add the category!", "success");
        }
        function cancelItem() {
            swal("Category add cancelled!");
        }
 */
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
</div>
