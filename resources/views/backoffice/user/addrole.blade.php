@extends('layouts.backoffice')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">User Role</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th><td>1</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>Ali</td>
                                </tr>
                                <tr>
                                    <th>Surname</th><td>Acar</td>
                                </tr>
                                <tr>
                                    <th>Role</th><td>User&nbsp;<a href="#"><i class="fa-solid fa-xmark text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Add Role</th>
                                    <td>
                                        <form action="">
                                            <select name="user_role" class="form-control" id="userRoleInput">
                                                <option selected="selected">Admin</option>
                                                <option>User</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <a href="#" class="btn btn-success btn-large mb-4">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection