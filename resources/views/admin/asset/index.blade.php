@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Asset Management</div>
            <div class="col-md-6 text-right">
                <a href="{{ route('asset.create') }}" class="btn btn-outline-danger btn-sm" title="Add Asset">
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
                        @foreach ($assets as $asset)
                            <tr>
                                <td>{{ $asset->sn }}</td>
                                <td>
                                    @foreach ($asset->user as $user)
                                        {{ $user->name }}
                                    @endforeach
                                </td>
                                <td>{{ $asset->remark }}</td>
                                <td>{{ $asset->updated_at->format('d-m-Y') }}</td>
                                <td class="">
                                    <a href="#" class="btn btn-outline-default btn-sm" title="Download PDF">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </a>

                                    <a target="_blank" href="{{ Storage::url($asset->pdf) }}" class="btn btn-outline-secondary btn-sm" title="Download Bellarc">
                                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    </a>

                                    <a href="{{ '' }}" class="btn btn-outline-info btn-sm" title="Edit Assets">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>

                                    <a href="{{ route('asset.assign.user', $asset->id) }}" class="btn btn-outline-warning btn-sm" title="Assign User">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </a>

                                    <form class="d-inline" action="{{ route('asset.delete', $asset->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
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
