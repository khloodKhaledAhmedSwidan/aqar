@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Rent Period</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->

                <div class="container">
                    <!-- Left col -->
                    <div class="row">
                        <a href="{{route('rent-period.create')}}" class="btn btn-info ">Create a new
                            Interval</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Interval</th>
                            <th>number of advertisements</th>
                            <th>Edit</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rentPeriods as $record)
                            <tr id="remove{{$record->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record->interval}}</td>
                                <td>{{$record->advertisements()->count()}}</td>
                                <td>
                                    <a href="{{route('rent-period.edit',$record->id)}}" class="btn btn-info btn-sm">
                                        Edit</a>

                                </td>
                                <td>

                                    <a href="javascript:void(0)"
                                       onclick="deleteData('rent-period',{{$record->id}})"
                                       class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>

                    </table>
                    {{$rentPeriods->appends(request()->query())->links()}}
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection