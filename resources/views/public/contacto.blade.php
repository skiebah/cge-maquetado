<div class="container">
    <div class="row">
        <!-- How to change your own map point
    1. Go to Google Maps
    2. Click on your location point
    3. Click "Share" and choose "Embed map" tab
    4. Copy only URL and paste it within the src="" field below
-->
        <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
            <div id="google-map">
                <img src="{{ asset('site/images/contacto.jpg') }}" class="img-responsive img-shadow" alt="">
            </div>
        </div>

        <div class="col-md-6 col-sm-12">

            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Contacto</h2>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form"
                data-wow-delay="0.8s">

                <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                <h6 class="text-success">Su mensaje ha sido enviado correctamente.</h6>

                <!-- IF MAIL NOT SENT -->
                <h6 class="text-danger">Se produjo un error, vuelva a intentarlo mas tarde nuevamente.
                </h6>

                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" id="cf-name" name="name" placeholder="Nombre">
                </div>

                <div class="col-md-6 col-sm-6">
                    <input type="email" class="form-control" id="cf-email" name="email"
                        placeholder="Correo Electronico">
                </div>

                <div class="col-md-12 col-sm-12">
                    <input type="text" class="form-control" id="cf-subject" name="subject"
                        placeholder="Empresa">

                    <textarea class="form-control" rows="6" id="cf-message" name="message"
                        placeholder="Mensaje"></textarea>

                    <button type="submit" class="form-control" id="cf-submit" name="submit">Enviar Mensaje</button>
                </div>
            </form>
        </div>

    </div>
</div>
