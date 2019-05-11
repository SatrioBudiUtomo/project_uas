@extends('layouts.app')

@section('section')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Penyewaan</h3>
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
                            <th> Nama Mahasiswa </th>
                            <th> NIM </th>
                            <th> Tanggal Sewa </th>
                            <th> Tanggal Selesai </th>
                            <th> Action </th>
                        </tr>
                        @foreach($penyewaan as $p)
                            <tr>
                                <td> {{$p['nama_ruangan']}} </td>
                                <td> {{$p['nama_mahasiswa']}} </td>
                                <td> {{$p['nim']}} </td>
                                <td> {{$p['tgl_sewa']}} </td>
                                <td> {{$p['tgl_selesai']}} </td>
                                <td> 
                                    <button class="btn btn-warning openDialog" data-id="{{$p['id_penyewaan']}}" data-toggle="modal" data-target="#modal-edit"> <i class="fa fa-edit">  </i> </button>
                                    <a class="btn btn-danger" href="sewa/delete/{{$p['id_penyewaan']}}"> <i class="fa fa-trash"> </i> </a>
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
                <h4 class="modal-title">Menambah Daftar Penyewa</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ruangan</label>
                                <select name="nama_ruangan" id="" class="form-control">
                                    @foreach($ruangan as $r)
                                        <option value="{{$r['nama_ruangan']}}">{{$r['nama_ruangan']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                <input type="text" name="nama_mahasiswa" required="true" class="form-control" id="exampleInputPassword1" placeholder="Nama Mahasiswa">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIM</label>
                                <input type="text" name="nim" required="true" class="form-control" id="exampleInputPassword1" placeholder="NIM">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Sewa</label>
                                <input type="date" name="tgl_sewa" required="true" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Selesai</label>
                                <input type="date" name="tgl_selesai" required="true"  class="form-control" id="exampleInputPassword1">
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
                <h4 class="modal-title">Edit Daftar Penyewaan</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                        <div class="form-group">
                                <input type="hidden" name="id_penyewaan" class="form-control" id="id_penyewaan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ruangan</label>
                                <select name="nama_ruangan" id="" class="form-control">
                                    @foreach($ruangan as $r)
                                        <option value="{{$r['nama_ruangan']}}">{{$r['nama_ruangan']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                <input type="text" name="nama_mahasiswa" required="true"  class="form-control" id="exampleInputPassword1" placeholder="Nama Mahasiswa">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIM</label>
                                <input type="text" name="nim" required="true" class="form-control" id="exampleInputPassword1" placeholder="NIM">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Sewa</label>
                                <input type="date" name="tgl_sewa" required="true" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Selesai</label>
                                <input type="date" name="tgl_selesai" required="true" class="form-control" id="exampleInputPassword1">
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