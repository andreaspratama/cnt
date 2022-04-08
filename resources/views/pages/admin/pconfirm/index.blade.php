@extends('layouts.admin')

@section('title')
    Peserta
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
                <a href="{{route('peserta.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-plus mr-2"></i>Tambah Peserta</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <div class="card shadow mb-4 w-100">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data List Peserta Confirm</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>No. Whatsapp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $i)
                                        @if ($i->status === 'Confirm')
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$i->firstname}}</td>
                                                <td>{{$i->lastname}}</td>
                                                <td>{{$i->wa}}</td>
                                                <td>{{$i->jk}}</td>
                                                <td>{{$i->email}}</td>
                                                <td>{{$i->status}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection