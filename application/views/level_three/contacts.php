<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 15/10/2016
 * Time: 10:20 AM
 */?>



<style>

    .ipf-contacts{
        width: 100%;
        height: 450px;
        background-color: #262729;
    }
    .contacts{
        width: 100%;
        height: calc(100% - 50px);
        padding: 20px 30px;
    }
    .contacts form{
        width: 50%;
        max-width: 500px;
        min-width: 300px;
        height: 100%;
        float: left;

    }
    .contacts .tw-container{
        width: 50%;
        max-width: 500px;
        min-width: 300px;
        height: 100%;
        float: right;

    }
    .contacts form h1,.tw-container h1{
        color: #c6c6c6;
        margin-bottom: 15px;
        font-size: 0.8em;

    }
    .contacts form >input{
        width: 100%;
        height: 45px;
        border: solid 1px #474747;
        background-color: #404143;
        padding: 3px 5px;
        font-size: 0.9em;
        color: white;
        outline: none;
    }
    .contacts form textarea{
        width: 100%;
        height: 200px;
        border: solid 1px #474747;
        background-color: #404143;
        padding: 5px;
        font-size: 0.9em;
        margin-top: 15px;
        resize: none;
        color: white;
        outline: none;
    }
    .contacts ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        font-size: 0.9em;
    }
    .contacts ::-moz-placeholder { /* Firefox 19+ */
        font-size: 0.9em;
    }
    .contacts :-ms-input-placeholder { /* IE 10+ */
        font-size: 0.9em;
    }
    .contacts:-moz-placeholder { /* Firefox 18- */
        font-size: 0.9em;
    }
    .footer{
        width: 100%;
        height: 50px;
        border-top: solid 1px #474747;
        padding: 12px 28px;
    }
    .contacts form .ipf-button{
        width: 150px;
        height: 50px;
        border: solid 1px #474747;
        background-color: #404143;
        display: block;
        margin-top:10px;
        text-align: center;
        float: right;
        line-height: 3;
        color: #c6c6c6;
        transition: all 0.4s ease-in;
        cursor: pointer;
        font-size: 0.9em;


    }
    .contacts form .ipf-button:hover{
        color: #fff;
    }
    .footer .f-text{

        color: #c6c6c6;
        font-size: 0.7em;

    }
    .f-social-media{
        float: right;
        color: #c6c6c6;
        font-size: 0.9em;


    }
</style>


<section class="ipf-contacts z-3">
    <div class="contacts">

        <form>
            <h1>We would like to hear from you,drop us an email.</h1>
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <textarea id="message" placeholder="Enter Your Message"></textarea>
            <span class="ipf-button">Send.</span>

        </form>
        <div class="tw-container">
            <h1 style="text-align: right">Tweet with us,use #RamaniHuriaWorkshop</h1>
            <a class="twitter-timeline" data-width="500" data-height="300" data-theme="dark" href="https://twitter.com/RamaniHuria"></a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
    </div>
    <div class="footer">
        <span class="f-text">&copy;&nbsp;<?=date('Y')?>&nbsp;&nbsp;<a href="http://ramanihuria.org" target="_blank">Ramanihuri | </a> Crafted <a href="http://www.ipfsoftwares.com" target="_blank" >@ipfsoftwares</a></span>
        <div class="f-social-media" >
            <a href="https://www.facebook.com/ramanihuria" target="_blank"><i class="fa fa-facebook "></i></a>&nbsp;&nbsp;
            <a href="https://twitter.com/RamaniHuria" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
            <a href="https://www.youtube.com/channel/UCRbySbeRonr7toWQfn7FlKA" target="_blank"><i class="fa fa-youtube"></i></a>&nbsp;&nbsp;
            <a href="https://www.instagram.com/ramani.huria/" target="_blank"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
            <a href="https://www.flickr.com/photos/ramanihuria/collections" target="_blank"><i class="fa fa-flickr"></i></a>&nbsp;&nbsp;
        </div>
    </div>


</section>
<script  src="<?= base_url('assets/js/waitUntilExists.js'); ?>" type="text/javascript"></script>
<script>
    $("iframe#twitter-widget-0").waitUntilExists(function(){
        $("iframe#twitter-widget-0").contents().find('head').append('<style>.timeline{border-radius: 0!important;} ' +
            '.timeline-Header{display: none}' +
            '.timeline-Tweet{background-color:#404143;}' +
            '.timeline-Footer{display:none}' +
            '.timeline-Body{ border-top:none!important;border-bottom:none!important;}</style>');
    });
</script>