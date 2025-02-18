<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php include('include/header.php'); ?>
    <!-- end header section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="detail-box">
                <h1>
                  Achariya Emitra <br />
                  Bhilwara <br />
                  APK
                 </h1>
                <div class="btn-box">
                  <button  class="btn2" data-toggle="modal" data-target="#exampleModalCenter"> Download APK </button><pre> </pre>
                  <input data-toggle="modal" type="hidden" id="modal" data-target="#exampleModal" class="btn2">
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </section>
  </div>
  <!-- download Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Download Apk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        New Version  Achariya Bhilwara.apk 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="apk/Achariya Bhilwara.apk" class="btn btn-secondary"style="background-color:blue;" download>Apk </a>
      </div>
    </div>
  </div>
</div>
  <!-- end slider section -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img src="images/s4.jpeg" alt="" width="100%" />
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- portfolio section -->

  <section class="portfolio_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Emitra Work Portfolio
        </h2>
      </div>
    </div>
    <div class="owl-carousel portfolio_carousel">
      <div class="item decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p1.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item perforated decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p3.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item perforated decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p4.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item perforated decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p5.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item railing">
        <div class="box">
          <div class="img-box">
            <img src="images/p6.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item railing">
        <div class="box">
          <div class="img-box">
            <img src="images/p7.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item railing">
        <div class="box">
          <div class="img-box">
            <img src="images/p8.jpeg" alt="" />
          </div>
        </div>
      </div>
      <div class="item railing">
        <div class="box">
          <div class="img-box">
            <img src="images/p9.jpeg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end portfolio section -->

  <!-- contact section -->
  <section class="contact_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Get In <span>Touch</span></h2>
        <p id="success"></p>
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="form_container">
            <form id="fupForm" action="feed.php" method="post" >
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="Phone Number" id="number" name="number" pattern="\d{1,10}"  
       maxlength="10" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" placeholder="Email" id="gmail" name="gmail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Place" id="place" name="place" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="message-box form-control" placeholder="Message" id="message" name="Message" required>
                </div>
              </div>
              <div class="btn_box">
                <button type="submit" id="butsave" name="click">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
          <iframe src="https://maps.google.com/maps?q=25.334063485329377, 74.60656590074866&output=embed" height="590" width="600"></iframe>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- footer section -->
  <?php include('include/footer.php'); ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
$(document).ready(function(){
    $("#modal").click(); 
    $("#modal").hide();
});
</script>
</html>