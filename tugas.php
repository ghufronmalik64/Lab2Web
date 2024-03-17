<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas WEB 3</title>
</head>
<body>
    <h1>Form Input</h1>
    <form action="" method="POST" name="form1">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="25"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tl" size="25"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>
                    <select name="job">
                        <option value="Pedagang">Tukang Pecel</option>
                        <option value="Dokter">Apoteker</option>
                        <option value="Aktris">Seniman</option>
                        <option value="Super Hero">Housewife</option>
                        <option value="Pejabat">Ketua RW</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="spn">
                </td>
            </tr>
        </table>
        </form>
</body>

<?php 
if(isset($_POST['spn'])) {
    $nama=$_POST['nama'];
    $tl=$_POST['tl'];
    $job=$_POST['job'];

?>

<h1>HASIL</h1>
<table border="1">
    <tr>
        <td>NO</td>
        <td>Nama</td>
        <td>Usia</td>
        <td>Pekerjaan</td>
        <td>Gaji</td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $nama; ?></td>
        <td><?php echo "22"; ?></td>
        <td><?php echo $job; ?></td>
        <td><?php echo "45.000.000"; ?></td>
    </tr>
<?php
}
?>

</table>
</html>