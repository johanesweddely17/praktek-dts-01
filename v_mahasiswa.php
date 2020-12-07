<html>
<head>
<title>Belajar Web</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>    
    </tr>
    <?php foreach ($dt_mahasiswa as $row) { ?>
    <tr>
    <td> <?php echo $row->NIM ?> </td>
    <td> <?php echo $row->Nama_mhs ?> </td>
    <td> <?php echo $row->tempat_lahir ?> </td>
    <td> <?php echo $row->tanggal_lahir ?> </td>

    </tr>
    <?php } ?>
    </table>
</body>
</html>