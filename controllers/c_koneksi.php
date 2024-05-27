<?php

class database
{

	private $host = "localhost";
	private $uname = "root";
	private $pass = "";
	private $db = "coba_oop";
	public $koneksi;

	function __construct()
	{

		$this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->koneksi, $this->db);

		if ($this->koneksi) {
			//echo "Koneksi database mysql dan php berhasil.";
			return $this->koneksi;
		} else {
			echo "Koneksi database mysql dan php GAGAL !";
		}
	}
}

//$conn = new database();
