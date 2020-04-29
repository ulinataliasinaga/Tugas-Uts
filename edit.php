<h3> Form Edit Data Mahasiswa</h3>
<hr>
<?php
include "konek.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE npm='$_GET[npm]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form method="post" action="">
    <table>
        <tr>
            <td>NPM</td>
            <td><Input type="text" name="txtNpm" value="<?php echo $e['npm']; ?>"></td>
        </tr>
         <tr>
            <td>Nama Mahasiswa</td>
            <td><Input type="text" name="txtNama" size="40" value="<?php echo $e['nama']; ?>"></td>
        </tr>
         <tr>
            <td>Semester</td>
            <td><input type="text" name="txtSemester" size="60"  value="<?php echo $e['semester']; ?>"></td>
        </tr>
        <tr>
             <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $update = mysqli_query($konek, "UPDATE mahasiswa SET nama='$_POST[txtNama]',
                                                        semester='$_POST[txSemester]',
                                                        WHERE npm='$_POST[txtNpm]'");

    if($update){
        header('location:data.php');
    }else{
        echo "Gagal mengupdate data..."; 
    }
}
?>