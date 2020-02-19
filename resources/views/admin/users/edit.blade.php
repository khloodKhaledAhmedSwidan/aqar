@extends('admin\layouts\main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit user</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="container">
<div>@include('admin.includes.errors')</div>
                    {!! Form::model($user,['method'=>'PATCH','action'=>['Admin\UserController@update',$user->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Email') !!}
                        {!! Form::email('email',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id','Role') !!}
                        {!! Form::select('role_id[]',$role,null,
                        [
                        'class'=>'form-control',
                        'multiple'=>'multiple'
                        ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password','Password') !!}
                        {!! Form::password('password',['class'=>'awesome form-control']) !!}
                    </div>



                    <div class="form-group">
                        {!! Form::submit('Edit user',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </section>

    </div>


@endsection