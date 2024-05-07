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

        .accordion-button {
            background-color: #a57164; /* Brown color for accordion buttons */
            color: #fff; /* White text color */
        }

        .accordion-button:hover {
            background-color: #986960; /* Darker brown color on hover */
        }

        .accordion-body {
            background-color: #e3dac9; /* Light brown color for accordion body */
            color: #000; /* Black text color */
        }

        /* Blue theme styles for the first accordion item */
        #headingOne, #headingTwo {
            border-color: #a57164; /* Blue border color for accordion item 1 */
        }

        #headingOne .accordion-button,
        #headingTwo .accordion-button {
            background-color: #986960; /* Blue background color for accordion button in item 1 */
            color: #fff;
            border-color: #a57164;
        }

        #collapseOne, #collapseTwo {
            background-color: #e3dac9; /*  background color for accordion body in item 1 */
            border-color: #a57164;
            color: #fff; /* White text color */
        }

        .accordion {
            max-width: 600px; /* Adjust the maximum width as needed */
            margin: 0 auto; /* Center the accordion */
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

<!--title-->
<div class="container text-center py-5 ">
    <h1 class="mt-5 ">Welcome to Exfoliate Tutorial</h1>
    <p>Discover the best exfoliators for your skin type and achieve a radiant and smooth <br>complexion with our recommended products.</p>
</div>
<div class="container text-center py-2 ">
    <h2>Chemical vs physical exfoliation</h2>
</div>
<!--accordion-->
<div class="accordion  " id="accordionExample">
  <div class="accordion-item ">
    <h2 class="accordion-header " id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What does a physical exfoliator do? 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">Physical exfoliators, like scrub or wash cloths, focus only on the surface of the skin. They physically slough away dead skin cells to make skin smoother and more even in texture, and help reduce the appearance of pores.Historically, things like walnut shells were used (which can cause microtears in the skin) or microbeads which wreak havoc on the environment because they're plastic and would pollute waterways. Sugar, pumice, and finely milled powders are a much better option for both skin and planet. 
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo" >
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What does a chemical exfoliant do?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body"><strong>Chemical exfoliants fall into two main categories: AHAs and BHAs.</strong>
        <br>i. AHAs are water soluble so they won't have much impact on your skin's oil levels or production, but what they do do is help to break down the surface level skin cells, targeting dullness, clogging and leaving skin smooth after using it.
        <br>
        ii. BHAs are oil-soluble and break down excess oil on the skin and just under the skin's surface. Salicylic acid is one example of a BHA and is particularly beneficial for those with acne-prone skin because it can penetrate oil stored in pores.    
    </div>
    </div>
  </div>
</div>

<!--title-->
<div class="container text-center py-5">
    <h1 class="mt-5">Recommended Exfoliator Products</h1>
</div>

<div class="row mx-5 ">
<div class="card mb-3 mx-5 " style="max-width: 600px; background-color: #e3dac9">
  <div class="row g-0" >
    <div class="col-md-4">
      <img src="img/PHYSICAL_EXFOLIATE.png" class="mx-auto d-block py-4" style="width: 130px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Physical Exfoliation</h5>
        <p class="card-text"><STRONG>OLEHENRIKSEN Transforming Walnut Scrub:</STRONG> Walnut-based scrubs have sparked controversy in the past. St. Ives Apricot Scrub, which contains crushed walnut shell powder, was the subject of a 2017 lawsuit in which the plaintiffs claimed that it creates microscopic tears and clogs pores. The lawsuit was ultimately dismissed over a lack of evidence.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 mx-5 " style="max-width: 600px; background-color: #e3dac9">
  <div class="row g-0 ">
    <div class="col-md-4">
      <img src="img/SOMEBYME_CHEMICAL.png" class="mx-auto d-block py-5" style="width: 120px;" >
    </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h5 class="card-title">Chemical Exfoliation</h5>
        <p class="card-text"><STRONG>AHA-BHA-PHA 30 Days Miracle Truecica Clear Pad:</STRONG> These dual-sided, mild but effective pads are soaked in a blend of naturally-derived AHA, BHA, and PHA, to help promote exfoliation while reducing sebum and minimizing pores. Additionally, the Truecica™ , Willow Bark water, & Tea tree leaf water soothe and calm the skin from irritation </p>
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
