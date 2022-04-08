@extends('layouts.admin')

@section('title')
    Detail Peserta
@endsection

@section('content')
    <!-- Main Content -->
    <div id="content">

        @include('includes.admin.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <div class="card shadow mb-4 w-100">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Peserta {{$item->firstname}} {{$item->lastname}}</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Username</th>
                                <td>{{$item->username}}</td>
                            </tr>    
                            <tr>
                                <th>Password</th>
                                <td>{{$item->password}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$item->name}}</td>
                            </tr>  
                            <tr>
                                <th>No. Whatsapp</th>
                                <td>{{$item->wa}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$item->email}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$item->status}}</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col">
                                <a href="{{route('peserta.index')}}" class="btn btn-secondary btn-sm">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection