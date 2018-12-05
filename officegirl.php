<?php 

	class Office_Girl
	{
		public $nama,$alamat,$tgl_lahir,$no_tlp,$tugas;

			public function __construct(

				$nama 			= "nama",
				$alamat			= "alamat",
				$tgl_lahir		= "tgl_lahir",
				$no_tlp			= "no_tlp",
				$tugas			= "tugas"
			)

			{
				$this->nama 		= $nama;
				$this->alamat		= $alamat;
				$this->tgl_lahir	= $tgl_lahir;
				$this->no_tlp		= $no_tlp;
				$this->tugas		= $tugas;
			}

		public function mengepelLantai()
		{
			return "$this->tugas";
		}
		public function membersihkanKaca()
		{
			return "$this->tugas";
		}
		public function membersihkanToilet()
		{
			return "$this->tugas";
		}
		public function menyediakanMakanan()
		{
			return "$this->tugas";
		}
		public function menyediakanMinuman()
		{
			return "$this->tugas";
		}
	}

	$office_girl_satu 	= new Office_Girl("Sella Promosi","Kebon Cabe","02-01-1989","087820085640","Membersihkan Lantai");
	$office_girl_dua  	= new Office_Girl("Adelia Cungkring","Lewih Kojah","02-01-1989","087820085640","Membersihkan Kaca");
	$office_girl_tiga 	= new Office_Girl("Susi Sate","Pasir Tuyul","02-01-1989","087820085640","Membersihkan Toilet");
	$office_girl_empat 	= new Office_Girl("Devi Gaplok","Cikalong","02-01-1989","087820085640","Menyediakan Makanan");
	$office_girl_lima 	= new Office_Girl("Amel Bekok","Sagaranten","02-01-1989","087820085640","Menyediakan Minuman");


	
