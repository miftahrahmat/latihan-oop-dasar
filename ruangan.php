<?php 

	class Ruangan
	{
		public $nama_ruang,$nama_gedung,$no_lantai,$kapasitas,$status;

			public function __construct(

				$nama_ruang 	= "nama_ruang",
				$nama_gedung	= "nama_gedung",
				$no_lantai		= "no_lantai",
				$kapasitas		= "kapasitas",
				$status			= "status"
			)

			{
				$this->nama_ruang 	= $nama_ruang;
				$this->nama_gedung	= $nama_gedung;
				$this->no_lantai	= $no_lantai;
				$this->kapasitas	= $kapasitas;
				$this->status		= $status;
			}

		public function jenazah()
		{
			return "Ruangan Ini Khusus $this->nama_ruang";
		}
		public function ugd()
		{
			return "Ruangan Ini Khusus $this->nama_ruang";
		}
		public function operasi()
		{
			return "Ruangan Ini Khusus $this->nama_ruang";
		}
		public function bersalin()
		{
			return "Ruangan Ini Khusus $this->nama_ruang";
		}
		public function pasien()
		{
			return "Ruangan Ini Khusus $this->nama_ruang";
		}
	}

	$ruangan_satu 	= new Ruangan("Jenazah","Gedung Melati","Lantai 9","100","Tersedia");
	$ruangan_dua 	= new Ruangan("UGD","Gedung Mawar","Lantai 1","100","Tersedia");
	$ruangan_tiga 	= new Ruangan("Operasi","Gedung Kamboja","Lantai 2","1","Tersedia");
	$ruangan_empat 	= new Ruangan("Bersalin","Gedung Anggrek","Lantai 1","100","Tersedia");
	$ruangan_lima 	= new Ruangan("Pasien","Gedung Teratai","lantai 3","1000","Penuh");
