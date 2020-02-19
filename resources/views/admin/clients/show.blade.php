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
                            <td>{{$client->name}}</td>

                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{$client->email}}</td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td>{{$client->phone}}</td>
                        </tr>
                        <tr>
                            <th>mobile</th>
                            <td>{{$client->mobile}}</td>
                        </tr>
                        <tr>
                            <th>address</th>
                            <td>{{$client->address}}</td>
                        </tr>
                        <tr>
                            <th>city</th>
                            <td>{{optional($client->city)->name}}</td>
                        </tr>
                        <tr>
                            <th>information</th>
                            <td><textarea class="border-0 col-xl-11">{{$client->information}}</textarea></td>
                        </tr>
                        <tr>
                            <th>type</th>
                            @if($client->type == 0)
                                <td>account personal</td>
                            @else
                                <td>company</td>
                            @endif
                        </tr>
                        <tr>
                            <th>photo</th>
                            <td><img src="{{asset($client->photo)}}"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <a class="btn btn-info" href="{{route('client.index')}}">All clients</a>
                </div>

            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection