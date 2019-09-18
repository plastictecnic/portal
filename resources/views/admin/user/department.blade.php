@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Create Department / Designation</div>
            <div class="col-md-6 text-right">
                <a href="{{route('user.create')}}" class="btn btn-outline-danger btn-sm" title="Add User">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        {{-- Status message --}}
        <div class="row">
            <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('alert'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('alert') }}
                        </div>
                    @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                {{-- Form Create User --}}
                <form action="{{ route('department.store') }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <h4>Department</h4>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-building"></i>
                                </span>
                            </div>
                            <input id="name" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Department" class="form-control @error('name') is-invalid @enderror" type="text" required autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-info"></i>
                                </span>
                            </div>
                            <input id="description" name="description" value="{{ old('description') }}" autocomplete="description" placeholder="Description" class="form-control" type="text" required>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-danger btn-sm">Save Now</button>
                        </div>
                    </div>
                </form>
                {{-- End Form Create User --}}
            </div>

            <div class="col-md-6">
                {{-- Form Create User --}}
                <form action="{{ route('designation.store') }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <h4>Designation</h4>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-id-badge"></i>
                                </span>
                            </div>
                            <input id="name" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Description" class="form-control" type="text" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-info"></i>
                                </span>
                            </div>
                            <input id="description" name="description" value="{{ old('description') }}" autocomplete="description" placeholder="Description" class="form-control" type="text" required>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-danger btn-sm">Save Now</button>
                        </div>
                    </div>
                </form>
                {{-- End Form Create User --}}
            </div>
        </div>
    </div>
</div>
@endsection
