@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Incident Management</div>
            <div class="col-md-6 text-right">
                <a href="{{ route('asset.create') }}" class="btn btn-outline-danger btn-sm" title="Add Category">
                    <i class="fa fa-plus" aria-hidden="true"></i>
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

        @if (session('alert'))
            <div class="alert alert-danger" role="alert">
                {{ session('alert') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">


                <table id="asset_list" class="display">
                    <thead>
                        <tr>
                            <th>Asset Id</th>
                            <th>End User</th>
                            <th>Remarks</th>
                            <th>Modified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#asset_list').DataTable({
                responsive: true,
                scroller:   true
            });
        });
    </script>
@endsection
