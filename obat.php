<?php 

	class Obat
	{
		public $nama_obat,$jenis_obat,$satuan,$harga,$stok;

			public function __construct(

				$nama_obat 	= "nama_obat",
				$jenis_obat	= "jenis_obat",
				$satuan		= "satuan",
				$harga		= "harga",
				$stok		= "stok"
			)

			{
				$this->nama_obat 	= $nama_obat;
				$this->jenis_obat	= $jenis_obat;
				$this->satuan		= $satuan;
				$this->harga		= $harga;
				$this->stok			= $stok;
			}

		public function oskadon()
		{
			return "$this->nama_obat Termasuk Obat $this->jenis_obat";
		}
		public function bodrex()
		{
			return "$this->nama_obat Termasuk Obat $this->jenis_obat";
		}
		public function paramex()
		{
			return "$this->nama_obat Termasuk Obat $this->jenis_obat";
		}
		public function diapet()
		{
			return "$this->nama_obat Termasuk Obat $this->jenis_obat";
		}
		public function promagh()
		{
			return "$this->nama_obat Termasuk Obat $this->jenis_obat";
		}
	}

	$obat_satu 	= new Obat("Oskadon","Antibiotik","butir","1000","Tersedia");
	$obat_dua 	= new Obat("Bodrex","Antiseptik","butir","1000","Tersedia");
	$obat_tiga 	= new Obat("Paramex","Paracetamol","butir","1000","Tersedia");
	$obat_empat = new Obat("Diapet","Diabete","butir","1000","Habis");
	$obat_lima 	= new Obat("Promagh","Panasonic","butir","1000","Habis");

	
