@extends('layouts.backoffice')
@section('content')
<div class="row" style="margin-top: 80px;">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-sm-12 mb-4">
        <div class="card border-left-primary shadow h-100 p-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-lg font-weight-bold text-primary text-uppercase mb-3">
                            Number of Members</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{$data->user}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-sm-12 mb-4">
        <div class="card border-left-success shadow h-100 p-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-lg font-weight-bold text-success text-uppercase mb-3">
                            Number Of Courses</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{$data->course}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-sm-12 mb-4">
        <div class="card border-left-info shadow h-100 p-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-lg font-weight-bold text-info text-uppercase mb-3">
                            Number Of Comments</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{$data->review}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-sm-12 mb-4">
        <div class="card border-left-warning shadow h-100 p-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-3">
                            Monthly Income</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">$180</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection