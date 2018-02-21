<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="panel-title">Tambah Admin</h3>
      </div>
      <div class="col-lg-6">
        <a href="?laman=admin">
        <button type="button" class="btn btn-info pull-right">Kembali</button>
        </a>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <form action="user/act_add_user.php" method="post">
      <div class="row">
        <div class="col-lg-3">
          <h5>Username</h5>
        </div>
        <div class="col-lg-9">
          <input name="user" id="form" type="text" required/>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h5>Nama</h5>
        </div>
        <div class="col-lg-9">
          <input name="nama" id="form" type="text" required/>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h5>Password</h5>
        </div>
        <div class="col-lg-9">
          <input name="pass" id="form" type="password" required/>
        </div>
      </div><div class="row">
        <div class="col-lg-3">
          <h5>Email</h5>
        </div>
        <div class="col-lg-9">
          <input name="email" id="form" type="email" required/>
        </div>
      </div>
      <input name="save" type="submit" class="btn btn-primary" value="Tambah Admin" />
      <input name="save" type="reset" class="btn btn-success" value="Reset" />
    </form>
  </div>
  <div class="panel-footer"></div>
</div>
