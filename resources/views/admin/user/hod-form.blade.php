@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Assign Department H.O.D</div>
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
                <form action="{{ route('hod') }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="hod" class="custom-select @error('hod') is-invalid @enderror" required>
                                    <option value="">Select H.O.D</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('hod')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select multiple name="department[]" class="custom-select @error('department') is-invalid @enderror" required>
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-danger btn-sm">Assign H.O.D</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <table class="table table-sm set-font-size">
                    <thead class="thead-dark">
                        <tr>
                            <th>Department</th>
                            <th>Head of Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td> {{ $department->name }} </td>
                                <td>
                                    @foreach ($department->hod as $hod)
                                        {{$hod->name}} <br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
