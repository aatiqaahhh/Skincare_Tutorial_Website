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
    <h1 class="mt-5">Welcome to Our Serum Tutorial</h1>
    <p>Explore the world of serums and find the perfect one for your skincare routine to <br>target specific skin concerns and achieve a radiant complexion.</p>
    <br>
    <h2>Types of Serums for Different Skin Concerns</h2>
</div>
<div class="row mx-5">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Anti-Aging Serum</h5>
        <p class="card-text ">Helps reduce fine lines and wrinkles, promoting a more youthful appearance.</p>
    <br>  
    </div>
    </div>
  </div>
  <div class="col-sm-3" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Brightening Serum </h5>
        <p class="card-text ">Targets dark spots and uneven skin tone, revealing a brighter complexion.</p>
    <br>  
    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">Hydrating Serum </h5>
        <p class="card-text ">Adds an extra layer of hydration to the skin, perfect for dry or dehydrated skin.</p>
    <br>  
    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Acne-Fighting Serum </h5>
        <p class="card-text ">Contains ingredients to combat acne and prevent breakouts.</p>
    <br>  
    </div>
    </div>
  </div>
</div>



<div class="container text-center py-5">
    <h1>Recommended Serum Products</h1>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/estee serum.png" class="img-fluid rounded-start mx-4 py-4" style="width: 90px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Anti-Aging Serum</h5>
        <p class="card-text"><STRONG>Advanced Night Repair Synchronized Multi-Recovery Complex:</STRONG>  Now with Chronolux™ Power Signal Technology, this deep- and fast-penetrating face serum reduces the look of multiple signs of aging caused by the environmental assaults of modern life. Skin looks smoother and less lined, younger, more radiant and even toned.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/KIELD_SERUM.png" class="img-fluid rounded-start mx-5 py-3" style="width: 80px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Brightening Serum</h5>
        <p class="card-text"><STRONG>Clearly Corrective™ Dark Spot Solution: </STRONG> A dark spot corrector and brightening serum that helps visibly reduce dark spots, hyperpigmentation, and post-acne marks.Formulated with lab-engineered, renewable Activated C for less environmental impact that help visibly brighten skin over time for even and radiant skin tone.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0" >
    <div class="col-md-4">
      <img src="img/LAROCHE_TONER.png" class="img-fluid rounded-start mx-5 py-3" style="width:65px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Hydrating Serum</h5>
        <p class="card-text"><STRONG>La Roche-Posay Hyalu B5 Serum:</STRONG> A unique hydrating, re-plumping formula enriched with two pure hyaluronic acids and vitamin B5. Plumps and repairs skin's barrier.Hyaluronic acid duo for an action at the surface and in-depth. Formulated for sensitive skin.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0 ">
    <div class="col-md-4">
      <img src="img/ordinary_serum.png" class="img-fluid rounded-start mx-4 py-4"style="width: 130px;" >
    </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h5 class="card-title">Acne-Fighting Serum</h5>
        <p class="card-text"><STRONG>The Ordinary Retinol 0.5% in Squalane:</STRONG>Tackle your acne and skin's texture with The Ordinary Retinol 0.5% in Squalane serum. Dr. Sperling raves over this serum because it "suppresses oil production to treat acne, and squalene, which increases hydration." Since there's active retinol in this serum, be sure not to use it with vitamin C or Copper Peptides to prevent irritation.</p>
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
