@extends('layout.master')

@section('content')
            
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="full_name" class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="full_name" name="full_name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Birthday</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="birthday" name="birthday" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Age</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="age" name="age" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="gender">
                            <option selected disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Degree</label>
                        <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="degree">
                            <option selected disabled>Select Degree</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="master">Master</option>
                            <option value="doctorate">Doctorate</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Region</label>
                        <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="religion">
                            <option selected disabled>Select Region</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="buddha">Buddha</option>
                            <option value="hindu">Hindu</option>
                            <option value="khatolik">Khatolik</option>
                            <option value="khonghucu">Khonghucu</option>
                            <option value="atheis">Atheis</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Github</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="github" name="github" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="instagram" name="instagram" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Facebook</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="facebook" name="facebook" value="">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="imageprofile">Your Image Profile</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info">Save Changes</button>
                            <a href="{{url('about')}}" class="btn btn-secondary">Cancel</a>
                            <hr>
                            <hr>
                            <hr>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
