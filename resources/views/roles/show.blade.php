@extends('layouts.app')
@section('content')

    <div class="page-wrapper">

        <div class="card">
            <div class="card-header text-right">

                <h2 class="card-title text-left"> Show Role</h2>

                <div class="card-body">

                    <div class="table-bordered">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group pull-left">
                                    <strong>Name:</strong>
                                    {{ $role->name }}
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 ">
                                <div class="form-group pull-left">
                                    <strong>Permissions:</strong>
                                    @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                            <label class="label label-success">{{ $v->name }},</label>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
