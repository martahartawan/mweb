<?php
//Form submitted
//set input hasil dan deret menjadi kosong
$input1 = "";           //input1
$input2 = "";           //input2
$hasil = "";            //hasil
$deret = "";            //deret yang ditampilin
$jmlderet = "";         //jml deret

if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    $jmlderet = $_POST["jmlderet"];

    //fibonacci

    $a = $input1;
    $b = $input2;
    $n = $jmlderet;

    $deret = $a . ", " . $b;
    for ($i = 0; $i < $n - 2; $i++) {

        $hasil = $a + $b;

        $a = $b;
        $b = $hasil;
        $deret = $deret . ", " . $hasil;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/aritmatika.css">
    <!-- My CSS -->
    <style>
        section {
            min-height: 420px;
        }
    </style>

    <title>Deret Fibonacci</title>
</head>


<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Miizty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Terbaru</a>
      <a class="nav-item nav-link" href="#">Thumbnail</a>
      <a class="nav-item nav-link disabled" href="#">About</a>
    </div>
  </div>
</div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">




    <h1 class="display-4 ">MIIZTY</h1>
  </div>
</div>

    </div>
    <!-- Akhir Container -->

    <!-- Konten -->
    <div class="container">
        <div class="row justify-content-center mb-3 pt-3">
            <div class="col-10 col-md-6" >
                <form method="POST" action="#" class="bg-white form-container text-center" id="forminput">
                    <h2>Menghitung Deret Fibonacci </h2>
                    <br />
                    <div class="form-group">
                        <label for="input1">Input 1</label>
                        <input type="text" class="form-control" value="<?php echo $input1; ?>" id="input1" placeholder="Masukkan Angka Pertama" name="input1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Input 2</label>
                        <input type="text" class="form-control" value="<?php echo $input2; ?>" id="input2" placeholder="Masukkan Angka Kedua" name="input2" required />
                    </div>

                    <div class="form-group">
                        <label for="input2">Jumlah Deret</label>
                        <input type="text" class="form-control" value="<?php echo $jmlderet; ?>" id="jmlderet" placeholder="Masukkan Jumlah Deret" name="jmlderet" required />
                    </div>
                    <button type="submit" class="btn btn-success btn-block daftar-btn" name="submit">
                        Hitung
                    </button>
                    <br />
                    <div class="form-group">
                        <h5> <b>Hasil: </b> </h5>
                        <h4>
                            <?php echo $deret; ?> </h4>
                    </div>

                </form>
            </div>
        </div>
        <!-- Akhir Container -->
    </div>

</section>


</section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>



<footer>
<div class= "container">
  <small>
  Miizty &copy; 2021 | 087762123321 | Dijamin Puas 
  </small>
</div>
</footer>


</html>