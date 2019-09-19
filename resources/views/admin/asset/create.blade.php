@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Create New Asset</div>
            <div class="col-md-6 text-right">
                <a href="{{route('asset-list')}}" class="btn btn-outline-danger btn-sm" title="User List">
                    <i class="fa fa-list-ul" aria-hidden="true"></i> Back to asset list
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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                {{-- Form Create User --}}
                <form action="{{ route('asset.store') }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <div class="bg-secondary text-white mb-4 pt-1 pb-1 pl-2">Personal Computer</div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input id="name" name="name" value="{{ old('name') }}" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" type="text" required autofocus>

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
                                            <i class="fa fa-at"></i>
                                        </span>
                                    </div>
                                    <input id="username" name="username" value="{{ old('username') }}" placeholder="Username" class="form-control @error('username') is-invalid @enderror" type="text" required>

                                    @error('username')
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
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input id="email" name="email" value="{{ old('email') }}" placeholder="staff@tecnic.com.my" class="form-control @error('email') is-invalid @enderror" type="email" required>

                                    @error('email')
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
                                            <i class="fa fa-id-card"></i>
                                        </span>
                                    </div>
                                    <input id="emp_id" name="emp_id" value="{{ old('emp_id') }}" placeholder="Employee Id" class="form-control @error('emp_id') is-invalid @enderror" type="text" required>

                                    @error('emp_id')
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
                                            <i class="fa fa-info-circle"></i>
                                        </span>
                                    </div>
                                    <textarea id="remark" name="remark" placeholder="Remark" class="form-control @error('remark') is-invalid @enderror">{{ old('remark') }}</textarea>

                                    @error('remark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-mobile"></i>
                                        </span>
                                    </div>
                                    <input id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Hand Phone" class="form-control @error('mobile') is-invalid @enderror" type="tel">

                                    @error('mobile')
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
                                            <i class="fa fa-volume-control-phone"></i>
                                        </span>
                                    </div>
                                    <input id="ext_num" name="ext_num" value="{{ old('ext_num') }}" placeholder="Phone Ext" class="form-control @error('ext_num') is-invalid @enderror" type="tel" required>

                                    @error('ext_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                   <div class="row">
                       <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-danger btn-sm">Create Asset</button>
                       </div>
                   </div>
                </form>
                {{-- End Form Create User --}}
            </div>


        </div>

    </div>
</div>
@endsection

@section('custom-js')
    <script>
    </script>
@endsection
