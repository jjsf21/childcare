<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_anak')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_anak ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Nama Anak<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_anak" name="nama_anak" placeholder="Isi Nama Anak" required="required" class="form-control col-12" value="<?= $ferdi->nama_anak?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Umur Anak<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="umur_anak" name="umur_anak" placeholder="Isi Umur Anak" required="required" class="form-control col-12" value="<?= $ferdi->umur_anak?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jk Anak<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jk_anak" name="jk_anak" placeholder="Isi Jk" required="required" class="form-control col-12" value="<?= $ferdi->jk_anak?>">
          </div>
        </div>
     


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/anak" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
