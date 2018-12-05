<?php 

	class Pelayanan
	{
		public $Tanggal_pelayanan,$jam_pelayanan,$nama_pasien,$nama_dokter,$keluhan;

			public function __construct(

				$Tanggal_pelayanan 	= "Tanggal_pelayanan",
				$jam_pelayanan		= "jam_pelayanan",
				$nama_pasien		= "nama_pasien",
				$nama_dokter		= "nama_dokter",
				$keluhan			= "keluhan"
			)

			{
				$this->Tanggal_pelayanan 	= $Tanggal_pelayanan;
				$this->jam_pelayanan		= $jam_pelayanan;
				$this->nama_pasien			= $nama_pasien;
				$this->nama_dokter			= $nama_dokter;
				$this->keluhan				= $keluhan;
			}

		public function hidungMinus()
		{
			return "Melayani $this->keluhan";
		}
		public function rabunJauh()
		{
			return "Melayani $this->keluhan";
		}
		public function kramJantung()
		{
			return "Melayani $this->keluhan";
		}
		public function gangguanJiwa()
		{
			return "Melayani $this->keluhan";
		}
		public function terapiMusik()
		{
			return "Melayani $this->keluhan";
		}
	}

	$pelayanan_satu 	= new Pelayanan("04-02-2011","09.21","Elprint","Dede Comro","Nontot Jodo");
	$pelayanan_dua 		= new Pelayanan("09-12-2017","10.00","Lucas","Asep Cilok","Rabun Jauh");
	$pelayanan_tiga 	= new Pelayanan("01-05-2010","14.00","Usep Uyah","Ujang Ragaji","Usus Buntung");
	$pelayanan_empat 	= new Pelayanan("05-05-2018","15.30","Briyan eko","Ipan Kalapa","Gangguan Jiwa");
	$pelayanan_lima 	= new Pelayanan("04-12-2018","19.25","Marno setyo","Rico Ramalan","Susah Bab");
