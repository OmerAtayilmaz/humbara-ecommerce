@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Top Banner</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.banner.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="text_tr" class="col-sm-2 col-form-label">Text Tr</label>
                    <div class="col-sm-10">
                        <input name="text_tr" value="{{$topBanner->text_tr}}" type="text" class="form-control" id="text_tr">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="text_en" class="col-sm-2 col-form-label">Text En</label>
                    <div class="col-sm-10">
                        <input name="text_en" value="{{$topBanner->text_en}}" type="text" class="form-control" id="text_en">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="title_tr" class="col-sm-2 col-form-label">Title Tr</label>
                    <div class="col-sm-10">
                        <input name="title_tr" value="{{$topBanner->title_tr}}" type="text" class="form-control" id="title_tr">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="title_en" class="col-sm-2 col-form-label">Title En</label>
                    <div class="col-sm-10">
                        <input name="title_en" value="{{$topBanner->title_en}}" type="text" class="form-control" id="title_en">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="discountPercentStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="discountPercentStatus">
                            <option @if($topBanner->status=='ACTIVE') selected @endif value="ACTIVE">Active</option>
                            <option @if($topBanner->status=='PASSIVE') selected @endif   value="PASSIVE">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <button type="submit" href="#" class="btn btn-success ml-3" id="add-discount-percent">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection