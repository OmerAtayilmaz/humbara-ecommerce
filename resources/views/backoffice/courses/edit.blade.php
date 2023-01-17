@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Edit Course</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.course.update',['courseid'=>$course->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="courseInputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input name="title" value="{{$course->title}}" type="text" class="form-control" id="courseInputTitle">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputKeyword" class="col-sm-2 col-form-label">Keywords</label>
                    <div class="col-sm-10">
                        <input name="keywords" value="{{$course->keywords}}"  type="text" class="form-control" id="courseInputKeyword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input  name="description" class="form-control" value="{{$course->description}}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputVideo" class="col-sm-2 col-form-label">Intro Video URL</label>
                    <div class="col-sm-10">
                        <input name="video_url" value="{{$course->video_url}}" type="text" class="form-control" id="courseInputVideo">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputTitle" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea id="editor"  name="content"  type="text" class="form-control" id="courseInputcontent">{{$course->content}}</textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputCategoryId" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-10">
                        <input name="category_id" value="{{$course->category_id}}" type="number" class="form-control" id="courseInputCategoryId">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="courseInputStatus">
                            <option value="INACTIVE" @if($course->status=='INACTIVE') selected @endif>Inactive</option>
                            <option value="ACTIVE" @if($course->status=='ACTIVE') selected @endif>Active</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputStatus" class="col-sm-2 col-form-label">Course Language</label>
                    <div class="col-sm-10">
                        <select name="lang" class="form-control" id="courseInputStatus">
                            <option value="TR"   @if($course->lang=='TR') selected @endif>Turkish</option>
                            <option value="EN"   @if($course->lang=='EN') selected @endif>English</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <a href="{{route('admin.courses')}}" class="btn btn-secondary" id="cancel-course">Cancel</a>
                    <button type="submit" class="btn btn-success ml-3" id="add-course">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
