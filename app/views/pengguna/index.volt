{% extends 'template/index.volt' %}
{% block content %}
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <!-- table -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>March 2017</option>
                                    <option>April 2017</option>
                                    <option>May 2017</option>
                                    <option>June 2017</option>
                                    <option>July 2017</option>
                                </select>
                            </div>
                            <h3 class="box-title">Data Pengguna</h3>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"> Tambah</i></button>

                            <div class="table-responsive">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>HP</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         {% for v in data_pengguna %}
                                         <tr>
                                            <td>{{v.id}}</td>
                                            <td>{{v.nama}}</td>
                                            <td>{{v.alamat}}</td>
                                            <td>{{v.hp}}</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit{{v.id}}"><i class="fa fa-pencil-square-o"> Edit</i></button>
                                                <a href="{{ url('pengguna/delete/' ~ v.id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"> Hapus</i></a>
                                            </td>
                                        </tr>
                                         {% endfor %}      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- End Page Content -->

        <!--modal Tambah-->

            <div id="modalTambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Pengguna</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" action="{{url("pengguna/create")}}" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Nama:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Alamat</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Hp</label>
                        <div class="col-sm-10"> 
                          <input type="number" class="form-control" name="hp" placeholder="Masukkan No.HP">
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!--modal Edit-->
             {% for v in data_pengguna %}
            <div id="modalEdit{{v.id}}" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Pengguna {{v.id}}</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" action="{{url("pengguna/edit/"~v.id)}}" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Nama:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" value="{{v.nama}}" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Alamat</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="alamat" value="{{v.alamat}}" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Hp</label>
                        <div class="col-sm-10"> 
                          <input type="number" class="form-control" name="hp" value="{{v.hp}}" >
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        {% endfor %}
{% endblock %}