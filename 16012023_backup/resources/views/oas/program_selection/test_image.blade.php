@extends('oas.layouts.app')

@section('content')
    <title>Document</title>
    <form action="addimage" method="POST" enctype="multipart/form-data">
        @csrf

        IC Front<span class="text-danger">*</span><br>Example:<img src="/images/ic-front.png" alt=""
            class="img-fluid mb-2" width="300px" height="250px">
        <input class="form-control me-3 mb-2" id="ic_front" name="ic_front" type="file" accept=".jpg, .jpeg"
            onchange="previewICFront(event)" required>
        <img id="preview_ic_front_location" name="preview_ic_front_location" class="img-fluid" width="300px"
            height="200px">
        <button type="submit" class="btn btn-primary btn-block">submit</button>
    </form>
@endsection
