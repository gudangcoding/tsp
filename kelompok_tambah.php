<div class="page-header">
    <h1>Tambah Kelompok</h1>
</div>
<form method="post" action="">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode"/>
            </div>
            <div class="form-group">
                <label>Nama Kelompok <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="simpan"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=kelompok"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </div>
    </div>
</form>
<?php 
    if (isset($_POST['simpan'])) {
        include 'koneksi.php';
        $db->query("INSERT INTO kelompok SET kode='$_POST[kode]',nama_kelompok='$_POST[nama]'");
        header('location:?m=kelompok');
    }
?>