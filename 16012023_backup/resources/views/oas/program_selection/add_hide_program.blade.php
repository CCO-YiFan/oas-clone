@extends('oas.layouts.app')

@section('content')
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="fw-bold mb-3">Add/Hide Courses</h2>
            <div class="border-bottom border-primary border-3"></div>
        </div>
    </div>
</div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Add/Hide Courses</div>
                        <div class="card-body">
                    {{--Intake Year--}}
                    <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Intake: Year</label>
                        <div class="col-sm-2">
                            <select class="form-select" name="intake_year" id="intake_year">
                                <option value="2022">2022</option>
                            </select>
                        </div>
                    {{--Intake Month--}}
                        <label class="col-sm-2 col-form-label">Intake: Month</label>
                            <div class="col-sm-2">
                                <select class="form-select" name="intake_month" id="intake_month">
                                    <option value="9/10">9/10</option>
                                    <option value="5/6">5/6</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <form>
                                @csrf

                                {{--PhD Course--}}
                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="phdcourse">PhD Courses</a>
                                </div>

                                {{--Master Course--}}
                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="mastercourse">Master Courses</a>
                                </div>

                                {{--Degree Course--}}
                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="degreecourse">Degree Courses</a>
                                </div>

                                {{--Diploma Course--}}
                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="diplomacourse">Diploma Courses</a>
                                </div>

                                {{--Foundation Course--}}
                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="foundationcourse">Foundation Courses</a>
                                </div>

                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-success" href="/">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
