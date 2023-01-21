<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Add Course</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.course.special.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="category" value="all-course"/>
                <div class="mb-3 row">
                    <label for="courseInputStatus" class="col-sm-2 col-form-label">Course</label>
                    <div class="col-sm-10">
                        <select name="course_id" class="form-control" id="courseInputStatus">
                            @foreach($courses as $c)
                                <option value="{{$c->course->id}}">{{$c->course->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="priority" class="col-sm-2 col-form-label">Priority</label>
                    <div class="col-sm-10">
                        <input name="priority" type="number" class="form-control" id="priority">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseInput" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="courseInput">
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
