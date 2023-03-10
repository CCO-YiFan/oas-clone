@extends('oas.layouts.app')

@section('content')
{{-- 
    header here. If want to add some description below the heading,
    please use <p class="text-secondary">content here</p>
--}}
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="display-5">{{ __('home.page_heading') }}</h1>
        </div>
    </div>
</div>
{{-- end header --}}

{{--
    alert - show when applicant not yet finish fill in user profile
    This alert message is talking about what applicant need to do
    This alert message will show when application_status_id not equal 4
    
    TODO：
    1. Decide remove or keep the close button.
--}}
@if ($application_status_id < 4)
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col-xl-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading fw-bold">{{ __('home.alert_msg1_heading') }}</h4>
                    <p>{{ __('home.alert_msg1_text1') }}</p>
                    <hr>
                    <p class="mb-0">{{ __('home.alert_msg1_text2') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- end alert --}}

{{--    
    card - show the current step and CTA button to the form

    No.    |  Step                          | application_status_id
    ------ |  ----------------------------- | ---------------------
    card 1 |  personal particulars          |         0
    card 2 |  parent/ guardian particulars  |         1
    card 3 |  emergency contact             |         2
    card 4 |  profile picture               |         3

    *if user finish setup user profile then application_status_id is = 4
--}}
@if($application_status_id == 0)
{{-- personal particulars --}}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <h1>{{ __('home.step1_heading') }}</h1>
                    <p>{{ __('home.step1_description') }}</p>
                    <small class="text-secondary"><span class="text-danger">*</span>{{ __('home.clauses_msg1') }}</small>
                    <br>
                    <a href="{{ route('personalParticulars.home') }}" class="btn btn-primary mt-2">{{ __('home.step_button') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end personal particulars --}}
@elseif ($application_status_id == 1)
{{-- parent/guardian particulars --}}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <h1>{{ __('home.step2_heading') }}</h1>
                    <p>{{ __('home.step2_description') }}</p>
                    <small class="text-secondary"><span class="text-danger">*</span>{{ __('home.clauses_msg1') }}</small>
                    <br>
                    <a href="{{ route('parentGuardianParticulars.home') }}" class="btn btn-primary mt-2">{{ __('home.step_button') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end parent/guardian particulars --}}
@elseif ($application_status_id == 2)
{{-- emergency contact --}}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <h1>{{ __('home.step3_heading') }}</h1>
                    <p>{{ __('home.step3_description') }}</p>
                    <small class="text-secondary"><span class="text-danger">*</span>{{ __('home.clauses_msg1') }}</small>
                    <br>
                    <a href="{{ route('emergencyContact.home') }}" class="btn btn-primary mt-2">{{ __('home.step_button') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>        
{{-- end emergency contact --}}
@elseif ($application_status_id == 3)
{{-- profile picture --}}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <h1>{{ __('home.step4_heading') }}</h1>
                    <p>{{ __('home.step4_description') }}</p>
                    <small class="text-secondary"><span class="text-danger">*</span>{{ __('home.clauses_msg1') }}</small>
                    <br>
                    <a href="{{ route('profilePicture.home') }}" class="btn btn-primary mt-2">{{ __('home.step_button') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end profile picture --}}
@endif
{{-- end card --}}

{{-- 
    My profile & apply programme - show when user finish setup user profile
    application_status_id is 4 when user finish setup personal particulars,
    parent/guardian particulars, emergency contact and profile picture
--}}
@if ($application_status_id >= 4)
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3 class="fw-bold">{{ __('home.profile_heading') }}</h3>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ __('home.profile_alert_msg1_strong') }}</strong> {{ __('home.profile_alert_msg1') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card">
                    <div class="card-body px-4">
                        <h4 class="card-title">{{ Auth::user()->name }}</h4>
                        <h6 class="card-subtitle">{{ Auth::user()->email }}</h6>
                        <p class="badge text-bg-primary">{{ Auth::user()->role['name'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="{{ route('personalParticulars.view') }}" class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>{{ __('home.step1_list_item') }}</span>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('parentGuardianParticulars.view') }}" class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>{{ __('home.step2_list_item') }}</span>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('emergencyContact.view') }}" class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>{{ __('home.step3_list_item') }}</span>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('profilePicture.view') }}" class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>{{ __('home.step4_list_item') }}</span>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </ul>
                </div>
            </div>
            @if ($application_status_id>=4)
            <div class="col-md-6">
                <h3 class="fw-bold">{{ __('home.apply_programme_heading') }}</h3>
                <div class="card">
                    <div class="card-body px-4 py-4">
                        <p class="lead">{{ __('home.apply_programme_description1') }}</p>
                        <p>{{ __('home.apply_programme_description2') }}</p>
                        <small class="text-secondary"><span class="text-danger">*</span>{{ __('home.clauses_msg1') }}</small>
                        <br>
                        @if ($application_status_id != 11)
                            <a href="{{ route('program_selection.program_selection') }}" class="btn btn-primary mt-2">{{ __('home.apply_programme_button') }}</a>
                        @else
                            <a href="{{ route('program_selection.program_selection') }}" class="btn btn-primary">Apply another program</a>
                        @endif
                        
                    </div>
                </div>
            </div>

                
            @endif
        </div>
    </div>
@endif
{{-- end my profile & apply programme --}}

@if ($application_status_id==5)


<div class="container">
    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $programme1->EnglishName }}</td>
                        <td><a href="{{ route('academicDetail.home') }}">Continue complete Academic Record</a></td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endif

@if ($application_status_id == 6)
<div class="container">
    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $programme1->EnglishName }}</td>
                        <td><a href="{{ route('statusOfHealth.home') }}">Continue complete status of health</a></td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@if ($application_status_id == 7)
<div class="container">
    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $programme1->EnglishName }}</td>
                        <td><a href="{{ route('agreements.home') }}">Continue complete agreements.</a></td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@if ($application_status_id == 8)
<div class="container">
    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $programme1->EnglishName }}</td>
                        <td><a href="{{ route('draft.home') }}">Continue complete summary of registration</a></td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@if ($application_status_id == 9)
<div class="container">
    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $programme1->EnglishName }}</td>
                        <td><a href="{{ route('supporting_document.supporting_document') }}">Continue Submit your supporting document(ic photo, transcripts etc.)</a></td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@if ($application_status_id == 10)
<div class="container">

    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $programme1->EnglishName }}</td>
                        <td><a href="{{ route('payment.home') }}"> Submit your payment slip</a></td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@if ($application_status_id == 11)
<div class="container">
    <div class="row mb-3 mt-4">
        <div class="col-12">
            <h3 class="fw-bold">Submissions in progress</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme Name</th>
                        <th scope="col">Current Stage</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        @foreach ($programme1 as $programme)
                        <td> value="{{$programme->id}}">{{$programme->EnglishName}}</td>
                        @endforeach
        
                        <td>Pending verification</td>
                        <td>Remove</td>
                        <td>something here ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@endsection
