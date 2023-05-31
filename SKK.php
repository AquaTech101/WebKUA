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
                <p class="Right">Model : N-6</p>

                <strong class="Center"><u><?php echo $_POST["tipe"]; ?></u></strong><br>

                <strong class="Left">Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</strong><br><br>

                <p class="Left">Nama Lengkap dan alias : <?php echo $_POST["nama-suami"]; ?>, <?php echo $_POST["alias-suami"]; ?></p>
                <p class="Left">Bin / binti : <?php echo $_POST["bin-suami"]; ?></p>
                <p class="Left">Tempat Tanggal Lahir : <?php echo $_POST["tempat-suami"]; ?>, <?php echo $_POST["tanggal-suami"]; ?></p>
                <p class="Left">Warga Negara : <?php echo $_POST["warga-suami"]; ?></p>
                <p class="Left">Agama : <?php echo $_POST["agama-suami"]; ?></p>
                <p class="Left">Pekerjaan terakhir : <?php echo $_POST["pekerjaan-suami"]; ?></p>
                <p class="Left">Tempat Tinggal terakhir : <?php echo $_POST["tinggal-suami"]; ?></p><br>

                <p class="Left">telah meninggal dunia pada tanggal : <?php echo $_POST["ninggal-suami"]; ?></p>
                <p class="Left">di : <?php echo $_POST["wafat-suami"]; ?></p><br>

                <p class="Left">Nama Lengkap dan alias : <?php echo $_POST["nama-istri"]; ?>, <?php echo $_POST["alias-istri"]; ?></p>
                <p class="Left">Bin / binti : <?php echo $_POST["binti-istri"]; ?></p>
                <p class="Left">Tempat Tanggal Lahir : <?php echo $_POST["tempat-istri"]; ?>, <?php echo $_POST["tanggal-istri"]; ?></p>
                <p class="Left">Warga Negara : <?php echo $_POST["warga-istri"]; ?></p>
                <p class="Left">Agama : <?php echo $_POST["agama-istri"]; ?></p>
                <p class="Left">Pekerjaan : <?php echo $_POST["pekerjaan-istri"]; ?></p>
                <p class="Left">Tempat Tinggal : <?php echo $_POST["tinggal-istri"]; ?></p><br>

                <strong class="Left">Adalah suami/istri orang yang telah meninggal tersebut di atas.</strong><br>
                <strong class="Left">Demikian surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk dipergunakan seperlunya</strong><br>
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