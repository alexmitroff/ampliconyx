<footer>
    <div class="container">
        <ul class="address">
            <li>Ampliconyx Oy</li>
            <li>Lautakatonkatu 18, Tampere, Finland</li>
            <li>Phone: +358 41 4774781</li>
            <li>Email:  info@ampliconyx.com</li>
        </ul>
    </div>
    <div class="copyright">
        Copyright © Ampliconyx Oy 
    </div>
</footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){                    // When HTML document ready execute scripts
                $("#mobile-menu-button").click(function(){   // add function to button click event which will
                    $("#global-menu").toggleClass("active"); // toggle 'active' class for global menu 
                });
                
                $(".front-carousel").slick({
                    autoplay: true,
                    autoplaySpeed: 5000,
                    arrows:false,
                    dots:false,
                });
            });
        </script>
    </body>
</html>
