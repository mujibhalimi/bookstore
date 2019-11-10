<form action="change.php" hidden method="post" id="lang_form"><input type="hidden" name="lang" id="lang_input"></form>
<script>
    function language_change(lang) {
        $("#lang_input").val(lang);
        $("#lang_form").submit();
        $.ajax({
            type:"POST" ,
            url : "change.php" ,
            data :"lang="+lang   ,
            success : function(data){
                //                location.reload() ;
                alert(data);
            }
        });
    }
    </script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/bigslide.js"></script>
<script src="js/3d-book-showcase.js"></script>
<script src="js/turn.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/mcustom-scrollbar.js"></script>
<script src="js/timeliner.js"></script>
<script src="js/parallax.js"></script>
<script src="js/countdown.js"></script>
<script src="js/countTo.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/appear.js"></script>
<script src="js/sticky.js"></script>
<script src="js/prettyPhoto.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/wow-min.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>

<!-- Switcher JS -->
<script type="text/javascript" src="./switcher/cookie.js"></script>
<script type="text/javascript" src="./switcher/colorswitcher.js"></script>

