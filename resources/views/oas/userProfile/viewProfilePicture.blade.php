@extends('oas.layouts.app')

@section('content')

{{-- header --}}
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="border-bottom">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('button.home') }}</a></li>
                      <li class="breadcrumb-item active fw-bold" aria-current="page">{{ __('userProfile.title4') }}</li>
                    </ol>
                </nav>
                <h1 class="fw-bold">{{ __('userProfile.title4') }}</h1>
                <p><span class="fw-bold">{{ __('userProfile.step4') }}</span></p>
                <div class="progress mb-2" style="height: 10px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary opacity-25" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end header --}}

{{-- update success --}}
@if(Session::has('success') && Session::get('success') == 'success')
<div class="container mt-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ __('successMessage.profile_picture_update_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
@endif
{{-- end update success --}}

{{-- data --}}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="alert alert-warning fade show" role="alert">
                <h4 class="alert-heading">Guidelines for submitting your photo</h4>
                <p>1. In colour, <span class="fw-bold">NOT</span> black and white.</p>
                <p>2. Taken against a <span class="fw-bold">WHITE</span> background.</p>
                <p>3. The photo must be a true likeness of the person.</p>
                <p>4. Please do not use photos that have been cut down from larger pictures.</p>
                <p>5. The photo must be sent in <span class="fw-bold">(.jpg, .jpeg, .png)</span> file format and name it as your Name same as I/C.</p>
                <hr>
                <img src="/images/photo_correct.png" alt="" class="img-fluid me-3">
                <img src="/images/photo_wrong.png" alt="" class="img-fluid me-3">
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-column">
                <h4 class="fw-bold">{{ __('userProfile.title4') }}</h4>
                <img src="/images/profile_picture/{{ $applicant_profile_picture->path }}" class="img-fluid" width="217px" height="280px">
            </div>
            <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#editModal">{{ __('button.edit_profile_picture') }}</button>

        </div>
    </div>
</div>
{{-- end data --}}

<!-- modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <form action="{{ route('profilePicture.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="editModalLabel">{{ __('button.edit_profile_picture') }}</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <input type="hidden" name="applicant_profile_picture_id" value="{{ $applicant_profile_picture->id }}">
                        <input type="hidden" name="applicant_profile_id" value="{{ $applicant_profile_picture->applicant_profile_id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="picture" class="form-label">Photo (<span class="text-danger fw-bold">{{ __('inputFields.photo_format1') }}</span>) and <span class="fw-bold text-danger">{{ __('inputFields.photo_format2') }}</span> <span class="text-danger">*</span></label>
                                <div class="d-flex flex-column">
                                    <input class="form-control me-3 mb-4" name="picture" id="picture" type="file" accept=".jpg, .jpeg, .png" onchange="previewPhoto(event)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="text-secondary">{{ __('inputFields.preview') }}</p>
                                <img id="preview_location" name="preview_location" class="img-fluid" width="217px" height="280px">
                            </div>
                        </div>
                    </div>
                    <script>
                        // image preview
                        var previewPhoto = function(event){
                            var previewLocation = document.getElementById('preview_location');
                            previewLocation.src = URL.createObjectURL(event.target.files[0]);
                            previewLocation.onload = function(){
                                URL.revokeObjectURL(previewLocation.src);
                            }
                        }
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">{{ __('button.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('button.save_changes') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- end modal --}}

@endsection