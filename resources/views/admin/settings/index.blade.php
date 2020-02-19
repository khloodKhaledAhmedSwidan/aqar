@extends('admin\layouts\main')
@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Setting</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->

                    <section class="container">
                        <div ><a href="{{route('setting.edit',$setting->id)}}" class="btn btn-info">Edit Setting</a> </div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>about us</th>
                                    <td>{{$setting->about_us}}</td>

                                </tr>
                                <tr>
                                    <th>vision</th>
                                    <td>{{$setting->vision}}</td>
                                </tr>
                                <tr>
                                    <th>mession </th>
                                    <td>{{$setting->mession}}</td>
                                </tr>


                                <tr>
                                    <th>main title </th>
                                    <td>{{$setting->main_title}}</td>
                                </tr>
                                <tr>
                                    <th>acceptance </th>
                                    <td>{{$setting->acceptance}}</td>
                                </tr>
                                <tr>
                                    <th>policie </th>
                                    <td>{{$setting->policie}}</td>
                                </tr>
                                <tr>
                                    <th>behavior </th>
                                    <td>{{$setting->behavior}}</td>
                                </tr>
                                <tr>
                                    <th>facebook </th>
                                    <td>{{$setting->fb_link}}</td>
                                </tr>
                                <tr>
                                    <th>twitter </th>
                                    <td>{{$setting->twitter_link}}</td>
                                </tr>
                                <tr>
                                    <th>gmail</th>
                                    <td>{{$setting->gmail_link}}</td>
                                </tr>

                                </tbody>
                            </table>




                    </section>

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection