<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pengguna')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pengguna ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Nama Pengguna<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pengguna" name="nama_pengguna" placeholder="Isi Nama" required="required" class="form-control col-12" value="<?= $ferdi->nama_pengguna?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="Isi JK" required="required" class="form-control col-12" value="<?= $ferdi->jenis_kelamin?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Lahir<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Isi Nama" required="required" class="form-control col-12" value="<?= $ferdi->tgl_lahir?>">
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
