
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Source Code kecerdasan buatan algoritma genetika (AG) traveling salesman problem (TSP) berbasis web dengan PHP dan MySQL. Studi kasus: pura dan pantai di Bali."/>
    <meta name="keywords" content="Artificial Intelligence, Kecerdasan Buatan, Algoritma Genetika, AI, AG, TSP, Traveling Salesman Problem, Tugas Akhir, Skripsi, Jurnal, Source Code, PHP, MySQL, CSS, JavaScript, Bootstrap, jQuery"/>
    <meta name="author" content="sarjanakomedi.com"/>
    <link rel="icon" href="../assets/images/favicon.ico"/>
   <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/general.css" rel="stylesheet">
   <link href="css/flatly-bootstrap.min.css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeCAhmBV1aJRpEyTpQzwZV-NS_zIfGdSE&language=id&region=ID&libraries=places"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?">AG TSP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">            
            <li><a href="?m=kelompok"><span class="glyphicon glyphicon-th-large"></span> Kelompok</a></li>
            <li><a href="?m=titik"><span class="glyphicon glyphicon-th-list"></span> Titik</a></li>
            <li><a href="?m=bobot"><span class="glyphicon glyphicon-star"></span> Bobot</a></li>
            <li><a href="?m=hitung"><span class="glyphicon glyphicon-signal"></span> AG</a></li>   
            <li><a href=""><span class="glyphicon glyphicon-lock"></span> Password</a></li>
            <li><a href=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>          
          </ul>          
        </div>
      </div>
    </nav>
    <div class="container">
    
    <?php
        $m = isset($_GET['m']) ? $_GET['m'] :'';
        if ($m) {
           include "$m.php";
        }else{
            include "home.php";
        }
    ?>
           
    </div>
    <footer class="footer bg-primary">
      <div class="container">
        <p>Copyright &copy; 2019 SarjanaKomedi.com <em class="pull-right">Diupdate tanggal : 30 September 2017</em></p>
      </div>
    </footer>
</body>
</html>