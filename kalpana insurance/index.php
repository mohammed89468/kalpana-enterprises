<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalpana Enterprise</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="landing1.css">
  <link rel="stylesheet" href="landing2.css">
  <link rel="stylesheet" href="landing3.css">
  <link rel="stylesheet" href="landing4.css">
  <link rel="stylesheet" href="landing6.css">
  <link rel="stylesheet" href="landing8.css">
  <link rel="stylesheet" href="Landingpage9.css">
  <link rel="stylesheet" href="nav.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white navbarback">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/IMG_20240304_140552.jpg" class="logo-img" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto nav-ul">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Life Insurance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">General Insurance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-primary m-3 btnlogin" type="submit">Login</button>
        </form>
        <a href="https://twitter.com" class="ic">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://facebook.com" class="ic">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://instagram.com" class="ic">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-7">
        <h1 class="mt-3" style="font-weight: 300;">
          Let's find you <br> the <span style="font-weight: 500;">Best Insurance</span>
        </h1>
        <img src="img/52.png" class="img-fluid" alt="Image">
      </div>
      <div class="col-md-12 col-lg-5">
        <div class="mt-3 bg-info" style="box-shadow: 0 8px 32px -10px rgb(0 0 0 / 82%); border: 1px solid rgb(255 255 255 / 0%); padding: 40px; border-radius: 20px; margin: auto; max-width: 500px;">
          <div style="width: 400px; max-width: 100%; margin: auto;" class="bg-info">
            <h3 class="mb-4 text-center bg-info" style="color: white;">We Ensure, You are Insured!</h3>
            <form novalidate class="bg-info" enctype="multipart/form-data"  id="myform">
              <div class="mt-3 bg-info">
                <label class="leadForm-label bg-info">Name <span class="star bg-info">*</span></label>
                <input type="text" name="name" placeholder="Enter Your Name" maxlength="50" autocomplete="off" required class="leadform-field ">
              </div>
              <div class="mt-3 bg-info">
                <label class="leadForm-label bg-info">Age <span class="star bg-info">*</span></label>
                <select  required class="leadform-field" name="age">
                  <option value="">Select Your Age</option>
                  <option value="10-15">10-15</option>
                  <option value="18-23">18-23</option>
                  <option value="25-35">25-35</option>
                  <option value="50+">Above 50</option>
                </select>
              </div>
              <div class="mt-3 bg-info">
                <label class="leadForm-label bg-info">Mobile No <span class="star bg-info">*</span></label>
                <input type="tel" placeholder="Enter Your Mobile No"  name="mobile" maxlength="10" autocomplete="off" required class="leadform-field " oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
              </div>
              <div class="mt-3 bg-info">
                <label class="leadForm-label bg-info">Policy<span class="star bg-info">*</span></label>
                <select  required  name="policy" class="leadform-field ">
                  <option value="">Select Your Policy</option>
                  <?php 
                  $con=mysqli_connect("localhost","root","","appdb");
                  $query=mysqli_query($con,"SELECT `id`, `insurancetype`, `status` FROM `policy` WHERE `status`= 1");
                  while($row=mysqli_fetch_assoc($query)){
                    echo"<option value='".$row['id']."' >".$row['insurancetype']."</option>";
                  }
                  
                  ?>
                </select>
              </div>
              <div class="mt-3 bg-info">
                <label class="leadForm-label bg-info">Location <span class="star bg-info">*</span></label>
                <select name="location" required class="leadform-field ">
                  <option value="">Select Your Location</option>
                  <option value="Chennai">Coimbatore</option>
                  <option value="Coimbatore">Chennai</option>
                  <option value="Madurai">Madurai</option>
                  <option value="Tiruchirappalli">Tiruchirappalli</option>
                  <option value="Salem">Salem</option>
                  <option value="Tirunelveli">Tirunelveli</option>
                </select>
              </div>
              <p class=""></p>
              <p class="mt-5 bg-info" style="text-align: center;">
                <button  type="button" onclick="submitformz()" class="btn lead-capture-btn btn-danger">View Prices</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-2 grid-product col-6">
          <div class="tile" tabindex="0">
            <img src="img/3.png" class="im" alt="Image">
            <div class="info">
              <span>
                <b>Health Insurance Policy</b>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-2 grid-product col-6">
          <div class="tile" tabindex="0">
            <img src="img/1.png" alt="Image">
            <div class="info">
              <span>
                <b>Car Insurance Policy</b>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-2 grid-product col-6">
          <div class="tile" tabindex="0">
            <img src="img/2.png" alt="Image">
            <div class="info">
              <span>
                <b>Two Wheeler Insurance Policy</b>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-2 grid-product col-6">
          <div class="tile" tabindex="0">
            <img src="img/4.png" alt="Image">
            <div class="info">
              <span>
                <b>Personal Accident Policy</b>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-2 grid-product col-6">
          <div class="tile" tabindex="0">
            <img src="img/5.png" alt="Image">
            <div class="info">
              <span>
                <b>Travel Insurance Policy</b>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-2 grid-product col-6">
          <div class="tile" tabindex="0">
            <img src="img/6.png" alt="Image">
            <div class="info">
              <span>
                <b>Life Insurance-Term Policy</b>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <section class="cf-section cf-section--15 mt-5">
      <div class="container">
        <div class="row comparequotes animate">
          <div class="col-md-6">
            <div class="cf-section__label space_mb_8">COMPARE</div>
            <h3 class="cf-section__heading space_mb_16 line-height-reset">Insurance Comparisons Simplified</h3>
            <div class="cf-section__info space_mb_24">Compare policies in real-time and get insurance anytime, anywhere at vizzainsurance.com. Sometimes, things don’t go as planned. Wherever you go, we protect you with simplified comparisons.</div>
            <ul class="lcra__features-list">
              <li>Compare the best insurance with key benefits and coverage in real time.</li>
              <li>Filter through policies to find the ones that fit your criteria.</li>
              <li>Select policies based on their key features.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <img alt="" loading="lazy" src="img/123.png" class="lcra__img img-responsive" />
          </div>
        </div>
      </div>
    </section>  
  
    <section class="cf-section cf-section--26 cf-section--alter bg-blue mt-5">
      <div class="container">
        <div class="row instantpayment animate">
          <div class="col-xs-12 col-md-6">
            <img alt="" loading="lazy" src="img/99.png" class="rcla__img img-responsive" />
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="cf-section__label space_mb_8">BUY</div>
            <h3 class="cf-section__heading space_mb_16 line-height-reset">Best Prices Guaranteed</h3>
            <div class="cf-section__info space_mb_24">Buy Insurance from various insurers through vizzainsurance.com where we ensure you are insured</div>
            <ul class="rcla__features-list">
              <li>Get instant quotes from top insurers.</li>
              <li>Best in class insurance at an affordable price.</li>
              <li>Get policy instantly by using any online payment method</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container-fluid">
    <section class="cf-section cf-section--15">
      <div class="container">
        <div class="row comparequotes animate">
          <div class="col-md-6">
            <div class="cf-section__label space_mb_8">INSURED</div>
            <h3 class="cf-section__heading space_mb_16 line-height-reset">We Ensure, You are Insured</h3>
            <div class="cf-section__info space_mb_24">We do all the hard work for you by decoding the terms and conditions and ensuring to make the purchase of an insurance policy as easy as possible thus ensuring your financial freedom.</div>
            <ul class="lcra__features-list">
              <li>Comprehensive benefits.</li>
              <li>Customize your insurance plan according to your needs.</li>
              <li>Get activated with new benefits on the go.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <img alt="" loading="lazy" src="img/100.png" class="lcra__img img-responsive" />
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container" style="background: white; font-family: 'Montserrat', sans-serif;">
    <div class="row">
      <div class="col-xs-8 col-md-10 col-lg-12">
        <h3 class="text-center mt-3">About Us</h3>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-xs-8 col-md-8 col-lg-9">
        <p class="body">
          At Kalpana Enterprise, we are dedicated to providing life, health, and general insurance policies that are tailored to meet your individual needs. With a focus on transparency and exceptional service, we strive to help you secure your future and protect what matters most to you.
        </p>
      </div>
    </div>
  </div>
  <section class="">
    <div class="container mt-5 mb-5">
      <div class="mt-3 mb-5 text-center">
        <h3 class="mb-3">Here’s why you’ll love Kalpana insurance.com</h3>
        <span class="border-bottom" style="margin: auto; width: 170px;"></span>
      </div>
      <div class="row" style="border: 1px solid #eff3f8; background: #eff3f8; border-radius: 10px;">
        <div class="col-md-12" style="padding: 20px 10px;">
          <div class="row" style="margin: 0px;">
            <div class="col-md-12">
              <div style="border-radius: 10px; margin: 20px;">
                <div class="tile" style="background: #243c62; color: #fff; margin: 0px;">
                  <div class="row" style="padding: 18px;">
                    <div class="col-md-3" style="text-align: center;">
                      <img src="img/55.png" style="padding: 0px; height: 184px;" alt="Channel Partner" />
                    </div>
                    <div class="col-md-9">
                      <div class="pos-img-style">
                        <h2 style="font-size: 30px; font-weight: 700;">Become a Channel Partner</h2>
                        <p style="font-size: 18px;">Work at your convenience and build a rewarding career with vizzainsurance.com</p>
                        <a href="/pos/pos-registration" class="btn lead-capture-btn" style="background-color: #1876ea; width: 212px;">Register Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div style="border-radius: 10px; margin: 20px;">
                <div href="/renewal-reminder" class="tile" style="background: #6b4794; color: #fff; margin: 0px;">
                  <div class="row" style="padding: 18px;">
                    <div class="col-md-12" style="text-align: center;">
                      <img src="img/19.png" style="padding: 0px; height: 184px;" alt="Get Reminders Instantly" />
                    </div>
                    <div class="col-md-12" style="text-align: center;">
                      <div style="padding: 26px;">
                        <h2 style="font-size: 30px; font-weight: 700;">Get Reminders Instantly</h2>
                        <p style="font-size: 18px;">We are here for you anytime, anywhere. Get your renewal reminders superquick and easy.</p>
                        <a href="/renewal-reminder" class="btn lead-capture-btn" style="background-color: #1876ea; width: 212px;">Remind Me!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div style="border-radius: 10px; margin: 20px;">
                <div href="/claim-assistance" class="tile" style="background: #e75177; color: #fff; margin: 0px;">
                  <div class="row" style="padding: 18px;">
                    <div class="col-md-12" style="text-align: center;">
                      <img src="img/51.png" style="padding: 0px; height: 184px;" alt="Superior Claim Assistance" />
                    </div>
                    <div class="col-md-12" style="text-align: center;">
                      <div style="padding: 26px;">
                        <h2 style="font-size: 30px; font-weight: 700;">Superior Claim Assistance</h2>
                        <p style="font-size: 18px;">Get hassle-free claim assistance. Track your claims in real-time at vizzainsurance.com</p>
                        <a href="/claim-assistance" class="btn lead-capture-btn" style="background-color: #1876ea; width: 212px;">Apply Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="font-family: Montserrat !important;">
    <div class="container-fluid">
      <section>    
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div style="text-align: center; padding-bottom: 50px;">
                <h2>Licensed to deal with all insurers</h2>
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-5" style="padding: 30px; border-radius: 5px;">
              <a class="partner-logo"><img class="img-fluid" src="img/Tata.png" alt="Tata AIG" /></a>
            </div>
  
            <div class="col-lg-7" style="padding: 30px; border-radius: 5px;">
                <p>
                Certainly! Our insurance company is proud to announce a strategic partnership with Tata Group, a renowned conglomerate known for its commitment to excellence and innovation across various sectors. This partnership signifies our mutual dedication to providing comprehensive insurance solutions that meet the evolving needs of our customers. By leveraging Tata Group's extensive network and expertise, we aim to enhance our service offerings, streamline processes, and deliver unparalleled value to our clients. Together, we look forward to fostering long-term relationships built on trust, reliability, and innovation in the insurance industry.</p>
            </div>
          </div>
          <div class="row">
            
          </div>
        </div>
      </section> 
    </div>
  </div>
  <section class="vizza-insurers cf-section cf-section--15" style="background: rgb(40, 55, 146);">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-lg-4">
          <h6 class="txe1">Connect with Us</h6>
          <div class="col-md-5 col-lg-9">
            <form>
              <div class="mb-3">
                <label class="form-label txe mt-3">Email address</label>
                <input type="text" class="form-control" placeholder="Your email address">
                <button type="submit" class="btn btn-warning mt-3">Submit</button>
              </div>
            </form>
          </div>
        </div>
  
        <div class="col-md-4 col-lg-4">
          <h6 class="txe1">Subscribe</h6>
          <p class="txe mt-3">kalpanaenterprises2023@gmail.com</p>
          <p class="txe">+91-9344747770</p>
          <div>
            
          </div>
        </div>
  
        <div class="col-md-3 col-lg-3">
          <h6 class="txe1">Subscribe</h6>
          <a href="https://twitter.com" class="icf">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://facebook.com" class="icf">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://instagram.com" class="icf">
            <i class="fab fa-instagram"></i>
          </a>
          <div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
        
  <!-- Bootstrap JS (Optional, if you need Bootstrap JS functionalities) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
  function submitformz() {
    let formData2 = new FormData(document.getElementById("myform"));

    // Log form data for debugging
    for (var [key, value] of formData2.entries()) {
        console.log(`${key}: ${value}`);
    }

    var httprequest = new XMLHttpRequest();
    httprequest.onreadystatechange = function() {
        if (httprequest.readyState == 4) {
            if (httprequest.status == 200) {
                var response = httprequest.responseText;
                alert(response);
            } else {
                alert("Error: " + httprequest.status);
            }
        }
    };
    httprequest.open('POST', 'server.php', true);
    httprequest.send(formData2);
}
  </script>
</body>
</html>
