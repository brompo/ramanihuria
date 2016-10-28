
<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 5/19/15
 * Time: 11:18 AM
 */?>


<script>
    function goHome(){
        var home_section= $('.ipf-home');
        $('body,html').animate({
                'scrollTop': home_section.offset().top
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#home-li").addClass("active");
    }
    function goAbout(){
        var about_section= $('.ipf-about');
        $('body,html').animate({
                'scrollTop': about_section.offset().top
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#about-li").addClass("active");
    }
    function goSpeakers(){
        var speaker_section= $('.ipf-speaker');
        $('body,html').animate({
                'scrollTop': speaker_section.offset().top-100
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#speakers-li").addClass("active");
    }
    function goPartners(){
            var partners_section= $('.ipf-partners');
            $('body,html').animate({
                    'scrollTop': partners_section.offset().top-130
                }, 1000
            );
        $("nav .menu li").removeClass("active");
        $("#partners-li").addClass("active");
        }
    function goGallery(){
            var gallery_section= $('.ipf-gallery');
            $('body,html').animate({
                    'scrollTop': gallery_section.offset().top-100
                }, 1000
            );
        $("nav .menu li").removeClass("active");
        $("#gallery-li").addClass("active");
        }
    function goContacts(){
            var contacts_section= $('.ipf-contacts');
            $('body,html').animate({
                    'scrollTop': contacts_section.offset().top
                }, 1000
            );
        $("nav .menu li").removeClass("active");
        $("#contacts-li").addClass("active");
        }

</script>

</body>
</html>
