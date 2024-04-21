@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <form action="{{ route('portfolio.update', 3)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="portfolio_title_3" class="col-sm-3 col-form-label">Title:</label>
                            <div class="col-sm-9">
                                <input type="text" id="portfolio_title_3" name="title" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="portfolio_detail_3" class="col-sm-3 col-form-label">Detail:</label>
                            <div class="col-sm-9">
                                <textarea id="portfolio_detail_3" name="detail" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="portfolio_tanggal_3" class="col-sm-3 col-form-label">Tanggal:</label>
                            <div class="col-sm-9">
                                <input type="date" id="portfolio_tanggal_3" name="tanggal" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="portfolio_image_3" class="col-sm-3 col-form-label">Your Project Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="portfolio_image_3" name="image" class="form-control-file">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info">Save Changes</button>
                                <a href="{{ url('portfolio') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
