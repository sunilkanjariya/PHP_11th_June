<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<title></title>
	<style type="text/css">
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
 .section {
    position: relative;
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #fff;
}
  .th {
    text-align: left;
    padding-left: 10px;
  }
  .td input {
    width: 100%;
}
	</style>
</head>
<body>

    <div id="nav-bar">
      <nav class="navbar navbar-expand-lg">

        <a style="  margin-left: 2vw; font-size: 1.5rem;" class="navbar-brand " href="#">Delex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul id="nav1" class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>

          </ul>
        </div>

      </nav>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/bg-5.jpg" style="height:80vh;"  class="d-block w-100" alt="...">
          <div style="color: white;" class="carousel-caption d-none d-md-block ">
            <h3 >Start your Own Prpject</h3>
            <p>Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies<br>
          pelentesque tempor justo a scelerisque placerat sit amet magna e.</p>
            <button class="btn btn-success">GET STARTED</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/bg-5.jpg" style="height:80vh;"  class="d-block w-100" alt="...">
          <div style="color: white;" class="carousel-caption d-none d-md-block">
            <h3>We are Digital Expert</h3>
            <p>Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies<br>
          pelentesque tempor justo a scelerisque placerat sit amet magna e.</p> 
            <button class="btn btn-success">GET STARTED </button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/bg-5.jpg" style="height:80vh;"  class="d-block w-100" alt="...">
          <div style="color:white;" class="carousel-caption d-none d-md-block">
            <h3>Best Idea For Business</h3>
            <p>Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies<br>
          pelentesque tempor justo a scelerisque placerat sit amet magna e.</p>
            <button class="btn btn-success">GET STARTED</button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title text-center" style="margin-top: 40px;">Best Services</h3>
        <div class="titleHR"><span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="text-center services-item">
          <div class="col-wrapper">
            <div>
              <img src=" images/1.jpg" style="height:150px; width: 200px;">
              
            </div>
            <h5>Creative Ideas</h5>
            <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text-center services-item">
          <div class="col-wrapper">
            <div>
              <img src="images/2.png" style="height:150px; width: 200px;">
           </div>
            <h5>Rapid Solution</h5>
            <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text-center services-item">
          <div class="col-wrapper">
            <div>
              <img src="images/3.jpg" style="height:150px; width: 200px;">
            </div>
            <h5>Magic Touch</h5>
            <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="text-center services-item">
          <div class="col-wrapper">
            <div>
              <img src="images/1.jpg" style="height:150px; width: 200px;">
            </div>
            <h5>Creative Ideas</h5>
            <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text-center services-item">
          <div class="col-wrapper">
            <div>
              <img src="images/2.png" style="height:150px; width: 200px;">
            </div>
            <h5>Rapid Solution</h5>
            <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text-center services-item">
          <div class="col-wrapper">
            <div>
              <img src="images/3.jpg" style="height:150px; width: 200px;">
            </div>
            <h5>Magic Touch</h5>
            <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/bg-5.jpg" style="height: 35vh;opacity: 0.4;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style=" color: white;">Some representative placeholder content for the first slide.</h5>
            <h3 style=" color: #00bc95;">joanath deo</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img  src="images/bg-5.jpg"  style="height: 35vh;opacity: 0.4;"  class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style=" color: white;">Some representative placeholder content for the first slide.</h5>
            <h3 style=" color: #00bc95;">joanath deo</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/bg-5.jpg" style="height: 35vh;opacity: 0.4;"  class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style=" color: white;">Some representative placeholder content for the first slide.</h5>
            <h3 style=" color: #00bc95;">joanath deo</h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  <div class="row">
      <div class="col-12">
        <h3 class="title text-center" style="margin-top:40px;margin-bottom: 20px;">Contact Us</h3>
        <div class="titleHR"><span></span></div>
        <form role="form" method="post" class="form-main">
    <table>
      <tr style="margin: auto;">
        <th>Name</th>
        <th>Email</th>
      </tr>
      <tr style="margin-bottom: 20px;">
        <td><input style="width:90%" type="text" placeholder="Enter name"></td>
        <td><input style="width:90%" type="text" placeholder="Enter Email"></td>
      </tr>
      <tr>
        <th colspan="2">Address</th>
      </tr>
      <tr>
        <td colspan="2"><textarea style="width:90%;padding-left: 10%;" name="" id=""></textarea></td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="text">
            <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo
              eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren.</p>
              <button class="btn btn-success btn-center" style="color: white;text-align: center;margin: auto;">SUBMIT</button>
          </div>
        </td>
      </tr>
    </table>
   </div>
        </form>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
