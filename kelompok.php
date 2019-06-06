<div class='page-header'>
    <h1>Kelompok</h1>
</div>
<div class='panel panel-default'>
    <div class='panel-heading'>        
        <form class='form-inline'>
            <input type='hidden' name='m' value='kelompok' />
            <div class='form-group'>
                <input class='form-control' type='text' placeholder='Pencarian. . .' name='q' value='' />
            </div>
            <div class='form-group'>
                <button class='btn btn-success'><span class='glyphicon glyphicon-refresh'></span> Refresh</a>
            </div>
            <div class='form-group'>
                <a class='btn btn-primary' href='?m=kelompok_tambah'><span class='glyphicon glyphicon-plus'></span> Tambah</a>
            </div>
        </form>
    </div>
    <table class='table table-bordered table-hover table-striped'>
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Kelompok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include 'koneksi.php';

            $sql = $db->query("SELECT * FROM kelompok");
            while ( $r = $sql->fetch_array()) {
               echo "<tr>
                        <td>$r[kode]</td>
                        <td>$r[nama_kelompok]</td>
                        <td>
                            <a class='btn btn-xs btn-warning' href='?m=kelompok_ubah&ID=$r[Kode]'><span class='glyphicon glyphicon-edit'></span></a>
                            <a class='btn btn-xs btn-danger' href='aksi.php?act=kelompok_hapus&ID=$r[Kode]' onclick='return confirm('Hapus data?')'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>";
            }
        ?>
      </tbody>  
        </table>
</div> 