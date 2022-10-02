@extends('layouts.backoffice')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4 pt-2">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a  class="nav-link active card-title-text settings-link" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-tab-pane" type="button" role="tab" aria-controls="general-tab-pane" aria-selected="true">General Setting</a>
            </li>
            <li class="nav-item" role="presentation">
                <a  class="nav-link card-title-text settings-link" id="smtp-tab" data-bs-toggle="tab" data-bs-target="#smtp-tab-pane" type="button" role="tab" aria-controls="smtp-tab-pane" aria-selected="false">Smtp Setting</a>
            </li>
            <li class="nav-item" role="presentation">
                <a  class="nav-link card-title-text settings-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social-tab-pane" type="button" role="tab" aria-controls="social-tab-pane" aria-selected="false">Social Media</a>
            </li>
            <li class="nav-item" role="presentation">
                <a  class="nav-link card-title-text settings-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="false">About Us</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link card-title-text settings-link" id="references-tab" data-bs-toggle="tab" data-bs-target="#references-tab-pane" type="button" role="tab" aria-controls="references-tab-pane" aria-selected="false">References</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link card-title-text settings-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</a>
            </li>
        </ul>
        <form method="post" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" >
            @csrf
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-5" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">       
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input name="c_name"  value="{{$settings->c_name}}" type="text" class="form-control" id="settingInputTitle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Keyword</label>
                        <div class="col-sm-10">
                            <input name="c_keywords" value="{{$settings->c_keywords}}" type="text" class="form-control" id="settingInputKeyword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">description</label>
                        <div class="col-sm-10">
                            <input name="c_description" value="{{$settings->c_description}}" type="text" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword"  class="col-sm-2 col-form-label">Company Logo</label>
                        <div class="col-sm-10">
                            <input name="c_logo" value="{{$settings->c_logo}}" type="file" class="form-control" id="logo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Company Favicon</label>
                        <div class="col-sm-10">
                            <input name="c_favicon" value="{{$settings->c_favicon}}" type="file" class="form-control" id="favicon">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input name="c_address" value="{{$settings->c_address}}" type="text" class="form-control" id="settingInputAddress">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input name="c_phone"  value="{{$settings->c_phone}}" type="number" class="form-control" id="settingInputPhone">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="c_email" value="{{$settings->c_email}}" type="text" class="form-control" id="settingInputEmail">
                        </div>
                    </div>
               
            </div>
            {{-- SMTP MIGRATION --}}
            <div class="tab-pane fade p-5"  id="smtp-tab-pane" role="tabpanel" aria-labelledby="smtp-tab" tabindex="0">
               
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
                  
            </div>
            <div class="tab-pane fade p-5" id="social-tab-pane" role="tabpanel" aria-labelledby="social-tab" tabindex="0">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Youtube</label>
                        <div class="col-sm-10">
                            <input name="c_youtube"  value="{{$settings->c_youtube}}" type="text" class="form-control" id="settingInputYoutube">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                            <input name="c_facebook" value="{{$settings->c_facebook}}" type="text" class="form-control" id="settingInputFacebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input name="c_instagram" value="{{$settings->c_instagram}}" type="text" class="form-control" id="settingInputInstagram">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-10">
                            <input name="c_twitter" value="{{$settings->c_twitter}}" type="text" class="form-control" id="settingInputTwitter">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword"  class="col-sm-2 col-form-label">Linkedin</label>
                        <div class="col-sm-10">
                            <input name="c_linkedin"  value="{{$settings->c_linkedin}}" type="text" class="form-control" id="settingInputLinkedin">
                        </div>
                    </div>
                    
            </div>
            <div class="tab-pane fade p-5" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
               
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">About Us</label>
                        <div class="col-sm-10">
                            <textarea id="editor" name="about_us" rows="4" cols="50" class="form-control">{{$settings->c_linkedin}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                    </div>
                   
            </div>
            <div class="tab-pane fade p-5" id="references-tab-pane" role="tabpanel" aria-labelledby="references-tab" tabindex="0">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">References</label>
                        <div class="col-sm-10">
                            <textarea id="editor1" name="references" rows="4" cols="50" class="form-control">{{$settings->references}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor1' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                    </div>
            </div>
            <div class="tab-pane fade p-5" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <textarea id="editor3" name="contact" rows="4" cols="50" class="form-control">{{$settings->contact}}</textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor3' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
                </div>
            <div class="text-center py-3">
                <button type="submit" class="btn btn-primary">UPDATE SETTINGS</button>
            </div>
        </div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@endsection