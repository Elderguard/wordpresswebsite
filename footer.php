<?php
    $title = get_the_title();
?>
<footer <?php if($title == "Contact") {echo "style='padding:20px 0;'";} ?>>
    <?php
        if ($title != "Contact"){    
    ?>
    
    <section class="methodology">
        <div class="center">
            <h2>Conheça nossa Metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer? Conversar! <br />Entre em contato por e-mail ou telefone.</p>
            <a href="/contato">Entrar em Contato</a>
        </div>
    </section> 
    <?php
        }
    ?>
    
    <div class="center">
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div><!--col-footer-->
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div><!--col-footer-->
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div><!--col-footer-->
        <div style="width:40%;text-align:right;" class="col-footer">
            <img src="<?php echo get_theme_root_uri(); ?>/dankiwordpress/images/logo-footer.png" alt="">
        </div><!--col-footer-->
    </div><!--cemter-->
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_theme_root_uri(); ?>/dankiwordpress/js/jquery.js"></script>
<script src="<?php echo get_theme_root_uri(); ?>/dankiwordpress/js/menu.responsive.js"></script>
<script src="<?php echo get_theme_root_uri(); ?>/dankiwordpress/js/slick.min.js"></script>
<script src="<?php echo get_theme_root_uri(); ?>/dankiwordpress/js/slickslider.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=keyplaceholder"></script>
<script src="js/map.js"></script>
</body>
</html>