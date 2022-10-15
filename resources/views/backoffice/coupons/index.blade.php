@extends('layouts.backoffice')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Discount Percent List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <a href="{{route('admin.coupons.create')}}" class="btn btn-primary btn-large card-btn">Add Discount Percent</a>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>Discount Percent</th>
                                        <th>Status</th>
                                        <th>Used By</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cList as $c)
                                    <tr class="odd">
                                        <td>{{$c->name}}</td>
                                        <td>{{$c->description}}</td>
                                        <td>%{{$c->discount_percent}}</td>
                                        <td>{{$c->status}}</td>
                                        <td>{{$c->user->name}}</td>
                                        <td class="d-flex align-items-center justify-content-between border-0">
                                            <a href="{{route('admin.coupons.edit',['id'=>$c->id])}}"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                            <a href="{{route('admin.coupons.show',['id'=>$c->id])}}"><i class="fa-solid fa-eye fa-lg"></i></a>
                                            <a href="{{route('admin.coupons.delete',['id'=>$c->id])}}" id="delete-discountPercent"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
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