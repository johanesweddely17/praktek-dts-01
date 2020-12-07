<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?php echo base_url(). 'blog/tambah'; ?>" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control" name="nim" placeholder="NIM">
                </div>
                <div class="form-group">
                    <label for="nama_mhs">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mhs" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="tenggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" placeholder="Fakultas">
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="number" step="any" class="form-control" name="ipk" placeholder="IPK">
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>