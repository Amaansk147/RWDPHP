<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game library website PHP and mysql</title>
    <!-- !bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link  rel = "stylesheet" href="style.css">   
</head>
<body>
    <h1></h1>
   <div class="container-fluid p-0">
       <nav class="navbar navbar-expand-lg navbar-light  bg-info ">
  <div class="container-fluid">
    <img src="images/Steam-logopng.png" alt="" class = "logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"><sup>1</sup></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">totalprice</a>
        </li>
</ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

 <!--secondchild-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav">
    <li class = "nav-item">
      <a class = "nav-link" href="#">Welcome Guest</a>
    </li>
    <li class = "nav-item">
      <a class = "nav-link" href="login.html">Login</a>
    </li>
    <li class = "nav-item">
      <a class = "nav-link" href="adminlg.html">Adminpg</a>
    </li>

    <li class = "nav-item">
      <a class = "nav-link" href="registration.html">Register</a>
    </li>

    

  </ul>

 </nav>

 <!--thirdchild-->
 <div class="bg-light">
  <h3 class = "text-center"><strong>Hidden store</strong></h3>
  <p class = "text-center">Gaming is lifestyle of cool people</p>
 </div>

<!--fourthchild-->
<div class = "row">
  <div class = "col-md-10">
    <!--products-->
    <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/GOW2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
      </div>
      <div class="col-md-4  mb-2">
      <div class="card">
  <img src="./images/re4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/forza5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
  

</div>

      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/COD.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
  

</div>

      </div>

      <div class="col-md-4  mb - 2">
      <div class="card">
  <img src="./images/forza5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
  

</div>

      </div>
    
     
      </div>
      </div>
    <div class = "col-md-2 bg-secondary p-0">
      <!--sidenav-->
      <!--brands-->
      <ul class="navbar-nav me-auto text-center ">
        <li class="navbar-item bg-info">
          <a href="#" class="nav-link text-light"><h4><em>Game companies</em></h4></a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Rockstar games</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">EA games</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Capcom</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">NaughtyDog</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Insomnaicgames</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Santa monica studios</a>
        </li>

      </ul>
      <!--categories-->
      <ul class="navbar-nav me-auto text-center ">
        <li class="navbar-item bg-info">
          <a href="#" class="nav-link text-light"><h4><em>Categories</em></h4></a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Action</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Horror</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">Motorsports</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">storymode</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">multiplayer</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">combatsports</a>
        </li>
        <li class="navbar-item ">
          <a href="#" class="nav-link text-light">tricky's</a>
        </li>

      </ul>     
         


    </div>
</div>
  



<!--lastchild-->
<div class="bg-info p-3 text-center">
  <p>&copy;All rights reserved</p>
</div>
  </div>


    <!--bootstrap-js-linl-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
</body>
</html>