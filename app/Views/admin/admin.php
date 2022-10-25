<?= $this->extend('admin/base'); ?>
<?= $this->section('content'); ?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-title pb-2">
        <a href="<?= base_url('U/Admin/new'); ?>" class="btn btn-info"><i class="fa fa-user-plus"
            aria-hidden="true"></i> Tambah Admin</a>
      </div>

      <div class="bootstrap-data-table-panel">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="bootstrap-data-table-export">
            <thead>
              <th>ID</th>
              <th>Fullname</th>
              <th>Username</th>
              <th>Login Terakhir</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php foreach ($admin as $item) : ?>
              <tr>
                <td><?= $item['id_admin']; ?></td>
                <td><?= $item['fullname']; ?></td>
                <td><?= $item['username']; ?></td>
                <td><?= $item['last_login']; ?></td>
                <td>
                  <a class="btn btn-info" href="<?= base_url('U/Admin/' . $item['id_admin'] . '/edit'); ?>"><i
                      class="fa fa-pencil-square-o"></i></a>
                  <button onclick="deleteData('<?= $item['id_admin']; ?>')" class="btn btn-danger"><i
                      class="fa fa-trash-o"></i></button>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<!-- CODE HERE -->

<script>
function deleteData(a) {
  swal({
    title: "Apa kamu yakin?",
    text: "Data akan terhapus",
    type: "warning",
    buttons: true,
    showCancelButton: true,
    dangerMode: true,
  }, function(willDelete) {
    if (willDelete) {
      $.ajax({
        method: "DELETE",
        url: "Admin/" + a,
        success: function(response) {
          swal("Data Telah Terhapus", {
            icon: "success",
          }).then(() => {
            window.location.reload()
          })
        },
        error: function(response) {
          swal("Terjadi kesalahan pada AJAX", {
            icon: "error",
          })
        }
      });
    }
  });
}
</script>
<?= $this->endSection(); ?>