<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>

    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        .availability-form{
            margin-top: -50px;
            z-index:2;
            position:relative;
        }
        @media screen and (max-width:575px) {
            .availability-form{
            margin-top: 0px;
            padding:0 35px;
        }
            

        }
    </style>
</head>
<body class="bg-light">
    

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fm-bold fs-3 h-font" href="index.php">Hotel booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    
                    
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#RegisterModal">Register
                    </button>
                </div>
            </div>
        </div>
</nav>



<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" d-flex align-items-center>
                      <i class="bi bi-person-circle" fs-3 me-2></i>   User login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                    
                </div>
                <div class="mb-4">
                    <label class="form-label">password</label>
                    <input type="password" class="form-control shadow-none">
                    
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password</a>
                </div>
    </div>
                
           </form>
        </div>
    </div>
</div>
<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" d-flex align-items-center>
                       <i class="bi bi-person-lines-fill" fs-3 me-2></i>  User registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note:Your details must match with your(aadhar,passport,license)that will be required during checkin</span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="number" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">picture</label>
                        <input type="file" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control shadow-none" rows="1"></textarea>
                    
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="number" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">Date of birth</label>
                        <input type="date" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">confirm password</label>
                        <input type="password" class="form-control shadow-none">
                    
                        </div>
                    </div>
                </div>
                <div class="text-center my-1">
                    <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                </div>
                
    </div>
                
           </form>
        </div>
    </div>
</div>
<!--carousel-->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/slide2.jpg" class="m-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/slide1.jpeg"class="m-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.jpeg"class="m-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.jpeg"class="m-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.jpeg"class="m-100 d-block" />
      </div>
      
    </div>
    
  </div>
</div>
<!--check availability form-->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
           <h5 class="mb-4">check booking availability</h5>
           <form>
            <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight:500;">check-in</label>
                <input type="date" class="form-control shadow-none">

                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight:500;">check-out</label>
                <input type="date" class="form-control shadow-none">

                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight:500;">Adults</label>
                <select class="form-select shadow none">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                </div>
                <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight:500;">childrens</label>
                <select class="form-select shadow none">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                </div>
                <div class="col-lg-1 mb-lg-3 mt-2">
                    <button type="submit" class="btn text-white shadow-none custom-bg">SUBMIT</button>
                </div>
            </div>
           </form>

        </div>
    </div>
</div>
<!--rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
 <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin-auto;">
            <img src="images/rooms/r1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Simple room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>                
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">3 sofa</span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                </div>
                <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>   
                </span>
                
                
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>  
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>  
                </div>
                
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin-auto;">
            <img src="images/rooms/r1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Simple room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>                
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">3 sofa</span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                </div>
                <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>   
                </span>
                
                
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>  
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>  
                </div>
                
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin-auto;">
            <img src="images/rooms/r1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Simple room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>                
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">3 sofa</span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                </div>
                <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>   
                </span>
                
                
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>  
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>  
                </div>
                
            </div>
        </div>
        </div>
        
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
        </div>
    </div>
 </div>
<!--our facilities-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/features/wifi.svg" width="80px">
           <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/features/wifi.svg" width="80px">
           <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/features/wifi.svg" width="80px">
           <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/features/wifi.svg" width="80px">
           <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/features/wifi.svg" width="80px">
           <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
        </div>
        </div>
    </div>

<!--our testimonials-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center mb-3">
        <img src="images/features/star.svg" width="30px">
        <h6 class="m-0 ms-2">Random user1</h6>
       </div>
       <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Ipsam, eaque nam voluptates, voluptatum distinctio corporis 
         ab odit iure rem repudiandae optio deleniti illum sequi soluta
          maxime id? Officiis, rem veniam.</p>
     <div class="rating">
     <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i> 
     </div>
      </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/features/star.svg" width="30px">
        <h6 class="m-0 ms-2">Random user1</h6>
       </div>
       <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Ipsam, eaque nam voluptates, voluptatum distinctio corporis 
         ab odit iure rem repudiandae optio deleniti illum sequi soluta
          maxime id? Officiis, rem veniam.</p>
     <div class="rating">
     <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i> 
     </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/features/star.svg" width="30px">
        <h6 class="m-0 ms-2">Random user1</h6>
       </div>
       <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Ipsam, eaque nam voluptates, voluptatum distinctio corporis 
         ab odit iure rem repudiandae optio deleniti illum sequi soluta
          maxime id? Officiis, rem veniam.</p>
     <div class="rating">
     <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i> 
     </div>
    </div>
    </div>
  <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
  </div>
</div>

<!--reach us-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61263.779322130045!2d80.39331872861358!3d16.32364897757256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a755cb1787785%3A0x9f7999dd90f1e694!2sGuntur%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1696557472569!5m2!1sen!2sin" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>call us</h5>
            <a href="tel: +918555908140" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+918555908140</a>
            <br>
            <a href="tel: +918555908140" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+918555908140</a>
          </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow us</h5>
            <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
            </span>
        </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook"></i> facebook
            </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i> instagram
            </span>
        </a>
        
            
          </div>
        </div>
        
    </div>
</div>

<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">Hotel Name</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, 
          nemo sunt dignissimos mollitia repellendus nulla, ipsam eum, 
          suscipit itaque voluptatum maiores voluptate hic earum. 
          Voluptatem tenetur facere sit consequuntur amet!
        <p>
        </div>
        <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-blockmb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-blockmb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-blockmb-2 text-dark text-decoration-none">Rooms</a><br>
        <a href="#" class="d-inline-blockmb-2 text-dark text-decoration-none">Contact us</a><br>
        <a href="#" class="d-inline-blockmb-2 text-dark text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
         <h5 class="mb-3">Follow us</h5>
         <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-twitter me-1"></i> Twitter
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-facebook me-1"></i> Facebook
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
            <i class="bi bi-instagram me-1"></i> Instagram
        </a><br>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
       var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnIntreaction:false,
      }
      
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320:{
            slidesPerView:1,
        },
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },

      }
    });
  </script>
</body>
</html>
