@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Reply to the question  </h1>

                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="container">

                    <div>@include('admin.includes.errors')</div>
                    {!! Form::model($question,['method'=>'PATCH','action'=>['Admin\QuestionController@update',$question->id]]) !!}

                    <div class="form-group">

                  <b>{{$question->ques}}</b>
                    </div>

                    <div class="form-group">
                        {!! Form::label('answer',' answer') !!}
                        {!! Form::text('answer',null,['class'=>'form-control','required'=>'']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('reply',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection