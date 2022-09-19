<div>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active card-title-text settings-link" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-tab-pane" type="button" role="tab" aria-controls="general-tab-pane" aria-selected="true">General Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-title-text settings-link" id="smtp-tab" data-bs-toggle="tab" data-bs-target="#smtp-tab-pane" type="button" role="tab" aria-controls="smtp-tab-pane" aria-selected="false">Smtp Setting</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link card-title-text settings-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social-tab-pane" type="button" role="tab" aria-controls="social-tab-pane" aria-selected="false">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link card-title-text settings-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="false">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link card-title-text settings-link" id="references-tab" data-bs-toggle="tab" data-bs-target="#references-tab-pane" type="button" role="tab" aria-controls="references-tab-pane" aria-selected="false">References</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
                        <form wire:submit.prevent="company" class="p-4">
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_name" type="text"  class="form-control">
                                    @error('c_name') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_keywords" name="keyword" type="text" class="form-control">
                                    @error('c_keywords') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_description" name="content" type="text" class="form-control" >
                                    @error('c_description') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_logo" name="c_logo" type="file" class="form-control" >
                                    @error('c_logo') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Favicon</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_favicon" name="c_favicon" type="file" class="form-control" >
                                    @error('c_favicon') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_address" name="address" type="text" class="form-control" >
                                    @error('c_address') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_phone" name="phone" type="number" class="form-control" >
                                    @error('c_phone') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input wire:model="c_email" name="email" type="text" class="form-control" id="settingInputEmail">
                                    @error('c_email') <small class="error">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <button type="submit" id="update-general" class="btn btn-success btn-large mt-4">Update</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="smtp-tab-pane" role="tabpanel" aria-labelledby="smtp-tab" tabindex="0">
                        <form action="" class="p-4">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Smtp Server</label>
                                <div class="col-sm-10">
                                    <input name="smtpserver" type="text" class="form-control" id="settingInputServer">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Smtp Email</label>
                                <div class="col-sm-10">
                                    <input name="smtpemail" type="email" class="form-control" id="settingInputEmail">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Smtp Password</label>
                                <div class="col-sm-10">
                                    <input name="smtppassword" type="password" class="form-control" id="settingInputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Smtp Port</label>
                                <div class="col-sm-10">
                                    <input name="smtpport" type="number" class="form-control" id="settingInputPort">
                                </div>
                            </div>
                            <a href="#" id="update-smtp" class="btn btn-success btn-large mt-4">Update</a>
                            <script>
                                var smtpSetting = document.querySelector('#update-smtp');
                                smtpSetting.addEventListener('click', smtpSet);
                                function smtpSet() {
                                    swal("Good job!", "You updated the smtp setting!", "success");
                                }
                            </script>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="social-tab-pane" role="tabpanel" aria-labelledby="social-tab" tabindex="0">
                        <form action="" class="p-4">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input name="facebook" type="text" class="form-control" id="settingInputFacebook">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input name="instagram" type="text" class="form-control" id="settingInputInstagram">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input name="twitter" type="text" class="form-control" id="settingInputTwitter">
                                </div>
                            </div>
                            <a href="#" id="update-social" class="btn btn-success btn-large mt-4">Update</a>
                            <script>
                                var socialSetting = document.querySelector('#update-social');
                                socialSetting.addEventListener('click', socialSet);
                                function socialSet() {
                                    swal("Good job!", "You updated the social media setting!", "success");
                                }
                            </script>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                        <form action="" class="p-4">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">About Us</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" name="about" rows="4" cols="50" class="form-control"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>
                            <a href="#" id="update-about" class="btn btn-success btn-large mt-4">Update</a>
                            <script>
                                var aboutSetting = document.querySelector('#update-about');
                                aboutSetting.addEventListener('click', aboutSet);
                                function aboutSet() {
                                    swal("Good job!", "You updated the about setting!", "success");
                                }
                            </script>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="references-tab-pane" role="tabpanel" aria-labelledby="references-tab" tabindex="0">
                        <form action="" class="p-4">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">References</label>
                                <div class="col-sm-10">
                                    <textarea id="editor1" name="about" rows="4" cols="50" class="form-control"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor1' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>
                            <a href="#" id="update-references" class="btn btn-success btn-large mt-4">Update</a>
                            <script>
                                var referencesSetting = document.querySelector('#update-references');
                                referencesSetting.addEventListener('click', referencesSet);
                                function referencesSet() {
                                    swal("Good job!", "You updated the references setting!", "success");
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
            <!-- Bootstrap core JavaScript-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    @section('bottom-scripts')
        @include('backoffice.messages.swal2')
    @endsection

</div>
