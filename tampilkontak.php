<h2>List Daftar Kontak</h2>
<table border="1">
    <tr><th>NO</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
    <?php
    include 'koneksi.php';
    $daftarkontak = mysqli_query($koneksi, "SELECT * from daftarkontak");
    $no=1;
    foreach ($daftarkontak as $row) {
        $jkel = $row['jkel']=='P'?'Perempuan':'Laki laki';
        echo "<tr>
        <td>$no</td>
        <td>".$row['Nama']."</td>
        <td>".$jkel."</td>
        <td>".$row['Email']."</td>
        <td>".$row['Alamat']."</td>
        <td>".$row['Kota']."</td>
        <td>".$row['Pesan']."</td>
        </tr>";
        $no++;
    }
    ?>
</table>