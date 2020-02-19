@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Details </h1>
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

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>


                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th>name</th>
                            <td>{{$question->name}}</td>

                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{$question->email}}</td>
                        </tr>
                        <tr>
                            <th>phone </th>
                            <td>{{$question->phone}}</td>
                        </tr>
                        <tr>
                            <th>question </th>
                            <td>{{$question->ques}}</td>
                        </tr>
                        <tr>
                            <th> answer </th>
                            <td>   <textarea class=" border-0 col-xl-11"  >{{$question->answer}}</textarea></td>
                        </tr>


                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <a class="btn btn-info" href="{{route('question.index')}}">All questions</a>
                </div>

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection