@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">User Management</div>
            <div class="col-md-6 text-right">
                <a href="{{route('user.create')}}" class="btn btn-outline-danger btn-sm" title="Add User">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </a>

                <a href="{{route('role.index')}}" class="btn btn-outline-danger btn-sm" title="Add Group">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </a>

                <a href="{{route('permission.index')}}" class="btn btn-outline-danger btn-sm" title="Add Permission">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                </a>

                <a href="{{ route('hod') }}" class="btn btn-outline-danger btn-sm" title="Manage H.O.D">
                    <strong>H.O.D</strong>
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

        <table id="employee_data" class="display">
            <thead>
                <tr>
                    <th></th>
                    <th>Emp ID</th>
                    <th>Username</th>
                    <th>Dept</th>
                    <th>Designation</th>
                    <th>Extn.</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr data-child-value="{{ $user->name }} | {{ $user->email }} | {{ Storage::url($user->profile->picture_path) }}">
                        <td class="details-control"></td>
                        <td>{{ $user->profile->emp_id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->profile->department->name }}</td>
                        <td>{{ $user->profile->designation->name }}</td>
                        <td>{{ $user->profile->ext_num }}</td>
                        <td class="text-right">
                            <a href="{{ '' }}" class="btn btn-outline-info btn-sm" title="Edit User">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>

                            <form class="d-inline" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>

                            <form class="d-inline" action="{{ route('set-permission-form', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-shield" aria-hidden="true"></i></button>
                            </form>

                            <a href="#" class="btn btn-outline-secondary btn-sm" title="PDF Details">
                                <i class="fa fa-cloud-download" aria-hidden="true"></i>
                            </a>

                            <form class="d-inline" action="{{ route('change.password', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-default btn-sm"><i class="fa fa-key" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('custom-js')
    <script type="text/javascript">

        function format(value) {

            var value = value.split('|');

            var dataReturn = '<table width="100%" border="0"><tr><td>Full name:</td><td>'+value[0]+'</td><td rowspan="2"><img style="width:100px" src="'+value[2]+'" alt="'+value[0]+'" /></td></tr><tr><td>Email: </td><td>'+value[1]+'</td></tr></table>';

            return dataReturn;
        }

        $(document).ready(function () {
            var table = $('#employee_data').DataTable({
                responsive: true,
                scroller:   true,
                "columnDefs": [
                    { "orderable": false, "targets": 0 }
                ],
                "order": [[ 2, "asc" ]]
            });

            // Add event listener for opening and closing details
            $('#employee_data').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(tr.data('child-value'))).show();
                    tr.addClass('shown');
                }
            });
        });


        // $(document).ready( function () {
        //     $('#employee_data').DataTable({
        //         responsive: true,
        //         scroller:   true
        //     });
        // });
    </script>
@endsection
