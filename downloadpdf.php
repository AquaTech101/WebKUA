<?php
require_once "vendor/autoload.php";
  
use Dompdf\Dompdf;
use Dompdf\Options;

// Initialize the session
session_start();
 
$options = new Options();
$options->set('isRemoteEnabled', TRUE);

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);
$context = stream_context_create([ 
	'ssl' => [ 
		'verify_peer' => FALSE, 
		'verify_peer_name' => FALSE,
		'allow_self_signed'=> TRUE 
	] 
]);
$dompdf->setHttpContext($context);
$dompdf->getOptions()->setChroot('/');

$html = '
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,700&display=swap" rel="stylesheet">

<body>
<p class="Right">Model : N-3</p>

                <strong class="Center"><u>'. $_SESSION['tipe'] .'</u></strong><br>

                <strong class="Left">Yang bertanda tangan dibawah ini :</strong>

                <strong class="Left">Calon Suami :</strong>

                <p class="Left">Nama Lengkap dan alias : '. $_SESSION['nama-suami'] .', '. $_SESSION['alias-suami'] .'</p>
                <p class="Left">Bin : '. $_SESSION['bin-suami'] .'</p>
                <p class="Left">Tempat Tanggal Lahir : '. $_SESSION['tempat-suami'] .', '. $_SESSION['tanggal-suami'] .'</p>
                <p class="Left">Warga Negara : '. $_SESSION['warga-suami'] .'</p>
                <p class="Left">Agama : '. $_SESSION['agama-suami'] .'</p>
                <p class="Left">Pekerjaan : '. $_SESSION['pekerjaan-suami'] .'</p>
                <p class="Left">Tempat Tinggal : '. $_SESSION['tinggal-suami'] .'</p><br>

                <strong class="Left">Calon Istri :</strong>

                <p class="Left">Nama Lengkap dan alias : '. $_SESSION['nama-istri'] .', '. $_SESSION['alias-istri'] .'</p>
                <p class="Left">Binti : '. $_SESSION['binti-istri'] .'</p>
                <p class="Left">Tempat Tanggal Lahir : '. $_SESSION['tempat-istri'] .', '. $_SESSION['tanggal-istri'] .'</p>
                <p class="Left">Warga Negara : '. $_SESSION['warga-istri'] .'</p>
                <p class="Left">Agama : '. $_SESSION['agama-istri'] .'</p>
                <p class="Left">Pekerjaan : '. $_SESSION['pekerjaan-istri'] .'</p>
                <p class="Left">Tempat Tinggal : '. $_SESSION['tinggal-istri'] .'</p><br>

                <strong class="Left">
                    Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa
                    paksaaan dari siapapun juga, setuju untuk melangsungkan pernikahan.
                </strong><br>

                <strong class="Left">
                    Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.
                </strong>
</body>

</html>
';
$dompdf->loadHtml($html);
  
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');
 
// Render the HTML as PDF
$dompdf->render();
 
// Output the generated PDF to Browser
$dompdf->stream();
?>