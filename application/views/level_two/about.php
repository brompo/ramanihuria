<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 13/10/2016
 * Time: 6:54 PM
 * 
 */?>



<style>
    .ipf-about{
        width: 100%;
        height: auto;
        /*min-height: 100vh;*/
        background-color: white;


    }
    .ipf-about-header{
        height: 200px;
        width: 100%;
        position: absolute;
        top:0;
        left: 0;
        /*background-color: white;*/
        background-image: url('<?=base_url("assets/images/about-header5.png")?>');
        background-size: 100%;
        background-position: center bottom;
        transition: all 0.4s ease-in;
    }
    div.ipf-about-header.is_fixed{
        position: fixed!important;
        background-position: center 80%;
    }
    .ipf-about .about-title{
        font-size: 1.5em;
        text-align: center;
        text-transform: uppercase;
        display: block;
        width: auto;
        letter-spacing: 0.15em;
        padding-top: 180px;
    }
    .ipf-about h2{
        width: 75%;
        margin: 10px auto;
        text-align: center;
        font-size: 0.9em;
        font-family: "Montserrat light",sans-serif;
        color: #3d4e4d;
        word-spacing: 0.15em;
        line-height: 1.4;
    }
    .ipf-about h2 a{
        text-transform: uppercase;
    }
</style>


<section class="ipf-about">
    <div class="ipf-about-header z-3" ></div>
    <div style="background-color: white;padding-bottom: 100px;" class="z-2">
    <h1 class="about-title">About</h1>
    <h2>Dar Ramani Huria (Swahili for Dar Open Map) is a community-based mapping project that began in Dar es Salaam, Tanzania, training university students and local community members to create highly accurate maps of the most flood-prone areas of the city. As the maps took shape - their benefits multiplied and their potential magnified, now ready to serve as foundational tools for development within all socio-economic spheres.

    <br/><br/><a class="brand-yellow">learn more</a>
    </h2>

    </div>
    
</section>


<script>

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();

        var about_reached_top = $('.ipf-about');

        if (height > about_reached_top.offset().top) {

            $(".ipf-about-header").addClass("is_fixed");
        }else {
            $(".ipf-about-header").removeClass("is_fixed")  ;
        }



    });
</script>