@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">User Group</div>
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

        <div class="row">
            <div class="col">
                <form action="{{ route('role.store') }}" method="post" class="needs-validation set-font-size">
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

        <table class="table table-sm set-font-size">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 40%">Groups</th>
                    <th style="width: 40%">Updated At</th>
                    <th style="width: 20%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->updated_at->diffForHumans() }}</td>
                        <td class="text-center">
                            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-outline-info btn-sm" title="Edit Group">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>

                            <form class="d-inline" action="{{ route('role.destroy', $role->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>

                            <a href="#" class="btn btn-outline-warning btn-sm" title="Assign Permission">
                                <i class="fa fa-shield" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($roles->links() != null)
            <div class="row">
                <div class="col-md-12">
                    {{ $roles->links() }}
                </div>
            </div>
        @endif

    </div>
</div>
@endsection
