@extends('admin\layouts\main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Messages</h1>

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
                    @if(count($messages))

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>client</th>
                                <th>advertisement</th>
                                <th>content of message</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $record)
                                <tr id="remove{{$record->id}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{optional($record->client)->name}}</td>
                                    <td>{{optional($record->advertisement)->name}}</td>
                                    <td>{{$record->content}}</td>

                                    <td>

                                        <a href="javascript:void(0)"
                                           onclick="deleteData('message',{{$record->id}})"
                                           class="btn btn-danger btn-sm">Delete</a>

                                    </td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                        {{$messages->links()}}
                    @else
                        <div class="text-center"><b class="table-hover">NO DATA</b></div>
                    @endif
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection