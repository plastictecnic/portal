@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Create Incident Category</div>
            <div class="col-md-6 text-right">
                <a href="{{route('incident')}}" class="btn btn-outline-danger btn-sm" title="Incident">
                    <i class="fa fa-list-ul" aria-hidden="true"></i> Back to incident list
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
                <form action="{{ route('inc-cat.store') }}" method="post" class="needs-validation set-font-size">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-cube"></i>
                                        </span>
                                    </div>

                                    <select name="incident_group_name" class="custom-select @error('incident_group_name') is-invalid @enderror" required>
                                        <option value="">Choose Group</option>
                                        <option value="Account Access">Account Access</option>
                                        <option value="Network & Internet Connection">Network & Internet Connection</option>
                                        <option value="Email">Email</option>
                                        <option value="Server">Server</option>
                                        <option value="Warranty / Claim / Service Repair">Warranty / Claim / Service Repair</option>
                                        <option value="Devices">Devices</option>
                                        <option value="SAP">SAP</option>
                                        <option value="Application">Application</option>
                                        <option value="PBX">PBX</option>
                                        <option value="Others">Others</option>
                                    </select>

                                    @error('incident_group_name')
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
                                            <i class="fa fa-child"></i>
                                        </span>
                                    </div>

                                    <input id="inc_cat_group_member" name="inc_cat_group_member" value="{{ old('inc_cat_group_member') }}" placeholder="Group Member" class="form-control @error('inc_cat_group_member') is-invalid @enderror" type="text" required>

                                    @error('inc_cat_group_member')
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
                            <button type="submit" class="btn btn-danger btn-sm">Create Incident Category</button>
                       </div>
                   </div>
                </form>
                {{-- End Form Create User --}}
            </div>


        </div>

        {{-- Tables --}}
        {{-- some gap --}}
        <div class="mt-2"></div>

        <table class="table table-sm set-font-size">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 50%">Groups</th>
                    <th style="width: 50%">Members</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inc_cats as $inc_cat)
                    <tr>
                        <td>{{ $inc_cat->incident_group_name }}</td>
                        <td>{{ $inc_cat->inc_cat_group_member }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('custom-js')
    <script>
    </script>
@endsection
