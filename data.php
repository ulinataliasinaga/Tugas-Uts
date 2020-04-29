<h3>Data Mahasiswa</h3>
<hr>
<a href="input.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Semester</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "konek.php";
    $no=1;
    $SqlMhs = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY npm ASC" );

    while($d = mysqli_fetch_array($SqlMhs)){
        echo "<tr>
            <td align='center'>$no</td>
            <td>$d[npm]</td>
            <td>$d[nama]</td>
            <td>$d[semester]</td>
            <td>align='center'>
                 <a href='edit.php?npm=$d[npm]'>Edit</a> | <a href='hapus.php?npm=$d[npm]'>Hapus</a>
              </td>
        </tr>";
        $no++;
    }
    ?>

</table>


