<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="submite" action="<?= base_url("produk/edit") ?>" method="post">
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
            <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" id="nama_produke">
        <span class="text-danger" id="pnpe"></span>
    </div>
    <div class="col-lg-6">
        <label>Kategori Produk</label>
        <select type="select" class="form-control" name="kategori" id="kategorie">
            <option value disabled selected>Pilih Kategori</option>
            <?php foreach($kategori as $k){ ?>
                <option value="<?= $k->id_kategori ?>"><?= $k->nama_kategori ?></option>
                <?php } ?>
            </select>
            <span class="text-danger" id="pke"></span>
        </div>
        <div class="col-lg-6">
            <label>Harga Produk</label>
            <input type="text" class="form-control" name="harga" id="hargae">
            <span class="text-danger" id="phe"></span>
        </div>
        <div class="col-lg-6">
            <label>Status Produk</label>
            <select type="select" class="form-control" name="status" id="statuse">
                <option value disabled selected>Pilih Status</option>
                <?php foreach($status as $s){ ?>
                    <option value="<?= $s->id_status ?>"><?= $s->nama_status?></option>
                    <?php } ?>
                </select>
                <span class="text-danger" id="pse"></span>
            </div>
        </div>
        <input type="hidden" class="form-control" name="id_produk" id="id_produke">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="validatione()" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    function getEdit(id_produk,nama_produk,kategori_id,harga,status_id){
        document.getElementById("id_produke").value = id_produk
        document.getElementById("nama_produke").value = nama_produk
        document.getElementById("kategorie").value = kategori_id
        document.getElementById("hargae").value = harga
        document.getElementById("statuse").value = status_id
    }

    function validatione(){
        var nama,harga,kategori,status,number;
        nama = document.getElementById('nama_produke').value;
        kategori = document.getElementById('kategorie').value;
        status = document.getElementById('statuse').value;
        harga=document.getElementById('hargae').value;
        number = /^[0-9]+$/;
        if(nama==""){
            document.getElementById("pnpe").innerHTML = "field nama produk tidak boleh kosong";
        }else{
            document.getElementById("pnpe").innerHTML = "";
        }
        if(kategori==""){
            document.getElementById("pke").innerHTML = "field kategori produk tidak boleh kosong";
        }else{
            document.getElementById("pke").innerHTML = "";
        }
        if(status==""){
            document.getElementById("pse").innerHTML = "field status produk tidak boleh kosong";
        }else{
            document.getElementById("pse").innerHTML = "";
        }
        if(!harga.match(number)){
            document.getElementById("phe").innerHTML = "field harga harus angka";
        }else{
            document.getElementById("phe").innerHTML = "";
        }
        if(nama!="" && kategori!="" && status!="" && harga.match(number)){
            document.getElementById('submite').submit();
        }
    }
</script>