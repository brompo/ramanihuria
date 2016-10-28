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
        background: rgba(255, 255, 255, .6);
        transition: all 0.1s ease-in;
    }
    .ipf-navigation.translucent{
        background: rgba(0, 0, 0, 0);

    }

    .ipf-navigation .logo{
        left: 20px;
        top:10px;
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
            <li class="active"><a onclick="goHome()">home</a></li>
            <li ><a onclick="goAbout()">about</a></li>
            <li><a onclick="goSpeakers()">speakers</a></li>
            <li><a onclick="goPartners()" >partners</a></li>
            <li><a onclick="goGallery()" >gallery</a></li>
            <li><a onclick="goContacts()">contact us</a></li>


        </ul>
    </nav>
</section>


<script>

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();

//        var nav_reached_top = $('.home-contents');
        var nav_reached_social=$('.social-media');
       if(height > nav_reached_social.offset().top-50){
            $(".ipf-navigation").addClass("translucent") ;
        }else {
           $(".ipf-navigation").removeClass("translucent") ;
        }



    });
</script>