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
                        <h6 class="m-0 font-weight-bold text-primary">Data List Peserta</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>No. Whatsapp</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $i)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$i->name}}</td>
                                            <td>{{$i->wa}}</td>
                                            <td>{{$i->email}}</td>
                                            <td>{{$i->status}}</td>
                                            <td>
                                                <a href="{{route('peserta.edit', $i->id)}}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{route('peserta.show', $i->id)}}" class="btn btn-info btn-sm btn-circle">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                {{-- <form action="{{route('peserta.destroy', $i->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form> --}}
                                                <a href="#" class="btn btn-danger btn-sm btn-circle delete" data-id="{{$i->id}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
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

@push('after-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" https="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endpush

@push('after-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
    <script>
        $('.delete').click(function(){
            var pegawaiid = $(this).attr('data-id');
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/"+pegawaiid+""
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
    </script>
    <script>
        @if (Session::has('status'))
          toastr.success("{{Session::get('status')}}", "Trimakasih")
        @endif
    </script>
@endpush