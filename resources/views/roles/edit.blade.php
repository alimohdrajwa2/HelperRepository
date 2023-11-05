@extends('layouts.app')
@section('content')

    <div class="page-wrapper">

                    <div class="card">
                        <div class="card-header text-right">

                            <h2 class="card-title text-left">Edit Role</h2>

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
                                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}

                                <div class="col-xs-12 col-sm-12 ">
                                    <br>
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

                                </div>
                                <br>
                                <div class="col-xs-12 col-sm-12">
                                    <strong>Permission:</strong>
                                    <br>
                                    <br>
                                    <div class="col-xs-12 col-sm-12">
                                        @foreach($permission as $value)
                                            <input type="checkbox" class="form-check-input "
                                                   id="permission{{ $value->id }}"
                                                   name="permission[]"
                                                   value="{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                            <label class="form-check-label center"
                                                   for="permission{{ $value->id }}">{{ $value->name }}</label>
                                            <br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                                <br>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>

    </div>
    {{--
    {{--
    {{--                                                @foreach($permission as $value)--}}
    {{--
    {{--                                                                <input type="checkbox" class="form-check-input"--}}
    {{--                                                                       id="permission{{ $value->id }}"--}}
    {{--                                                                       name="permission[]"--}}
    {{--                                                                       value="{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>--}}
    {{--                                                                <label class="form-check-label"--}}
    {{--                                                                       for="permission{{ $value->id }}">{{ $value->name }}</label>--}}
    {{--                                                            </div>--}}
    {{--                                                @endforeach--}}
    {{--                                                </tbody>--}}
    {{--                                            </table>--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
    {{--                                        <button type="submit" class="btn btn-primary">Submit</button>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                {!! Form::close() !!}--}}

    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection

