@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Add Course</h3>
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3 row">
                    <label for="courseInputUserId" class="col-sm-2 col-form-label">User Id</label>
                    <div class="col-sm-10">
                        <input name="user_id" type="number" class="form-control" id="courseInputUserId">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="courseInputTitle">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputImage" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" type="file" class="form-control" id="courseInputImage">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputVideo" class="col-sm-2 col-form-label">Video</label>
                    <div class="col-sm-10">
                        <input name="video" type="file" class="form-control" id="courseInputVideo">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="courseInputTitle">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea id="editor" name="description" rows="4" cols="50" class="form-control"></textarea>
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
                    <label for="courseInputKeyword" class="col-sm-2 col-form-label">Keyword</label>
                    <div class="col-sm-10">
                        <input name="keyword" type="text" class="form-control" id="courseInputKeyword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputCourseContentId" class="col-sm-2 col-form-label">Course Content Id</label>
                    <div class="col-sm-10">
                        <input name="course_content_id" type="number" class="form-control" id="courseInputCourseContentId">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="courseInputStatus">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputCategoryId" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-10">
                        <input name="category_id" type="number" class="form-control" id="courseInputCategoryId">
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <a href="#" class="btn btn-secondary" id="cancel-course">Cancel</a>
                    <a href="#" class="btn btn-success ml-3" id="add-course">Add</a>
                    <script>
                        var addCourse = document.querySelector('#add-course');
                        var cancelCourse = document.querySelector('#cancel-course');
                        addCourse.addEventListener('click', addItem);
                        cancelCourse.addEventListener('click', cancelItem);
                        function addItem() {
                            swal("Good job!", "You add the course!", "success");
                        }
                        function cancelItem() {
                            swal("Course add cancelled!");
                        }
                    </script>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection