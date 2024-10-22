@extends('master')

@section('content')

<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista Estudante</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dadus Estudante Ativu</h3>
            </div>
           @if(@session('sukses'))           
            <div class="alert alert-info m-2">
              {{ session('sukses') }}
            </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length">
                      <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries</label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="example1_filter" class="dataTables_filter">
                      <div class="aumenta">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                          Aumenta
                        </button>
                      </div>
                      <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th>No</th>
                  <th>Naran</th>
                  <th>Sexo</th>
                  <th>Hela Fatin</th>
                  <th>Data Moris</th>
                  <th>Foto</th>
                  <th>Aksaun</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($dadus_estudante as $dadus )           
               
                <tr role="row" class="odd">
                  <td>{{ $dadus->id_estudante }}</td>
                  <td>{{ $dadus->naran_kompletu }}</td>
                  <td>{{ $dadus->sexo }}</td>
                  <td>{{ $dadus->hela_fatin }}</td>
                  <td>{{ $dadus->data_moris }}</td>
                  <td>{{ $dadus->foto }}</td>
                  <td><a href="/estudante/hadia/"  class=" btn-sm btn-outline-info" >Hadia</a> | <a href="" class=" btn-sm btn-outline-danger">Hamos</a></td>
                </tr>
               @endforeach
              </tbody>                
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">formulario Aumenta Dadus Estudante</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/estudante/aumenta" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label class="form-label" for="">Naran Kompletu:</label>
                <input class="form-control" type="text" name="naran_kompletu" placeholder="naran kompletu" autocomplete="off" required>
                <label for="" class="form-label">Sexo: </label>
                <select name="sexo" id="" class="form-control">
                  <option value="M">Mane</option>
                  <option value="F">Feto</option>
                  <option value="S">Seluk</option>
                </select>
                <label class="form-label" for="">Hela Fatin :</label>
                <input class="form-control" type="text" name="hela_fatin" placeholder="hela fatin" required>
                <label class="form-label" for="">Data Moris :</label>
                <input class="form-control" type="date" name="data_moris" placeholder="data moris" required>
                <label class="form-label" for="">No Telefone</label>
                <input class="form-control" type="number" name="no_telefone" placeholder="no telefone" required>
                <label class="form-label" for="">Foto</label>
                <input class="form-control" type="file" name="foto" placeholder="imagen">              
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kansela</button>
                  <button type="submit" class="btn btn-success">Aumenta</button>
                </div>
              </form>
              </div>
           
          </div>
        </div>
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
  <!-- /.content-wrapper -->
 @endsection