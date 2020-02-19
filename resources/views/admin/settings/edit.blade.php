@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Setting</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->

                    <section class="container">
    <div>@include('admin.includes.errors')</div>
                        {!! Form::model($setting,['method'=>'PATCH','action'=>['Admin\SettingController@update',$setting->id]]) !!}
                        <div class="form-group">
                            {!! Form::label('about_us','about us') !!}
                            {!! Form::text('about_us',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('vision','vision') !!}
                            {!! Form::text('vision',null,['class'=>'form-control','required'=>'','id'=>'editor']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('mession','mession') !!}
                            {!! Form::text('mession',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('main_title','main title') !!}
                            {!! Form::text('main_title',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('acceptance','acceptance') !!}
                            {!! Form::text('acceptance',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('policie','policie') !!}
                            {!! Form::text('policie',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('behavior','behavior') !!}
                            {!! Form::text('behavior',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fb_link','facebook') !!}
                            {!! Form::text('fb_link',null,['class'=>'form-control','required'=>'']) !!}
                        </div>        <div class="form-group">
                            {!! Form::label('twitter_link','twitter') !!}
                            {!! Form::text('twitter_link',null,['class'=>'form-control','required'=>'']) !!}
                        </div>        <div class="form-group">
                            {!! Form::label('gmail_link','gmail') !!}
                            {!! Form::text('gmail_link',null,['class'=>'form-control','required'=>'']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Edit settings',['class'=>'btn btn-success']) !!}
                        </div>
                        {!! Form::close() !!}



                    </section>

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection