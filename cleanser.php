<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        h1, h2{
          font-family:  serif;
        }
        header {
            padding: 20px;
            min-height: 100px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/backMain.png) center/cover no-repeat fixed;
            color: #ffffff;
        }
        footer {
            background-color: #483c32;
            padding: 10px;
            color: #ffffff;
            text-align: center;
        }
        .marginT{
            margin-top: 20px;
        }
       
        body{
            background-color: #faf0e6;
        }
    </style>
    <title>Skincare Tutorial</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: #c9c0bb;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Skincare Routine</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav justify-content-end" style="--bs-scroll-height: 100px;">
            <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Skincare
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="cleanser.php">cleanser</a></li>
                    <li><a class="dropdown-item" href="exfoliate.php">exfoliate</a></li>
                    <li><a class="dropdown-item" href="toner.php">toner</a></li>
                    <li><a class="dropdown-item" href="serum.php">serum</a></li>
                    <li><a class="dropdown-item" href="moisturiser.php">moisturiser</a></li>
                    <li><a class="dropdown-item" href="sunscreen.php">sunscreen</a></li>
                </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-dark" href="feedback.php">Rating & Feedback</a>
            </li>
          </ul>
    </div>
</nav>

<div class="container text-center py-5">
    <h1 class="mt-5">Welcome to Cleanser Tutorial</h1>
    <p>Discover the best cleansers for your skin type and achieve a healthy,<br> glowing complexion with our recommended products.</p>
    <br>
    <h2>Types of Skin Suitable for Cleansers:</h2>
</div>
<div class="row mx-5">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Dry Skin:</h5>
        <p class="card-text mb-4">Look for a hydrating cleanser that doesn't strip the skin of its natural oils.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Oily Skin: </h5>
        <p class="card-text mb-4">Find a foaming or gel-based cleanser that can help control excess oil.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Combination Skin: </h5>
        <p class="card-text">Use a gentle cleanser that can balance the skin without over-drying or making it too oily.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sensitive Skin: </h5>
        <p class="card-text">Choose a fragrance-free and gentle cleanser formulated for sensitive skin types.</p>
      </div>
    </div>
  </div>
</div>



<div class="container text-center py-5">
    <h1>Recommended Cleanser Products</h1>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/CETAPHIL_CLEANSER.png" class="img-fluid rounded-start mx-5 py-2" style="width: 100px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Dry Skin</h5>
        <p class="card-text"><STRONG>Cetaphil Gentle Skin Cleanser:</STRONG> Designed to hydrate your skin, containing glycerin and Vitamins B5 and B3—feels milky and silky on your fingertips and it spreads very easily. </p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/AHABHA_CLEANSER.png" class="img-fluid rounded-start mx-5 py-2" style="width: 90px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Oily Skin</h5>
        <p class="card-text"><STRONG>HADA LABO AHA + BHA Face Wash: </STRONG>It's a frothing face wash with substance exfoliants (AHA + BHA) in the actual item. Having issues with PIH and stopped up pores and having both exfoliants in the cleaning agent settled on my choice exceptionally fast.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0" >
    <div class="col-md-4">
      <img src="img/CERAVE_CLEANSER.png" class="img-fluid rounded-start mx-5 py-2" style="width: 80px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Combination Skin</h5>
        <p class="card-text"><STRONG>CeraVe Hydrating Cream-toFoam Cleanser:</STRONG> A light foam-based cleanser can do wonders for combination skin and the consistency of foam effectively cleanses excess oil without stripping the skin.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0 ">
    <div class="col-md-4">
      <img src="img/VANICREAM_CLENASER.png" class="img-fluid rounded-start mx-5 py-2"style="width: 90px;" >
    </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h5 class="card-title">Sensitive Skin</h5>
        <p class="card-text"><STRONG>Vanicream Gentle Facial Cleanser:</STRONG> Helps remove makeup and excess skin oils without drying your skin. Leaves skin feeling clean and soft. Ideal for dry skin.</p>
      </div>
    </div>
  </div>
</div>
</div>

<footer class="text-center py-3">
    <p>&copy; 2024 Skincare Tutorial. All rights reserved.</p>
</footer>
</body>
</html>
