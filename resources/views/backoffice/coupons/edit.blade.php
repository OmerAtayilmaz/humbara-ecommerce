@extends('layouts.backoffice')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold card-title-text">Edit Discount Percent</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.coupons.update',['id'=>$c->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-10">
                                        <input name="name" value="{{$c->name}}" type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="discountPercentPercent" class="col-sm-2 col-form-label">Percent</label>
                                    <div class="col-sm-10">
                                        <input name="discount_percent" value="{{$c->discount_percent}}" type="number" class="form-control" id="discountPercentPercent">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input name="description" value="{{$c->description}}" type="text" class="form-control" id="description">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="discountPercentStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control" id="discountPercentStatus">
                                            @if($c->status='inactive') <option selected="inactive">Inactive</option> @endif
                                            @if($c->status='active') <option selected="active">Active</option> @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <button type="submit" class="btn btn-success ml-3" id="add-discount-percent">Add</button>
                                    <a href="{{route('admin.coupons.index')}}" class="btn btn-info ml-3" id="add-discount-percent">Back Coupons List</a href="{{route('admin.coupons.index')}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection