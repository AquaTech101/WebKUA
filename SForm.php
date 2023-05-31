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

<body onload="selectedOption();">
    <div class="upper form-outer-container">
        <div class="form-outer-wrap">
            <span name="top" style="margin-top: 0%;" class="form-outer-title">
            Pengisian Form Surat Online
            </span>
            <span name="top" id="name" style="margin-top: 0%;" class="form-outer-title">
            <?php echo $_POST["selectedOps"]; ?>
            </span>
        </div>
    </div>

    <div class="form-container">
        <form id="form" action="<?php echo $_POST["selectedOps"]; ?>.php" method="POST" class="form-wrap">
            <input type="hidden" name="tipe" id="tipe" value="">
            <div class="form tab">
                <span class="form-title">
                Informasi Pernikahan
                </span>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah">Nama Lengkap Suami</span>
                    <input disabled class="nikah PKN" type="text" name="suami-nikah" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah">Nama Lengkap Istri</span>
                    <input disabled class="nikah PKN" type="text" name="istri-nikah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs2-wrap-nikah">
                    <span class="label-nikah">Hari</span>
                    <input disabled class="nikah PKN" type="text" name="hari-nikah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs2-wrap-nikah">
                    <span class="label-nikah">Tanggal</span>
                    <input disabled class="nikah PKN" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal-nikah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs2-wrap-nikah">
                    <span class="label-nikah">Jam</span>
                    <input disabled class="nikah PKN" type="text" name="jam-nikah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Mas Kawin</span>
                    <input disabled class="nikah PKN" type="text" name="mas-nikah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tunai/Hutang</span>
                    <select disabled name="tunai-nikah" class="nikah PKN">
                            <option selected value="Tunai">Tunai</option>
                            <option value="Hutang">Hutang</option>
						</select>
                </div>

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Tempat Kawin</span>
                    <textarea disabled class="nikah PKN" name="tempat-nikah" placeholder=""></textarea>
                </div>

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Lampiran Surat</span>
                    <textarea disabled class="nikah PKN" name="surat-nikah" placeholder=""></textarea>
                </div>

                <div class="container-form-btn submit">
                    <button class="form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
                </div>
            </div>

            

        </form>
    </div>

    <div class="downer form-outer-container">
        <div class="form-outer-wrap">
            <a style="margin-top: 0%;" class="form-outer-title" href="#top">Back to top</a>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js "></script>
    <script src="https://kit.fontawesome.com/f2281c1ac2.js " crossorigin="anonymous "></script>
    <script src="js/main.js "></script>
    <script>
        var select = <?php echo $_POST["selectedOps"]; ?>;
        window.alert(select);
    </script>

</body>

</html>