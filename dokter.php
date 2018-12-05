<?php

	class Dokter 
	{
		public 	$nama,$alamat,$email,$handphone,$spesialis;
	  
		    public function __construct(

		    	$nama 		= "nama",
		    	$alamat 	= "alamat", 
		    	$email  	= "email", 
		    	$handphone	= "handphone", 
		    	$spesialis	= "spesialis" 
		    )

		    { 
		    	$this->nama 		= $nama;
		    	$this->alamat		= $alamat;
		    	$this->email 		= $email;
		    	$this->handphone	= $handphone;
		    	$this->spesialis	= $spesialis;
		    }

	    public function spesialisGinjal()
	    {
	    	return "$this->spesialis";
	    }
	    public function bedahCesar()
	    {
	    	return "$this->spesialis";
	    }
	    public function operasiOtak()
	    {
	    	return "$this->spesialis";
	    }
	    public function spesialisTulang()
	    {
	    	return "$this->spesialis";
	    }
	    public function spesialisKulit()
	    {
	    	return "$this->spesialis";
	    }
	}

		$dokter_satu 	= new Dokter("","","","","Melakukan Operasi Ginjal");
		$dokter_dua 	= new Dokter("","","","","Melakuan Pembedahan");
		$dokter_tiga	= new Dokter("","","","","Melakukan Operasi Otak");
		$dokter_empat	= new Dokter("","","","","Melakukan Amputasi");
		$dokter_lima 	= new Dokter("","","","","Melakukan Operasi Kulit");

		