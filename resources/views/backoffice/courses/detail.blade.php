@extends('layouts.backoffice')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Detail</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$course->id}}</td>
                                </tr>
                                <tr>
                                    <th>User</th>
                                    <td>
                                        <a href="#" class="btn btn-info">{{$course->course_owner}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$course->title}}</td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>{{$course->content}}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{$course->slug}}</td>
                                </tr>
                                <tr>
                                    <th>Language</th>
                                    <td>{{$course->lang}}</td>
                                </tr>
                                <tr>
                                    <th>Video</th>
                                    <td>
                                    YAPILACAK  
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>
                                       {{$course->description}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>
                                       {{$course->keywords}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Course Content Id</th>
                                    <td>
                                        <a href="{{$course->content}}"
                                        class="btn btn-warning">CONTENT
                                        </a>
                                        </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$course->status}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>
                                        {{$course->category_id}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>
                                        {{$course->created_at}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Updated at</th>
                                    <td>
                                        {{$course->updated_at}}
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