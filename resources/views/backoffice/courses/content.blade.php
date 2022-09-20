@extends('layouts.backoffice')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Add Course Content</h3>
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3 row">
                    <label for="courseContentCourseId" class="col-sm-2 col-form-label">Course Id</label>
                    <div class="col-sm-10">
                        <input name="course_id" type="number" class="form-control" id="courseContentCourseId">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea id="editor" name="content" rows="4" cols="50" class="form-control"></textarea>
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
                    <label for="courseContentOrder" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                        <input name="order" type="text" class="form-control" id="courseContentOrder">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="courseContentStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="courseContentStatus">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <a href="#" class="btn btn-secondary" id="cancel-course-content">Cancel</a>
                    <a href="#" class="btn btn-success ml-3" id="add-course-content">Update</a>
                    <script>
                        var addCourse = document.querySelector('#add-course-content');
                        var cancelCourse = document.querySelector('#cancel-course-content');
                        addCourse.addEventListener('click', addItem);
                        cancelCourse.addEventListener('click', cancelItem);
                        function addItem() {
                            swal("Good job!", "You add the course content!", "success");
                        }
                        function cancelItem() {
                            swal("Course content add cancelled!");
                        }
                    </script>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Content List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a href="course-content-add.html" class="btn btn-primary btn-large card-btn">Add Course Content</a>
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
                                        <th>Course Title</th>
                                        <th>Title</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>3D Model</td>
                                        <td>All brush types</td>
                                        <td>4</td>
                                        <td>ACTIVE</td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="course-content-edit.html"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="course-content-show.html"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="#" id="delete-course-content"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                        <script>
                                            var finishedAlert = document.querySelector('#delete-course-content');
                                            finishedAlert.addEventListener('click', deleteAlert);
                                            function deleteAlert() {
                                                swal({
                                                        title: "Are you sure?",
                                                        text: "Once deleted, you will not be able to recover this course content!",
                                                        icon: "warning",
                                                        buttons: true,
                                                        dangerMode: true,
                                                })
                                                .then((willDelete) => {
                                                    if (willDelete) {
                                                        swal("Poof! Your course content has been deleted!", {
                                                        icon: "success",
                                                        });
                                                    } else {
                                                        swal("Your finished course is safe!");
                                                    }
                                                });
                                            }
                                        </script>
                                    </tr>
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