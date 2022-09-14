@extends('layouts.backoffice')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
 @livewire('admin.category')
</div>
<!-- /.container-fluid -->
{{-- <script>
    var alert = document.querySelector('#delete-user');
    alert.addEventListener('click', createAlert);
    function createAlert() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this user!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your user has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your user is safe!");
            }
        });
    }
</script> --}}
@endsection