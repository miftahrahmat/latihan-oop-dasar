<?php 

	class Office_Boy
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

	$office_boy_satu 	= new Office_Boy("Petrik Tonggos","Kebon Cabe","02-01-1989","087820085640","Menyiapkan Peralatan Operasi");
	$office_boy_dua  	= new Office_Boy("Achmad Sengklek","Lewih Kojah","02-01-1989","087820085640","Melayani Pasien Gila");
	$office_boy_tiga 	= new Office_Boy("Udi Bogel","Pasir Tuyul","02-01-1989","087820085640","Mengganti Cairan Pasien");
	$office_boy_empat 	= new Office_Boy("Memet Garing","Cikalong","02-01-1989","087820085640","Mengecek Ruangan");
	$office_boy_lima 	= new Office_Boy("Asep Sarung","Sagaranten","02-01-1989","087820085640","Menyediakan Minuman");


	
