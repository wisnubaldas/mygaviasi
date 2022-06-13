@extends('marello.app',['page'=>'Contact'])
@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0266676439173!2d106.65127081485849!3d-6.127113661783253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02695aaccb09%3A0x61dee98159fa3fe5!2sBandar%20Udara%20Internasional%20Soekarno%E2%80%93Hatta!5e0!3m2!1sid!2sid!4v1655085120573!5m2!1sid!2sid" 
          width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h2>Get in Touch</h2>
          <p>send short messages suggestions and criticisms or questions about ramp, cargo and warehouse problems. 
            we are ready to serve you and provide solutions for the delivery of your company's 
            production, keep in touch with us through our contact and email.</p>
          <div class="divide10"></div>
          <div class="form-container">
            <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Your name" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Your e-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="tel" name="tel" placeholder="Phone">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label class="custom-select">
                      <select name="department" required="required">
                        <option value="">Select Department</option>
                        <option value="Sales">Sales</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Support">Customer Support</option>
                        <option value="Other">Other</option>
                      </select>
                      <span><!-- fake select handler --></span> </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                
                <div class="col-sm-12">
                  <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
                  <input type="submit" class="btn btn-large" value="Submit Message" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                  <footer class="notification-box"></footer>
                </div>
                <!--/column --> 
                
              </div>
              <!--/.row -->
              
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
          
        </div>
        <!--/column -->
        
        <aside class="col-sm-4 sidebar">
          <div class="sidebox widget">
            <h3 class="widget-title">Address</h3>
            <address>
            <strong>Head Office</strong><br>
            Rukan Kirana Cawang business Park B 26 <br>
            JL. DI. PanjaitanKav 48 Jatinegara Jakarta Timur<br>
            <abbr title="Phone">P:</abbr> +6221 2560 8542 <br>
            <abbr title="Email">E:</abbr> <a href="mailto:cs.cgk@mygaviasi.com">cs.cgk@mygaviasi.com</a>
            </address>
            <address>
              <strong>Airport Office</strong><br>
              PJT Building 1st Floor No P.05 Terminal Cargo Area <br>
              Soekarno Hatta International Airport <br>
              Cengkareng - Indonesia 19120<br>
              <abbr title="Phone">P:</abbr> +6281380756370 <br>
              <abbr title="Email">E:</abbr> <a href="mailto:zamzam.r@mygaviasi.com">zamzam.r@mygaviasi.com</a>
              </address>
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!--/column --> 
        
      </div>
      <!--/.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper --> 
@endsection
