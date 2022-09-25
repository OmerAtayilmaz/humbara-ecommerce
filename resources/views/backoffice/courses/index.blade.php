@extends('layouts.backoffice')
@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a href="{{route('admin.createcourse')}}" class="btn btn-primary btn-large card-btn">Add Course</a>
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
                                        <th>Title</th>
                                        <th>Instructor</th>
                                        <th>Q & A</th>
                                        <th>Pricing</th>
                                        <th>Language</th>
                                        <th>Content</th>
                                        <th>Reviews</th>
                                        <th>Images</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courseList as $course)
                                    <tr class="odd">
                                        <td>{{substr($course->title,0,80)}}</td>
                                        <td><a class="btn btn-info" href="{{route('admin.usershow',['userid'=>$course->user->id])}}">{{$course->user->name}}</a></td>
                                        <td><a class="btn btn-warning" href="
                                            {{route('admin.course_questions_page',['courseid'=>$course->id])}}
                                            ">Q&A</a></td>
                                        <td><a class="btn btn-warning" href="
                                            {{route('admin.course_price_list',['courseid'=>$course->id])}}
                                            ">Pricing</a></td>
                                        <td>{{$course->lang}}</td>
                                        <td><a class="btn btn-warning" href="
                                            {{route('admin.course_content_page',['courseid'=>$course->id])}}
                                            "><i class="fa-solid fa-video"></i></i></a></td>
                                        <td><a class="btn btn-info" href="
                                            {{route('admin.course.reviews.list',['courseid'=>$course->id])}}
                                            ">Reviews</a></td>
                                        <td><a class="btn btn-info" href="
                                            {{route('admin.course.images.list',['courseid'=>$course->id])}}
                                            "><i class="fa-solid fa-image"></i></a></td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="
                                            {{route('admin.edit_course',['courseid'=>$course->id])}}"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="
                                            {{route('admin.coursedetail',['courseid'=>$course->id])}}
                                            "><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="{{route('admin.delete_course',['courseid'=>$course->id])}}" onclick="return confirm('Are you sure?')" id="delete-course"><i class="fas fa-trash fa-lg text-danger"></i></a>
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
<!-- /.container-fluid -->
@endsection