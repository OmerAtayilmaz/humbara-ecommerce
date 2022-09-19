<script type="text/javascript">
    window.addEventListener('swal:create',event=>{
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            showConfirmButton: false
        });
    });
    window.addEventListener('swal:update',event=>{
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            showConfirmButton: false
        });
    });
    window.addEventListener('swal:deleteConfirm', event => {
            swal.fire({
                title:event.detail.title,
                text: event.detail.text,
                icon: event.detail.type,
                showCancelButton: true,
                dangerMode: true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:"Yes, delete it!"
            })
            .then((willDelete) => {
                if (willDelete.isConfirmed)
                    Livewire.emit('delete', event.detail.id);
            });
        });
</script>