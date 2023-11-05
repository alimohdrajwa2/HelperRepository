@extends('layouts.app')
@section('content')

    <div class="page-wrapper">

        <div class="card">
            <div class="card-header text-right">

                <h2 class="card-title text-left">Role Management</h2>

                <span class="text-right">

                                    @can('role-create')
                        <a class="btn btn-success text-right" href="{{ route('roles.create') }}"> Create New Role</a>
                    @endcan


                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                    @endif
                                </span>
            </div>


            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info"
                               href="{{ route('roles.show',$role->id) }}">Show</a>
                            @can('role-edit')
                                <a class="btn btn-primary"
                                   href="{{ route('roles.edit',$role->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </table>


            {!! $roles->render() !!}

        </div>

    </div>
@endsection
