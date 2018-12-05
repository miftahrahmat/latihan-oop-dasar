<?php 

	class Suster
	{
		public $nama_suster,$alamat,$tgl_lahir,$no_tlp,$tugas;

			public function __construct(

				$nama_suster 	= "nama_suster",
				$alamat			= "alamat",
				$tgl_lahir		= "tgl_lahir",
				$no_tlp			= "no_tlp",
				$tugas			= "tugas"
			)

			{
				$this->nama_suster 	= $nama_suster;
				$this->alamat		= $alamat;
				$this->tgl_lahir	= $tgl_lahir;
				$this->no_tlp		= $no_tlp;
				$this->tugas		= $tugas;
			}

		public function mengumpulkanData()
		{
			return "$this->tugas";
		}
		public function mengevaluasiData()
		{
			return "$this->tugas";
		}
		public function membuatRencana()
		{
			return "$this->tugas";
		}
		public function melaksanakanPenyuluhan()
		{
			return "$this->tugas";
		}
		public function mengevaluasiPenyuluhan()
		{
			return "$this->tugas";
		}
	}

	$suster_satu 	= new Suster("Sella Promosi","Kebon Cabe","02-01-1989","087820085640","Mengumpulkan Data");
	$suster_dua  	= new Suster("Adelia Cungkring","Lewih Kojah","02-01-1989","087820085640","Mengevaluasi data permasalahan keperawatan");
	$suster_tiga 	= new Suster("Susi Sate","Pasir Tuyul","02-01-1989","087820085640","Membuat rencana penyuluhan kesehatan");
	$suster_empat 	= new Suster("Devi Gaplok","Cikalong","02-01-1989","087820085640","Melaksanakan penyuluhan kesehatan");
	$suster_lima 	= new Suster("Amel Bekok","Sagaranten","02-01-1989","087820085640","Mengevaluasi penyuluhan kesehatan");


	
