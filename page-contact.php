<?php
    //Template Name: Contact
?>
    <?php
        get_header();
    ?>
</div>
</section>
    <section class="contact">
        <div class="center">
            <div class="w50 contact-info">
                <h2>A mais importante, <br/>primeira conversa.</h2>
                <br/>
                <p><b>Telefone: </b> (XX) XXXX-XXXX</p>
                <p><b>Telefone: </b> (XX) XXXX-XXXX</p>
                <p><b>Telefone: </b> (XX) XXXX-XXXX</p>
                
                <div class="map-container">
                    <div  id="map"></div> <!--map-->
                </div><!--map-container-->
            </div><!--w50 contact-info-->
            <div class="w50 contact-form">
                <form>
                    <input placeholder="Nome" type="text" />
                    <input placeholder="Email" type="text" />
                    <input placeholder="Telefone" type="text" />
                    <select>
                        <option value="">Geral</option>
                        <option value="">Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar!">
                    
                </form>
            </div><!-- contact-form-->
        </div><!--center-->
        <div class="clear"></div>
    </section><!--contact-->

<?php
    get_footer();
?>