@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Add Image</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.course.images.store',['courseid'=>$courseid])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input name="description" type="text" class="form-control" id="description">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="order" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                        <input name="order" type="number" class="form-control" id="order">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="status">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <button type="submit" class="btn btn-success ml-3" id="add-image">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Image Gallery (Max 4 Images)</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Course Id</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Act.</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @foreach ($imageList as $image)
                                    <tr class="odd">
                                        <td>{{$image->course->title}}</td>
                                        <td class="d-flex justify-content-center border-0"><img src="{{Storage::url($image->image)}}" width="60px"></td>
                                        <td>{{$image->description}}</td>
                                        <td>{{$image->order}}</td>
                                        <td>{{$image->status}}</td>
                                        <td  class="text-center">
                                            <a href="{{route('admin.course.images.delete',['imageid'=>$image->id])}}" onclick="return confirm('Are you sure?')" id="delete-images"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
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
@endsection