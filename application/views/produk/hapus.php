<!-- Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="submite" action="<?= base_url("produk/hapus") ?>" method="post">
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus <b id="np"></b> ?</p>
      </div>
      <input type="hidden" id="id_produkh" name="id_produk">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    function getHapus(id_produk,nama_produk){
        document.getElementById('np').innerHTML = nama_produk;
        document.getElementById('id_produkh').value = id_produk;
    }
</script>