<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_pengguna')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Pengguna<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pengguna" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_pengguna" required="required" placeholder="Isi Nama">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jenis_kelamin" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jenis_kelamin" required="required" placeholder="Isi Jk">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >Tanggal Lahir<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tgl_lahir" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" required="required" placeholder="Isi Tanggal">
          </div>
        </div>
       
        


        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pengguna" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>