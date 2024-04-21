@extends('layout.master')

@section('content')
            
<form method="post" action="{{ route('profile.deleteForm') }}">
    @csrf
    <div class="form-group">
        <label for="full_name">Select Full Name:</label>
        <select class="form-control" id="full_name" name="full_name" required>
            <option value="">Select Full Name</option>
            @foreach($profiles as $profile)
                <option value="{{ $profile->full_name }}">{{ $profile->full_name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-danger">Delete Profile</button>
</form>

@endsection
