<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<?php include'includes/head.php';?>


<body>
  <!-- Start header -->
  <?php include'includes/header.php';?>
  <!-- End header -->
  
  <!-- Start All Pages -->
  <div class="all-page-title page-breadcrumb">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <h1>Booking</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End All Pages -->
  
  <!-- Start Contact -->
  
  <div class="contact-box">
    <div class="container">
      <!--<div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2>Contact</h2>-->
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
          <!--</div>
        </div>
      </div>-->
      <div class="row">
        <div class="col-lg-12">
             <div class="form">
          <form action="back.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"  />
              <div class="validate"></div>
              </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>

              <div class="form-group col-md-6">
              <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
             <label><i class="fa fa-child"></i> Kids</label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
         
            
              
                </div>
          </div>
              <div class="form-row">
            <div class="form-group col-md-6">
              <div class="w3-half w3-margin-bottom">
                  <label><i class="fa fa-calendar-o"></i> Check In</label>
                  <input class="form-control" type="date"  name="CheckIn" required>
              </div>
            </div>
              <div class="form-group col-md-6">
                <div class="w3-half w3-margin-bottom">
                <label><i class="fa fa-calendar-o"></i> Check Out</label>
                <input class="form-control" type="date"  name="CheckOut" required>
                </div>
            
              
                </div>
              </div>      
              
            
              
               


            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" id="message" placeholder="message"  data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <!-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center"><button type="submit" style= "background: #ff7f50;
            border: 0;
            padding: 10px 30px;
            color: #fff;
            transition: 0.4s;
            cursor: pointer;" name="contact" id="contact">Send Message</button></div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact -->
  
  <!-- Start Contact info -->
  
  <?php include'includes/info.php';?>
  <!-- End Contact info -->
  
  <?php include'includes/footer.php';?>
  
  <!-- End Footer -->
  
  <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
  <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
  <a href="https://api.whatsapp.com/send?phone=+91-8625973366" class="whatsapp_float" target="_blank"> 
    <i class="fa fa-whatsapp whatsapp-icon">  Ask for Booking</i>
    </a>
  <!-- ALL JS FILES -->
    <?php include'includes/script.php';?>
  
</body>
</html>