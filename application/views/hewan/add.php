<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3><i class="fa fa-file-text"></i>Tambah hewan</h3>
    </div>
  </div>
 <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js" charset="utf-8"></script>

  <div class="clearfix"></div>
   <hr>
  <div class="x_panel">
    <div class="x_title">
      <h4>Hewan adopsi</h4>
      <div class="clearfix"><a type="button" class="btn btn-primary btn-sm" href="<?php echo base_url().'hewan/'?>" title="kembali"><i class="fa fa-arrow-left"></i> Kembali</a></div>
    </div>
    <div class="x_content">
      <?php
      $this->load->helper('form');
      $error = $this->session->flashdata('error');
      if($error)
      {
          ?>
          <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $error; ?>                    
          </div>
      <?php }
      $success = $this->session->flashdata('success');
      if($success)
      {
          ?>
          <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $success; ?>                    
          </div>
      <?php } ?>
      <form role="form" action="<?php echo base_url() ?>hewan/add_process" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="type">
            <option value="dog">Anjing</option>
            <option value="cat">Kucing</option>
          </select>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select class="form-control" name="gender">
            <option value="male">Jantan</option>
            <option value="female">Betina</option>
          </select>
        </div>
        <div class="form-group">
          <label for="ras">Ras</label>
          <input type="text" class="form-control" name="ras" id="ras">
        </div>
        <div class="form-group">
          <label for="umur">Umur (Tahun)</label>
          <input type="number" class="form-control" name="age" id="umur">
        </div>
        <div class="form-group">
          <label for="id_makul">Deskripsi</label>
          <textarea name="description" class="form-control ckeditor"></textarea>
        </div>
        <div class="form-group" id="file">
          <label for="file">Photo</label>
          <input type="file" class="form-control ckeditor" name="file" id="file">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Simpan</button>
      </form>
    </div>
    
  </div>
</div>



