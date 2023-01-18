@extends('oas.layouts.app')

@section('content')

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
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-label="Animated striped example" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" >Supporting Document</div>
                <span class="text-primary ms-3 fw-bold">Next : Status of Health</span>
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
                            <form>
                            {{-- ic front --}}
                            <div class="row mb-4">
                                <div class="col-sm-6 mb-3">
                                    <label for="photo" class="form-label">IC front <span class="text-danger">*</span></label>
                                    <div class="d-flex flex-column">
                                        <input class="form-control me-3 mb-2" id="ic_front" name="ic_front" type="file" accept=".jpg, .jpeg" onchange="previewICFront(event)" required>
                                        <img src="/images/ic-front.png" alt="" class="img-fluid mb-2" width="300px" height="250px">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <p>Preview: IC Front</p>
                                    <img id="preview_ic_front_location" name="preview_ic_front_location" class="img-fluid" width="300px" height="200px">
                                </div>
                            </div>
                            {{-- ic back --}}
                            <div class="row mb-4">
                                <div class="col-sm-6 mb-3">
                                    <label for="photo" class="form-label">IC Back <span class="text-danger">*</span></label>
                                    <div class="d-flex flex-column">
                                        <input class="form-control me-3 mb-2" id="ic_back" name="ic_back" type="file" accept=".jpg, .jpeg" onchange="previewICBack(event)" required>
                                        <img src="/images/ic-back.png" alt="" class="img-fluid mb-2" width="300px" height="250px">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <p>Preview: IC Back</p>
                                    <img id="preview_ic_back_location" name="preview_ic_back_location" class="img-fluid" width="300px" height="200px">
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between mb-3 mt-3">
                                <a href="/academic_records" class="btn btn-primary">Back</a>
                                <a href="/status-of-health" class="btn btn-primary">Next</a>
                            </div>
                        </div>
                    </div>

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
</script>

@endsection
