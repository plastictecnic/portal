@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Incident Management</div>
            <div class="col-md-6 text-right">
                <a href="{{ route('inc-cat.create') }}" class="btn btn-outline-danger btn-sm" title="Add Category">
                    <i class="fa fa-cube" aria-hidden="true"></i>
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


                <table id="ticket_list" class="display">
                    <thead>
                        <tr>
                            <th>#Ticket</th>
                            <th>Subject</th>
                            <th>Status</th>
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
            $('#ticket_list').DataTable({
                responsive: true,
                scroller:   true
            });
        });
    </script>
@endsection
