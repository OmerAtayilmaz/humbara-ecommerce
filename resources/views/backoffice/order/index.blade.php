@extends('layouts.backoffice')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">Order Course List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="orderCourse-add.html" class="btn btn-primary btn-large card-btn">Add Order Course</a>
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
                                            <th>User Id</th>
                                            <th>Order Id</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Ip</th>
                                            <th>Note</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td>1</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>Admin</td>
                                            <td>Admin</td>
                                            <td>Admin</td>
                                            <td>Tokyo</td>
                                            <td>Tokyo</td>
                                            <td>Tokyo</td>
                                            <td>Tokyo</td>
                                            <td class="d-flex align-items-center justify-content-between border-0">
                                                <a href="orderCourse-edit.html"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                                <a href="orderCourse-show.html"><i class="fa-solid fa-eye fa-lg"></i></a>
                                                <a href="#" id="delete-orderCourse"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                            </td>
                                            <script>
                                                var deleteOrderCourse = document.querySelector('#delete-orderCourse');
                                                deleteOrderCourse.addEventListener('click', deleteItem);
                                                function deleteItem() {
                                                    swal({
                                                            title: "Are you sure?",
                                                            text: "Once deleted, you will not be able to recover this order course!",
                                                            icon: "warning",
                                                            buttons: true,
                                                            dangerMode: true,
                                                    })
                                                    .then((willDelete) => {
                                                        if (willDelete) {
                                                            swal("Poof! Your order course has been deleted!", {
                                                            icon: "success",
                                                            });
                                                        } else {
                                                            swal("Your order course is safe!");
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