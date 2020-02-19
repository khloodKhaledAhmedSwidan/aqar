@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">edit role</h1>
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
                    {!! Form::model($role,['method'=>'PATCH','route'=>['role.update',$role->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('name','Name Of Role') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('display_name','Name') !!}
                        {!! Form::text('display_name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','description') !!}
                        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">

                        {!! Form::label('permission_list','permission') !!}
                        <br>
                        <input id="selectAll" type="checkbox">
                        <label for='selectAll'>Select All</label>
                        <br>
                        @foreach($permission as $Permission)

                            <label class="checkbox-inline col-sm-3">
                                <input type="checkbox"  name="permission_list[]" value="{{$Permission->id}}"
                                       @if($role->hasPermission($Permission->name))
                                       checked
                                        @endif

                                > {{$Permission->display_name}}
                            </label>
                        @endforeach

                    </div>
                    <div class="form-group">
                        {!! Form::submit('Edit Role',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @push('scripts')
        <script>
            $("#selectAll").click(function(){
                $("input[type=checkbox]").prop('checked', $(this).prop('checked'));

            });
        </script>
    @endpush
@endsection