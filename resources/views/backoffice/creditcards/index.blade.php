@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Credit Card List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Owner</th>
                                        <th>Card Name</th>
                                        <th>Card Holder Name</th>
                                        <th>Exired Date</th>
                                        <th>Card Security Code</th>
                                        <th>Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user->credtcards as $cc)
                                        <tr class="odd">
                                            <td>{{$user->name}} {{$user->surname}}</td>
                                            <td>{{$cc->card_name}}</td>
                                            <td>{{$cc->card_holder_name}}</td>
                                            <td>{{$cc->card_expiry_date}}</td>
                                            <td>{{$cc->card_cvv}}</td>
                                            <td>{{$cc->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection