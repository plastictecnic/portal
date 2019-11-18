@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Ooppss !!! We are sorry</div>
            <div class="col-md-6 text-right">
            </div>
        </div>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">
                    This features are currently disabled at the moment. Please contact <a href="mailto:it_all@tecnic.com.my">IT Department</a> for further assistance.
                </p>
                <p class="text-danger">
                    You will be redirected to home page in a moment.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
    <script type="text/javascript">

        $(document).ready(function () {
            window.setTimeout(function () {
                location.href = "{{ config('app.url') }}/home";
            }, 10000);
        });

    </script>
@endsection
