@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cities</h1>
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
                        <a href="{{route('city.create')}}" class="btn btn-info ">Create a new
                            city</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>name</th>
                            <th>number of clients</th>
                            <th>number of advertisements</th>
                            <th>Edit</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cities as $record)
                            <tr id="remove{{$record->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->clients()->count()}}</td>
                                <td>{{$record->advertisements()->count()}}</td>
                                <td>
                                    <a href="{{route('city.edit',$record->id)}}" class="btn btn-info btn-sm">
                                        Edit</a>

                                </td>
                                <td>

                                    <a href="javascript:void(0)"
                                       onclick="deleteData('city',{{$record->id}})"
                                       class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>

                    </table>
                    {{$cities->links()}}
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection