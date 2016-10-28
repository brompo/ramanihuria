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
        /*min-height: 500px;*/
        display: table;
        background-color: #ece8de;
        background-size: cover;
        padding: 60px 10%;

    }
    .ipf-partners:after{
        content: "";
        width: 30%;
        height: 100%;
        background-image: url("<?=base_url('assets/images/partnersmap.png')?>");
        position: absolute;
        top:0;
        left: 0;
        z-index: 1;
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: bottom;
    }
    .ipf-partners >h1{
        text-align: left;
        margin-bottom: 10px;
        z-index: 2;
        font-family: "Montserrat Bold",sans-serif;
        font-size: 1.5em;
        text-transform: uppercase;
        float: left;
        width: 20%;
        height: 100%;
        color: #2B91D3;

    }
    .ipf-partners >h2{
        width: 20%;
        height: 100%;
        float: left;
        text-align: justify;
        font-size: 1em;
        padding: 0 20px;

    }
    .partners-container{
        width: 60%;
        height: auto;
        display: table;
    }
    .partners-container a{
        width: calc(33.33333% - 30px);
        height: auto;
        min-height: 100px;
        display: table-cell;
        float: left;
        vertical-align: middle;
        margin-left:30px;


    }
    .partners-container .partner-image{

    }
    @media only screen and (max-width: 780px) {
        .ipf-partners:after{
            display: none;
        }
        .ipf-partners{
            padding: 60px 20px;
        }
        .ipf-partners >h1{
            width: 100%;
        }
        .ipf-partners >h2{
            width: 80%;
            padding: 0 ;
            margin-bottom: 30px;
        }
        .partners-container{
            width: 100%;
        }
        .partners-container a{
            width: calc(33.333333% - 10px);
            margin-left:10px;
        }
        .partner-image{
            width: 150px;
        }
    }
    @media only screen and (max-width: 520px) {
        .ipf-partners:after{
            display: none;
        }
        .ipf-partners{
            padding: 60px 20px;
        }
        .ipf-partners >h1{
            width: 100%;
        }
        .ipf-partners >h2{
            width: 100%;
            padding: 0 ;
            margin-bottom: 30px;
        }
        .partners-container{
            width: 100%;
        }
        .partners-container a{
            width: calc(50% - 10px);
            margin-left:10px;
        }
        .partner-image{
            width: 100px;
        }

    }
</style>


<section class="ipf-partners">
<!--    <img src="--><?//=base_url('assets/images/partnersbg3.png')?><!--" id="bird" width="250" class="z-0">-->
    <h1>OUR <br/>PARTNERS</h1>
    <h2>November 7th and 8th will mark the beginning of a new era for Dar Ramani Huria – a community mapping project that launched last year with a focus on improving Dar es Salaam’s flood resilience. </h2>
    <div class="partners-container z-2">

        <a><img class="partner-image"  src="<?=base_url('assets/images/buni.png')?>" width="150"></a>
        <a><img class="partner-image"  src="<?=base_url('assets/images/redcross.jpg')?>" width="150"></a>
        <a><img class="partner-image"  src="<?=base_url('assets/images/wolrdbank.png')?>" width="150"></a>
        <a><img class="partner-image"  src="<?=base_url('assets/images/buni.png')?>" width="150"></a>
        <a><img class="partner-image"  src="<?=base_url('assets/images/redcross.jpg')?>" width="150"></a>
        <a><img class="partner-image"  src="<?=base_url('assets/images/buni.png')?>" width="150"></a>



    </div>
</section>


<!---->
<!--<script>-->
<!---->
<!--    jQuery(window).on('scroll', function() {-->
<!---->
<!--        var height = jQuery(window).scrollTop();-->
<!--        var partner_reached_social=$('.ipf-partners');-->
<!--        if(height < partner_reached_social.offset().top-550){-->
<!--            $('#bird').removeClass("move_in");-->
<!--        }-->
<!--        if(height > partner_reached_social.offset().top-250){-->
<!--           $('#bird').addClass("move_in");-->
<!--        }else{-->
<!---->
<!--        }-->
<!---->
<!---->
<!--    });-->
<!--</script>-->