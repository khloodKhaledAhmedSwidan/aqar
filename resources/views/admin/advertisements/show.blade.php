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
                            <th>realty type</th>
                            <td>{{optional($advertisement->realtyType)->name}}</td>
                        </tr>

                        <tr>
                            <th>name</th>
                            <td>{{$advertisement->name}}</td>

                        </tr>

                        <tr>
                            <th>phone</th>
                            <td>{{$advertisement->phone}}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{$advertisement->email}}</td>
                        </tr>
                        <tr>
                            <th>price</th>
                            <td>{{$advertisement->price}}</td>
                        </tr>
                        <tr>
                            <th>space</th>
                            <td>{{$advertisement->space}}</td>
                        </tr>
                        <tr>
                            <th>number of room</th>
                            <td>{{$advertisement->num_of_room}}</td>
                        </tr>
                        <tr>
                            <th>number of hole</th>
                            <td>{{$advertisement->num_of_hole}}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            @if($advertisement->status == 0)
                                <td>Single</td>
                            @else
                                <td>married</td>
                            @endif
                        </tr>
                        <tr>
                            <th>description</th>
                            <td><textarea class="border-0 col-xl-11">{{$advertisement->description}}</textarea></td>
                        </tr>
                        <tr>
                            <th>floor</th>
                            <td>{{$advertisement->floor}}</td>
                        </tr>
                        <tr>
                            <th>number of bathroom</th>
                            <td>{{$advertisement->num_of_bathroom}}</td>
                        </tr>
                        <tr>
                            <th>electric_elevator</th>
                            @if($advertisement->electric_elevator == 0)
                                <td> does not have electric elevator</td>
                            @else
                                <td>have electric elevator<</td>
                            @endif
                        </tr>
                        <tr>
                            <th>date</th>
                            <td>{{$advertisement->date}}</td>
                        </tr>

                        <tr>
                            <th>number is watched</th>
                            <td>{{$advertisement->is_watch}}</td>
                        </tr>
                        <tr>
                            <th>address</th>
                            <td>{{$advertisement->address}}</td>
                        </tr>
                        <tr>
                            <th>rentPeriod</th>
                            <td>{{optional($advertisement->rentPeriod)->interval}}</td>
                        </tr>
                        <tr>
                            <th>city</th>
                            <td>{{optional($advertisement->city)->name}}</td>
                        </tr>
                        <tr>
                            <th>realty type</th>
                            <td>{{optional($advertisement->realtyType)->name}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <a class="btn btn-info" href="{{route('advertisement.index')}}">All Advertisements</a>
                </div>

            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection