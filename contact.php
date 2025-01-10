<?php include('common/header_other_pages.php'); ?>
<!--Breadcrumb Start-->
<div class="pq-breadcrumb pq-bg-dark pq-bg-img-2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <nav aria-label="breadcrumb">
          <div class="pq-breadcrumb-title">
            <h1>Contact Us</h1>
          </div>
          <div class="pq-breadcrumb-container">
            <ol class="breadcrumb align-items-center">
              <li class="breadcrumb-item">
                <a href="main-home.html"><i class="fa fa-home me-2"></i>Home</a>
              </li>
              <li class="breadcrumb-item active">Contact Us</li>
            </ol>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<!--Breadcrumb End-->

<!--Contacts & Forms Start-->
<section class="contact-form">
  <div class="container">
    <div class="row g-0 align-items-center">
      <div class="col-lg-5">
        <div class="pq-bg-dark pq-contact-form-p">
          <div class="pq-section pq-style-1 text-left">
            <h5
              class="pq-section-title pq-text-white"
              id="contacts"
              data-high_text="Contacts"
              data-title_text="Our Contacts"
              data-rough_color="#fd4a18"
              data-rough_type="underline">
              Our Contacts
            </h5>
            <p class="pq-section-description pq-text-white">
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
            </p>
            <div class="row">
              <div class="col-lg-12">
                <div class="pq-icon-box pq-style-5">
                  <div class="pq-icon">
                    <a href="#"><i class="ion ion-ios-location"></i></a>
                  </div>
                  <div class="pq-icon-box-content">
                    <h4 class="pq-text-white">Our Address</h4>
                    <p class="pq-text-white mb-0">
                      <?php echo $dataArray['address']; ?>
                    </p>
                  </div>
                </div>
                <div class="pq-icon-box pq-style-5">
                  <div class="pq-icon">
                    <a href="#"><i class="ion ion-email"></i></a>
                  </div>
                  <div class="pq-icon-box-content">
                    <h4 class="pq-text-white">E-Mail Address</h4>
                    <p class="pq-text-white mb-0"><?php echo $dataArray['email']; ?></p>
                  </div>
                </div>
                <div class="pq-icon-box pq-style-5">
                  <div class="pq-icon">
                    <a href="#"><i class="fas fa-phone"></i></a>
                  </div>
                  <div class="pq-icon-box-content">
                    <h4 class="pq-text-white">Phone Number</h4>
                    <p class="pq-text-white mb-0"><?php echo $dataArray['mobile']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 mt-4 mt-lg-0">
        <div class="form-div">
          <div class="pq-section pq-style-1 text-left">
            <h5
              class="pq-section-title"
              id="quote"
              data-high_text="Quote"
              data-title_text="Request A Quote"
              data-rough_color="#fd4a18"
              data-rough_type="underline">
              Request A Quote
            </h5>
            <p class="pq-section-description">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry’s
              standard dummy text ever since the 1500s
            </p>
          </div>
          <form action="#" class="pq-contactform pq-applyform" novalidate>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <input
                  type="text"
                  id="first-name"
                  class="name-field"
                  placeholder="Your Name"
                  required />
              </div>
              <div class="col-lg-6 col-md-6">
                <input
                  type="text"
                  id="e-mail"
                  class="e-mail-field"
                  placeholder="Email"
                  required />
              </div>
              <div class="col-lg-6 col-md-6">
                <input
                  type="text"
                  id="phone-number"
                  class="phone-number-field"
                  placeholder="Cell Phone"
                  required />
              </div>
              <div class="col-lg-6 col-md-6">
                <input
                  type="text"
                  id="subject"
                  class="subject-field"
                  placeholder="Subject"
                  required />
              </div>
              <div class="col-lg-12">
                <textarea
                  id="message"
                  rows="5"
                  cols="10"
                  placeholder="Your Message"
                  required></textarea>
              </div>
              <div class="col-lg-12">
                <a class="pq-button form-btn">
                  <div class="pq-button-block">
                    <span class="pq-button-text">Send Message</span>
                  </div>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Contacts & Forms End-->

<!--Map Start-->
<div class="map p-0">
  <div class="pq-bg-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d317893.19730324426!2d-0.1195537!3d51.5032973!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye%20Riverside%20Building%2C%20County%20Hall%20London%20SE1%207PB%20United%20Kingdom!3m2!1d51.5032973!2d-0.1195537!5e0!3m2!1sen!2sin!4v1652772883319!5m2!1sen!2sin"
      allowfullscreen=""
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<!--Map ENd-->

<!--Footer Start-->
<footer id="pq-footer" class="style-1">
  <div class="pq-footer-style-1">
    <div class="pq-footer-top">
      <!-- footer top list  -->
      <div class="pq-footer-bottom-list">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-4 p-0">
              <div class="pq-footer-items">
                <i class="ti-location-pin"></i>
                <div class="pq-footer-items-info">
                  <h4>Address</h4>
                  <span><?php echo $dataArray['address']; ?></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 p-0">
              <div class="pq-footer-items">
                <i class="ti-mobile"></i>
                <div class="pq-footer-items-info">
                  <h4>call Us On</h4>
                  <a href="tel:<?php echo $dataArray['mobile']; ?>">
                    <span><?php echo $dataArray['mobile']; ?></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 p-0">
              <div class="pq-footer-items border-0">
                <i class="ti-email"></i>
                <div class="pq-footer-items-info">
                  <h4>Email Us</h4>
                  <a href="mailto:<?php echo $dataArray['email']; ?>"><span><?php echo $dataArray['email']; ?></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer top list -->
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="widget">
              <img
                src="images/logos/footer-logo.png"
                class="pq-footer-logo"
                alt="gym-footer-logo" />
              <p>
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered.
              </p>
              <div class="pq-footer-social">
                <ul>
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-github"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-skype"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="widget">
              <h4 class="footer-title">Our Services</h4>
              <div class="menu-useful-service-links-container">
                <ul id="menu-useful-service-links" class="menu">
                  <li>
                    <a href="software-development.html">Software Development</a>
                  </li>
                  <li>
                    <a href="web-development.html">Web Development</a>
                  </li>
                  <li>
                    <a href="mobile-development.html">Mobile Development</a>
                  </li>
                  <li>
                    <a href="app-development.html">App Development</a>
                  </li>
                  <li>
                    <a href="qa-testing.html">QA Testing</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="widget">
              <h4 class="footer-title">Useful link</h4>
              <div class="menu-useful-link-container">
                <ul id="menu-usefull-link" class="menu">
                  <li>
                    <a href="#">Fact Search Engine</a>
                  </li>
                  <li>
                    <a href="#">Learn and Code</a>
                  </li>
                  <li>
                    <a href="#">Video Sharing Website</a>
                  </li>
                  <li>
                    <a href="#">File &amp; URL Scanner</a>
                  </li>
                  <li>
                    <a href="#">Online Software Package</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="pq-widget-menu widget">
              <h4 class="footer-title">Recent post</h4>
              <div class="pq-footer-recent-post">
                <div class="pq-footer-recent-post-media">
                  <a href="app-promotes-sales-profits-in-it-solutions.html">
                    <img src="images/footer-blog/1.jpg" alt="" />
                  </a>
                </div>
                <div class="pq-footer-recent-post-info">
                  <h6>
                    <a
                      href="app-promotes-sales-profits-in-it-solutions.html">App promotes sales &amp; profits In It Solutions</a>
                  </h6>
                  <a
                    href="app-promotes-sales-profits-in-it-solutions.html"
                    class="pq-post-date">January <span>26</span>, 2021
                  </a>
                </div>
              </div>
              <div class="pq-footer-recent-post">
                <div class="pq-footer-recent-post-media">
                  <a href="app-promotes-sales-profits-in-it-solutions.html">
                    <img src="images/footer-blog/2.jpg" alt="" />
                  </a>
                </div>
                <div class="pq-footer-recent-post-info">
                  <h6>
                    <a
                      href="app-promotes-sales-profits-in-it-solutions.html">In Depth Industry &amp; Ecosystem Analysis</a>
                  </h6>
                  <a
                    href="app-promotes-sales-profits-in-it-solutions.html"
                    class="pq-post-date">January <span>26</span>, 2021
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pq-copyright-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <span class="pq-copyright"><a target="_blank" href="#">
                Copyright 2022 Techtrix All Rights Reserved.</a></span>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="pq-footer-link">
              <ul>
                <li><a href="#">Career</a></li>
                <li><a href="#">Term Of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--Footer End-->

<!--Back to top Start-->
<div id="back-to-top">
  <a class="top" id="#top" href="#"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!--Back to top End-->

<!--Jquery js-->
<script src="js/jquery.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Isotope js-->
<script src="js/isotope.pkgd.min.js"></script>
<!--Counter js -->
<script src="js/jquery.countTo.min.js"></script>
<!--Magnefic Popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--Animation js -->
<script src="js/wow.min.js"></script>
<!--Custom js-->
<script src="js/rough-script.js"></script>
<script src="js/rough-notation.iife.js"></script>
<script src="js/rough-custom.js"></script>
<script src="js/custom.js"></script>
</body>

</html>