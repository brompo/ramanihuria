<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 17/10/2016
 * Time: 9:26 AM
 */?>



<style>
 .ipf-speaker{
     width: 100%;
     height: auto;
     display: table;
     padding: 20px 0 80px;
     background-color: #f8f8f8;
     border-top: solid 1px #e1e1e1;
     border-bottom: solid 1px #e1e1e1;
 }
 .ipf-speaker >h1{
     text-align: center;
     font-size: 1.5em;
     margin-bottom: 20px;
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
 .speaker{
     width: 33.333333%;
     height: auto;
     min-height: 400px;
     display: table;
     float: left;
     overflow: hidden;
 }
.speaker-image{
    width: 100%;
    height: 427px;
    background-size: contain;
    background-color: gray;
}
.speaker-desc{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    text-align: center;
    padding-top: 30%;
    color: white;
    display: none;
    animation-duration: 0.4s;

}
.speaker:nth-child(even) .speaker-image{
    background-image: url('<?=base_url("assets/images/sapmle1.jpg")?>');
}
.speaker:nth-child(odd) .speaker-image{
    background-image: url('http://placehold.it/427x427?text=SPEAKER IMAGE 427 X 427');
}
 .speaker:nth-child(odd) .speaker-desc{
     display: none;
}
.speaker-desc .speaker-name{
    font-size: 2em;
    line-height: 2;
    text-transform: uppercase;
    letter-spacing: 0.15em;

}
.speaker-desc .speaker-title{
    font-size: 1.2em;
    text-transform: uppercase;
    letter-spacing: 0.15em;

}
.speaker-desc .speaker-social{
    font-size: 1.5em;
   padding-top: 50px;
    display: block;


}
 .speaker-desc .speaker-social a i{
     transition: all 0.4s ease-in;
 }
.speaker-desc .speaker-social .fa-linkedin:hover{
    color:#007bb6; ;
}
</style>


<section class="ipf-speaker z-2">
    <h1 class="brand-blue"><span style='font-family: "Montserrat light", sans-serif'>OUR</span style>&nbsp;&nbsp;<span style='font-family: "Montserrat Bold", sans-serif'>SPEAKERS</span></h1>
    <div class="speakers-container">
        <?for($x=0;$x<6;$x++):?>
        <div class="speaker">
            <div class="speaker-desc z-2 animated">
                <h1 class="speaker-name">John Doe</h1>
                <h1 class="speaker-title">C.E.O @<a href="http://ramanihuria.org/" target="_blank">Ramani Huria</a></h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                </span>
            </div>
            <div class="speaker-image"></div>

        </div>
        <?endfor;?>
    </div>


</section>

<script>
    $(document).ready(function(){
        $(".speaker").hover(function(){

            $(this).find(".speaker-desc").css({display:"block"}).addClass("lightSpeedIn");
        }, function(){
            $(this).find(".speaker-desc").css({display:"none"}).removeClass("lightSpeedIn");
        });
    });
</script>