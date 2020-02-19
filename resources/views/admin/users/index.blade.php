@extends('admin\layouts\main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Users</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="container">
                    <div>
                        <a href="{{route('user.create')}}" class="btn btn-info ">Create a user</a>
                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>name</th>
                            <th>email</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $record)
                            <tr id="remove{{$record->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->email}}</td>

                                <td>
                                    @foreach($record->roles as $role)

                                        <li>

                                            {{$role->display_name}}
                                        </li>

                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('user.edit',$record->id)}}" class="btn btn-info btn-sm">
                                        Edit</a>

                                </td>


                                <td>

                                    <a href="javascript:void(0)" onclick="deleteData('user',{{$record->id}})"
                                       class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>

                    </table>
                    {{$users->links()}}

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection