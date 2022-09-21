<div class="lw-faq__container">
    @if(session()->get('form'))
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">
                    @if(session()->get('status')=='edit') Edit @else Add @endif FAQ {{session()->get('edit')}}
                </h3>
            </div>
            <div class="card-body">
                <form  @if(session()->get('status')=='edit')  wire:submit.prevent="update" @else wire:submit.prevent="create" @endif>
                    <div class="mb-3 row">
                        <label for="faqInputQuestion" class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-10">
                            <input wire:model="question" name="question" type="text" class="form-control" id="faqInputQuestion">
                            @error('question') <small class="error">{{ $message }}</small> @enderror
                        </div>
                     
                    </div>
                    <div class="mb-3 row">
                        <label for="inputAnswer" class="col-sm-2 col-form-label">Answer</label>
                        <div class="col-sm-10">
                            <textarea  wire:model="answer" id="editor" name="answer" rows="4" cols="100" class="form-control" ></textarea>
                            @error('answer') <small class="error">{{ $message }}</small> @enderror

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="faqInputStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select wire:model="status" name="status" class="form-control" id="faqInputStatus">
                                <option selected="selected" value="INACTIVE">Choose Status</option>
                                <option value="ACTIVE">Active</option>
                                <option value="INACTIVE">Inactive</option>
                            </select>
                           
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="faqInputQuestion" class="col-sm-2 col-form-label">Priority</label>
                        <div class="col-sm-10">
                            <input wire:model="priority" name="priortiy" type="number" class="form-control" id="faqInputQuestion">
                            @error('question') <small class="error">{{ $message }}</small> @enderror
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
    <div class="container-fluid">
            <!-- Page Content -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3  class="m-0 font-weight-bold card-title-text">FAQ List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-4">
                                    <a  wire:click="toggleForm('create')" class="btn btn-primary btn-large card-btn">Add FAQ</a>
                                </div>
                                <div class="col-sm-12 col-md-6 mb-4">
                                    <div class="input-group">
                                        <input type="text" wire:model="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                                                <th>Priority</th>
                                                <th>Question</th>
                                                <th>User Id</th>
                                                <th>Status</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $faq)
                                            <tr class="odd">
                                                <td>{{$faq->priority}}</td>
                                                <td>{{strlen($faq->question)>40?substr($faq->question,0,40). "...":$faq->question}}</td>
                                                <td>{{$faq->user->name}}</td>
                                                <td>{{$faq->status}}</td>
                                            
                                                <td class="d-flex align-items-center justify-content-between border">
                                                    <a wire:click="edit('{{$faq->id}}')"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                                    <a href="{{route('admin.faqshow',['id'=>$faq->id])}}"><i class="fa-solid fa-eye fa-lg"></i></a>
                                                    <a wire:click="deleteConfirm({{$faq->id}})" id="delete-faq"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           

                            <div class="row justify-content-center">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    {{$data->links('vendor.pagination.custom')}}
                                    {{-- <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    @section('bottom-scripts')
        @include('backoffice.messages.swal2')
    @endsection
</div>
