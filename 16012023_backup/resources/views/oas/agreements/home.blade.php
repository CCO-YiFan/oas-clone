@extends('oas.layouts.app')

@section('content')

    {{-- modal --}}
    <style>
        .modal-backdrop {
            background-color: rgb(50, 47, 47);
        }
    </style>

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
    @elseif($application_status_id >= 8)
        <script>$(function(){$('#statusCode8Modal').modal('show');});</script>
    @endif
    {{-- status 0 = personal particulars X --}}
    <div class="modal fade" id="statusCode0Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode0ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode0ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                <div class="modal-body">
                    <p>{{ __('modal.pp_description1') }}</p>
                    <p>{{ __('modal.pp_description2') }}</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                    <a href="{{ route('personalParticulars.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- status 1 = personal particulars / AND parent guardian particulars X --}}
    <div class="modal fade" id="statusCode1Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode1ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                <div class="modal-body">
                    <p>{{ __('modal.pg_description1') }}</p>
                    <p>{{ __('modal.pg_description2') }}</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                    <a href="{{ route('parentGuardianParticulars.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- status 2 = personal particulars / AND parent guardian particulars / AND emergency contact X --}}
    <div class="modal fade" id="statusCode2Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode2ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                <div class="modal-body">
                    <p>{{ __('modal.ec_description1') }}</p>
                    <p>{{ __('modal.ec_description2') }}</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                    <a href="{{ route('emergencyContact.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- status 3 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture X --}}
    <div class="modal fade" id="statusCode3Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode3ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                <div class="modal-body">
                    <p>{{ __('modal.pic_description1') }}</p>
                    <p>{{ __('modal.pic_description2') }}</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                    <a href="{{ route('profilePicture.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    {{-- status 4 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture X --}}
    <div class="modal fade" id="statusCode4Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode4ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                <div class="modal-body">
                    <p>{{ __('modal.ps_description2') }}</p>
                    <p>{{ __('modal.ps_description2') }}</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                    <a href="{{ route('program_selection.program_selection') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
        {{-- status 5 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture X --}}
        <div class="modal fade" id="statusCode5Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode3ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode5ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                    <div class="modal-body">
                        <p>{{ __("modal.ar_description1") }}</p>
                        <p>{{ __("modal.ar_description2") }}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                        <a href="{{ route('academicDetail.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
        {{-- status 6 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic Record /--}}
        <div class="modal fade" id="statusCode6Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode4ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode5ModalLabel">{{ __('modal.kindly_reminder') }}</h1></div>
                    <div class="modal-body">
                        <p>{{ __('modal.soh_description1') }}</p>
                        <p>{{ __('modal.soh_description2') }}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                        <a href="{{ route('statusOfHealth.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
    {{-- status 8 = personal particulars / AND parent guardian particulars / AND emergency contact / AND profile picture / AND program selection / AND academic Record /--}}
    <div class="modal fade" id="statusCode8Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusCode4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h1 class="modal-title fs-5" id="statusCode8ModalLabel">{{ __('modal.congratulations') }}</h1></div>
                <div class="modal-body">
                    <p>{{ __('modal.complete_agree_modal_description1') }}</p>
                    <p>{{ __('modal.complete_agree_modal_description2') }}</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home') }}" type="button" class="btn btn-outline-secondary">{{ __('modal.back_to_home_button') }}</a>
                    <a href="{{ route('draft.home') }}" type="button" class="btn btn-primary">{{ __('modal.continue') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

<div class="container mb-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fw-bold mb-3">{{ __('agreements.title') }}</h2>
            <div class="border-bottom border-primary border-3 mb-2"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-label="Animated striped example" style="width: 56%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >{{ __('agreements.current_step') }}</div>
                <span class="text-primary ms-3 fw-bold">{{ __('agreements.next_step') }}</span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="{{ route('agreements.submit') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">{{ __('agreements.header') }}</div>
                        <div class="card-body">
                    {{--Refund Policy for New Students' Withdrawal--}}
                            <div class="row px-3 mt-3 mb-3">
                                <div class="card-header bg-primary text-white px-3 py-2">{{ __('agreements.consent1_header') }}</div>
                                    <div class="col-sm-12 pt-2">
                                        <p class="lead">{{ __('agreements.consent1_title') }}</p>
                                        <ul>
                                            <li>{{ __('agreements.consent1_content1') }}</li>
                                            <li>{{ __('agreements.consent1_content2') }}</li>
                                            <li>{{ __('agreements.consent1_content3') }}</li>
                                            <li>{{ __('agreements.consent1_content4') }}</li>
                                        </ul>
                                </div>
                            </div>

                            {{--Southern Holistic Education 南方整体教育--}}
                            <div class="row px-3 mt-3 mb-3">
                                <div class="card-header bg-primary text-white px-3 py-2">{{ __('agreements.consent2_header') }}</div>
                                    <div class="col-sm-12 pt-2">
                                        <p class="lead">{{ __('agreements.consent2_title') }}</p>
                                        <ul>
                                            <li>{{ __('agreements.consent2_content1') }}</li>
                                            <li>{{ __('agreements.consent2_content2') }} </li>
                                        </ul>
                                </div>
                            </div>

                            {{--Letter of Guarantee 担保信--}}
                            <div class="row px-3 mt-3 mb-3">
                                <div class="card-header bg-primary text-white px-3 py-2">{{ __('agreements.consent3_header') }}</div>
                                    <div class="col-sm-12 pt-2">
                                        <p>{{ __('agreements.consent3_content') }}</p>
                                </div>
                            </div>

                            {{--Self Declaration 宣誓书--}}
                            <div class="row px-3 mt-3 mb-3">
                                <div class="card-header bg-primary text-white px-3 py-2">{{ __('agreements.consent4_header') }}</div>
                                    <div class="col-sm-12 pt-2">
                                        <p class="lead"><u>{{ __('agreements.consent4_title') }}</u></p>
                                            <p>{{ __('agreements.consent4_reference') }} <a href="{{ __('agreements.consent4_reference_link') }}" target="_blank">{{ __('agreements.consent4_reference_title') }}</a></p>
                                            <p>{{ __('agreements.consent4_content1') }} <a href="{{ __('agreements.consent4_email') }}">{{ __('agreements.consent4_email_title') }}</a>{{ __('agreements.consent4_content1_2') }}<br />
                                                {{ __('agreements.consent4_content1_br') }}</p>
                                            <p>{{ __('agreements.consent4_content2') }}</p>
                                            <p>{{ __('agreements.consent4_content3') }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row px-3 mt-3 mb-3">
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex flex-row">
                                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="Checkbox for following text input" required/>
                                        <span><span style="color: #F00">*</span><strong>{{ __('agreements.consent_agree') }}<strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex justify-content-end mb-3 mt-3">
                                    <a href="{{ route('statusOfHealth.home') }}" class="btn btn-secondary me-3">{{ __('agreements.back_button') }}</a>
                                    <button class="btn btn-primary">{{ __('agreements.next_button') }}</button>
                                </div>
                            </div>
                        </div> 
<!-----------------End of card footer---------------->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection