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
                <p class="Right">Model : N-7</p>

                <strong class="Center"><u><?php echo $_POST["tipe"]; ?></u></strong><br>

                <strong class="Left">Dengan ini kami memberitahukan bahwa kami bermaksud akan melangsungkan pernikahan antara :</strong><br>

                <p class="Left">Nama Suami & Istri : <?php echo $_POST["suami-nikah"]; ?> & <?php echo $_POST["istri-nikah"]; ?></p>
                <p class="Left">Hari, Tanggal, dan Jam nikah : <?php echo $_POST["hari-nikah"]; ?>, <?php echo $_POST["tanggal-nikah"]; ?>, <?php echo $_POST["jam-nikah"]; ?></p>
                <p class="Left">Mas Kawin : <?php echo $_POST["mas-nikah"]; ?> dibayar <?php echo $_POST["tunai-nikah"]; ?></p>
                <p class="Left">Tempat Kawin : <?php echo $_POST["tempat-nikah"]; ?></p>
                <p class="Left">Lampiran Surat : <?php echo $_POST["surat-nikah"]; ?></p><br>

                <strong class="Left">Hanya dapat dihadiri dan dicatat pelaksanaannya sesuai dengan ketentuan perundang-undangan yang berlaku.</strong><br>
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