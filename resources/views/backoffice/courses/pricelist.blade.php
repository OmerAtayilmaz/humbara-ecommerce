@extends('layouts.backoffice')
@section('content')
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Add Price</h3>
        </div>
        <div class="card-body">
            <form  action="{{route("admin.course_price_update",['priceid'=>$price->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">id</label>
                    <div class="col-sm-10">
                        <input value="{{$price->id}}" name="id" type="text" class="form-control" id="id">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="course_id" class="col-sm-2 col-form-label">Course Title</label>
                    <div class="col-sm-10">
                        <input value="{{$price->course->title}}" name="course_id" type="text" class="form-control" id="course_id">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cheap_pr_title" class="col-sm-2 col-form-label">Cheap Pr Title</label>
                    <div class="col-sm-10">
                        <input  value="{{$price->cheap_pr_title}}"  name="cheap_pr_title" type="text" class="form-control" id="cheap_pr_title">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cheap_price" class="col-sm-2 col-form-label">Cheap Price</label>
                    <div class="col-sm-10">
                        <input value="{{$price->cheap_price}}" name="cheap_price" type="text" class="form-control" id="cheap_price">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="expensive_pr_title" class="col-sm-2 col-form-label">Expensive Price Title</label>
                    <div class="col-sm-10">
                        <input value="{{$price->expensive_pr_title}}" name="expensive_pr_title" type="text" class="form-control" id="expensive_pr_title">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="expensive_price" class="col-sm-2 col-form-label">Expensive Price</label>
                    <div class="col-sm-10">
                        <input value="{{$price->expensive_price}}" name="expensive_price" type="text" class="form-control" id="expensive_price">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="campains" class="col-sm-2 col-form-label">Campains</label>
                    <div class="col-sm-10">
                        <input value="{{$price->campains}}" name="campains" type="text" class="form-control" id="campains">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="campains_price" class="col-sm-2 col-form-label">Campains Price</label>
                    <div class="col-sm-10">
                        <input value="{{$price->campains_price}}" name="campains_price" type="text" class="form-control" id="campains_price">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select name="type" class="form-control" id="status">
                            <option value="INACTIVE" @if($price->type=='CAMPAINS') selected @endif>Campanyalı Fiyat</option>
                            <option value="OFF" @if($price->type=='OFF') selected @endif>İndirimli Fiyat</option>
                            <option value="NORMAL" @if($price->type=='NORMAL') selected @endif>Normal Fiyat</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="status">
                            <option value="INACTIVE" @if($price->status=='INACTIVE') selected @endif>Inactive</option>
                            <option value="ACTIVE" @if($price->status=='ACTIVE') selected @endif>Active</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <button type="submit" class="btn btn-success ml-3" id="add-faq">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection