<?php 
	require_once 'dokter.php';
	require_once 'pasien.php';
	require_once 'petugas.php';
	require_once 'gedung.php';
	require_once 'obat.php';
	require_once 'ruangan.php';
	require_once 'suster.php';
	require_once 'officegirl.php';
	require_once 'officeboy.php';
	require_once 'pelayanan.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rumah Sakit</title>
	<style>
		table {
			border-radius: 10px;
			position: responsive;
		}
		th {
			border-radius: 10px;
			background-color: purple;
			border-color: gold;
			font-family: algerian;
			color: black;
		}
		td {
			border-radius: 10px;
			background-color: black;
			border-color: gold;
			font-family: algerian;
			color: white;
		}
	</style>
</head>
<body>
	<table border="2" align="center" cellspacing="15" cellpadding="15" style="background-color: silver; border-color: blue">
		<thead>
			<tr>
				<th colspan="2">CLASS DOKTER</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="2" align="center">
					<?php echo $dokter_satu->spesialisGinjal(); ?></br>
					<?php echo $dokter_dua->bedahCesar(); ?></br>
					<?php echo $dokter_tiga->operasiOtak(); ?></br>
					<?php echo $dokter_empat->spesialisTulang(); ?></br>
					<?php echo $dokter_lima->spesialisKulit(); ?>
				</td>
			</tr>
		</tbody>

		<thead>
			<tr>
				<th style="width: 50%">CLASS PASIEN</th>
				<th>CLASS PETUGAS</th>
			</tr>
		</thead>	
		<tbody>
			<tr>
				<td>
					<?php echo $pasien_satu->hidungMinus(); ?></br>
					<?php echo $pasien_dua->diabetes(); ?></br>
					<?php echo $pasien_tiga->asma(); ?></br>
					<?php echo $pasien_empat->penyakitKulit(); ?></br>
					<?php echo $pasien_lima->insomnia(); ?>
				</td>
				<td>
					<?php echo $petugas_satu->menjaga(); ?></br>
					<?php echo $petugas_dua->mengontrol(); ?></br>
					<?php echo $petugas_tiga->mengamankan(); ?></br>
					<?php echo $petugas_empat->merapikan(); ?></br>
					<?php echo $petugas_lima->menertibkan(); ?>
				</td>
			</tr>
		</tbody>

		<thead>
			<tr>
				<th>CLASS RUANGAN</th>
				<th>CLASS GEDUNG</th>
			</tr>
		</thead>	
		<tbody>
			<tr>
				<td>
					<?php echo $ruangan_satu->jenazah(); ?></br>
					<?php echo $ruangan_dua->ugd(); ?></br>
					<?php echo $ruangan_tiga->operasi(); ?></br>
					<?php echo $ruangan_empat->bersalin(); ?></br>
					<?php echo $ruangan_lima->pasien(); ?>
				</td>
				<td>
					<?php echo $gedung_satu->penginapan(); ?></br>
					<?php echo $gedung_dua->pasien(); ?></br>
					<?php echo $gedung_tiga->orangGila(); ?></br>
					<?php echo $gedung_empat->operasi(); ?></br>
					<?php echo $gedung_lima->rapat(); ?>
				</td>
			</tr>
		</tbody>

		
		<thead>
			<tr>
				<th>CLASS OBAT</th>
				<th>CLASS PELAYANAN</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php echo $obat_satu->oskadon(); ?></br>
					<?php echo $obat_dua->bodrex(); ?></br>
					<?php echo $obat_tiga->paramex(); ?></br>
					<?php echo $obat_empat->diapet(); ?></br>
					<?php echo $obat_lima->promagh(); ?>
				</td>
				<td>
					<?php echo $pelayanan_satu->hidungMinus(); ?></br>
					<?php echo $pelayanan_dua->rabunJauh(); ?></br>
					<?php echo $pelayanan_tiga->kramJantung(); ?></br>
					<?php echo $pelayanan_empat->gangguanJiwa(); ?></br>
					<?php echo $pelayanan_lima->terapiMusik(); ?>
				</td>
			</tr>
		</tbody>

		<thead>
			<tr>
				<th>CLASS OFFICE GIRLS</th>
				<th>CLASS OFFICE BOYS</th>
			</tr>
		</thead>	
		<tbody>
			<tr>
				<td>
					<?php echo $office_girl_satu->mengepelLantai(); ?></br>
					<?php echo $office_girl_dua->membersihkanKaca(); ?></br>
					<?php echo $office_girl_tiga->MembersihkanToilet(); ?></br>
					<?php echo $office_girl_empat->menyediakanMakanan(); ?></br>
					<?php echo $office_girl_lima->menyediakanMinuman(); ?>
				</td>
				<td>
					<?php echo $office_boy_satu->mengepelLantai(); ?></br>
					<?php echo $office_boy_dua->membersihkanKaca(); ?></br>
					<?php echo $office_boy_tiga->MembersihkanToilet(); ?></br>
					<?php echo $office_boy_empat->menyediakanMakanan(); ?></br>
					<?php echo $office_boy_lima->menyediakanMinuman(); ?>
				</td>
			</tr>
		</tbody>

		<thead">
			<tr>
				<th colspan="2">CLASS SUSTER</th>
			</tr>
		</thead>	
		<tbody>
			<tr>
				<td colspan="2" align="center">
					<p><?php echo $suster_satu->mengumpulkanData(); ?></p>
					<p><?php echo $suster_dua->mengevaluasiData(); ?></p>
					<p><?php echo $suster_tiga->membuatRencana(); ?></p>
					<p><?php echo $suster_empat->melaksanakanPenyuluhan(); ?></p>
					<?php echo $suster_lima->mengevaluasiPenyuluhan(); ?>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<marquee direction="right" behavior="alternate" scrollamount="1"
							scrolldelay="2" truespeed onmouseover=this.stop() onmouseout=this.start()>
							Created by Miftah Rahmat
					</marquee>
				</th>
			</tr>
		</tbody>						
	</table>
</body>
</html>