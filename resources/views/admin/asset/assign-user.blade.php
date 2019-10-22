@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Assign user to asset No: {{ \App\Asset::find($asset)->sn }}</div>
            <div class="col-md-6 text-right">
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
            <div class="col-md-12">
                <form action="{{ route('asset.assigning.user', $asset) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-id-badge"></i>
                                </span>
                            </div>

                            <select name="name" class="custom-select @error('name') is-invalid @enderror" required>
                                <option value="">Choose User</option>
                                @foreach (\App\User::all() as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} - ID: {{ $user->profile->emp_id }}</option>
                                @endforeach
                            </select>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-danger btn-sm">Create User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
