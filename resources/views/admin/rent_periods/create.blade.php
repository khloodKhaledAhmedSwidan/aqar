@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Create new interval</h1>
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


                        <div class="container">
                            <div >@include('admin.includes.errors')</div>
                            {!! Form::open(['method'=>'POST','action'=>'Admin\RentPeriodController@store']) !!}
                            <div class="form-group">
                                {!! Form::label('interval','Interval') !!}
                                {!! Form::text('interval',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Add interval',['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}

                        </div>




                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection