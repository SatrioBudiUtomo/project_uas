@extends('layouts.app')

@section('section')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ruangan</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            
                            <div class="input-group-btn">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th> Nama Ruangan </th>
                            <th> Kapasitas </th>
                            <th> Action </th>
                        </tr>
                        @foreach($ruangan as $r)
                            <tr>
                                <td> {{$r['nama_ruangan']}} </td>
                                <td> {{$r['kapasitas']}} </td>
                                <td> 
                                    <button class="btn btn-warning openDialog" data-id="{{$r['id_ruangan']}}" data-toggle="modal" data-target="#modal-edit"> <i class="fa fa-edit">  </i> </button>
                                    <a class="btn btn-danger" href="delete/{{$r['id_ruangan']}}"> <i class="fa fa-trash"> </i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Menambah Daftar Ruangan</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('ruangan')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ruangan</label>
                                <input type="text" name="nama_ruangan" required="true" class="form-control" id="book" placeholder="Nama Ruangan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kapasitas</label>
                                <input type="number" name="kapasitas" required="true" class="form-control" id="exampleInputPassword1" placeholder="Kapasitas">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Daftar Ruangan</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                        <div class="form-group">
                                <input type="hidden" name="id_ruangan" class="form-control" id="id_ruang">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ruangan</label>
                                <input type="text" name="nama_ruangan" required="true" class="form-control" id="book" placeholder="Nama Ruangan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kapasitas</label>
                                <input type="number" name="kapasitas" required="true" class="form-control" id="exampleInputPassword1" placeholder="Kapasitas">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection