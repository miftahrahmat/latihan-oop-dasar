<?php 

	class Pasien
	{
		public $nama,$j_kelamin,$alamat,$tgl_datang,$keluhan;

			public function __construct(

				$nama 		= "nama",
				$j_kelamin	= "j_kelamin",
				$alamat		= "alamat",
				$tgl_datang	= "tgl_datang",
				$keluhan	= "keluhan"
			)

			{
				$this->nama 		= $nama;
				$this->j_kelamin	= $j_kelamin;
				$this->alamat		= $alamat;
				$this->tgl_datang	= $tgl_datang;
				$this->keluhan		= $keluhan;
			}

		public function hidungMinus()
		{
			return "Mempunyai Keluhan $this->keluhan";
		}
		public function diabetes()
		{
			return "Mempunyai Keluhan $this->keluhan";
		}
		public function asma()
		{
			return "Mempunyai Keluhan $this->keluhan";
		}
		public function penyakitKulit()
		{
			return "Mempunyai Keluhan $this->keluhan";
		}
		public function insomnia()
		{
			return "Mempunyai Keluhan $this->keluhan";
		}
	}

	$pasien_satu 	= new Pasien("Jajan","Laki_laki","Warung Danas","5-12-2018","Hidung Minus");
	$pasien_dua 	= new Pasien("Jejen","Laki_laki","Walahar","5-12-2018","Diabetes");
	$pasien_tiga 	= new Pasien("Jujun","Laki_laki","Dangdeur","4-12-2018","Sesak Nafas");
	$pasien_empat 	= new Pasien("Jojon","Laki_laki","Jamali","6-12-2018","Cacar Air");
	$pasien_lima 	= new Pasien("Jayen","Laki_laki","Cibalagung","3-12-2018","tidak dapat tidur karena gangguan jiwa");

	
	