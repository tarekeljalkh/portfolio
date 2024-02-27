@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.services.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Service</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Service</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.services.update', $service->id) }}" method="post">
                                @csrf
                                @method('put')

                                <div class="form-group row mb-4">
                                    <label for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $service->name }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" id="description" class="form-control" id="" cols="30" rows="10" style="height: 100px">{{ $service->description }}</textarea>
                                    </div>
                                </div>



                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
