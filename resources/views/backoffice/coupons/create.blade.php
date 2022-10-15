@extends('layouts.backoffice')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold card-title-text">Add Discount Percent</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.coupons.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-10">
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="discountPercentPercent" class="col-sm-2 col-form-label">Percent</label>
                                    <div class="col-sm-10">
                                        <input name="discount_percent" type="number" class="form-control" id="discountPercentPercent">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input name="description" type="text" class="form-control" id="description">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="discountPercentStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control" id="discountPercentStatus">
                                            <option selected="inactive">Inactive</option>
                                            <option value="active">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <button type="submit" href="#" class="btn btn-success ml-3" id="add-discount-percent">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection