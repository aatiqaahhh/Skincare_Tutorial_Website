<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        h1{
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

        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }

        .card-text1 {
            overflow: hidden; /* Hide overflow to create typing effect */
            white-space: nowrap; /* Prevent text from wrapping */
            animation: typewriter 3s steps(40) 1s 1 normal both; /* Adjust duration and steps as needed */
        }
        .image-container {
            position: relative;
            overflow: hidden;
        }
        .image-container img {
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .display-4 {
            overflow: hidden;
            font-size: 3em;
            /*border-right: 0.15em solid orange; /* You can change the color as per your preference */
            white-space: nowrap;
            margin: 0;
            letter-spacing: 0.05em;
            animation: typing 3s steps(30) forwards;
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 2s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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

<header>
<div class="container text-center py-5">
    <h1 class="display-4">Unlock the Secrets of Beautiful Skin</h1>
    <p class="lead">Expert guides for a radiant and healthy complexion.</p>
</div>

<div class="row" >
  <div class="col-sm-4">
    <div class="card bg-transparent"style="border: 2px solid #704241; margin-top: 70px;">
      <div class="card-body" >
        <p class="card-text1">"Skincare is not just a routine; it's a silent conversation with <br>your own reflection. It's the whispered promises you make<br> to your skin, the devotion you shower upon it daily. In this <br>symphony of self-care, every step, every product, and every<br> touch is a note composing the melody of your radiant skin <br>journey."</p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card bg-transparent">
      <div class="card-body text-center">
        <img src="img/logo.png" alt="Image Description" width="150" height="150" class="fade-in">
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card bg-transparent" style="border: 2px solid #704241;  margin-top: 70px;">
      <div class="card-body" style="background-color: transparent;">
        <p class="card-text1">"The journey to radiant skin is a voyage into self-love and <br>self-discovery. It's a commitment to embrace the canvas of<br> your existence, to nourish and protect it like a cherished work <br>of art. With each meticulously chosen product and every <br>tender moment spent in self-care, we sculpt not just flawless <br>skin, but a masterpiece reflecting the beauty of self-compassion."</p>
      </div>
    </div>
  </div>
</div>

</header>

<div class="container text-center py-5">
    <h1>Welcome to Skincare Tutorial</h1>
    <p>Discover the secrets of beautiful and healthy skin with our expert skincare guides.</p>
    <p>Explore our skincare categories:</p>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col"style="margin-left: 200px;">
    <div class="card" >
    <a href="cleanser.php" class="image-container">
        <img src="img/cleanserLogo1.png" class="card-img-top image" alt="Cleanser Logo">
    </a>
      <div class="card-body">
        <h5 class="card-title">Step 1: Cleanser</h5>
        <p class="card-text s1">The cleanser step is an essential component of a skincare routine to remove impurities, dirt, oil, and makeup from the skin's surface. This step helps to cleanse the pores, prevent breakouts. Cleansers come in various forms, such as gels, foams, creams, or oils. The choice of cleanser depends on skin needs, such as hydration, acne control, or sensitivity. It's recommended to cleanse the face twice daily, in the morning and evening.</p>
      </div>
    </div>
  </div>
  <div class="col"style="margin-left: 20px;">
    <div class="card">
    <a href="exfoliate.php" class="image-container">
        <img src="img/exfoliateLogo.png" class="card-img-top" alt="Exfoliate Logo">
    </a>
      <div class="card-body">
        <h5 class="card-title">Step 2: Exfoliate</h5>
        <p class="card-text ">The exfoliation step involves the removal of dead skin cells from the skin's surface, promoting a smoother and brighter complexion. This process helps unclog pores, reduce acne, and improve the effectiveness of other skincare products. Exfoliants can be physical or chemical based on skin type and concerns. Exfoliating 1-3 times per week is generally recommended to maintain healthy and revitalized skin.</p>
      </div>
    </div>
  </div>
  <div class="col"style="margin-left: 20px;">
    <div class="card">
    <a href="toner.php" class="image-container">
        <img src="img/tonerLogo.png" class="card-img-top" alt="toner Logo">
    </a>
      <div class="card-body" >
        <h5 class="card-title">Step 3: Toner</h5>
        <p class="card-text">The toner step in a skincare routine involves applying a liquid product to the skin after cleansing. Toners help balance the skin's pH, remove any remaining traces of impurities, and prepare the skin for the subsequent steps in the routine. Toners come in different formulations, such as hydrating, exfoliating, or soothing, catering to diverse skin needs. Incorporating a toner can contribute to a refreshed and well-prepared skin surface.</p>
      </div>
    </div>
  </div>
  <div class="col"style="margin-left: 200px; margin-bottom: 50px;">
    <div class="card">
    <a href="serum.php" class="image-container">
        <img src="img/serumLogo.png" class="card-img-top" alt="serum Logo">
    </a>
      <div class="card-body">
        <h5 class="card-title">Step 4: Serum</h5>
        <p class="card-text">The serum step in a skincare routine involves applying a concentrated liquid or gel with high-performing active ingredients targeted to address specific skin concerns. This step is designed to address issues such as fine lines, hyperpigmentation, or hydration. Serums are typically applied after cleansing and toning, before moisturizing. They provide a targeted and intense treatment to enhance the overall effectiveness of a skincare routine, promoting healthier and more radiant skin.</p>
      </div>
    </div>
  </div>
  <div class="col"style="margin-left: 20px;">
    <div class="card">
    <a href="moisturiser.php" class="image-container">
        <img src="img/moisturiserLogo.png" class="card-img-top" alt="moisturiser Logo">
    </a>
      <div class="card-body">
        <h5 class="card-title">Step 5: Moisturiser</h5>
        <p class="card-text">The moisturizer step in a skincare routine involves applying a cream, lotion, or gel to hydrate and nourish the skin. Moisturizers help maintain the skin's moisture balance, preventing dryness and promoting a smooth and supple complexion. Moisturizing is crucial for all skin types, including oily skin, as it helps support the skin's natural barrier function. This step is typically performed after cleansing, toning, and applying serums, providing hydration for overall skin health.</P>
      </div>
    </div>
  </div>
  <div class="col"style="margin-left: 20px;">
    <div class="card">
    <a href="sunscreen.php" class="image-container">
        <img src="img/sunscreenLogo.png" class="card-img-top" alt="sunscreen Logo">
    </a>
      <div class="card-body">
        <h5 class="card-title">Step 6: Sunscreen</h5>
        <p class="card-text">The sunscreen step in a skincare routine involves applying a protective product to shield the skin from the harmful effects of ultraviolet (UV) rays. Sunscreen helps prevent sunburn, premature aging, and reduces the risk of skin cancer. It should be applied as the final step in the morning routine, after moisturizing. Daily use of sunscreen is crucial for maintaining healthy skin and preventing sun damage, even on cloudy days or during winter months.</p>
      </div>
    </div>
  </div>
</div>

<footer class="text-center py-3">
    <p>&copy; 2024 Skincare Tutorial. All rights reserved.</p>
</footer>

<script>
        // Optional: You can use JavaScript to delay the appearance of the animation
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.querySelector(".display-4").style.animation = "typing 3s steps(30) forwards";
            }, 1000); // Delay in milliseconds, change as needed
        });
    </script>
    
</body>
</html>
