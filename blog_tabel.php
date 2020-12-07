
    <div class="container">
        <div class="card">
            <h1 class="card-header">This Is The Content</h1>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jurusan</th>
                            <th>Fakultas</th>
                            <th>IPK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        if($tb_mahasiswa->num_rows() > 0)                {                  
        foreach($tb_mahasiswa->result() as $mhs)
         {
       ?>
                        <tr>
                            <td><?php echo $mhs->NIM; ?></td>
                            <td><?php echo $mhs->Nama_mhs; ?></td>
                            <td><?php echo $mhs->tempat_lahir; ?></td>
                            <td><?php echo $mhs->tanggal_lahir; ?></td>
                            <td>
                                <?php 
                foreach ($tb_jurusan->result() as $jrs) {
               if ($jrs->id_jurusan == $mhs->jurusan_id){
                      echo $jrs->nama_jurusan;
                        }
                      } 
                      ?>
                            </td>
                            <td>
                                <?php 
                     foreach ($tb_fakultas->result() as $fak) {
                    if ($fak->id_fakultas == $mhs->fakultas_id) {
                        echo $fak->nama_fakultas;
                         }
                          } 
                       ?>
                            </td>
                            <td><?php echo $mhs->ipk; ?></td>
                            <td>
                                <a type="button" class="btn btn-primary btn-sm" href="<?php echo base_url(). 'blog/edit'; ?>">
                                    <i class="fas fa-edit"> edit</i>
                                </a>
                                <button class="btn btn-danger btn-sm" href="<?php echo base_url(). 'blog/hapus'; ?>"><i class=" fas fa-trash"> hapus</i></button>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        else
                        {
                        ?>
                        <tr>
                            <td>Not data found</td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="<?php echo base_url(). 'blog/add'; ?>" role="button">Link</a>
            </div>
        </div>