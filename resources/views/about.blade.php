@extends('layout.master')

@section('content')
<style>
  .btn-edit {
    animation: pulse 1s infinite alternate;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.1);
    }
}
.slide-right-fade-in {
    animation: slideRightFadeIn 1s ease-in-out;
}

@keyframes slideRightFadeIn {
    0% {
        opacity: 0;
        transform: translateX(-50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.slide-left-fade-in {
    animation: slideLeftFadeIn 1s ease-in-out;
}

@keyframes slideLeftFadeIn {
    0% {
        opacity: 0;
        transform: translateX(50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

</style>
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4 col-mb-3 slide-right-fade-in">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="{{$data->image}}" alt="Profile Image" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h4>{{$data->full_name}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fas fa-globe mr-2"></i>Website</h6>
                <span class="text-secondary">{{$data->email}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fab fa-github mr-2"></i>Github</h6>
                <span class="text-secondary">{{$data->github}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fab fa-instagram mr-2"></i>Instagram</h6>
                <span class="text-secondary">{{$data->instagram}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fab fa-facebook mr-2"></i>Facebook</h6>
                <span class="text-secondary">{{$data->facebook}}</span>
            </li>
        </ul>
    </div>
</div>

        <div class="col-md-8 slide-left-fade-in">
            <div class="card mb-3">
                <div class="card-body">
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->full_name}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->email}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->phone}}    
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Birthday</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->birthday}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Age</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->age}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Degree</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->degree}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Religion</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->religion}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->gender}}
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$data->address}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
    <div class="col-sm-12">
        <a class="btn btn-info btn-lg btn-edit" href="{{url('/form')}}">
            <i class="fas fa-edit mr-2"></i>Edit
        </a>
        <a class="btn btn-danger btn-lg btn-delete ml-3" href="{{url('/delete')}}">
            <i class="fas fa-trash-alt mr-2"></i>Delete
        </a>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
