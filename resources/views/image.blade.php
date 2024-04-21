@extends('layout.master')

@section('title', 'About')

@section('content')

<form action="" method="" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" accept="image/*">
    <button type="submit">Upload Image</button>
</form>

@endsection