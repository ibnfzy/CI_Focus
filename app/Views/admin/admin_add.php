<?= $this->extend('admin/base'); ?>
<?= $this->section('content'); ?>
<!-- CODE HERE -->
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-title pb-2">
        <button class="btn" onclick="history.back()">
          <i class="ace-icon fa fa-undo bigger-110"></i>
          Kembali
        </button>
      </div>

      <div class="card-body">
        <?= form_open('U/Admin'); ?>
        <div class="col-lg-6">
          <div class="form-group">
            <label>Fullname</label>
            <?= form_input('fullname', '', [
              'class' => 'form-control',
              'placeholder' => 'Masukkan nama lengkap'
            ]); ?>
          </div>
          <div class="form-group">
            <label>Username</label>
            <?= form_input('username', '', [
              'class' => 'form-control',
              'placeholder' => 'Masukkan username'
            ]); ?>
          </div>
          <div class="form-group">
            <label>Password</label>
            <?= form_input('password', '', [
              'class' => 'form-control',
              'placeholder' => 'Masukkan Password'
            ], 'password'); ?>
          </div>
          <div class="form-group">
            <label>Konfirmasi Password</label>
            <?= form_input('konfirmasiPassword', '', [
              'class' => 'form-control',
              'placeholder' => 'Konfirmasi Password'
            ], 'password'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>