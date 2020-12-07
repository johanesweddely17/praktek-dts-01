<div class="container">
    <div class="row">
        <div class="col">
        <?php foreach($user as $u){ ?>
            <form action="<?php echo base_url(). 'blog/edit'; ?>" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control" name="nim" placeholder="NIM" value="<?php echo $u->nim ?>">
                </div>
                <div class="form-group">
                    <label for="nama_mhs">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mhs" placeholder="Nama" value="<?php echo $u->nama_mhs ?>">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $u->tempat_lahir ?>">
                </div>
                <div class="form-group">
                    <label for="tenggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $u->tanggal_lahir ?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" value="<?php echo $u->jurusan ?>">
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" placeholder="Fakultas" value="<?php echo $u->fakultas ?>">
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="number" step="any" class="form-control" name="ipk" placeholder="IPK" value="<?php echo $u->ipk ?>">
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
            <?php } ?>
        </div>
    </div>
</div>