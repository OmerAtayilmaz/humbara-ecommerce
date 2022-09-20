@extends('layouts.backoffice')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">Add Theme</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3 row">
                        <label for="themeName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="course_id" type="number" class="form-control" id="themeName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themePrimary" class="col-sm-2 col-form-label">Primary</label>
                        <div class="col-sm-10">
                            <input name="primary" type="color" value="#000" class="form-control" id="themePrimary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeSecondary" class="col-sm-2 col-form-label">Secondary</label>
                        <div class="col-sm-10">
                            <input name="secondary" type="color" value="#000" class="form-control" id="themeSecondary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeDark" class="col-sm-2 col-form-label">Dark</label>
                        <div class="col-sm-10">
                            <input name="dark" type="color" value="#000" class="form-control" id="themeDark">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeLightblack" class="col-sm-2 col-form-label">Lightblack</label>
                        <div class="col-sm-10">
                            <input name="lightblack" type="color" value="#000" class="form-control" id="themeLightblack">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control" id="themeStatus">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <a href="#" class="btn btn-secondary" id="cancel-theme">Cancel</a>
                        <a href="#" class="btn btn-success ml-3" id="add-theme">Add</a>
                        <script>
                            var addTheme = document.querySelector('#add-theme');
                            var cancelTheme = document.querySelector('#cancel-theme');
                            addTheme.addEventListener('click', themeAdd);
                            cancelTheme.addEventListener('click', themeCancel);
                            function themeAdd() {
                                swal("Good job!", "You add the theme!", "success");
                            }
                            function themeCancel() {
                                swal("Theme add cancelled!");
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Theme List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a href="theme-add.html" class="btn btn-primary btn-large card-btn">Add Theme</a>
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
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Primary</th>
                                        <th>Secondary</th>
                                        <th>Dark</th>
                                        <th>Lightblack</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>2</td>
                                        <td>Garrett</td>
                                        <td>Primary</td>
                                        <td>Secondary</td>
                                        <td>Dark</td>
                                        <td>Lightblack</td>
                                        <td>Status</td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="theme-edit.html"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="theme-show.html"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="#" id="delete-theme"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                        <script>
                                            var alert = document.querySelector('#delete-theme');
                                            alert.addEventListener('click', createAlert);
                                            function createAlert() {
                                                swal({
                                                        title: "Are you sure?",
                                                        text: "Once deleted, you will not be able to recover this theme!",
                                                        icon: "warning",
                                                        buttons: true,
                                                        dangerMode: true,
                                                })
                                                .then((willDelete) => {
                                                    if (willDelete) {
                                                        swal("Poof! Your theme has been deleted!", {
                                                        icon: "success",
                                                        });
                                                    } else {
                                                        swal("Your theme is safe!");
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
@endsection