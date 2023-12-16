  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Produk</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="col-lg-12">
            <?php $this->load->view("part/alert");?>
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Data Produk</h5>
              </div>
              <div class="card-body">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus fa-sm"></i> Tambah</button>
                <?php $this->load->view("produk/tambah") ?>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th colspan=2>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($produk as $p){ ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p->nama_produk ?></td>
                                <td><?= $p->nama_kategori ?></td>
                                <td><?= $p->harga ?></td>
                                <td><button onclick="getEdit(`<?= $p->id_produk ?>`,`<?= $p->nama_produk ?>`,`<?= $p->kategori_id ?>`,`<?= $p->harga ?>`,`<?= $p->status_id ?>`)" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal"><i class="fas fa-sm fa-edit"></i>Edit</button></td>
                                <td><button onclick="getHapus(`<?= $p->id_produk ?>`,`<?= $p->nama_produk ?>`)" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusModal"><i class="fas fa-sm fa-trash"></i>Hapus</button></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php $this->load->view("produk/edit") ?>
                  </div>
                </div>
              </div>
              <?php $this->load->view("produk/hapus") ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

