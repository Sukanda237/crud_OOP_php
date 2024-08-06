<?php
//memanggil class atau file m_siswa pada folder model
include_once '../controllers/c_koneksi.php';

// membuat kelas siswa
class siswa
{

	//ini untuk menampilkan data dari tabel siswa
	function tampil_data()
	{

		//deklarasi objeck koneksi database
		$conn = new database();

		//query untuk menampilkan data dari tabel siswa 
		$data = mysqli_query($conn->koneksi, "select * from siswa order by id_siswa desc");

		//ubah data menjadi objeck 
		while ($d = mysqli_fetch_object($data)) {
			//simpan kedalam variabel hasil yang berbentuk array
			$hasil[] = $d;
		}
		//kembalikan nilai nya
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
