@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">User or Group Permission</div>
            <div class="col-md-6 text-right">
                <a href="{{route('user.create')}}" class="btn btn-outline-danger btn-sm" title="Add User">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </a>

                <a href="{{route('role.index')}}" class="btn btn-outline-danger btn-sm" title="Add Group">
                    <i class="fa fa-users" aria-hidden="true"></i>
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

        <div class="row">
            <div class="col">
                <form action="{{ route('permission.store') }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-shield"></i>
                                        </span>
                                    </div>
                                    <input id="name" name="name" value="{{ old('name') }}" placeholder="Permission Name" class="form-control @error('name') is-invalid @enderror" type="text" autocomplete="off" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <button type="submit" class="btn btn-danger btn-sm">Add Permission</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-sm set-font-size">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 40%">Permissions</th>
                    <th style="width: 40%">Created At</th>
                    <th style="width: 20%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->created_at->diffForHumans() }}</td>
                        <td class="text-center">
                            <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-outline-info btn-sm" title="Edit Permission">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>

                            <form class="d-inline" action="{{ route('permission.destroy', $permission->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>

                            <a href="#" class="btn btn-outline-warning btn-sm" title="Assign Group">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($permissions->links() != null)
            <div class="row">
                <div class="col-md-12">
                    {{ $permissions->links() }}
                </div>
            </div>
        @endif

    </div>
</div>
@endsection
