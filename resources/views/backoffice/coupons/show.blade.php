@extends('layouts.backoffice')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Discount Percent Detail</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$c->id}}</td>
                                </tr>
                                <tr>
                                    <th>Code</th>
                                    <td>{{$c->name}}</td>
                                </tr>
                                <tr>
                                    <th>Percent</th>
                                    <td>{{$c->discount_percent}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$c->description}}</td>
                                </tr>
                                <tr>
                                    <th>Created By</th>{{-- user link gelecek --}}
                                    <td>{{$c->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$c->status}}</td>
                                </tr>
                                <tr>
                                    <th>This Coupon Used By</th>{{-- user list link gelecek  -kupondan faydalanan kullanıcılar- --}}
                                    <td>User</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$c->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{$c->updated_at}}</td>
                                </tr>
                            </table>
                        
                        </div>
                        <div class="col-sm-12 text-center">
                            <a href="{{route('admin.coupons.index')}}" class="btn btn-primary">Back To Coupons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection