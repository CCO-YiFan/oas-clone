@extends('oas.layouts.app')

@section('content')
    <title>Document</title>
    <form action="add" method="POST">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="Enter programme name" value="{{ old('name') }}">

        <select name="programmelevel" id="programmelevel" class="form-select">
            <option value="">Please Select</option>
            @foreach ($programmelevel as $programlevel)
                <option value="{{ $programlevel->programme_level_id }}">{{ $programlevel->programme_level }}</option>
            @endforeach
        </select>
        <select name="programmetype" id="programmetype" class="form-select">
            <option value="">Please Select</option>
            @foreach ($programmetype as $programtype)
                <option value="{{ $programtype->programme_type_id }}">{{ $programtype->programme_type }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary btn-block">submit</button>
    </form>
@endsection
