@extends('layouts.backoffice')
@section('content')
       <!-- Begin Page Content -->
   <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Questions</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a href="{{route('admin.course_content_page',['courseid'=>$courseid])}}" class="btn btn-primary btn-large card-btn">Back to Course</a>
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
                                        <th>Question</th>
                                        <th>Asked By</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($questionList as $question)
                                    <tr class="odd">
                                        <td>{{substr($question->question,0,200)}}</td>
                                        <td><a class="btn btn-warning" href="
                                            {{route('admin.usershow',['userid'=>$question->user_id])}}
                                            ">{{$question->user->name}}</a></td>
                                        <td>{{$question->status}}</td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="
                                            {{route('admin.course_questions_detail',['courseid'=>$question->course_id,'questionid'=>$question->id])}}
                                            "><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="{{route('admin.delete_course_qa',['questionid'=>$question->id])}}" onclick="return confirm('Are you sure?')" id="delete-course"><i class="fas fa-trash fa-lg text-danger"></i></a>
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