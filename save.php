<?php 
session_start();
error_reporting(0);
$conn = mysqli_connect('localhost','root','','tracer');

// var_dump($_POST);
// exit();

if (isset($_POST)) {

// var_dump($_POST);
// exit();

$nama=	$_POST['nama'];
$jenis_kelamin=	$_POST['jenis_kelamin'];
$tempat_lahir=	$_POST['tempat_lahir'];
$tgl_lahir=	$_POST['tgl_lahir'];
$perkawinan=	$_POST['perkawinan'];
$no_hp=	$_POST['no_hp'];
$email=	$_POST['email'];
$alamat_rumah=	$_POST['alamat_rumah'];
$pendidikan_terakhir=	$_POST['pendidikan_terakhir'];

$tahun_masuk=	$_POST['tahun_masuk'];
$tahun_lulus=	$_POST['tahun_lulus'];
$lama_studi=	$_POST['lama_studi'];
$ipk=	$_POST['ipk'];
$waktu_kerja_pertama=	$_POST['waktu_kerja_pertama'];
$kepuasan_layanan=	$_POST['kepuasan_layanan'];
$kepuasan_penguasaan_kompetensi=	$_POST['kepuasan_penguasaan_kompetensi'];
$sudah_bekerja=	$_POST['sudah_bekerja'];

$persen_keterampilan=	$_POST['persen_keterampilan'];
$sulit_kerja_pertama=	$_POST['sulit_kerja_pertama'];
$jumlah_pindah_kerja=	$_POST['jumlah_pindah_kerja'];
$sektor_kerja_sekarang=	$_POST['sektor_kerja_sekarang'];
$sesuai_jabatan_dan_minat=	$_POST['sesuai_jabatan_dan_minat'];
$gaji_kerja_sekarang=	$_POST['gaji_kerja_sekarang'];

$butuh_bhs_inggris=	$_POST['butuh_bhs_inggris'];
$butuh_teknologi_informasi=	$_POST['butuh_teknologi_informasi'];
$kantor_butuh_ipk=	$_POST['kantor_butuh_ipk'];
$profesi_impian=	$_POST['profesi_impian'];
$keterampilan_teknis=	$_POST['keterampilan_teknis'];
$pengetahuan_teori=	$_POST['pengetahuan_teori'];

$kebanggaan=	$_POST['kebanggaan'];
$kepercayaan=	$_POST['kepercayaan'];
$gaji_besar=	$_POST['gaji_besar'];
$kemajuan_karir=	$_POST['kemajuan_karir'];
$mobilitas_lintas_bidang=	$_POST['mobilitas_lintas_bidang'];
$prodi_terhadap_iptek=	$_POST['prodi_terhadap_iptek'];
$skill_relevan=	$_POST['skill_relevan'];
$komunikasi_dg_prodi=	$_POST['komunikasi_dg_prodi'];
$cara_komunikasi_prodi=	$_POST['cara_komunikasi_prodi'];
$saran=	$_POST['saran'];

		
	if ($_POST['instansi_pertama_kerja'] == 'lainnya') {
		$instansi_pertama_kerja= $_POST['others_instansi_pertama_kerja'];	
	}else{
		$instansi_pertama_kerja= $_POST['instansi_pertama_kerja'];
	}


	if ($_POST['instansi_sekarang_bekerja'] == 'lainnya') {
		$instansi_sekarang_bekerja= $_POST['others_instansi_sekarang_bekerja'];	
	}else{
		$instansi_sekarang_bekerja= $_POST['instansi_sekarang_bekerja'];
	}


	if ($_POST['alasan_pindah_kerja'] == 'lainnya') {
		$alasan_pindah_kerja= $_POST['others_alasan_pindah_kerja'];	
	}else{
		$alasan_pindah_kerja=	$_POST['alasan_pindah_kerja'];
	}


	if ($_POST['bidang_kerja_sekarang'] == 'lainnya') {
		$bidang_kerja_sekarang= $_POST['others_bidang_kerja_sekarang'];	
	}else{
		$bidang_kerja_sekarang=	$_POST['bidang_kerja_sekarang'];
	}

	if ($_POST['jabatan_sekarang'] == 'lainnya') {
		$jabatan_sekarang= $_POST['others_jabatan_sekarang'];	
	}else{
		$jabatan_sekarang=	$_POST['jabatan_sekarang'];
	}




	if (in_array("lainnya", $_POST['sumber_kerja_pertama'])) {
		array_pop($_POST['sumber_kerja_pertama']);
		array_push($_POST['sumber_kerja_pertama'], $_POST['others_sumber_kerja_pertama']);
	}
	$sumber_kerja_pertama=	implode(',', $_POST['sumber_kerja_pertama']);


	if (in_array("lainnya", $_POST['hambatan_kerja_pertama'])) {
		array_pop($_POST['hambatan_kerja_pertama']);
		array_push($_POST['hambatan_kerja_pertama'], $_POST['others_hambatan_kerja_pertama']);
	}
	$hambatan_kerja_pertama=	implode(',', $_POST['hambatan_kerja_pertama']);


	if (in_array("lainnya", $_POST['matkul_paling_mendukung'])) {
		array_pop($_POST['matkul_paling_mendukung']);
		array_push($_POST['matkul_paling_mendukung'], $_POST['others_matkul_paling_mendukung']);
	}
	$matkul_paling_mendukung=	implode(',', $_POST['matkul_paling_mendukung']);


	if (in_array("lainnya", $_POST['hambatan_masuk_kerja'])) {
		array_pop($_POST['hambatan_masuk_kerja']);
		array_push($_POST['hambatan_masuk_kerja'], $_POST['others_hambatan_masuk_kerja']);
	}
	$hambatan_masuk_kerja=	implode(',', $_POST['hambatan_masuk_kerja']);


	if (in_array("lainnya", $_POST['hambatan_kembang_karir'])) {
		array_pop($_POST['hambatan_kembang_karir']);
		array_push($_POST['hambatan_kembang_karir'], $_POST['others_hambatan_kembang_karir']);
	}
	$hambatan_kembang_karir=	implode(',', $_POST['hambatan_kembang_karir']);


	if (in_array("lainnya", $_POST['rangka_komunikasi_dg_prodi'])) {
		array_pop($_POST['rangka_komunikasi_dg_prodi']);
		array_push($_POST['rangka_komunikasi_dg_prodi'], $_POST['others_rangka_komunikasi_dg_prodi']);
	}
	$rangka_komunikasi_dg_prodi=	implode(',', $_POST['rangka_komunikasi_dg_prodi']);



	$data =mysqli_query($conn, "INSERT INTO alumni VALUES(
		'".NULL."',		
		'".date('yyyy-mm-dd H:i:s')."',
		'".$nama."', 
		'".$jenis_kelamin."',
		'".$tempat_lahir."', 
		'".$tgl_lahir."',
		'".$perkawinan."', 
		'".$no_hp."',
		'".$email."', 
		'".$alamat_rumah."',
		'".$pendidikan_terakhir."', 
		'".$tahun_masuk."',
		'".$tahun_lulus."', 
		'".$lama_studi."',
		'".$ipk."', 
		'".$waktu_kerja_pertama."',
		'".$kepuasan_layanan."', 
		'".$kepuasan_penguasaan_kompetensi."',
		'".$sudah_bekerja."', 
		'".$instansi_pertama_kerja."',
		'".$persen_keterampilan."', 
		'".$sumber_kerja_pertama."',
		'".$sulit_kerja_pertama."', 
		'".$hambatan_kerja_pertama."',
		'".$jumlah_pindah_kerja."', 
		'".$alasan_pindah_kerja."',
		'".$instansi_sekarang_bekerja."', 
		'".$sektor_kerja_sekarang."',
		'".$bidang_kerja_sekarang."', 
		'".$jabatan_sekarang."',
		'".$sesuai_jabatan_dan_minat."', 
		'".$gaji_kerja_sekarang."',
		'".$matkul_paling_mendukung."', 
		'".$hambatan_masuk_kerja."',
		'".$hambatan_kembang_karir."', 
		'".$butuh_bhs_inggris."',
		'".$butuh_teknologi_informasi."', 
		'".$kantor_butuh_ipk."',
		'".$profesi_impian."', 
		'".$keterampilan_teknis."',
		'".$pengetahuan_teori."', 
		'".$kebanggaan."',
		'".$kepercayaan."', 
		'".$gaji_besar."',
		'".$kemajuan_karir."', 
		'".$mobilitas_lintas_bidang."',
		'".$prodi_terhadap_iptek."', 
		'".$skill_relevan."',
		'".$komunikasi_dg_prodi."', 
		'".$cara_komunikasi_prodi."',
		'".$rangka_komunikasi_dg_prodi."', 
		'".$saran."',
		'".$email."'		
	)");

}

$_SESSION['saveAction'] = 1;
header("Location: survey.php");



 ?>