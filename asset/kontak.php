<!-- content area -->
<!-- form baru-->
<div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Tinggalkan Pesan</h3>
          <br />
        </div>
        <div class="panel-body">
          <form action="proses.php" method="post">
            <div class="form-group">
            <div class="row">

                <div class="col-md-3">
                  <div id="textform" class="textform">Nama :</div>
                </div>
                <div class="col-md-9">
                  <input type="text" name="nama" placeholder="nama" class="form-control" required/>
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="row">

                <div class="col-md-3">
                  <div id="textform" class="textform">E-mail :</div>
                </div>
                <div class="col-md-9">
                  <input type="email" name="email" placeholder="nama@nama.com" class="form-control" required/>
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="row">

                <div class="col-md-3">
                  <div id="textform" class="textform">Kritik & Saran :</div>
                </div>
                <div class="col-md-9">
                  <textarea name="pesan"  class="form-control" rows="5" required></textarea>
                </div>
              </div>
            </div>

            <input name="input" type="submit" value="Kirim" id="kirim" class="btn btn-primary" />
            <input type="reset" value="Reset" class="btn btn-danger" id="reset" />
          </form>
        </div>
        <div class="panel-footer"></div>
      </div>
</div>
