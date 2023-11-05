@extends('layouts.app')
@section('content')
    <div class="page-wrapper">

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2> Add New User</h2>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control'. ( $errors->has('name') ? ' is-invalid' : '' ))) !!}
                        </div>
                        @if ($errors->has('name'))
                            <ul>
                                @foreach ($errors->get('field_name') as $error)
                                    <span class="text text-danger">{{ $error }}</span>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control'. ( $errors->has('email') ? ' is-invalid' : '' ))) !!}
                        </div>
                        @if ($errors->has('email'))
                            <ul>
                                @foreach ($errors->get('email') as $error)
                                    <span class="text text-danger">{{ $error }}</span>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Password:</strong>
                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control'. ( $errors->has('password') ? ' is-invalid' : '' ))) !!}
                        </div>
                        @if ($errors->has('password'))
                            <ul>
                                @foreach ($errors->get('password') as $error)
                                    <span class="text text-danger">{{ $error }}</span>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Confirm Password:</strong>
                            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control'. ( $errors->has('confirm-password') ? ' is-invalid' : '' ))) !!}
                        </div>
                        @if ($errors->has('confirm-password'))
                            <ul>
                                @foreach ($errors->get('confirm-password') as $error)
                                    <span class="text text-danger">{{ $error }}</span>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Role:</strong>
                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple'. ( $errors->has('roles[]') ? ' is-invalid' : '' ))) !!}
                        </div>
                        @if ($errors->has('roles[]'))
                            <ul>
                                @foreach ($errors->get('roles[]') as $error)
                                    <span class="text text-danger">{{ $error }}</span>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection
