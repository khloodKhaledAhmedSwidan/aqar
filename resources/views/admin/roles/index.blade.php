@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Roles</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="container">
                    <div>  <a href="{{route('role.create')}}" class="btn btn-info ">Create a new Role</a></div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>name Display</th>
                            <th>Description</th>
                            <th>Permission</th>
                            <th>Edit</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $record)
                            <tr id="remove{{$record->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->display_name}}</td>
                                <td>{{$record->description}}</td>
                                <td>

                                    @foreach($record->permissions as $permission)
                                        <li>
                                            {{$permission->display_name}}
                                        </li>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('role.edit',$record->id)}}" class="btn btn-info btn-sm"> Edit</a>

                                </td>
                                <td>
                                    <a href="javascript:void(0)" onclick="deleteData('role',{{$record->id}})" class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach



                        </tbody>

                    </table>
                    {{$roles->links()}}

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection