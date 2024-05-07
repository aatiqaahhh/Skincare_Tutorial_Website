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
    <h1 class="mt-5">Welcome to Our Moisturiser Tutorial</h1>
    <p>Discover the best moisturizers for your skin type and keep your skin hydrated and<br> nourished with our recommended products.</p>
    <br>
    <h2>Types of Skin Suitable for Moisturizers:</h2>
</div>
<div class="row mx-5">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Dry Skin:</h5>
        <p class="card-text mb-4">Choose a rich and hydrating moisturizer to combat dryness and flakiness.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Oily Skin: </h5>
        <p class="card-text ">Opt for a lightweight, oil-free moisturizer to provide hydration without clogging pores..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Combination Skin: </h5>
        <p class="card-text mb-4">Use a moisturizer that can balance the moisture levels in both dry and oily areas.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sensitive Skin: </h5>
        <p class="card-text">Look for a fragrance-free and hypoallergenic moisturizer suitable for sensitive skin types..</p>
      </div>
    </div>
  </div>
</div>



<div class="container text-center py-5">
    <h1>Recommended Moisturizer Products</h1>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/m3.webp" class="img-fluid rounded-start mx-3 py-4" style="width: 200px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Dry Skin</h5>
        <p class="card-text"><STRONG>Laneige Water Bank Moisture Cream:</STRONG> Super soothing and hydrating, the Laneige, Water Bank, Moisture Cream can provide pamper your skin with healthy moisture. Infused with green mineral water, this cream can protect your skin’s moisture barrier and improve your skin texture. With an excellent antioxidant effect, this cream can also remove harmful and active oxygen to improve your skin’s defensive ability.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/m4.png" class="img-fluid rounded-start mx-3 py-4" style="width: 180px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Oily Skin</h5>
        <p class="card-text"><STRONG>Neutrogena Hydro Boost Gel-Cream:</STRONG> Neutrogena Hydro Boost Gel-Cream is a hydrating face moisturizer gel-cream that is designed to hydrate and smooth extra-dry skin. It contains hyaluronic acid, which is found naturally in the skin and helps to bind water and hold it within the skin’s surface </p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0" >
    <div class="col-md-4">
      <img src="img/laneige moisturizing.png" class="img-fluid rounded-start mx-4 py-5" style="width: 130px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Combination Skin</h5>
        <p class="card-text"><STRONG>Water Bank Blue Hyaluronic Cream :</STRONG> This gel-type formula replenishes the skin with moisture, and the Melting Cream Beads gently melt upon touching the skin to keep skin moist. This product have 8-free (animal ingredients, mineral oil, polyacrylamide, imidazolidinyl urea, triethanolamine, synthetic pigments,paraben, PEG surfactant, Silicon oil)</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0 ">
    <div class="col-md-4">
      <img src="img/m1.png" class="img-fluid rounded-start mx-4 py-5"style="width: 150px;" >
    </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h5 class="card-title">Sensitive Skin</h5>
        <p class="card-text"><STRONG>Kate Somerville Age Arrest Anti-Wrinkle Cream </STRONG>The formula is purported to improve the look of fine lines, smooth wrinkles, provide hydration and increase skin elasticity through Somerville’s “telo-5” technology. This technology is based on the science of telomeres, which protect chromosomes from damage and, ultimately, cell death, and are thought to be a key part of the aging process.</p>
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
