@extends('admin\layouts\main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Questions</h1>

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
                    @if(count($questions))
                        <div>
                            <form method="get">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="name" class="form-control float-right"
                                           placeholder="Search for question or phone">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
                                        </button>
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
                                <th>question</th>
                                <th>show</th>
                                <th>Reply</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $record)
                                <tr id="remove{{$record->id}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$record->name}}</td>
                                    <td>{{$record->phone}}</td>
                                    <td>{{$record->email}}</td>
                                    <td>{{$record->ques}}</td>
                                    <td>
                                        <a href="{{route('question.show',$record->id)}}" class="btn btn-info btn-sm">
                                            show</a>

                                    </td>
                                    <td>
                                        <a href="{{route('question.edit',$record->id)}}" class="btn btn-primary btn-sm">
                                            reply</a>

                                    </td>
                                    <td>

                                        <a href="javascript:void(0)"
                                           onclick="deleteData('question',{{$record->id}})"
                                           class="btn btn-danger btn-sm">Delete</a>

                                    </td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                        {{$questions->appends(request()->query())->links()}}
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