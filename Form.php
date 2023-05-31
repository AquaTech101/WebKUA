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
        <button class="btn" id="before" onclick="nextPrev(-1)"><i class="fas fa-chevron-left m-l-7" style="font-size:32px"></i></button>
        <div class="form-outer-wrap">
            <span name="top" style="margin-top: 0%;" class="form-outer-title">
            <!-- Pengisian Form Persetujuan Mempelai -->
            </span>
            <span name="top" id="name" style="margin-top: 0%;" class="form-outer-title">
            <?php echo $_POST["selectedOps"]; ?>
            </span>
            <span style="margin-top: 0%;" id="number" class="form-outer-title">
                ?/?
            </span>
        </div>
        <button class="btn" id="next" onclick="nextPrev(1)"><i class="fas fa-chevron-right m-l-7" style="font-size:32px "></i></button>
    </div>

    <div class="form-container">
        <form id="form" action="<?php echo $_POST["selectedOps"]; ?>.php" method="POST" class="form-wrap">
            <input type="hidden" name="tipe" id="tipe" value="">
            <!-- <div class="form tab">
                <span id="G-SKUN" class="form-title">
                Informasi Anak
                </span>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Nama Lengkap</span>
                    <input disabled class="nikah KTOT SKUN" type="text" name="nama-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Alias</span>
                    <input disabled class="nikah KTOT SKUN" type="text" name="alias-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tempat</span>
                    <input disabled class="nikah KTOT SKUN" type="text" name="tempat-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tanggal Lahir</span>
                    <input disabled class="nikah KTOT SKUN" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal-anak">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Warga Negara</span>
                    <input disabled class="nikah KTOT SKUN" type="text" name="warga-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Jenis Kelamin</span>
                    <select disabled name="kelamin-anak" class="nikah KTOT SKUN">
                            <option selected value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
						</select>
                </div>
                

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Agama</span>
                    <input disabled class="nikah KTOT SKUN" type="text" name="agama-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Nama Suami/Istri Sebelumnya</span>
                    <input disabled class="nikah SKUN" type="text" name="pasangan-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah ">Pekerjaan</span>
                    <input disabled class="nikah KTOT SKUN" type="text" name="pekerjaan-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Bin / Binti</span>
                    <input disabled class="nikah SKUN" type="text" name="bin-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Status Perkawinan</span>
                    <input disabled class="nikah SKUN" type="text" name="kawin-anak" placeholder="">
                </div>

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Tempat Tinggal Sekarang</span>
                    <textarea disabled class="nikah KTOT SKUN" name="tinggal-anak" placeholder=""></textarea>
                </div>

                <div class="container-form-btn submit">
                    <button class="form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
                </div>
            </div> -->

            <!-- <div class="form tab">
                <span id="G-KAU" class="form-title">
                Informasi Ayah
                </span>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Nama Lengkap</span>
                    <input disabled class="nikah KAU SIOT" type="text" name="nama-ayah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Alias</span>
                    <input disabled class="nikah KAU SIOT" type="text" name="alias-ayah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tempat</span>
                    <input disabled class="nikah KAU SIOT" type="text" name="tempat-ayah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tanggal Lahir</span>
                    <input disabled class="nikah KAU SIOT" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal-ayah">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Warga Negara</span>
                    <input disabled class="nikah KAU SIOT" type="text" name="warga-ayah" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Agama</span>
                    <input disabled class="nikah KAU SIOT" type="text" name="agama-ayah" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah ">Pekerjaan</span>
                    <input disabled class="nikah KAU SIOT" type="text" name="pekerjaan-ayah" placeholder="">
                </div>

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Tempat Tinggal Sekarang</span>
                    <textarea disabled class="nikah KAU SIOT" name="tinggal-ayah" placeholder=""></textarea>
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

            <div class="form tab">
                <span class="form-title">
                Informasi Ibu
                </span>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Nama Lengkap</span>
                    <input disabled class="nikah SIOT" type="text" name="nama-ibu" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Alias</span>
                    <input disabled class="nikah SIOT" type="text" name="alias-ibu" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tempat</span>
                    <input disabled class="nikah SIOT" type="text" name="tempat-ibu" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tanggal Lahir</span>
                    <input disabled class="nikah SIOT" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal-ibu">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Warga Negara</span>
                    <input disabled class="nikah SIOT" type="text" name="warga-ibu" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Agama</span>
                    <input disabled class="nikah SIOT" type="text" name="agama-ibu" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah ">Pekerjaan</span>
                    <input disabled class="nikah SIOT" type="text" name="pekerjaan-ibu" placeholder="">
                </div>

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Tempat Tinggal Sekarang</span>
                    <textarea disabled class="nikah SIOT" name="tinggal-ibu" placeholder=""></textarea>
                </div>

                <div class="container-form-btn submit">
                    <button class="form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
                </div>
            </div> -->

            <div class="form tab">

                <span id="G-SKK" class="form-title">
                Informasi Suami
                </span>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Nama Lengkap</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="nama-suami" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Alias</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="alias-suami" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah ">Tempat Lahir</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="tempat-suami" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tanggal Lahir</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"  name="tanggal-suami">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Warga Negara</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="warga-suami" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Agama</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="agama-suami" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah">Pekerjaan</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="pekerjaan-suami" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span id="4G-SKK" class="label-nikah">Bin</span>
                    <input disabled class="nikah PM SKK" type="text" name="bin-suami" placeholder="">
                </div>
                
               

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Tempat Tinggal</span>
                    <textarea disabled class="nikah KAU PM KTOT SIOT SKK" name="tinggal-suami" placeholder=""></textarea>
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

            <div class="form tab">

                <span id="2G-SKK" class="form-title ">
                Informasi Istri
                </span>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Nama Lengkap</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="nama-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Alias</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="alias-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tempat</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="tempat-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Tanggal Lahir</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"  name="tanggal-istri">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Warga Negara</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="warga-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg1 rs1-wrap-nikah">
                    <span class="label-nikah">Agama</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="agama-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span class="label-nikah">Pekerjaan</span>
                    <input disabled class="nikah KAU PM KTOT SIOT SKK" type="text" name="pekerjaan-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg1">
                    <span id="3G-SKK" class="label-nikah">Binti</span>
                    <input disabled class="nikah PM SKK" type="text" name="binti-istri" placeholder="">
                </div>

                <div class="wrap-nikah bg0">
                    <span class="label-nikah">Tempat Tinggal Sekarang</span>
                    <textarea disabled class="nikah KAU PM KTOT SIOT SKK" name="tinggal-istri" placeholder=""></textarea>
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