<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 13/10/2016
 * Time: 6:30 AM
 */?>


<style>
    .ipf-navigation{
        width: 100%;
        height: 100px;
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(43,145,211,0.6);
        transition: all 0.1s ease-in;
    }
    .ipf-navigation.translucent{
        background: rgba(255, 255, 255, .95);
        box-shadow: 0px 1px 7px 0px rgba(0, 0, 0, 0.1);

    }

    .ipf-navigation .logo{
        left: 20px;
        top:10px;
    }
    @media only screen and (max-width: 780px) {
        .ipf-navigation .logo{
            left: 10px;
            top:20px;
        }
        .logo img{
            width: 50px;
        }
    }
    @media only screen and (max-width: 520px) {
        .ipf-navigation .logo{
            left: 70%;


        }
    }

</style>

<section class="ipf-navigation z-5">

<a class="logo">
    <img src="<?=base_url('assets/images/logo.jpg')?>" width="80">
</a>
    <input type="checkbox" id="menu">
    <label for="menu" onclick></label>
    <nav role="off-canvas">
        <ul class="menu">
            <li id="home-li" class="active"><a onclick="goHome()">home</a></li>
            <li id="about-li"><a onclick="goAbout()">about</a></li>
            <li id="speakers-li"><a onclick="goSpeakers()">speakers</a></li>
            <li id="partners-li"><a onclick="goPartners()" >partners</a></li>
            <li id="gallery-li"><a onclick="goGallery()" >gallery</a></li>
            <li id="contacts-li"><a onclick="goContacts()">contact us</a></li>


        </ul>
    </nav>
</section>


<script>

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();

//        var nav_reached_top = $('.home-contents');
        var nav_reached_social=$('.home-contents');
       if(height > nav_reached_social.offset().top-50){

//            $(".ipf-navigation").addClass("translucent") ;
        }else {
//           $(".ipf-navigation").removeClass("translucent") ;
        }



    });
</script>