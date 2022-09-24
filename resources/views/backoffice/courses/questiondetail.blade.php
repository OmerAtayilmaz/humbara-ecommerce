@extends('layouts.backoffice')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Question Detail</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a class="btn btn-warning" href="
                                            {{route('admin.course_questions_page',['courseid'=>$courseid])}}
                                            ">Course Q&A List</a>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$question->id}}</td>
                                </tr>
                                <tr>
                                    <th>Asked by</th>
                                    <td>
                                        <a class="btn btn-warning" href="
                                        {{route('admin.usershow',['userid'=>$question->user_id])}}
                                        ">{{$question->user->name}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Question</th>
                                    <td>{{$question->question}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$question->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{$question->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated at</th>
                                    <td>{{$question->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Video</th>
                                    <td>
                                    YAPILACAK  
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection