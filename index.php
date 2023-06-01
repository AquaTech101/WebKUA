<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$accepted = array("tipe", "nama-suami", "alias-suami", "tempat-suami", "tanggal-suami", "warga-suami", "agama-suami", "pekerjaan-suami", "tinggal-suami", "nama-istri", "alias-istri", "binti-istri", "tempat-istri", "tanggal-istri", "warga-istri", "agama-istri", "pekerjaan-istri", "tinggal-istri");

foreach ( $_SESSION as $foo=>$bar ) {
    if ( in_array( $foo, $accepted ) && !empty($bar) ) {
      unset($_SESSION[$foo]);
    }
}
?>

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
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
    
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat Datang.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

    <span class="form-outer-title">
        Pengisian Form Surat KUA Online
    </span>
    <div class="form-container">
        <form id="wrap" action="Form.php" method="POST" class="form-wrap">
            <div class="wrap-nikah nikah-select bg1">
              <span class="label-nikah">Jenis Surat</span>
              <div>
                <input type="hidden" name="selectedOps" value="Form Persetujuan Mempelai">
                <span class="form-control">Persetujuan Mempelai</span>
              </div>
            </div>
          
            <div class="container-form-btn">
              <button class="form-btn">
                <span>
                  Submit
                  <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                </span>
              </button>
            </div>
          </form>
          

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/f2281c1ac2.js" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>

</body>

</html>