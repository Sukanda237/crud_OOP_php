<?php
//memanggil class atau file m_siswa pada folder model
require_once(__DIR__ . "../../controllers/c_koneksi.php");


// membuat kelas siswa
class siswa
{

	//fungsi untuk menampilkan semua data dari tabel siswa
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

	// fungsi menampilkan data berdasarkan id yang dipilih
	function tampil_data_id($id)
	{
		//membuka koneksi database
		$conn = new database();

		// menampilkan data siswa berdasarkan id siswa yang dipilih
		$query = mysqli_query($conn->koneksi, "SELECT * FROM siswa WHERE id_siswa = $id");

		//ubah data menjadi objeck 
		while ($row = mysqli_fetch_object($query)) {
			//simpan kedalam variabel hasil yang berbentuk array
			$hasil[] = $row;
		}

		//kembalikan nilai nya
		return $hasil;
	}

	//fungsi untuk memasukan data kedalam tabel siswa
	function input($id, $nama, $jk, $alamat)
	{
		//membuka koneksi database
		$conn = new database();

		//perintah untuk memasukan kedalam tabel siswa
		$sql = "INSERT INTO siswa VALUES ('$id','$nama', '$jk', '$alamat')";

		//mengeksekusi perintah diatas
		$result = mysqli_query($conn->koneksi, $sql);

		//mengembalikan nilai atau pesan bahwa data berhasil dimasukan
		return $result;
	}

	// fungsi untuk mengubah data
	function update($id, $nama, $jk, $alamat)
	{
		//membuka koneksi database
		$conn = new database();

		//perintah untuk mengubah data pada tabel siswa
		$query = mysqli_query($conn->koneksi, "UPDATE siswa SET nama_siswa='$nama', jk_siswa='$jk', alamat_siswa = '$alamat'  WHERE id_siswa = $id");

		//mengembalikan nilai atau pesan bahwa data berhasil diubah
		return $query;
	}

	//fungsi untuk menghapus data 
	function hapus($id)
	{
		//membuka koneksi database
		$conn = new database();

		//perintah untuk menghapus data sesuai dengan id siswa yang dipilih
		$sql = "DELETE FROM siswa WHERE id_siswa = $id";

		//mengeksekusi perintah diatas
		$result = mysqli_query($conn->koneksi, $sql);

		//mengembalikan nilai atau pesan bahwa data berhasil diubah
		return $result;
	}
}
