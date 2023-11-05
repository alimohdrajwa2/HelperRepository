@extends('layouts.app')
@section('content')

    <div class="page-wrapper">

                    <div class="card">
                        <div class="card-header text-right">

                            <h2 class="card-title text-left">Create New Role</h2>

                        </div>

                        <div class="card-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="table-bordered">
                                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

                                <div class="col-xs-12 col-sm-12 ">
                                    <br>
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

                                    <br>
                                    <strong>Permission:</strong>
                                    <br>
                                    <br>
                                    @foreach($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}</label>
                                        <br/>
                                    @endforeach

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                                <br>
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>

    </div>
@endsection
