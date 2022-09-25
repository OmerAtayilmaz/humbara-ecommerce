<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold card-title-text">Update Theme</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update">
                    <div class="mb-3 row">
                        <label for="primary" class="col-sm-2 col-form-label">Title Font</label>
                        <div class="col-sm-10">
                            <input wire:model.defer="title_font" name="primary" type="text"  class="form-control" id="primary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text_font" class="col-sm-2 col-form-label">Text Font</label>
                        <div class="col-sm-10">
                            <input wire:model.defer="text_font" name="text_font" type="text"  class="form-control" id="text_font">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="primary" class="col-sm-2 col-form-label">Primary</label>
                        <div class="col-sm-10">
                            <input wire:model.defer="primary_color" name="primary" type="color" value="#000" class="form-control" id="primary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeSecondary" class="col-sm-2 col-form-label">Secondary</label>
                        <div class="col-sm-10">
                            <input wire:model.defer="secondary_color" name="secondary" type="color" value="#000" class="form-control" id="themeSecondary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeDark" class="col-sm-2 col-form-label">Dark</label>
                        <div class="col-sm-10">
                            <input wire:model.defer="dark_color" name="dark" type="color" value="#000" class="form-control" id="themeDark">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeLightblack" class="col-sm-2 col-form-label">Lightblack</label>
                        <div class="col-sm-10">
                            <input wire:model.defer="light_color" name="lightblack" type="color" value="#000" class="form-control" id="themeLightblack">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <button type="submit" class="btn btn-success ml-3" id="add-theme">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
    @section('bottom-scripts')
        @include('backoffice.messages.swal2')
    @endsection
</div>
