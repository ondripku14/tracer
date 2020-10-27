<?php 

require_once('dataVariabel.php');

$conn = mysqli_connect('localhost','root','','tracer');


$data =mysqli_query($conn, "SELECT * FROM alumni WHERE nama IS NOT NULL");
$allData =mysqli_query($conn, "SELECT * FROM alumni WHERE nama IS NOT NULL");

while($v = mysqli_fetch_array($data, MYSQLI_ASSOC)) {

	if ($v['waktu_kerja_pertama'] == '1 Bulan') {
		$kerja1Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '2 Bulan') {
		$kerja2Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '3 Bulan') {
		$kerja3Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '4 Bulan') {
		$kerja4Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '5 Bulan') {
		$kerja5Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '6 Bulan') {
		$kerja6Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '7 - 11 Bulan') {
		$kerja7Bulan++;
	}else if ($v['waktu_kerja_pertama'] == '1 - 2 Tahun') {
		$kerja1Tahun++;
	}else if ($v['waktu_kerja_pertama'] == '> 2 Tahun') {
		$kerja2Tahun++;
	}


	if ($v['kepuasan_layanan'] == 1) {
		$layanan1++;
	}elseif ($v['kepuasan_layanan'] == 2) {
		$layanan2++;
	}elseif ($v['kepuasan_layanan'] == 3) {
		$layanan3++;
	}elseif ($v['kepuasan_layanan'] == 4) {
		$layanan4++;
	}elseif ($v['kepuasan_layanan'] == 5) {
		$layanan5++;
	}


	if ($v['kepuasan_penguasaan_kompetensi'] == 1) {
		$komp1++;
	}elseif ($v['kepuasan_penguasaan_kompetensi'] == 2) {
		$komp2++;
	}elseif ($v['kepuasan_penguasaan_kompetensi'] == 3) {
		$komp3++;
	}elseif ($v['kepuasan_penguasaan_kompetensi'] == 4) {
		$komp4++;
	}elseif ($v['kepuasan_penguasaan_kompetensi'] == 5) {
		$komp5++;
	}

	if ($v['sudah_bekerja'] == 'Sudah') {
		$job_stat1++;
	}elseif ($v['sudah_bekerja'] == 'Pernah bekerja dan sekarang mencari pekerjaan baru') {
		$job_stat2++;
	}elseif ($v['sudah_bekerja'] == 'Pernah bekerja tapi sekarang sedang mendaftar studi lanjut') {
		$job_stat3++;
	}elseif ($v['sudah_bekerja'] == 'Belum pernah bekerja tapi sekarang sedang mendaftar studi lanjut') {
		$job_stat4++;
	}elseif ($v['sudah_bekerja'] == 'Pernah bekerja, dan sekarang studi lanjut') {
		$job_stat5++;
	}elseif ($v['sudah_bekerja'] == 'Tidak bekerja dan langsung studi lanjut') {
		$job_stat6++;
	}elseif ($v['sudah_bekerja'] == 'Belum pernah bekerja dan masih mencari pekerjaan') {
		$job_stat7++;
	}

	if ($v['instansi_pertama_kerja'] == 'Kementerian/ Lembaga Pemerintah') {
		$ins_stat1++;
	}elseif ($v['instansi_pertama_kerja'] == 'Pemda') {
		$ins_stat2++;
	}elseif ($v['instansi_pertama_kerja'] == 'Swasta nasional') {
		$ins_stat3++;
	}elseif ($v['instansi_pertama_kerja'] == 'Perusahaan multinasional') {
		$ins_stat4++;
	}elseif ($v['instansi_pertama_kerja'] == 'Lembaga Internasional') {
		$ins_stat5++;
	}elseif ($v['instansi_pertama_kerja'] == 'yayasan/ LSM nasional') {
		$ins_stat6++;
	}elseif ($v['instansi_pertama_kerja'] == 'yayasan/ LSM internasional') {
		$ins_stat7++;
	}elseif ($v['instansi_pertama_kerja'] == 'BUMN/ BUMD') {
		$ins_stat8++;
	}else{
		$ins_stat9++;
	}

	if ($v['persen_keterampilan'] == '>=86%') {
		$persen_skill1++;
	}elseif ($v['persen_keterampilan'] == '76% - 85%') {
		$persen_skill2++;
	}elseif ($v['persen_keterampilan'] == '61% - 65%') {
		$persen_skill3++;
	}elseif ($v['persen_keterampilan'] == '51% - 59%') {
		$persen_skill4++;
	}elseif ($v['persen_keterampilan'] == '<=50%') {
		$persen_skill5++;
	}

	if ($v['sulit_kerja_pertama'] == 'Ya') {
		$sulit_kerja_pertama1++;
	}elseif ($v['sulit_kerja_pertama'] == 'Tidak') {
		$sulit_kerja_pertama2++;

	}

	if ($v['alasan_pindah_kerja'] == 'Suasana kerja') {
		$alasanPindah1++;
	}elseif ($v['alasan_pindah_kerja'] == 'Besaran gaji') {
		$alasanPindah2++;
	}elseif ($v['alasan_pindah_kerja'] == 'Pengembangan karir') {
		$alasanPindah3++;
	}else{
		$alasanPindah4++;
	}


	if ($v['instansi_sekarang_bekerja'] == 'Kementerian/ Lembaga Pemerintah') {
		$ins_stat_now1++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'Pemda') {
		$ins_stat_now2++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'Swasta nasional') {
		$ins_stat_now3++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'Perusahaan multinasional') {
		$ins_stat_now4++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'Lembaga Internasional') {
		$ins_stat_now5++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'yayasan/ LSM nasional') {
		$ins_stat_now6++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'yayasan/ LSM internasional') {
		$ins_stat_now7++;
	}elseif ($v['instansi_sekarang_bekerja'] == 'BUMN/ BUMD') {
		$ins_stat_now8++;
	}else{
		$ins_stat_now9++;
	}


	if ($v['sektor_kerja_sekarang'] == 'Teknologi Informasi (TI)') {
		$sektorKerja1++;
	}elseif ($v['sektor_kerja_sekarang'] == 'Non - Teknologi Informasi') {
		$sektorKerja2++;
	}

	if ($v['bidang_kerja_sekarang'] == 'Programmer') {
		$bidangKerja1++;
	}elseif ($v['bidang_kerja_sekarang'] == 'System Analyst') {
		$bidangKerja2++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Database Administrator') {
		$bidangKerja3++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Server Administrator') {
		$bidangKerja4++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Network Administrator') {
		$bidangKerja5++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Research & development / peneliti/ laboran/ QC/ QA') {
		$bidangKerja6++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Multimedia Designer') {
		$bidangKerja7++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Project Admin') {
		$bidangKerja8++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Software Tester') {
		$bidangKerja9++;
	}elseif ($v['bidang_kerja_sekarang'] == 'Dosen / Pendidik/ Guru') {
		$bidangKerja10++;
	}else{
		$bidangKerja11++;
	}

	if ($v['jabatan_sekarang'] == 'Staff') {
		$jabatanKerja1++;
	}elseif ($v['jabatan_sekarang'] == 'Supervisor') {
		$jabatanKerja2++;
	}elseif ($v['jabatan_sekarang'] == 'Asisten Manager') {
		$jabatanKerja3++;
	}elseif ($v['jabatan_sekarang'] == 'Manager') {
		$jabatanKerja4++;
	}elseif ($v['jabatan_sekarang'] == 'Direktur') {
		$jabatanKerja5++;
	}else{
		$jabatanKerja6++;
	}

	if ($v['sesuai_jabatan_dan_minat'] == 'Sesuai') {
		$suaiMinat1++;
	}elseif ($v['sesuai_jabatan_dan_minat'] == 'Tidak Sesuai') {
		$suaiMinat2++;
	}elseif ($v['sesuai_jabatan_dan_minat'] == 'Tidak tahu') {
		$suaiMinat3++;
	}

	if ($v['gaji_kerja_sekarang'] == '< 1jt') {
		$gajiKerja1++;
	}elseif ($v['gaji_kerja_sekarang'] == '1-3jt') {
		$gajiKerja2++;
	}elseif ($v['gaji_kerja_sekarang'] == '4-5jt') {
		$gajiKerja3++;
	}elseif ($v['gaji_kerja_sekarang'] == '5-9jt') {
		$gajiKerja4++;
	}elseif ($v['gaji_kerja_sekarang'] == '>10jt') {
		$gajiKerja5++;
	}

	if ($v['butuh_bhs_inggris'] == 'Sangat membutuhkan') {
		$eng1++;
	}elseif ($v['butuh_bhs_inggris'] == 'Membutuhkan') {
		$eng2++;
	}elseif ($v['butuh_bhs_inggris'] == 'Cukup membutuhkan') {
		$eng3++;
	}elseif ($v['butuh_bhs_inggris'] == 'Kurang membutuhkan') {
		$eng4++;
	}elseif ($v['butuh_bhs_inggris'] == 'Tidak membutuhkan') {
		$eng5++;
	}

	if ($v['butuh_teknologi_informasi'] == 'Sangat membutuhkan') {
		$it1++;
	}elseif ($v['butuh_teknologi_informasi'] == 'Membutuhkan') {
		$it2++;
	}elseif ($v['butuh_teknologi_informasi'] == 'Cukup membutuhkan') {
		$it3++;
	}elseif ($v['butuh_teknologi_informasi'] == 'Kurang membutuhkan') {
		$it4++;
	}elseif ($v['butuh_teknologi_informasi'] == 'Tidak membutuhkan') {
		$it5++;
	}	

	if ($v['kantor_butuh_ipk'] == 'Ya') {
		$butuhIpk1++;
	}elseif($v['kantor_butuh_ipk'] == 'Tidak'){
		$butuhIpk2++;
	}

	if ($v['keterampilan_teknis'] == 1) {
		$tek1++;
	}elseif ($v['keterampilan_teknis'] == 2) {
		$tek2++;
	}elseif ($v['keterampilan_teknis'] == 3) {
		$tek3++;
	}elseif ($v['keterampilan_teknis'] == 4) {
		$tek4++;
	}elseif ($v['keterampilan_teknis'] == 5) {
		$tek5++;
	}

	if ($v['pengetahuan_teori'] == 1) {
		$teo1++;
	}elseif ($v['pengetahuan_teori'] == 2) {
		$teo2++;
	}elseif ($v['pengetahuan_teori'] == 3) {
		$teo3++;
	}elseif ($v['pengetahuan_teori'] == 4) {
		$teo4++;
	}elseif ($v['pengetahuan_teori'] == 5) {
		$teo5++;
	}

	if ($v['kebanggaan'] == 1) {
		$bangga1++;
	}elseif ($v['kebanggaan'] == 2) {
		$bangga2++;
	}elseif ($v['kebanggaan'] == 3) {
		$bangga3++;
	}elseif ($v['kebanggaan'] == 4) {
		$bangga4++;
	}elseif ($v['kebanggaan'] == 5) {
		$bangga5++;
	}	

	if ($v['kepercayaan'] == 1) {
		$percaya1++;
	}elseif ($v['kepercayaan'] == 2) {
		$percaya2++;
	}elseif ($v['kepercayaan'] == 3) {
		$percaya3++;
	}elseif ($v['kepercayaan'] == 4) {
		$percaya4++;
	}elseif ($v['kepercayaan'] == 5) {
		$percaya5++;
	}	

	if ($v['gaji_besar'] == 1) {
		$gaji_besar1++;
	}elseif ($v['gaji_besar'] == 2) {
		$gaji_besar2++;
	}elseif ($v['gaji_besar'] == 3) {
		$gaji_besar3++;
	}elseif ($v['gaji_besar'] == 4) {
		$gaji_besar4++;
	}elseif ($v['gaji_besar'] == 5) {
		$gaji_besar5++;
	}	

	if ($v['kemajuan_karir'] == 1) {
		$karir1++;
	}elseif ($v['kemajuan_karir'] == 2) {
		$karir2++;
	}elseif ($v['kemajuan_karir'] == 3) {
		$karir3++;
	}elseif ($v['kemajuan_karir'] == 4) {
		$karir4++;
	}elseif ($v['kemajuan_karir'] == 5) {
		$karir5++;
	}	

	if ($v['mobilitas_lintas_bidang'] == 1) {
		$mobilitas1++;
	}elseif ($v['mobilitas_lintas_bidang'] == 2) {
		$mobilitas2++;
	}elseif ($v['mobilitas_lintas_bidang'] == 3) {
		$mobilitas3++;
	}elseif ($v['mobilitas_lintas_bidang'] == 4) {
		$mobilitas4++;
	}elseif ($v['mobilitas_lintas_bidang'] == 5) {
		$mobilitas5++;
	}	

	if ($v['prodi_terhadap_iptek'] == 'Ya') {
		$berkembang1++;
	}elseif($v['prodi_terhadap_iptek'] == 'Tidak'){
		$berkembang2++;
	}

	if ($v['komunikasi_dg_prodi'] == 'Ya') {
		$komunikasi1++;
	}elseif($v['komunikasi_dg_prodi'] == 'Tidak'){
		$komunikasi2++;
	}

}
