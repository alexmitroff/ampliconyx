<footer>
    <div class="container" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="Ampliconyx Oy">
        <link itemprop="url" href="http://www.ampliconyx.com">
        <ul class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <li>Ampliconyx Oy</li>
            <li><span itemprop="streetAddress">Lautakatonkatu 18</span>, <span itemprop="addressLocality">Tampere</span>, <span itemprop="addressCountry">Finland</span></li>
            <li>Phone: <span itemprop="telephone">+358 41 4774781</span></li>
            <li>Email:  <span itemprop="email">info@ampliconyx.com</span></li>
        </ul>
    </div>
    <div class="copyright">
        Copyright © Ampliconyx Oy 
    </div>
</footer>
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Ampliconyx Oy",
            "url": "http://ampliconyx.com",
            "telephone": "+358-41-4774781",
            "email": "info@ampliconyx.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Lautakatonkatu 18",
                "addressLocality": "Tampere",
                "addressCountry": "Finland"
            }
        }
        </script>
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
