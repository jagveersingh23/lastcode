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

<?php include('common/footer.php'); ?>