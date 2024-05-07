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
    <h1 class="mt-5">Welcome to Our Sunscreen Tutorial</h1>
    <p>Discover the importance of sunscreen in your skincare routine and find the perfect <br>sun protection for your skin type and lifestyle.</p>
    <br>
    <h2>Benefits of Using Sunscreen</h2>
</div>
<div class="row mx-5">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Protection Against UV Rays: </h5>
        <p class="card-text ">Shields your skin from harmful UVA and UVB rays that can cause sunburn and premature aging.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Prevents Sun Damage: </h5>
        <p class="card-text ">Reduces the risk of sun damage, including dark spots, wrinkles, and fine lines.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Minimizes Skin Cancer Risk:</h5>
        <p class="card-text ">Regular use of sunscreen lowers the chances of developing skin cancers, such as melanoma and basal cell carcinoma.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Suitable for All Skin Types: </h5>
        <p class="card-text">Sunscreens come in various formulations to cater to different skin types, including sensitive and oily skin.</p>
      </div>
    </div>
  </div>
</div>



<div class="container text-center py-5">
    <h1>Recommended Sunscreen Products</h1>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/BOJ_SUNSCREEN.png" class="img-fluid rounded-start mx-4 py-4" style="width: 90px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Chemical Sunscreens</h5>
        <p class="card-text"><STRONG>Beauty of Joseon Relief Sun : Rice + Probiotics SPF50+:</STRONG> Rice + Probiotics SPF50+ PA++++ is Our new chemical sunscreen that applies gently on the skin and by also including skin calming and brightening ingredients, it allows sensitive skin types to use it with ease as well.SPF 50 certified from 2 separate labs in Korea and Spain.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img//CENTELA_SUNSCREEN.png" class="img-fluid rounded-start mx-5 py-4" style="width: 70px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Physical Sunscreens</h5>
        <p class="card-text"><STRONG>SKIN1004 Madagascar Centella Air-Fit Suncream Plus:</STRONG> A non-nano physical sunscreen that blocks UV rays, while simultaneously brightening the skin. This sunscreen can be worn all year long without feeling heavy or leaving a white cast. This product poerful with SPF50+PA++++deflecting UV rays.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0" >
    <div class="col-md-4">
      <img src="img/THE RAW.png" class="img-fluid rounded-start mx-5 py-4" style="width: 65px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Hybrid Sunscreen</h5>
        <p class="card-text"><STRONG>The Raw. Cera-Shield Hybrid Sunscreen:</STRONG> The cutting-edge synergy of physical and chemical sunscreens – The Raw. Cera-Shield Hybrid Sunscreen. This innovative formulation seamlessly combines reflective and absorptive properties to deliver broad-spectrum coverage against UVA and UVB rays with SPF 50.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px;">
  <div class="row g-0 ">
    <div class="col-md-4">
      <img src="img/TINTED_SUNSCREEN.png" class="img-fluid rounded-start mx-5 py-4"style="width: 50px;" >
    </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h5 class="card-title">Tinted Sunscreen</h5>
        <p class="card-text"><STRONG>SkinMade Super Vitamins Broad-Spectrum + Blue Light Sunscreen: </STRONG>The Super Vitamins Broad-Spectrum + Blue Light Sunscreen SPF50 helps to protect, restore, moisturise and soothe the skin. A 100% mineral, silky lightweight sunscreen developed with a cosmetically elegant texture that blends really well to the skin.</p>
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
