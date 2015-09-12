<section id="contact">
    <br />
    <br />
    <div id='map'></div>
<script>
    // Provide your access token
    L.mapbox.accessToken = 'pk.eyJ1IjoiZWdhbGxlczc5IiwiYSI6IklSSEhONkkifQ.IVV6qrpfmZx8jj0jSn7ZtA';
    // Create a map in the div #map
    L.mapbox.map('map', 'egalles79.m2kg4lb6');
</script>
    <div class="container-wrapper">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contacte</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <div class="contact-form">
                        <h3><?php echo __('Contacte');?></h3>

                        <address>
                          <strong><?php echo __('Gadmi, Gestió Administrativa');?></strong><br>
                          <?php echo __('c/ Joan Carles I, 12 despatx 2.1 08320 El Masnou');?><br>
                          <abbr title="Telèfon"><i class="fa fa-phone"></i></abbr>  646 695 809 - 935 405 055
                        </address>

                        <form id="main-contact-form" name="contact-form" method="post" action="/Pages/sendmail">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="<?php echo __("Nom");?>" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="<?php echo __("Email");?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="<?php echo __("Assumpte");?>" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="5" placeholder="<?php echo __("Missatge");?>" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo __('Enviar missatge');?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->