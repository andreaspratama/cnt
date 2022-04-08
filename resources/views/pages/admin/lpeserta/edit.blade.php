@extends('layouts.admin')

@section('title')
    Edit Peserta
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
                        <h6 class="m-0 font-weight-bold text-primary">Edit Peserta</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('peserta.update', $item->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$item->name}}">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$item->username}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" value="{{$item->password}}">
                            </div>
                            <div class="form-group">
                                <label for="wa">No. Whatsapp</label>
                                <input type="text" class="form-control" name="wa" value="{{$item->wa}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$item->email}}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                  <option>-- Select --</option>
                                  <option value="Confirm" @if($item->status == 'Confirm') selected @endif>Confirm</option>
                                  <option value="Pending" @if($item->status == 'Pending') selected @endif>Pending</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('peserta.index')}}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection