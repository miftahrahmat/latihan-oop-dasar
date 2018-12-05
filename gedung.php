<?php 

	class Gedung
	{
		public $nama_gedung,$luas_gedung,$tinggi_gedung,$jumlah_lantai,$jumlah_ruangan;

			public function __construct(

				$nama_gedung 		= "nama_gedung",
				$luas_gedung 		= "luas_gedung",
				$tinggi_gedung		= "tinggi_gedung",
				$jumlah_lantai		= "jumlah_lantai",
				$jumlah_ruangan		= "jumlah_ruangan"
			)

			{
				$this->nama_gedung 		= $nama_gedung;
				$this->luas_gedung		= $luas_gedung;
				$this->tinggi_gedung	= $tinggi_gedung;
				$this->jumlah_lantai	= $jumlah_lantai;
				$this->jumlah_ruangan	= $jumlah_ruangan;
			}

		public function penginapan()
		{
			return "Gedung Khusus $this->nama_gedung";
		}
		public function pasien()
		{
			return "Gedung Khusus $this->nama_gedung";
		}
		public function orangGila()
		{
			return "Gedung Khusus $this->nama_gedung";
		}
		public function operasi()
		{
			return "Gedung Khusus $this->nama_gedung";
		}
		public function rapat()
		{
			return "Gedung Khusus $this->nama_gedung";
		}
	}

	$gedung_satu 	= new Gedung("Penginapan","900m","1000m","12","90 Ruangan");
	$gedung_dua 	= new Gedung("Pasien","900m","1000m","11","70 Ruangan");
	$gedung_tiga 	= new Gedung("Orang Gila","900m","1000m","10","60 Ruangan");
	$gedung_empat 	= new Gedung("Operasi","900m","1000m","11","70 Ruangan");
	$gedung_lima 	= new Gedung("Rapat","900m","1000m","9","50 Ruangan");

	