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
        height: 500px;
        background:#527ec1;
    }
    #bird{
      position: fixed;
      right: 100px;
      top:300px;
      /*transform: translate(150%,100%);*/
      transition: all 0.7s ease-in-out;

    }

    #bird.move_in{
        transform: translate(0%,0%);
    }
    .ipf-partners h1{
        text-align: center;
        font-size: 1.5em;
        text-transform: uppercase;
        display: block;
        width: auto;
        letter-spacing: 0.15em;
        padding-top: 40px;
        color: white;
    }
    .partners-container{
        width: 100%;
        padding: 80px 5%;
        height: auto;
        display: table;
    }
    .partners-container a{
        width: 16.666%;
        height: auto;
        min-height: 150px;
        float: left;

    }
    .partners-container img{
        width: auto;
        height: auto;
        display: block;
        max-width: 100%;
        float: left;
        margin: 0 auto;
        z-index: 4;

    }
</style>


<section class="ipf-partners">
    <img src="<?=base_url('assets/images/partnersbg3.png')?>" id="bird" width="250" class="z-0">
    <h1><span style='font-family: "Montserrat light", sans-serif'>OUR</span style>&nbsp;&nbsp;<span style='font-family: "Montserrat Bold", sans-serif'>PARTNERS</span></h1>
    <div class="partners-container z-2">
        <a><img src="<?=base_url('assets/images/costech.png')?>" ></a>
        <a><img src="<?=base_url('assets/images/buni.png')?>" ></a>
        <a><img src="<?=base_url('assets/images/worldbank.png')?>"></a>
        <a><img src="<?=base_url('assets/images/buni.png')?>" ></a>
        <a><img src="<?=base_url('assets/images/costech.png')?>" ></a>

        <a><img src="<?=base_url('assets/images/worldbank.png')?>"></a>
        <a><img src="<?=base_url('assets/images/costech.png')?>" ></a>
        <a><img src="<?=base_url('assets/images/buni.png')?>" ></a>

        <a><img src="<?=base_url('assets/images/costech.png')?>" ></a>
        <a><img src="<?=base_url('assets/images/worldbank.png')?>"></a>
        <a><img src="<?=base_url('assets/images/buni.png')?>" ></a>
        <a><img src="<?=base_url('assets/images/worldbank.png')?>"></a>


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