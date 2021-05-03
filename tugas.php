<!DOCTYPE html>
<html>
<head>
	<title>Form Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<?php 
	include "./koneksi.php";

	$error_jenis_pendaftaran = $error_tanggal_masuk = $error_nis = $error_no_peserta = $error_paud = $error_tk = $error_no_skhun = $error_no_ijazah = $error_hobi = $error_cita_cita = $error_nama_lengkap = $error_jenis_kelamin= $error_nisn = $error_nik = $error_tempat_lahir = $error_tanggal_lahir = $error_agama = $error_kebutuhan_khusus = $error_alamat_jalan = $error_rt = $error_rw = $error_nama_dusun = $error_nama_kelurahan = $error_kecamatan = $error_kode_pos = $error_tempat_tinggal = $error_moda_transportasi = $error_no_hp = $error_no_telp = $error_email = $error_penerima_kps = $error_no_kps = $error_kewarganegaraan = $message = "";

	$jenis_pendaftaran = $tanggal_masuk = $nis = $no_peserta = $paud = $tk = $no_skhun = $no_ijazah = $hobi = $cita_cita = $nama_lengkap = $jenis_kelamin = $nisn = $nik = $tempat_lahir = $tanggal_lahir = $agama = $kebutuhan_khusus = $alamat_jalan = $rt = $rw = $nama_dusun = $nama_kelurahan = $kecamatan = $kode_pos = $tempat_tinggal = $moda_transportasi = $no_hp = $no_telp = $email = $penerima_kps = $no_kps = $kewarganegaraan = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["jenis_pendaftaran"]))
		{
			$error_jenis_pendaftaran = "Jenis Pendaftaran tidak boleh kosong";
		}
		else 
		{
			$jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
		}

		if(empty($_POST["tanggal_masuk"]))
		{
			$error_tanggal_masuk = "Tanggal Masuk tidak boleh kosong";
		}
		else 
		{
			$tanggal_masuk = cek_input($_POST["tanggal_masuk"]);
		}

		if(empty($_POST["nis"]))
		{
			$error_nis = "NIS tidak boleh kosong";
		}
		else 
		{
			$nis = cek_input($_POST["nis"]);
			if(!is_numeric($nis))
			{
				$error_nis = "NIS hanya boleh angka";
			}
		}

		if(empty($_POST["no_peserta"]))
		{
			$error_no_peserta = "No. Peserta tidak boleh kosong";
		}
		else 
		{
			$no_peserta = cek_input($_POST["no_peserta"]);
			if(!is_numeric($no_peserta))
			{
				$error_no_peserta = "Nomor Peserta hanya boleh angka";
			}
		}

		if(empty($_POST["paud"]))
		{
			$error_paud = "Paud tidak boleh kosong";
		}
		else 
		{
			$paud = cek_input($_POST["paud"]);
		}

		if(empty($_POST["tk"]))
		{
			$error_tk = "TK tidak boleh kosong";
		}
		else 
		{
			$tk = cek_input($_POST["tk"]);
		}

		if(empty($_POST["no_skhun"]))
		{
			$error_no_skhun = "No. SKHUN tidak boleh kosong";
		}
		else 
		{
			$no_skhun = cek_input($_POST["no_skhun"]);
			if(!is_numeric($no_skhun))
			{
				$error_no_skhun = "Nomor SKHUN hanya boleh angka";
			}
		}

		if(empty($_POST["no_ijazah"]))
		{
			$error_no_ijazah = "No. Ijazah tidak boleh kosong";
		}
		else 
		{
			$no_ijazah = cek_input($_POST["no_ijazah"]);
			if(!is_numeric($no_ijazah))
			{
				$error_no_ijazah = "Nomor Ijazah hanya boleh angka";
			}
		}

		if(empty($_POST["hobi"]))
		{
			$error_hobi = "Hobi tidak boleh kosong";
		}
		else 
		{
			$hobi = cek_input($_POST["hobi"]);
		}

		if(empty($_POST["cita_cita"]))
		{
			$error_cita_cita = "Cita-cita tidak boleh kosong";
		}
		else 
		{
			$cita_cita = cek_input($_POST["cita_cita"]);
		}

		if(empty($_POST["nama_lengkap"]))
		{
			$nama_lengkap = cek_input($_POST["nama_lengkap"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $nama_lengkap))
			{
				$error_nama_lengkap = "Inputan hanya boleh huruf dan spasi";
			}
		}
		else 
		{
			$nama_lengkap = cek_input($_POST["nama_lengkap"]);
		}

		if(empty($_POST["jenis_kelamin"]))
		{
			$error_jenis_kelamin = "Jenis Kelamin tidak boleh kosong";
		}
		else 
		{
			$jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
		}

		if(empty($_POST["nisn"]))
		{
			$error_nisn = "NISN tidak boleh kosong";
		}
		else 
		{
			$nisn = cek_input($_POST["nisn"]);
			if(!is_numeric($nisn))
			{
				$error_nisn = "NISN hanya boleh angka";
			}
		}

		if(empty($_POST["nik"]))
		{
			$error_nik = "NIK tidak boleh kosong";
		}
		else 
		{
			$nik = cek_input($_POST["nik"]);
			if(!is_numeric($nik))
			{
				$error_nik = "NIK hanya boleh angka";
			}
		}

		if(empty($_POST["tempat_lahir"]))
		{
			$error_tempat_lahir = "Tempat Lahir tidak boleh kosong";
		}
		else 
		{
			$tempat_lahir = cek_input($_POST["tempat_lahir"]);
		}

		if(empty($_POST["tanggal_lahir"]))
		{
			$error_tanggal_lahir = "Tanggal Lahir tidak boleh kosong";
		}
		else 
		{
			$tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
		}

		if(empty($_POST["agama"]))
		{
			$error_agama = "Agama tidak boleh kosong";
		}
		else 
		{
			$agama = cek_input($_POST["agama"]);
		}

		if(empty($_POST["kebutuhan_khusus"]))
		{
			$error_kebutuhan_khusus = "Kebutuhan Khusus tidak boleh kosong";
		}
		else 
		{
			$kebutuhan_khusus = cek_input($_POST["kebutuhan_khusus"]);
		}

		if(empty($_POST["alamat_jalan"]))
		{
			$error_alamat_jalan = "Alamat Jalan tidak boleh kosong";
		}
		else 
		{
			$alamat_jalan = cek_input($_POST["alamat_jalan"]);
		}

		if(empty($_POST["rt"]))
		{
			$error_rt = "RT tidak boleh kosong";
		}
		else 
		{
			$rt = cek_input($_POST["rt"]);
			if(!is_numeric($rt))
			{
				$error_rt = "RT hanya boleh angka";
			}
		}

		if(empty($_POST["rw"]))
		{
			$error_rw = "RW tidak boleh kosong";
		}
		else 
		{
			$rw = cek_input($_POST["rw"]);
			if(!is_numeric($rw))
			{
				$error_rw = "RW hanya boleh angka";
			}
		}

		if(empty($_POST["nama_dusun"]))
		{
			$error_nama_dusun = "Nama Dusun tidak boleh kosong";
		}
		else 
		{
			$nama_dusun = cek_input($_POST["nama_dusun"]);
		}

		if(empty($_POST["nama_kelurahan"]))
		{
			$error_nama_kelurahan = "Nama Kelurahan tidak boleh kosong";
		}
		else 
		{
			$nama_kelurahan = cek_input($_POST["nama_kelurahan"]);
		}

		if(empty($_POST["kecamatan"]))
		{
			$error_kecamatan = "Kecamatan tidak boleh kosong";
		}
		else 
		{
			$kecamatan = cek_input($_POST["kecamatan"]);
		}

		if(empty($_POST["kode_pos"]))
		{
			$error_kode_pos = "Kode Pos tidak boleh kosong";
		}
		else 
		{
			$kode_pos = cek_input($_POST["kode_pos"]);
			if(!is_numeric($kode_pos))
			{
				$error_kode_pos = "Kode POS hanya boleh angka";
			}
		}

		if(empty($_POST["tempat_tinggal"]))
		{
			$error_tempat_tinggal = "Tempat Tinggal tidak boleh kosong";
		}
		else 
		{
			$tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
		}

		if(empty($_POST["moda_transportasi"]))
		{
			$error_moda_transportasi = "Moda Transportasi tidak boleh kosong";
		}
		else 
		{
			$moda_transportasi = cek_input($_POST["moda_transportasi"]);
		}

		if(empty($_POST["no_hp"]))
		{
			$error_no_hp = "No. HP tidak boleh kosong";
		}
		else 
		{
			$no_hp = cek_input($_POST["no_hp"]);
			if(!is_numeric($no_hp))
			{
				$error_no_hp = "Nomor HP hanya boleh angka";
			}
		}

		if(empty($_POST["no_telp"]))
		{
			$error_no_telp = "No. Telepon tidak boleh kosong";
		}
		else 
		{
			$no_telp = cek_input($_POST["no_telp"]);
			if(!is_numeric($no_telp))
			{
				$error_no_telp = "Nomor HP hanya boleh angka";
			}
		}

		if(empty($_POST["email"]))
		{
			$email = cek_input($_POST["email"]);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$error_email = "Format email invalid";
			}
		}
		else 
		{
			$email = cek_input($_POST["email"]);
		}

		if(empty($_POST["penerima_kps"]))
		{
			$error_penerima_kps = "Penerima KPS tidak boleh kosong";
		}
		else 
		{
			$penerima_kps = cek_input($_POST["penerima_kps"]);
		}

		if(empty($_POST["no_kps"]))
		{
			$error_no_kps = "No. KPS/PKH/KIP tidak boleh kosong";
		}
		else 
		{
			$no_kps = cek_input($_POST["no_kps"]);
			if(!is_numeric($no_kps))
			{
				$error_no_kps = "No. KPS/PKH/KIP hanya boleh angka";
			}
		}

		if(empty($_POST["kewarganegaraan"]))
		{
			$error_kewarganegaraan = "kewarganegaraan tidak boleh kosong";
		}
		else 
		{
			$kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
		}

		if ($error_jenis_pendaftaran!="" OR $error_tanggal_masuk!="" OR $error_nis!="" OR $error_no_peserta!="" OR $error_paud!="" OR $error_tk!="" OR $error_no_skhun!="" OR $error_no_ijazah!="" OR $error_hobi!="" OR $error_cita_cita!="" OR $error_nama_lengkap!="" OR $error_jenis_kelamin!="" OR $error_nisn!="" OR $error_nik!="" OR $error_tempat_lahir!="" OR $error_tanggal_lahir!="" OR $error_agama!="" OR $error_kebutuhan_khusus!="" OR $error_alamat_jalan!="" OR $error_rt!="" OR $error_rw!="" OR $error_nama_dusun!="" OR $error_nama_kelurahan!="" OR $error_kecamatan!="" OR $error_kode_pos!="" OR $error_tempat_tinggal!="" OR $error_moda_transportasi!="" OR $error_no_hp!="" OR $error_no_telp!="" OR $error_email!="" OR $error_penerima_kps!="" OR $error_no_kps!="" OR $error_kewarganegaraan!=""){
			$message = "Registration failed! Errors found";
		}
		else{
			$query_insert= "INSERT INTO pendaftaran
			(jenis_pendaftaran,tanggal_masuk,nis,no_peserta,paud,tk,no_skhun,no_ijazah,hobi,cita_cita,nama_lengkap,jenis_kelamin,nisn,nik,tempat_lahir,tanggal_lahir,agama,kebutuhan_khusus,alamat_jalan,rt,rw,nama_dusun,nama_kelurahan,kecamatan,kode_pos,tempat_tinggal,moda_transportasi,no_hp,no_telp,email,penerima_kps,no_kps, kewarganegaraan)VALUES (
			'$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$no_peserta', '$paud', '$tk', '$no_skhun', '$no_ijazah', '$hobi', '$cita_cita', '$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$kebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$nama_dusun', '$nama_kelurahan', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$moda_transportasi', '$no_hp', '$no_telp', '$email', '$penerima_kps', '$no_kps', '$kewarganegaraan')";


			$query_insert_ok =mysqli_query($connect,$query_insert);
			$message = "Registration Successful!";
		}


	}

	function cek_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	?>

	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				FORM PESERTA DIDIK
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="jenis_pendaftaran">Jenis Pendaftaran</label>
								<select name="jenis_pendaftaran" class="form-control <?php echo($error_jenis_pendaftaran != "" ? "is-invalid" : ""); ?>">
									<option value="<?php echo $jenis_pendaftaran; ?>">
										<?php 
										if($jenis_pendaftaran == '01'){
											echo '01) Siswa Baru';
										} else if($jenis_pendaftaran == '02'){
											echo '02) Pindahan';
										} else{
											echo '-- Pilih Jenis Pendaftaran --';
										}
										?>
									</option>
									<option value="01">01) Siswa Baru</option>
									<option value="02">02) Pindahan</option>
								</select>
								<span class="text-danger"><?php echo $error_jenis_pendaftaran; ?></span>
							</div>
							<div class="form-group">
								<label for="tanggal_masuk">Tanggal Masuk</label>
								<input type="date" name="tanggal_masuk" class="form-control <?php echo($error_tanggal_masuk != "" ? "is-invalid" : ""); ?>" value="<?php echo $tanggal_masuk; ?>">
								<span class="text-danger"><?php echo $error_tanggal_masuk; ?></span>
							</div>
							<div class="form-group">
								<label for="nis">NIS</label>
								<input type="text" name="nis" class="form-control <?php echo($error_nis != "" ? "is-invalid" : ""); ?>" value="<?php echo $nis; ?>">
								<span class="text-danger"><?php echo $error_nis; ?></span>
							</div>

							<div class="form-group">
								<label for="no_peserta">No. Peserta</label>
								<input type="text" name="no_peserta" class="form-control <?php echo($error_no_peserta != "" ? "is-invalid" : ""); ?>" value="<?php echo $no_peserta; ?>">
								<span class="warning"><?php echo $error_no_peserta; ?></span>
							</div>
							<div class="form-group">
								<label for="paud">PAUD</label>
								<input type="text" name="paud" class="form-control <?php echo($error_paud != "" ? "is-invalid" : ""); ?>" value="<?php echo $paud; ?>">
								<span class="warning"><?php echo $error_paud; ?></span>
							</div>
							<div class="form-group">
								<label for="tk">TK</label>
								<input type="text" name="tk" class="form-control <?php echo($error_tk != "" ? "is-invalid" : ""); ?>" value="<?php echo $tk; ?>">
								<span class="warning"><?php echo $error_tk; ?></span>
							</div>
							<div class="form-group">
								<label for="no_skhun">No. SKHUN</label>
								<input type="text" name="no_skhun" class="form-control <?php echo($error_no_skhun != "" ? "is-invalid" : ""); ?>" value="<?php echo $no_skhun; ?>">
								<span class="warning"><?php echo $error_no_skhun; ?></span>
							</div>
							<div class="form-group">
								<label for="no_ijazah">No. Ijazah</label>
								<input type="text" name="no_ijazah" class="form-control <?php echo($error_no_ijazah != "" ? "is-invalid" : ""); ?>" value="<?php echo $no_ijazah; ?>">
								<span class="warning"><?php echo $error_no_ijazah; ?></span>
							</div>
							<div class="form-group">
								<label for="hobi">Hobi</label>
								<input type="text" name="hobi" class="form-control <?php echo($error_hobi != "" ? "is-invalid" : ""); ?>" value="<?php echo $hobi; ?>">
								<span class="warning"><?php echo $error_hobi; ?></span>
							</div>
							<div class="form-group">
								<label for="cita_cita">Cita - cita</label>
								<input type="text" name="cita_cita" class="form-control <?php echo($error_cita_cita != "" ? "is-invalid" : ""); ?>" value="<?php echo $cita_cita; ?>">
								<span class="warning"><?php echo $error_cita_cita; ?></span>
							</div>
							<div class="form-group">
								<label for="nama_lengkap">Nama Lengkap</label>
								<input type="text" name="nama_lengkap" class="form-control <?php echo($error_nama_lengkap != "" ? "is-invalid" : ""); ?>" value="<?php echo $nama_lengkap; ?>">
								<span class="warning"><?php echo $error_nama_lengkap; ?></span>
							</div>
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<select name="jenis_kelamin" class="form-control <?php echo($error_jenis_kelamin != "" ? "is-invalid" : ""); ?>">
									<option value="<?php echo $jenis_kelamin; ?>">
										<?php

										if (!empty($jenis_kelamin)){
											echo $jenis_kelamin;
										} else{
											echo '-- Pilih Jenis Kelamin --';
										}
										?>
									</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
								<span class="text-danger"><?php echo $error_jenis_kelamin; ?></span>
							</div>
							<div class="form-group">
								<label for="nisn">NISN</label>
								<input type="text" name="nisn" class="form-control <?php echo($error_nisn != "" ? "is-invalid" : ""); ?>" value="<?php echo $nisn; ?>">
								<span class="text-danger"><?php echo $error_nisn; ?></span>
							</div>
							<div class="form-group">
								<label for="nik">NIK</label>
								<input type="text" name="nik" class="form-control <?php echo($error_nik != "" ? "is-invalid" : ""); ?>" value="<?php echo $nik; ?>">
								<span class="text-danger"><?php echo $error_nik; ?></span>
							</div>
							<div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" class="form-control <?php echo($error_tempat_lahir != "" ? "is-invalid" : ""); ?>" value="<?php echo $tempat_lahir; ?>">
								<span class="text-danger"><?php echo $error_tempat_lahir; ?></span>
							</div>
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir</label>
								<input type="date" name="tanggal_lahir" class="form-control <?php echo($error_tanggal_lahir != "" ? "is-invalid" : ""); ?>" value="<?php echo $tanggal_lahir; ?>">
								<span class="text-danger"><?php echo $error_tanggal_lahir; ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="agama">Agama</label>
								<input type="text" name="agama" class="form-control <?php echo($error_agama != "" ? "is-invalid" : ""); ?>" value="<?php echo $agama; ?>">
								<span class="text-danger"><?php echo $error_agama; ?></span>
							</div>
							<div class="form-group">
								<label for="kebutuhan_khusus">Kebutuhan Khusus</label>
								<input type="text" name="kebutuhan_khusus" class="form-control <?php echo($error_kebutuhan_khusus != "" ? "is-invalid" : ""); ?>" value="<?php echo $kebutuhan_khusus; ?>">
								<span class="text-danger"><?php echo $error_kebutuhan_khusus; ?></span>
							</div>
							<div class="form-group">
								<label for="alamat_jalan">alamat_jalan</label>
								<textarea name="alamat_jalan" class="form-control <?php echo($error_alamat_jalan != "" ? "is-invalid" : ""); ?>"><?php echo $alamat_jalan; ?></textarea>
								<span class="text-danger"><?php echo $error_alamat_jalan; ?></span>
							</div>
							<div class="form-group">
								<label for="rt">RT</label>
								<input type="text" name="rt" class="form-control <?php echo($error_rt != "" ? "is-invalid" : ""); ?>" value="<?php echo $rt; ?>">
								<span class="text-danger"><?php echo $error_rt; ?></span>
							</div>
							<div class="form-group">
								<label for="rw">RW</label>
								<input type="text" name="rw" class="form-control <?php echo($error_rw != "" ? "is-invalid" : ""); ?>" value="<?php echo $rw; ?>">
								<span class="text-danger"><?php echo $error_rw; ?></span>
							</div>
							<div class="form-group">
								<label for="nama_dusun">Nama Dusun</label>
								<input type="text" name="nama_dusun" class="form-control <?php echo($error_nama_dusun != "" ? "is-invalid" : ""); ?>" value="<?php echo $nama_dusun; ?>">
								<span class="text-danger"><?php echo $error_nama_dusun; ?></span>
							</div>
							<div class="form-group">
								<label for="nama_kelurahan">Nama Kelurahan</label>
								<input type="text" name="nama_kelurahan" class="form-control <?php echo($error_nama_kelurahan != "" ? "is-invalid" : ""); ?>" value="<?php echo $nama_kelurahan; ?>">
								<span class="text-danger"><?php echo $error_nama_kelurahan; ?></span>
							</div>
							<div class="form-group">
								<label for="kecamatan">Kecamatan</label>
								<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan != "" ? "is-invalid" : ""); ?>" value="<?php echo $kecamatan; ?>">
								<span class="text-danger"><?php echo $error_kecamatan; ?></span>
							</div>
							<div class="form-group">
								<label for="kode_pos">Kode Pos</label>
								<input type="text" name="kode_pos" class="form-control <?php echo($error_kode_pos != "" ? "is-invalid" : ""); ?>" value="<?php echo $kode_pos; ?>">
								<span class="text-danger"><?php echo $error_kode_pos; ?></span>
							</div>
							<div class="form-group">
								<label for="tempat_tinggal">Tempat Tinggal</label>
								<input type="text" name="tempat_tinggal" class="form-control <?php echo($error_tempat_tinggal != "" ? "is-invalid" : ""); ?>" value="<?php echo $tempat_tinggal; ?>">
								<span class="text-danger"><?php echo $error_tempat_tinggal; ?></span>
							</div>
							<div class="form-group">
								<label for="moda_transportasi">Moda Transportasi</label>
								<input type="text" name="moda_transportasi" class="form-control <?php echo($error_moda_transportasi != "" ? "is-invalid" : ""); ?>" value="<?php echo $moda_transportasi; ?>">
								<span class="text-danger"><?php echo $error_moda_transportasi; ?></span>
							</div>
							<div class="form-group">
								<label for="no_hp">No. HP</label>
								<input type="text" name="no_hp" class="form-control <?php echo($error_no_hp != "" ? "is-invalid" : ""); ?>" value="<?php echo $no_hp; ?>">
								<span class="text-danger"><?php echo $error_no_hp; ?></span>
							</div>
							<div class="form-group">
								<label for="no_telp">No. Telp</label>
								<input type="text" name="no_telp" class="form-control <?php echo($error_no_telp != "" ? "is-invalid" : ""); ?>" value="<?php echo $no_telp; ?>">
								<span class="text-danger"><?php echo $error_no_telp; ?></span>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control <?php echo($error_email != "" ? "is-invalid" : ""); ?>" value="<?php echo $email; ?>">
								<span class="text-danger"><?php echo $error_email; ?></span>
							</div>
							<div class="form-group">
								<label for="penerima_kps">Penerima KPS/PKH/KIP</label>
								<select name="penerima_kps" class="form-control <?php echo($error_penerima_kps != "" ? "is-invalid" : ""); ?>">
									<option value="<?php echo $penerima_kps; ?>">
										<?php
										if(!empty($penerima_kps)){
											echo $penerima_kps;
										} else{
											echo '-- Penerima KPS/PKH/KIP --';
										}
										?>
									</option>
									<option value="Ya">Ya</option>
									<option value="Tidak">Tidak</option>
								</select>
								<span class="text-danger"><?php echo $error_penerima_kps; ?></span>
							</div>
							<div class="form-group">
								<label for="no_kps">No. KPS/PKH/KIP</label>
								<input type="text" name="no_kps" class="form-control <?php echo($error_no_kps != "" ? "is-invalid" : ""); ?>" value="<?php echo $no_kps; ?>">
								<span class="text-danger"><?php echo $error_no_kps; ?></span>
							</div>
							<div class="form-group">
								<label for="kewarganegaraan">Kewarganegaraan</label>
								<input type="text" name="kewarganegaraan" class="form-control <?php echo($error_kewarganegaraan != "" ? "is-invalid" : ""); ?>" value="<?php echo $kewarganegaraan; ?>">
								<span class="text-danger"><?php echo $error_kewarganegaraan; ?></span>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer text-center">
				<?php 
				echo $message;
				?>
			</div>
		</div>
	</div>
	
</body>
</html>