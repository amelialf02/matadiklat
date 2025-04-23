<div class="card">
    <div class="card-body row">
        <div class="card-tittle h3 col-8">Tambah Mata Diklat</div>
        <div class="col-4 mb-3">  
            <a href="?m=matadiklat&s=view" class="btn btn-md btn-primary float-end">Kembali</a>
        </div>

        <form action="?m=matadiklat&s=simpan" method="post">
            <div class="mb-2">
                <input type="number" class="form-control" name="kode" placeholder="Kode" autofocus required>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="matadiklat" placeholder="Mata Diklat" >
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="sks" placeholder="SKS" >
            </div>
            <div class="mb-2">
                <input type="reset" class="btn btn-sm btn-danger">
                <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="Simpan">
            </div>
        </form>
    </div>
</div>