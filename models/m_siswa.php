<?php
include_once '../controllers/c_koneksi.php';

class siswa
{

	function tampil_data()
	{

		$conn = new database();
		$data = mysqli_query($conn->koneksi, "select * from siswa order by id_siswa desc");
		while ($d = mysqli_fetch_object($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function tampil_data_id($id)
	{
		$conn = new database();
		$query = mysqli_query($conn->koneksi, "SELECT * FROM siswa WHERE id_siswa = $id");
		while ($row = mysqli_fetch_object($query)) {
			$hasil[] = $row;
		}

		return $hasil;
	}

	function input($id, $nama, $jk, $alamat)
	{
		$conn = new database();
		$sql = "INSERT INTO siswa VALUES ('$id','$nama', '$jk', '$alamat')";
		$result = mysqli_query($conn->koneksi, $sql);
		return $result;
	}

	function update($id, $nama, $jk, $alamat)
	{
		$conn = new database();
		$query = mysqli_query($conn->koneksi, "UPDATE siswa SET nama_siswa='$nama', jk_siswa='$jk', alamat_siswa = '$alamat'  WHERE id_siswa = $id");
		return $query;
	}

	function hapus($id)
	{
		$conn = new database();
		$sql = "DELETE FROM siswa WHERE id_siswa = $id";
		$result = mysqli_query($conn->koneksi, $sql);
		return $result;
	}
}
