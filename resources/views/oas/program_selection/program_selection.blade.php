@extends('OAS.layouts.app')
@section('content')

 {{-- modal --}}
 <style>
    .modal-backdrop {
        background-color: rgb(50, 47, 47);
    }
</style>

    

@if(Session::has('application_status_id') && Session::get('application_status_id') == 5)
    <script>$(function(){$('#statusCode4Modal').modal('show');});</script>        
@endif
@if ($application_status_id == config('constants.APPLICATION_STATUS_CODE.NEW_USER'))
    <script>$(function(){$('#statusCode0Modal').modal('show');});</script>
@elseif($application_status_id == config('constants.APPLICATION_STATUS_CODE.COMPLETE_PERSONAL_PARTICULARS'))
    <script>$(function(){$('#statusCode1Modal').modal('show');});</script>
@elseif($application_status_id == config('constants.APPLICATION_STATUS_CODE.COMPLETE_PARENT_GUARDIAN_PARTICULARS'))
    <script>$(function(){$('#statusCode2Modal').modal('show');});</script>
@elseif($application_status_id == config('constants.APPLICATION_STATUS_CODE.COMPLETE_EMERGENCY_CONTACT'))
    <script>$(function(){$('#statusCode3Modal').modal('show');});</script>
@elseif ($application_status_id >=config('constants.APPLICATION_STATUS_CODE.COMPLETE_PROGRAM_SELECTION'))
    <script>$(function(){$('#statusCode5Modal').modal('show');});</script>
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
{{-- status 4 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture/ AND program selection X --}}
<div class="modal fade" id="statusCode4Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode6ModalLabel">Congratulations!</h1></div>
            <div class="modal-body">
                <p>We have received your <span class="fw-bold">program selection</span>. You will also need to agree with the consent and check your information and fill in the details of your status of health, supporting document and payment slip to apply for the programme.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">program selection</span>, please click <span class="fw-bold">Continue</span>.</p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('academicDetail.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}
{{-- status 5 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture/ AND program selection X --}}
<div class="modal fade" id="statusCode5Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode5ModalLabel">Congratulations!</h1></div>
            <div class="modal-body">
                <p>We have received your <span class="fw-bold">program selection</span>. You will also need to agree with the consent and check your information and fill in the details of your status of health, supporting document and payment slip to apply for the programme.</p>
                <p>If you want to go ahead and fill in the <span class="fw-bold">program selection</span>, please click <span class="fw-bold">Continue</span>.</p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">Back to home page</a>
                <a href="{{ route('academicDetail.home') }}" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}


<div class="container mb-4">
    {{-- error message --}}
    @if(Session::has('error'))
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
{{-- end error message --}}

<div class="container mb-4">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('button.home') }}</a></li>
                  <li class="breadcrumb-item active fw-bold" aria-current="page">{{ __('academicRecord.title') }}</li>
                </ol>
            </nav>
            <h1 class="fw-bold">Program Selection</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p><span class="fw-bold">Step 1 of 7</span> Completed</p>
                <div class="progress mb-2" style="height: 10px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary opacity-25" role="progressbar" style="width: 86%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Program Selection</div>
                <form action="{{ route('program_selection.inputProgramme') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                    
                        <div class="row mb-3">
                            {{--Intake Year--}}
                            <label class="col-sm-3 col-form-label">Intake: Year</label>
                            <div class="col-sm-3">
                                <select class="form-select" name="intake_year" id="intake_year">
                                    <option value="2022">2022</option>
                                </select>
                            </div>
    
                            {{--Intake Month--}}
                            <label class="col-sm-3 col-form-label">Intake: Month</label>
                            <div class="col-sm-3">
                                <select class="form-select" name="intake_month" id="intake_month" required>
                                    <option value="">Please Select</option>
                                    @foreach ($semester as $sem)
                                    <option value="{{$sem->id}}">{{$sem->semesters}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
    
                        <hr>
    
                        {{--Course Selection--}}
                        <div class="row mb-3">
                            <label for="courseselect" class="col-sm-3 col-form-label">Program Selection</label>
                            <div class="col-sm-5">
                                <select class="form-select" name="course" id="course" required>
                                    <option value="">Please Select</option>
                                    <option value="PHD">Postgraduate</option>
                                    <option value="MAS">Undergraduate</option>
                                </select>
                            </div>
                        </div>
                        <div id="containerCourse"></div>
    

    
                        </div>
                        <div class="col-md-12">
                            <div class="card-footer">
                                <div class="d-flex justify-content-between mb-3 mt-3">
                                    <button type="submit" class="btn btn-primary confirmation">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure you want to select these course? it is still possible to change later.')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
<script>
    $(document).ready(function() {
        $('#master').hide();
        $('#master2').hide();
        $('#master3').hide();
        $('#phd').hide();
        $('#phd2').hide();
        $('#phd3').hide();
        $('#course').on('change', function() {
            if ($(this).val() == 'PHD') {
                html='';
                html+='{{--First Postgraduate Course--}}';
                html+='<div class="row mb-3" id="phd">';
                html+='<label for="courseselect" class="col-sm-3 col-form-label">Postgraduate courses first choice</label>';
                html+='<div class="col-sm-5">';
                html+='<select class="form-select" name="postgra1" id="postgra1" required>';
                html+='<option value="">Please Select</option>';
                html+='@foreach ($postgraduate as $programme)';
                html+='<option value="{{$programme->id}}">{{$programme->EnglishName}}</option>';
                html+='@endforeach';
                html+='</select>';
                html+='</div>';
                html+='</div>';
                html+='{{--Second Postgraduate Course--}}';
                html+='<div class="row mb-3" id="phd2">';
                html+='<label for="courseselect" class="col-sm-3 col-form-label">Postgraduate courses second choice</label>';
                html+='<div class="col-sm-5">';
                html+='<select class="form-select" name="postgra2" id="postgra2" required>';
                html+='<option value="">Please Select</option>';
                html+='@foreach ($postgraduate as $programme)';
                html+='<option value="{{$programme->id}}">{{$programme->EnglishName}}</option>';
                html+='@endforeach';
                html+='</select>';
                html+='</div>';
                html+='</div>';
                html+='{{--Third Postgraduate Course--}}';
                html+='<div class="row mb-3" id="phd3">';
                html+='<label for="courseselect" class="col-sm-3 col-form-label">Postgraduate courses third choice</label>';
                html+='<div class="col-sm-5">';
                html+='<select class="form-select" name="postgra3" id="postgra3" required>';
                html+='<option value="">Please Select</option>';
                html+='@foreach ($postgraduate as $programme)';
                html+='<option value="{{$programme->id}}">{{$programme->EnglishName}}</option>';
                html+='@endforeach';
                html+='</select>';
                html+='</div>';
                html+='</div>';
                       $('#containerCourse').html(html);
                // $('#phd').show();
                // $('#phd2').show();
                // $('#master').hide();
                // $('#master2').hide();
                // $('#master3').hide();
                // $('#undergra1').prop('selectedIndex',0);
                // $('#undergra2').prop('selectedIndex',0);
                // $('#undergra3').prop('selectedIndex',0);
            } else if ($(this).val() == 'MAS') {

                html='';
                html+='{{--First Undergraduate Course--}}';
                html+='<div class="row mb-3" id="master">';
                html+='<label for="courseselect" class="col-sm-3 col-form-label">Undergraduate courses first choice</label>';
                html+='<div class="col-sm-5">';
                html+='<select class="form-select" name="undergra1" id="undergra1" required>';
                html+='<option value="">Please Select</option>';
                html+='@foreach ($undergraduate as $programme)';
                html+='<option value="{{$programme->id}}">{{$programme->EnglishName}}</option>';
                html+='@endforeach';
                html+='</select>';
                html+='</div>';
                html+='</div>';
                html+='{{--Second undergraduate Course--}}';
                html+='<div class="row mb-3" id="master2">';
                html+='<label for="courseselect" class="col-sm-3 col-form-label">Undergraduate courses second choice</label>';
                html+='<div class="col-sm-5">';
                html+='<select class="form-select" name="undergra2" id="undergra2" required>';
                html+='<option value="">Please Select</option>';
                html+='@foreach ($undergraduate as $programme)';
                html+='<option value="{{$programme->id}}">{{$programme->EnglishName}}</option>';
                html+='@endforeach';
                html+='</select>';
                html+='</div>';
                html+='</div>';
                html+='{{--Third undergraduate Course--}}';
                html+='<div class="row mb-3" id="master3">';
                html+='<label for="courseselect" class="col-sm-3 col-form-label">Undergraduate courses third choice</label>';
                html+='<div class="col-sm-5">';
                html+='<select class="form-select" name="undergra3" id="undergra3" required>';
                html+='<option value="">Please Select</option>';
                html+='@foreach ($undergraduate as $programme)';
                html+='<option value="{{$programme->id}}">{{$programme->EnglishName}}</option>';
                html+='@endforeach';
                html+='</select>';
                html+='</div>';
                html+='</div>';
                       $('#containerCourse').html(html);
                // $('#phd').hide();
                // $('#phd2').hide();
                // $('#master').show();
                // $('#master2').show();
                // $('#master3').show();
            }  else {
                 $('#phd').hide();
                 $('#phd2').hide();
                 $('#phd3').hide();
                 $('#master').hide();
                 $('#master2').hide();
                 $('#master3').hide();
            }
        });
    });
</script>
@endsection