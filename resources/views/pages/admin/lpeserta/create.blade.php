@extends('layouts.admin')

@section('title')
    Tambah Peserta
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
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Peserta</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('peserta.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="wa">No. Whatsapp</label>
                                <input type="text" class="form-control" name="wa">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                  <option>-- Select --</option>
                                  <option value="Confirm">Confirm</option>
                                  <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection