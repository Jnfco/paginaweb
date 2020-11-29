  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>


  <!-- Contact Section-->
  <section class="page-section" id="contact">
      <div class="container">
          <!-- Contact Section Heading-->
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacto</h2>
          <!-- Icon Divider-->
          <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          <!-- Contact Section Form-->
          <div class="row">
              <div class="col-lg-8 mx-auto">
                  <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                  <form id="contactForm" name="sentMessage" novalidate="novalidate">
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Nombre</label>
                              <input class="form-control" id="name" type="text" placeholder="Nombre" required="required"
                                  data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Email </label>
                              <input class="form-control" id="email" type="email" placeholder="Email "
                                  required="required"
                                  data-validation-required-message="Please enter your email address." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Número de teléfono</label>
                              <input class="form-control" id="phone" type="tel" placeholder="Numero de telefono"
                                  required="required"
                                  data-validation-required-message="Please enter your phone number." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Mensaje</label>
                              <textarea class="form-control" id="message" rows="5" placeholder="Mensaje"
                                  required="required"
                                  data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdOSvEZAAAAAPYImfthBnEkijg9gI7QodEaAlZ4"></div>
                    </div>
                      <br />
                      <div id="success"></div>
                      <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                              type="submit">Enviar</button></div>
                  </form>

                  
              </div>
          </div>
      </div>
  </section>