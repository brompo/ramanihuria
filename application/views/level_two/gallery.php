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
        padding: 80px 0 0;

        background-color: white;
    }
    .ipf-speaker >h1{
        text-align: center;
        font-size: 1.5em;
        line-height: 4;
        text-transform: uppercase;
        display: block;
        width: auto;
        letter-spacing: 0.15em;
    }
    .speakers-container{
        width: 100%;
        height: auto;
        display: table;
    }
    .gallery{
        width: 33.333333%;
        height: auto;
        min-height: 400px;
        display: table;
        float: left;
        overflow: hidden;
    }
    .gallery .speaker-image{
        width: 100%;
        height: 427px;
        background-size: contain;
        background-color: gray;
        background-image: url('http://placehold.it/427x427?text=INSTAGRAM IMAGE');
        border: solid 1px lightgrey;
    }
    

   
</style>


<section class="ipf-gallery z-2">
    <div class="speakers-container">
        <?for($x=0;$x<6;$x++):?>
            <div class="gallery">
                <div class="speaker-image"></div>
            </div>
        <?endfor;?>
    </div>


</section>
