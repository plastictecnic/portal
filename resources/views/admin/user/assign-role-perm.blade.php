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

        <p>{{ $user->name }} <small>roles</small></p>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('set-permission', $user->id) }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <div class="row">
                                    @if(!Auth::user()->hasRole('Super Admin') && $user->hasRole('Super Admin'))
                                        <div class="col-md-12">
                                            <p class="alert bg-danger text-white">Ooops!! You don't have permission to assign role to this user</p>
                                        </div>
                                    @else
                                        @foreach ($roles as $role)
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input @if ($user->hasRole($role->name)) {{ 'checked' }} @endif @if (!Auth::user()->hasRole('Super Admin')) @if ($role->name == "Super Admin") {{ 'disabled' }} @endif @endif type="checkbox" class="custom-control-input" id="role-{{$role->id}}" name="role[{{$role->id}}]">
                                                        <label class="custom-control-label" for="role-{{$role->id}}">{{ $role->name }}</label>
                                                    </div>
                                                </div>
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>

                    @if(!Auth::user()->hasRole('Super Admin') && $user->hasRole('Super Admin'))
                    @else
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-danger btn-sm">Save</button>
                        </div>
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
