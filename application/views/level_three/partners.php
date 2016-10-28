<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 15/10/2016
 * Time: 10:09 AM
 */?>



<style>
    .ipf-partners{
        width: 100%;
        height: auto;
        min-height: 500px;
        display: table;
        background-image: url(<?=base_url('assets/images/videobg.jpg')?>);
        background-size: cover;
        padding-top: 60px;
    }
    .ipf-partners:after{
        content: "";
        width: 100%;
        height: 100%;
        background-color: rgba(28, 125, 184, 0.95);
        position: absolute;
        top:0;
        left: 0;
        z-index: 1;
    }
    .ipf-partners >h1{
        text-align: center;
        margin-bottom: 10px;
        z-index: 2;
    }

    .ipf-partners >h1 span{
        font-size: 40px;
        text-transform: uppercase;
        background: #fff;
        line-height: 1;
        padding: 10px 30px 10px 30px;
        height: auto;
        color:#2091d5;
        text-align: center;
        letter-spacing: 0.015em;
        font-family: "Montserrat Bold",sans-serif;
        width: auto;

    }
    .partners-container{
        width: 100%;
        padding: 80px 3%;
        padding-right: 2.5%;
        height: auto;
        display: table;

    }
    .partners-container a{
        width: 14.666666%;
        min-width: 175px;
        max-width: 181px;
        height: 181px;
        float: left;
        background-color: white;
        vertical-align: middle;
        margin-left:2%;
        margin-bottom: 40px;
        text-align: center;
        display: block;
    }
    .partners-container .partner-image{
        width: 100%;
        height: 100%;
        background-size: 80%;
        background-position: center center;
        background-repeat: no-repeat;
        z-index: 4;





    }
</style>


<section class="ipf-partners">
<!--    <img src="--><?//=base_url('assets/images/partnersbg3.png')?><!--" id="bird" width="250" class="z-0">-->
    <h1><span>OUR PARTNERS</span></h1>
    <div class="partners-container z-2">

        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/buni.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/redcross.jpg')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/wolrdbank.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/redcross.jpg')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/buni.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/redcross.jpg')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/buni.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/wolrdbank.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/buni.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/redcross.jpg')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/wolrdbank.png')?>");'></div></a>
        <a><div class="partner-image" style='background-image: url("<?=base_url('assets/images/redcross.jpg')?>");'></div></a>

    </div>
</section>



<script>

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();
        var partner_reached_social=$('.ipf-partners');
        if(height < partner_reached_social.offset().top-550){
            $('#bird').removeClass("move_in");
        }
        if(height > partner_reached_social.offset().top-250){
           $('#bird').addClass("move_in");
        }else{

        }


    });
</script>