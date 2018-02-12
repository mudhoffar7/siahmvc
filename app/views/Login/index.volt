{% extends 'template/index2.volt' %}
{% block content %}
<div class="container-fluid">
	<div class="row" style="margin-top:10em">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
			  <div class="panel-heading">Login</div>
			  <div class="panel-body">
			    <form class="form-horizontal" action="{{url("login/login")}}" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Password</label>
                        <div class="col-sm-10"> 
                          <input type="password" class="form-control" name="hp" placeholder="Masukkan password (no.hp)">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>
			  </div>
			</div>
		</div>
	</div>
</div>
{% endblock %}