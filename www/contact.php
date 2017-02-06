<?php
include('top.php');
?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section>
            <div class="container">
                <h2>Contactez-nous<span class="line"></span></h2>
                <h3>Informations de contact</h3>
                <form id="contact-form" class='contact-form'>
                    <div class="contact-form-loader"></div>
                    <fieldset>
                        <div class="row">
                            <div class="grid_12">
                                <label class="name">
                                    <input type="text" name="name" placeholder="Votre nom" value=""
                                           data-constraints="@Required @JustLetters"/>

                                    <span class="empty-message">*Ce champ est requis</span>
                                    <span class="error-message">*Ceci n'est pas un nom valide.</span>
                                </label>
                            </div>
                            <div class="grid_6">
                                <label class="email">
                                    <input type="text" name="email" placeholder="Votre Email" value=""
                                           data-constraints="@Required @Email"/>

                                    <span class="empty-message">*Ce champ est requis</span>
                                    <span class="error-message">*Ceci n'est pas une email valide.</span>
                                </label>
                            </div>
                            <div class="grid_6">
                                <label class="phone">
                                    <input type="text" name="phone" placeholder="Numéro de téléphone" value=""
                                           data-constraints="@JustNumbers"/>

                                    <span class="empty-message">*Ce champ est requis</span>
                                    <span class="error-message">*Ceci n'est pas un numéro de téléphone valide.</span>
                                </label>
                            </div>
                        </div>

                        <label class="message">
                            <textarea name="message" placeholder="Message"
                                      data-constraints='@Required @Length(min=20,max=999999)'></textarea>

                            <span class="empty-message">*Ce champ est requis</span>
                            <span class="error-message">*Le message est trop court.</span>
                        </label>

                        <div class="btn-wr">
                            <a class="btn" href="#" data-type="submit">Envoyer</a>
                        </div>
                    </fieldset>
                    <div class="modal fade response-message">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title">OK</h4>
                                </div>
                                <div class="modal-body">
                                    Votre message a été envoyé ! Nous vous traiterons votre demande dès que possible.
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="bg03">
             <?php
			include('social.php');
			?>
        </section>
        <section>
            <div id="google-map" class="map_model"></div>
        </section>
    </main>

    <?php
$SCR= true;
include('footer.php');
?>