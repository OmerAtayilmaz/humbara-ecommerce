<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Add Course</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.course.featured.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="courseInputStatus" class="col-sm-2 col-form-label">Course Language</label>
                    <div class="col-sm-10">
                        <select name="course_id" class="form-control" id="courseInputStatus">
                            <option selected="selected" value="TR">Choose Language</option>
                            @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputKeyword" class="col-sm-2 col-form-label">Priority</label>
                    <div class="col-sm-10">
                        <input name="priority" type="number" class="form-control" id="courseInputKeyword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInputStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="courseInputStatus">
                            <option selected="selected" value="TR">Choose Language</option>
                            <option value="active" >Active</option>
                            <option value="inactive" selected>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <button type="submit" class="btn btn-success ml-3" id="add-course">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
