@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Staff Directory</div>
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
            @foreach($users as $user)
                <div class="col-md-4">
                    {{-- Starting card --}}

                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img style="width:70px;height:70px;" src="{{ Storage::url($user->profile->picture_path) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        {{-- <p class="card-title"></p> --}}
                                        <p class="card-text">
                                            <a style="cursor:help;" title="{{ $user->name }}">{{ mb_strimwidth($user->name, 0, 20, '...') }}</a> <br>
                                            <small class="">{{ $user->profile->department->name }} - {{ $user->profile->designation->name }}</small> <br>
                                            <small>Extn : <strong>{{ $user->profile->ext_num }}</strong></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{-- end card --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
