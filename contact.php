<!DOCTYPE html>
<html>

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Title -->
    <title>Danki Code - Tema</title>
    <!-- References -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" href="images/R-icon.ico">
</head>

<body>

    <section class="top">
        <div class="center">
            <header>
                <div class="logo"><img src="images/logo.png" alt="Logo da empresa fictícia" /></div><!-- logo -->
            </header>
            <ul class="menu-desktop">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul><!-- menu -->
            
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>

            <div class="clear"></div>
        </div> <!-- center -->
    </section> <!-- top -->


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

<footer style="padding: 60px 0">

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
            <img src="images/logo-footer.png" alt="">
        </div><!--col-footer-->
    </div><!--cemter-->
</footer>
<script src="js/jquery.js"></script>
<script src="js/menu.responsive.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxoz0zQSZ-djvWGOBUsHkBUoT_qH4"></script>
<script src="js/map.js"></script>
</body>
</html>