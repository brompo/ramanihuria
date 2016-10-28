<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 17/10/2016
 * Time: 9:26 AM
 */?>

<style>
    .ipf-gallery{
        width: 100%;
        height: auto;
        display: table;
        background-color: #ece8de;


    }
    .ramani-image{
        width: calc(25% - 10px);
        min-width: 300px;
        max-width: 400px;
        height: 200px;
        margin-right: 10px;
        margin-bottom: 10px;
        float: left;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    /*.ramani-image:nth-child(3n+1){*/
        /*margin-right: 0;*/
    /*}*/
    @media only screen and (max-width: 780px) {
        .ramani-image{
            width: calc(48% - 10px);
        }
    }
    @media only screen and (max-width: 520px) {
        .ramani-image{
            width: 95%;
            margin-right: 10px;
            margin-left: 10px;
            min-width: 200px;
    }

   
</style>


<section class="ipf-gallery z-2">

    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani1.png')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani2.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani3.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani4.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani5.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani6.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani7.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani3.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani4.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani3.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani5.jpg')?>')"></div>
    <div class="ramani-image" style="background-image: url('<?=base_url('assets/images/ramani2.jpg')?>')"></div>



</section>
