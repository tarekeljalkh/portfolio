@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ $user->name }}!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>{{ __('Profile Information') }}</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('profile.update') }}" class="needs-validation"
                                novalidate="">
                                @csrf
                                @method('patch')

                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', $user->name) }}" required="">
                                        @if ($errors->has('name'))
                                            <code>{{ $errors->first('name') }}</code>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email', $user->email) }}" required="">
                                        @if ($errors->has('email'))
                                            <code>{{ $errors->first('email') }}</code>
                                        @endif
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="card">

                        <div class="card-header">
                            <h4>{{ __('Update Password') }}</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('password.update') }}" class="needs-validation"
                                novalidate="">
                                @csrf
                                @method('put')

                                <div class="row">

                                    <div class="form-group col-12">
                                        <label>{{ __('Current Password') }}</label>
                                        <input type="password" class="form-control" name="current_password" required="">
                                        @if ($errors->updatePassword->has('current_password'))
                                            <code>{{ $errors->updatePassword->first('current_password') }}</code>
                                        @endif
                                    </div>

                                    <div class="form-group col-12">
                                        <label>{{ __('New Password') }}</label>
                                        <input type="password" class="form-control" name="password" required="">
                                        @if ($errors->updatePassword->has('password'))
                                            <code>{{ $errors->updatePassword->first('password') }}</code>
                                        @endif
                                    </div>

                                    <div class="form-group col-12">
                                        <label>{{ __('Confirm Password') }}</label>
                                        <input type="password" class="form-control" name="password_confirmation" required="">
                                        @if ($errors->updatePassword->has('password_confirmation'))
                                            <code>{{ $errors->updatePassword->first('password_confirmation') }}</code>
                                        @endif
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
