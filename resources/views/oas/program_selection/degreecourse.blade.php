@extends('oas.layouts.app')

@section('content')
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="fw-bold mb-3">Add/Hide Courses - <span class="text-success">Degree Course</span></h2>
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
                        *Click the course to hide it
                        <div class="card-body">
                            <form>
                                @csrf
                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="degreecourse">Degree Courses</a>
                                </div>

                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="degreecourse">Degree Courses2</a>
                                </div>

                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="degreecourse">Degree Courses3</a>
                                </div>

                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="degreecourse">Degree Courses4</a>
                                </div>

                                <div class="row mb-3">
                                    <a class="btn btn-primary" href="degreecourse">Degree Courses5</a>
                                </div>

                                <div class="row mb-0">
                                    <div class="d-flex justify-content-between bd-highlight mb-3 ps-0 pe-0">
                                        <a class="btn btn-primary" href="add_hide_program">Back</a>
                                        <a class="btn btn-primary" href="">Add</a>
                                        <a class="btn btn-primary" href="">Save</a>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
