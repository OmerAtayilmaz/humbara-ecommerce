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
                            <input wire:model="title_font" name="primary" type="text" value="#000" class="form-control" id="primary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text_font" class="col-sm-2 col-form-label">Text Font</label>
                        <div class="col-sm-10">
                            <input wire:model="text_font" name="text_font" type="text" value="#000" class="form-control" id="text_font">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="primary" class="col-sm-2 col-form-label">Primary</label>
                        <div class="col-sm-10">
                            <input wire:model="primary_color" name="primary" type="color" value="#000" class="form-control" id="primary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeSecondary" class="col-sm-2 col-form-label">Secondary</label>
                        <div class="col-sm-10">
                            <input wire:model="secondary_color" name="secondary" type="color" value="#000" class="form-control" id="themeSecondary">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeDark" class="col-sm-2 col-form-label">Dark</label>
                        <div class="col-sm-10">
                            <input wire:model="dark_color" name="dark" type="color" value="#000" class="form-control" id="themeDark">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeLightblack" class="col-sm-2 col-form-label">Lightblack</label>
                        <div class="col-sm-10">
                            <input wire:model="light_color" name="lightblack" type="color" value="#000" class="form-control" id="themeLightblack">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="themeStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control" id="themeStatus">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <a href="#" class="btn btn-success ml-3" id="add-theme">Update</a>
                        <script>
                            var addTheme = document.querySelector('#add-theme');
                            var cancelTheme = document.querySelector('#cancel-theme');
                            addTheme.addEventListener('click', themeAdd);
                            cancelTheme.addEventListener('click', themeCancel);
                            function themeAdd() {
                                swal("Good job!", "You add the theme!", "success");
                            }
                            function themeCancel() {
                                swal("Theme add cancelled!");
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
   
   
    </div>
  

</div>
