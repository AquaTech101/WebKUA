<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form KUA Online</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
</head>

<body>

    <span class="form-outer-title">
        Hasil Form
    </span>
    <div class="form-container">
        <div class="form-wrap">
            <div class="wrap-nikah bg0">
                <p class="Right">Model : N-1</p>

                <strong class="Center"><u><?php echo $_POST["tipe"]; ?></u></strong><br>

                <strong class="Left">Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</strong><br>

                <p class="Left">Nama Lengkap dan alias : <?php echo $_POST["nama-anak"]; ?>, <?php echo $_POST["alias-anak"]; ?></p>
                <p class="Left">Jenis kelamin : <?php echo $_POST["kelamin-anak"]; ?></p>
                <p class="Left">Tempat Tanggal Lahir : <?php echo $_POST["tempat-anak"]; ?>, <?php echo $_POST["tanggal-anak"]; ?></p>
                <p class="Left">Warga Negara : <?php echo $_POST["warga-anak"]; ?></p>
                <p class="Left">Agama : <?php echo $_POST["agama-anak"]; ?></p>
                <p class="Left">Pekerjaan : <?php echo $_POST["pekerjaan-anak"]; ?></p>
                <p class="Left">Tempat Tinggal : <?php echo $_POST["tinggal-anak"]; ?></p>
                <p class="Left">Bin/binti : <?php echo $_POST["bin-anak"]; ?></p>
                <p class="Left">Status Perkawinan : <?php echo $_POST["kawin-anak"]; ?></p>
                <p class="Left">Nama Istri/Suami terdahulu : <?php echo $_POST["pasangan-anak"]; ?></p><br>

                <strong class="Left">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</strong><br><br>
                <p class="Right">................,............................</p><br>
                <p class="Right">Kepala Desa/Kelurahan ............................</p><br>
            </div>

            <div class="container-form-btn">
                <a class="form-btn" id="select-form" href="index.html">
                    <button class="form-btn">
						<span>
                            <i class="fa fa-long-arrow-left m-r-7" aria-hidden="true"></i>
							Return
						</span>
                    </button>
                </a>
            </div>
        </div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/f2281c1ac2.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>

</body>

</html>