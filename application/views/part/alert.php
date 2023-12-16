<?php 
if($this->session->flashdata('berhasil')){?>
    <div id="berhasil" onload="time()">
        <div class="alert alert-success alert-dismissible" role="alert">
            <i class="bi bi-check-circle-fill"></i> <?= $this->session->flashdata('berhasil') ?>
        </div>
    </div>
    <script>
        const waktu = setTimeout(time, 5000);

        function time() {
            document.getElementById('berhasil').innerHTML = '';
        }
    </script>
<?php } ?>
<?php 
if($this->session->flashdata('gagal')){?>
    <div id="gagal" onload="time()">
        <div class="alert alert-success alert-dismissible" role="alert">
            <i class="bi bi-check-circle-fill"></i> <?= $this->session->flashdata('gagal') ?>
        </div>
    </div>
    <script>
        const waktu = setTimeout(time, 5000);

        function time() {
            document.getElementById('gagal').innerHTML = '';
        }
    </script>
<?php } ?>