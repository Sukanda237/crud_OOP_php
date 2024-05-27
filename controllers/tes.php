<?php
 //kelas adalah definisi atau template dari objek. Kelas mencakup properti dan metode yang akan dimiliki oleh objek.
class database{

    private $host = "localhost"; //servername yang digunakan
	private $uname = "root"; //username yang digunakan
	private $pass = ""; //password default bisanya di kosongkan
	private $db = "coba_oop"; //nama database yang kita gunakan
    public $koneksi;

    //construct di dalam kelas PHP. Konstruktor adalah metode khusus yang secara otomatis dipanggil ketika sebuah objek dari kelas dibuat. Konstruktor biasanya digunakan untuk menginisialisasi properti objek atau melakukan tindakan setup yang diperlukan saat objek dibuat.
	function __construct(){

        //mysqli_connect function bawaan php yang berfungsi untuk membuat koneksi kedalama database mysql
        //$this adalah variabel khusus dalam PHP yang digunakan untuk merujuk pada objek saat ini di dalam konteks kelas. Dalam konteks ini, $this mengacu pada objek yang sedang diproses atau dipanggil di dalam metode kelas. 
		$this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass);

        //mysqli_select_db function bawaan php yang berfungsi untuk memilih database yang akan digunakan 
		mysqli_select_db($this->koneksi, $this->db);
        
        //mengecek koneksi
		if($this->koneksi){
			echo "Koneksi database mysql dan php berhasil.";
            //return $this->koneksi;
		}else{
			echo "Koneksi database mysql dan php GAGAL !";
		}
	}
} 

//instansiasi/membuat objek dari kelas database
$conn = new database();
?>


