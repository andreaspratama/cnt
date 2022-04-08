@extends('layouts.admin')

@section('title')
    Peserta Pending
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
                        <h6 class="m-0 font-weight-bold text-primary">Data List Peserta Pending</h6>
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
                                        @if ($i->status === 'Pending')
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$i->name}}</td>
                                                <td>{{$i->wa}}</td>
                                                <td>{{$i->email}}</td>
                                                <td>{{$i->status}}</td>
                                                <td>
                                                    <a href="#mymodal"
                                                        data-remote="{{route('showConfirm', $i->id)}}"
                                                        data-toggle="modal"
                                                        data-target="#mymodal"
                                                        data-title="Detail Peserta {{$i->firstname}}"
                                                        class="btn btn-info btn-sm">
                                                        Set Confirm
                                                    </a>
                                                </td>
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

@push('after-style')
    <link rel="stylesheet" https="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endpush

@push('after-script')
    <script>
        jQuery(document).ready(function($){
            $('#mymodal').on('show.bs.modal', function(e){
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"));
            });
        });
    </script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endpush

<div class="modal" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <i class="fa fa-spinner fa-spin"></i>
        </div>
      </div>
    </div>
</div>