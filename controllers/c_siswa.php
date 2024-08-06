<?php

include_once '../models/m_siswa.php';

//object 
$siswa = new siswa();

if (isset($_POST['tambah']) || isset($_POST['update'])) {
    $id = $_POST['id_siswa'];
    $nama = $_POST['nama_siswa'];
    $jk = $_POST['jk_siswa'];
    $alamat = $_POST['alamat_siswa'];

    if ($_GET['aksi'] == 'tambah') {
        $result = $siswa->input($id, $nama, $jk, $alamat);

        if ($result) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/siswa/tampil_data.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambah');window.location='../views/siswa/tampil_data.php'</script>";
        }
    } elseif ($_GET['aksi'] == 'update') {
        $result = $siswa->update($id, $nama, $jk, $alamat);
        if ($result) {
            echo "<script>alert('Data Berhasil Diubah');window.location='../views/siswa/tampil_data.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Diubah');window.location='../views/siswa/tampil_data.php'</script>";
        }
    }
} else {
    if ($_GET['aksi'] == 'hapus') {
        $id = $_GET['id_siswa'];
        $result = $siswa->hapus($id);

        if ($result) {
            echo "<script>alert('Data Berhasil Dihapus');window.location='../views/siswa/tampil_data.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Dihapus');window.location='../views/siswa/tampil_data.php'</script>";
        }
    }
}
