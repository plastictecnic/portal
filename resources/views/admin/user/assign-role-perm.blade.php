@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">User Group &amp; Permission</div>
            <div class="col-md-6 text-right">
                <a href="{{route('user.create')}}" class="btn btn-outline-danger btn-sm" title="Add User">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </a>

                <a href="{{route('permission.index')}}" class="btn btn-outline-danger btn-sm" title="Add Permission">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <p>{{ $user->name }} <small>roles &amp; permission</small></p>

        <div class="row">
            <div class="col">
                <form action="{{ route('set-permission', $user->id) }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-users"></i>
                                        </span>
                                    </div>
                                    <input id="name" name="name" value="{{ old('name') }}" placeholder="Group Name" class="form-control @error('name') is-invalid @enderror" type="text" autocomplete="off" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <button type="submit" class="btn btn-danger btn-sm">Add Role</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
