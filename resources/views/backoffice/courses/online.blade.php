@extends('layouts.backoffice')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">Online Course List - Published</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
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
                                        <th>Title</th>
                                        <th>Instructor</th>
                                        <th>Q & A</th>
                                        <th>Pricing</th>
                                        <th>Language</th>
                                        <th>Unpublish</th>
                                        <th>Content</th>
                                        <th>Reviews</th>
                                        <th>Images</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courseList as $course)
                                        <tr class="odd">
                                            <td>{{substr($course->course->title,0,80)}}</td>
                                            <td><a class="btn btn-info" href="{{route('admin.usershow',['userid'=>$course->course->user->id])}}">{{$course->course->user->name}}</a></td>
                                            <td><a class="btn btn-warning" href="{{route('admin.course_questions_page',['courseid'=>$course->course->id])}}">Q&A</a></td>
                                            <td><a class="btn btn-warning" href="{{route('admin.course_price_list',['courseid'=>$course->course->id])}}"><i class="fa-solid fa-hand-holding-dollar fa-fw"></i></a></td>
                                            <td>{{$course->lang}}</td>
                                            <td>
                                                <form id="delete_form{{$course->id}}" action="{{route('admin.course.unpublish',['courseid'=>$course->course->id])}}" method="POST">
                                                    @csrf
                                                    <a class="btn btn-warning" href="javascript:void(0)" onclick="$('#delete_form{{$course->id}}').submit()">UNPUBLISH</a>
                                                </form>
                                            </td>
                                            <td><a class="btn btn-warning" href="
                                            {{route('admin.course_content_page',['courseid'=>$course->course->id])}}
                                            "><i class="fa-solid fa-video"></i></a></td>
                                            <td><a class="btn btn-info" href="
                                            {{route('admin.course.reviews.list',['courseid'=>$course->course->id])}}
                                            ">Reviews</a></td>
                                            <td><a class="btn btn-info" href="
                                            {{route('admin.course.images.list',['courseid'=>$course->course->id])}}
                                            "><i class="fa-solid fa-image"></i></a></td>
                                            <td class="d-flex align-items-center justify-content-between border-0">
                                                <a href="
                                            {{route('admin.course.edit',['courseid'=>$course->course->id])}}"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                                <a href="
                                            {{route('admin.coursedetail',['courseid'=>$course->course->id])}}
                                            "><i class="fa-solid fa-eye fa-lg"></i></a>
                                                <a href="{{route('admin.delete_course',['courseid'=>$course->course->id])}}" onclick="return confirm('Are you sure?')" id="delete-course"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                {{$courseList->links('vendor.pagination.bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
