@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome, to your home !!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- ETA size 750x300 --}}
                    <img class = "img-responsive" width="100%" src="https://via.placeholder.com/750x300/f24e35/FFFFFF?text=plastictecnic.com" alt="test">



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
