<div class="card">
    <div class="card-body row">
        <div class="card-tittle h3 col-8">Data Mata Diklat</div>
        <div class="col-4 mb-2">  
            <a href="?m=matadiklat&s=tambah" class="btn btn-md btn-primary float-end">Tambah</a>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Mata Diklat</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "setting.php";
                $sql = "SELECT * FROM matadiklat";
                $result = mysqli_query(mysql: $koneksi, query:$sql);
                if ($r = mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc(result:$result)) {
                        echo '<tr> 
                <td>' . $no . '</td>
                <td>' . $r['kode'] . '</td>
                <td>' . $r['matadiklat'] . '</td>
                <td>' . $r['sks'] . '</td>
                <td>
                <a href="?m=matadiklat&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>
                <a href="?m=matadiklat&s=hapus&id=' .$r['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm 
                (\'Apakah anda yakin?\')">Hapus</a>
                </td>
                </tr>';
                        $no++;
                    }
                } else {
                    echo '<tr>
                <td colspan="5" align"center">Data Kosong</td>
        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>