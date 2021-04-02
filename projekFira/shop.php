<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootsrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/shop.css">
    <link href="asset/aos-master/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Get Syari</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto text-center">
            <a class="nav-link" aria-current="page" href="index.html">HOME</a>
            <a class="nav-link active" style="background-color: rgb(221, 221, 221); border-radius: 10px" href="#">SHOP</a>
            <a class="nav-link" href="#">BEST SELLER</a>
            <a class="nav-link" href="#">SALE</a>
            <a class="nav-link" href="#">BLOG</a>
            <a class="nav-link" href="#">LOOKBOOK</a>
            <a class="nav-link" href="#">PRICING</a>
          </div>
        </div>
      </div>
    </nav>
    <br><br><br>
    <div class="store" id="store">
      <?php
      
				for ($i=0;$i<30;$i++){

					// $result = mysqli_query($conn,"SELECT stok from size where name = '$data[name]'");
					// $stok = 0;
					// while($count = mysqli_fetch_assoc($result)){
					// 	$stok += $count['stok'];
					// }
					?>
      <form action="shop.php" method="GET">
        <button class="boxStore shadow p-3 mb-5 bg-body rounded" type="submit" name="click" data-aos="flip-left" >
          <img src="asset/img/mainPage/Aisha_Series.jpg" alt="" />
          <h1>nama</h1>
          <div class="harga">
            IDR :
            Harga
          </div>
          <input type="hidden" name="id" value="null" />
        </button>
      </form>

      
      <?php } ?>
    </div>
    <br /><br /><br />
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="asset/aos-master/dist/aos.js"></script>
    <script>AOS.init();</script>
  </body>
</html>
