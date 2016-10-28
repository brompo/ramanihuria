<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 17/10/2016
 * Time: 9:26 AM
 */?>


<script>
    $(window).load(function() {
        $.getScript( "//assets.juicer.io/embed.js");});
</script>
<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<style>
    .ipf-gallery{
        width: 100%;
        height: auto;
        display: table;
        padding: 80px 0 0;

        background-color: white;
    }
    .ipf-gallery >a{
          text-align: center;
          margin-bottom: 70px;
          z-index: 2;
        display: block;
      }

    .ipf-gallery >a  span{
        font-size: 40px;
        text-transform: uppercase;
        background: #f2c71a;
        line-height: 1;
        padding: 10px 30px 10px 30px;
        height: auto;
        color:#000;
        text-align: center;
        letter-spacing: 0.015em;
        font-family: "Montserrat Bold",sans-serif;
        width: auto;

    }
    .gallery-container{
        width: 100%;
        height: 500px;
        overflow: hidden;
        background-color: #f2c71a;
    }

    .juicer{
        display: none!important;
    }
    .juicer-feed h1.referral{
        display: none!important;
    }
    ul.juicer-feed.j-initialized.j-modern.hip.photos-only.loaded{
        overflow: hidden;
    }

   
</style>


<section class="ipf-gallery z-2">
    <a href="https://www.instagram.com/ramani.huria/" target="_blank">
        <span><i class="fa fa-instagram"></i>&nbsp;&nbsp;@ramani.huria</span>
    </a>
    <div class="gallery-container">

        <ul class="juicer-feed" data-feed-id="ramanihuria"></ul>
    </div>


</section>
