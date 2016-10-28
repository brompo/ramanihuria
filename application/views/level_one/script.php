
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
        var checkBoxes = $("#menu");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
    function goAbout(){
        var about_section= $('.ipf-about');
        $('body,html').animate({
                'scrollTop': about_section.offset().top-80
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#about-li").addClass("active");
        var checkBoxes = $("#menu");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
    function goSpeakers(){
        var speaker_section= $('.ipf-speaker');
        $('body,html').animate({
                'scrollTop': speaker_section.offset().top-50
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#speakers-li").addClass("active");
        var checkBoxes = $("#menu");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
    function goPartners(){
        var partners_section= $('.ipf-partners');
        $('body,html').animate({
                'scrollTop': partners_section.offset().top-100
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#partners-li").addClass("active");
        var checkBoxes = $("#menu");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
    function goGallery(){
        var gallery_section= $('.ipf-gallery');
        $('body,html').animate({
                'scrollTop': gallery_section.offset().top-100
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#gallery-li").addClass("active");
        var checkBoxes = $("#menu");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
    function goContacts(){
        var contacts_section= $('.ipf-contacts');
        $('body,html').animate({
                'scrollTop': contacts_section.offset().top
            }, 1000
        );
        $("nav .menu li").removeClass("active");
        $("#contacts-li").addClass("active");
        var checkBoxes = $("#menu");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();
        var home_reached= $('.ipf-home').offset().top;
        var about_reached= $('.ipf-about').offset().top-100;
        var speaker_reached= $('.ipf-speaker').offset().top-100;
        var gallery_reached= $('.ipf-gallery').offset().top-150;
        var partners_reached=$('.ipf-partners').offset().top-130;
        var contacts_reached= $('.ipf-contacts').offset().top-230;


        if(height > home_reached ){

            $("nav .menu li").removeClass("active");
            $("#home-li").addClass("active");
        }if(height > about_reached ){

            $("nav .menu li").removeClass("active");
            $("#about-li").addClass("active");
        }if(height > speaker_reached ){
            $("nav .menu li").removeClass("active");
            $("#speakers-li").addClass("active");
        }
        if(height > partners_reached){
            $("nav .menu li").removeClass("active");
            $("#partners-li").addClass("active");
        }
        if(height > gallery_reached){
            $("nav .menu li").removeClass("active");
            $("#gallery-li").addClass("active");
        }
        if(height > contacts_reached){
            $("nav .menu li").removeClass("active");
            $("#contacts-li").addClass("active");
        }


    });
</script>

</body>
</html>
