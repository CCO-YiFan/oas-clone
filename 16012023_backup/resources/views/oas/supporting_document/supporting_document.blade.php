@extends('oas.layouts.app')

@section('content')

{{-- modal --}}
<style>
    .modal-backdrop {
        background-color: rgb(50, 47, 47);
    }
</style>

@if(Session::has('application_status_id') && Session::get('application_status_id') == 10)
    <script>$(function(){$('#statusCode9Modal').modal('show');});</script>        
@endif

@if ($application_status_id == 0)
    <script>$(function(){$('#statusCode0Modal').modal('show');});</script>
@elseif($application_status_id == 1)
    <script>$(function(){$('#statusCode1Modal').modal('show');});</script>
@elseif($application_status_id == 2)
    <script>$(function(){$('#statusCode2Modal').modal('show');});</script>
@elseif($application_status_id == 3)
    <script>$(function(){$('#statusCode3Modal').modal('show');});</script>
@elseif($application_status_id == 4)
    <script>$(function(){$('#statusCode4Modal').modal('show');});</script>
@elseif($application_status_id == 5)
    <script>$(function(){$('#statusCode5Modal').modal('show');});</script>
@elseif($application_status_id == 6)  
    <script>$(function(){$('#statusCode6Modal').modal('show');});</script>
@elseif($application_status_id == 7)
    <script>$(function(){$('#statusCode7Modal').modal('show');});</script>
@elseif($application_status_id == 8)
    <script>$(function(){$('#statusCode8Modal').modal('show');});</script>
@elseif($application_status_id >= 10)
    <script>$(function(){$('#statusCode9Modal').modal('show');});</script>
@endif

{{-- status 0 = personal particulars X --}}
<div class="modal fade" id="statusCode0Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode0ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode0ModalLabel">Oops!</h1></div>
            <div class="modal-body">
                <p>Dear user, you haven't filled in the <span class="fw-bold">personal particulars</span>, so you can't go to the next step until you fill them in.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">personal particulars</span> please click <span class="fw-bold">Continue</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('personalParticulars.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- status 1 = personal particulars / AND parent guardian particulars X --}}
<div class="modal fade" id="statusCode1Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode1ModalLabel">Oops!</h1></div>
            <div class="modal-body">
                <p>Dear user, you haven't filled in the <span class="fw-bold">parent / guardian particulars</span>, so you can't go to the next step until you fill them in.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">parent / guardian particulars</span> please click <span class="fw-bold">Continue</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('parentGuardianParticulars.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- status 2 = personal particulars / AND parent guardian particulars / AND emergency contact X --}}
<div class="modal fade" id="statusCode2Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode2ModalLabel">Oops!</h1></div>
            <div class="modal-body">
                <p>Dear user, you haven't filled in the <span class="fw-bold">emergency contact</span>, so you can't go to the next step until you fill them in.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">emergency contact</span> please click <span class="fw-bold">Continue</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('emergencyContact.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- status 3 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture X --}}
<div class="modal fade" id="statusCode3Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode3ModalLabel">Oops!</h1></div>
            <div class="modal-body">
                <p>Dear user, you haven't filled in the <span class="fw-bold">profile picture</span>, so you can't go to the next step until you fill them in.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">profile picture</span> please click <span class="fw-bold">Continue</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('profilePicture.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}
{{-- status 4 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selectionX --}}
<div class="modal fade" id="statusCode4Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode4ModalLabel">Oops!</h1></div>
            <div class="modal-body">
                <p>Dear user, you haven't filled in the <span class="fw-bold">program selection</span>, so you can't go to the next step until you fill them in.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">program selection</span> please click <span class="fw-bold">Continue</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('program_selection.program_selection') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}

{{-- status 5 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic record X --}}
<div class="modal fade" id="statusCode5Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode5ModalLabel">Oops!</h1></div>
            <div class="modal-body">
                <p>Dear user, you haven't filled in the <span class="fw-bold">Academic Record</span>, so you can't go to the next step until you fill them in.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">Academic Record</span> please click <span class="fw-bold">Continue</span></p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('academicDetail.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}

    {{-- status 6 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic Record /--}}
    <div class="modal fade" id="statusCode6Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode6ModalLabel">Oops!</h1></div>
                <div class="modal-body">
                    <p>Dear user, you haven't filled in the <span class="fw-bold">Status Of Health</span>, so you can't go to the next step until you fill them in.</p>
                    <p>If you want to go ahead and fill in the <span class="fw-bold">Status Of Health</span> please click <span class="fw-bold">Continue</span></p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                    <a href="{{ route('statusOfHealth.home') }}" type="button" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    {{-- status 7 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic Record /--}}
    <div class="modal fade" id="statusCode7Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode7ModalLabel">Oops!</h1></div>
                <div class="modal-body">
                    <p>Dear user, you haven't agree with the <span class="fw-bold">Consent</span>, so you can't go to the next step until you fill them in.</p>
                    <p>If you want to go ahead and agree with the  <span class="fw-bold">Consent</span> please click <span class="fw-bold">Continue</span></p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                    <a href="{{ route('agreements.home') }}" type="button" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    {{-- status 8 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic Record /--}}
    <div class="modal fade" id="statusCode8Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode8ModalLabel">Oops!</h1></div>
                <div class="modal-body">
                    <p>Dear user, you haven't check your <span class="fw-bold">Information</span>, so you can't go to the next step until you fill them in.</p>
                    <p>If you want to go ahead check your <span class="fw-bold">Information </span> please click <span class="fw-bold">Continue</span></p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                    <a href="{{ route('draft.home') }}" type="button" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    {{-- status 9 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic Record /--}}
    <div class="modal fade" id="statusCode9Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode9ModalLabel">Success</h1></div>
                <div class="modal-body">
                    <p><span class="fw-bold">Supporting documents</span> submitted.</p>
                    <p>Click <span class="fw-bold" >continue</span> to proceed to <span class="fw-bold">payment slip</span></p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                    <a href="{{ route('payment.home') }}" type="button" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

<div class="container mb-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fw-bold mb-3">Supporting Documents</h2>
            <div class="border-bottom border-primary border-3 mb-2"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-label="Animated striped example" style="width: 84%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" >Supporting Document</div>
                <span class="text-primary ms-3 fw-bold">Next : Payment Slip</span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Supporting Documents</div>
                <div class="card-body">
                    <form action="{{ route('supporting_document.insertDoc') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered border-primary">
                                    <thead class="bg-white text-black">
                                        <tr>
                                            <th style="width:20%">Description</th>
                                            <th>Upload File</th>
                                            <th style="width:30%">Preview</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{--IC Front--}}
                                        <tr>
                                            <td>IC Front<span class="text-danger">*</span><br>Example:<img src="/images/ic-front.png" alt="" class="img-fluid mb-2" width="300px" height="250px"></td>
                                            <td><input class="form-control me-3 mb-2" id="ic_front" name="ic_front" type="file" accept=".jpg, .jpeg" onchange="previewICFront(event)" ></td>
                                            <td><img id="preview_ic_front_location" name="preview_ic_front_location" class="img-fluid"></td>
                                        </tr>
                                        {{--IC Back--}}
                                        <tr>
                                            <td>IC Back<span class="text-danger">*</span><br>Example:<img src="/images/ic-back.png" alt="" class="img-fluid mb-2" width="300px" height="250px"></td>
                                            <td><input class="form-control me-3 mb-2" id="ic_back" name="ic_back" type="file" accept=".jpg, .jpeg" onchange="previewICBack(event)" ></td>
                                            <td><img id="preview_ic_back_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                        {{--Secondary Transcript--}}
                                        <tr>
                                            <td>Secondary School Transcript<span class="text-danger">*</span></td>
                                            <td><input class="form-control me-3 mb-2" id="sec_transcript" name="sec_transcript" type="file" accept=".jpg, .jpeg" onchange="previewSecTranscript(event)" ></td>
                                            <td><img id="preview_sec_transcript_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                        {{--Secondary Leaving Certificate--}}
                                        <tr>
                                            <td>Secondary School Leaving Certificate<span class="text-danger">*</span></td>
                                            <td><input class="form-control me-3 mb-2" id="sec_leaving" name="sec_leaving" type="file" accept=".jpg, .jpeg" onchange="previewSecLeaving(event)" ></td>
                                            <td><img id="preview_sec_leaving_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                        {{--Foundation Transcript--}}
                                        <tr>
                                            <td>Foundation Transcript</td>
                                            <td><input class="form-control me-3 mb-2" id="foundation_transcript" name="foundation_transcript" type="file" accept=".jpg, .jpeg" onchange="previewFoundationTranscript(event)"></td>
                                            <td><img id="preview_foundation_transcript_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                        {{--Diploma Transcript--}}
                                        <tr>
                                            <td>Diploma Transcript</td>
                                            <td><input class="form-control me-3 mb-2" id="diploma_transcript" name="diploma_transcript" type="file" accept=".jpg, .jpeg" onchange="previewDiplomaTranscript(event)"></td>
                                            <td><img id="preview_diploma_transcript_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                        {{--Degree Transcript--}}
                                        <tr>
                                            <td>Degree Transcript</td>
                                            <td><input class="form-control me-3 mb-2" id="degree_transcript" name="degree_transcript" type="file" accept=".jpg, .jpeg" onchange="previewDegreeTranscript(event)"></td>
                                            <td><img id="preview_degree_transcript_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                        {{--PhD Transcript--}}
                                        </tr>
                                            <td>PhD Transcript</td>
                                            <td><input class="form-control me-3 mb-2" id="phd_transcript" name="phd_transcript" type="file" accept=".jpg, .jpeg" onchange="previewPhDTranscript(event)" ></td>
                                            <td><img id="preview_phd_transcript_location" name="preview_ic_back_location" class="img-fluid"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <!-- End of card body -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('draft.home') }}" class="btn btn-secondary me-3">Back</a>
                        <button type="submit" class="btn btn-primary">Next</button> 
                        {{-- <a href="{{ route('payment.home') }}" class="btn btn-primary">Next</a> --}}
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
    // image preview
    var previewICFront = function(event){
        var previewLocation = document.getElementById('preview_ic_front_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    // image preview
    var previewICBack = function(event){
        var previewLocation = document.getElementById('preview_ic_back_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    var previewSecTranscript = function(event){
        var previewLocation = document.getElementById('preview_sec_transcript_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    var previewSecLeaving = function(event){
        var previewLocation = document.getElementById('preview_sec_leaving_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    var previewFoundationTranscript = function(event){
        var previewLocation = document.getElementById('preview_foundation_transcript_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    var previewDiplomaTranscript = function(event){
        var previewLocation = document.getElementById('preview_diploma_transcript_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    var previewDegreeTranscript = function(event){
        var previewLocation = document.getElementById('preview_degree_transcript_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
    var previewPhDTranscript = function(event){
        var previewLocation = document.getElementById('preview_phd_transcript_location');
        previewLocation.src = URL.createObjectURL(event.target.files[0]);
        previewLocation.onload = function(){
            URL.revokeObjectURL(previewLocation.src);
        }
    }
</script>
@endsection