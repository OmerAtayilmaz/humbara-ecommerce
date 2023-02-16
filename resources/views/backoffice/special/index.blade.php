@extends('layouts.backoffice')
@section('content')
    @include("backoffice.special.show",['courses'=>$online_courses])
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">{{$page_title}}</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-4">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary search-nav" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                       cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                       style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th>Course Title</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courses as $item)
                                        <tr class="odd">
                                            <td>{{substr($item->course->title,0,80)}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->updated_at}}</td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('admin.course.special.destroy',['id'=>$item->id])}}"
                                                   onclick="return confirm('are you sure?')"><i
                                                        class="fas fa-trash fa-lg text-danger"></i></a>
                                                <a class="btn btn-warning"
                                                   href="{{route('admin.course.special.update',['id'=>$item->id])}}">Update
                                                    Status</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                              {{$courses->links('vendor.pagination.bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
