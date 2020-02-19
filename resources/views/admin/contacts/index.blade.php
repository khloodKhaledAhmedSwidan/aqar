@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Contacts</h1>

                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="container">

                    <!-- Left col -->
                    @if(count($contacts))
                        <div>
                        <form method="get">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="name" class="form-control float-right" placeholder="Search for phone or message title">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>title</th>
                            <th>show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $record)
                            <tr id="remove{{$record->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->phone}}</td>
                                <td>{{$record->email}}</td>
                                <td>{{$record->title}}</td>
                                <td>
                                    <a href="{{route('contact.show',$record->id)}}" class="btn btn-info btn-sm">
                                        show</a>

                                </td>
                                <td>

                                    <a href="javascript:void(0)"
                                       onclick="deleteData('contact',{{$record->id}})"
                                       class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>

                    </table>
                    {{$contacts->appends(request()->query())->links()}}
@else
                       <div class="text-center"> <b class="table-hover">NO DATA</b></div>
                    @endif
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection