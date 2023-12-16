<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="submit" action="<?= base_url("produk/tambah") ?>" method="post">
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
            <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" id="nama_produkt">
        <span class="text-danger" id="pnpt"></span>
    </div>
    <div class="col-lg-6">
        <label>Kategori Produk</label>
        <select type="select" class="form-control" name="kategori" id="kategorit">
            <option value disabled selected>Pilih Kategori</option>
            <?php foreach($kategori as $k){ ?>
                <option value="<?= $k->id_kategori ?>"><?= $k->nama_kategori ?></option>
                <?php } ?>
            </select>
            <span class="text-danger" id="pkt"></span>
        </div>
        <div class="col-lg-6">
            <label>Harga Produk</label>
            <input type="text" class="form-control" name="harga" id="hargat">
            <span class="text-danger" id="pht"></span>
        </div>
        <div class="col-lg-6">
            <label>Status Produk</label>
            <select type="select" class="form-control" name="status" id="statust">
            <option value disabled selected>Pilih Status</option>
            <?php foreach($status as $s){ ?>
            <option value="<?= $s->id_status ?>"><?= $s->nama_status?></option>
            <?php } ?>
        </select>
        <span class="text-danger" id="pst"></span>
        </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="validationt()" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    function validationt(){
        var nama,harga,kategori,status,number;
        nama = document.getElementById('nama_produkt').value;
        kategori = document.getElementById('kategorit').value;
        status = document.getElementById('statust').value;
        harga=document.getElementById('hargat').value;
        number = /^[0-9]+$/;
        if(nama==""){
            document.getElementById("pnpt").innerHTML = "field nama produk tidak boleh kosong";
        }else{
            document.getElementById("pnpt").innerHTML = "";
        }
        if(kategori==""){
            document.getElementById("pkt").innerHTML = "field kategori produk tidak boleh kosong";
        }else{
            document.getElementById("pkt").innerHTML = "";
        }
        if(status==""){
            document.getElementById("pst").innerHTML = "field status produk tidak boleh kosong";
        }else{
            document.getElementById("pst").innerHTML = "";
        }
        if(!harga.match(number)){
            document.getElementById("pht").innerHTML = "field harga harus angka";
        }else{
            document.getElementById("pht").innerHTML = "";
        }
        if(nama!="" && kategori!="" && status!="" && harga.match(number)){
            document.getElementById('submit').submit();
        }
    }
</script>