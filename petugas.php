<?php 

	class Petugas
	{
		public $nama,$alamat,$handphone,$area_jaga,$waktu_jaga;

			public function __construct(

				$nama 		= "nama",
				$alamat		= "alamat",
				$handphone	= "handphone",
				$area_jaga	= "area_jaga",
				$waktu_jaga	= "waktu_jaga"
			)

			{
				$this->nama 		= $nama;
				$this->alamat		= $alamat;
				$this->handphone	= $handphone;
				$this->area_jaga	= $area_jaga;
				$this->waktu_jaga	= $waktu_jaga;
			}

		public function menjaga()
		{
			return "$this->area_jaga";
		}
		public function mengontrol()
		{
			return "$this->area_jaga";
		}
		public function mengamankan()
		{
			return "$this->area_jaga";
		}
		public function merapikan()
		{
			return "Merapikan Kendaraan di$this->area_jaga";
		}
		public function menertibkan()
		{
			return "$this->area_jaga";
		}
	}

	$petugas_satu 	= new Petugas("Nanang Cabe","Warung Danas","085947371786","Menjaga Pintu Masuk","pagi-siang-malem");
	$petugas_dua 	= new Petugas("Eman Temok","Walahar","087897371786","Mengontrol Lingkungan Rumah Sakit","pagi-siang-malem");
	$petugas_tiga 	= new Petugas("Usep Gayung","Dangdeur","085877371786","Mengamankan Ruangan Mayit","pagi-siang-malem");
	$petugas_empat 	= new Petugas("Ruslan Tayo","Jamali","085987371786","Tempat Parkir","pagi-siang-malem");
	$petugas_lima 	= new Petugas("Rudy Obeng","Cibalagung","085977371786","Menertibkan Pasien Gila","pagi-siang-malem");

	