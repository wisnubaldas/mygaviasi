@extends('marello.app',['page'=>'Contact'])
@section('content')
<div class="google-map wide" style="width: 100%; height: 450px" data-lat="51.211215" data-lng="3.226287"></div>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h2>Get in Touch</h2>
          <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
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
            <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
            <address>
            <strong>Morello, Inc.</strong><br>
            Moon Street Light Avenue, 14/05 <br>
            Jupiter, JP 80630<br>
            <abbr title="Phone">P:</abbr> 00 (123) 456 78 90 <br>
            <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@email.com</a>
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
