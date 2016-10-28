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
        height: auto;
        min-height: 600px;
        display: table;
        background-color: #ece8de;
        padding: 100px 10% 100px 30%;
    }

    .ipf-contacts:after{
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        bottom: 0;
        background-image: url("<?=base_url('assets/images/contactsmap.png')?>");
        background-size: contain;
        background-repeat: no-repeat;
        z-index: 2;
    }
    .ipf-contacts div > h1{
        width: 30%;
        height: 100%;
        border-right: solid 2px #2091d5;
        float: left;
        text-align: right;
        font-family: "Lato bold", sans-serif;
        color:#2091d5;
        font-size: 1.5em;
        text-transform: uppercase;
        padding-right: 20px;
        display: table;
    }
    .ipf-contacts div > form{
        width: 70%;
        height: 100%;
        float: left;
        padding-left: 5%;
        display: block;
    }
    .ipf-contacts form >input{
        width: 100%;
        height: 45px;
        border: solid 2px #2091d5;
        background-color: transparent;
        padding: 3px 5px;
        font-size: 0.9em;

        outline: none;
        border-radius: 3px;
        transition: all 0.4s ease-in;
        color: black;
    }
    .ipf-contacts form textarea{
        width: 100%;
        height: 200px;
        border: solid 2px #2091d5;
        background-color: transparent;
        padding: 5px;
        font-size: 0.9em;
        margin-top: 15px;
        resize: none;
        color: black;
        outline: none;
        border-radius: 3px;
        transition: all 0.4s ease-in;
    }
    .ipf-contacts form textarea:focus,.ipf-contacts form >input:focus{
        background-color: #23a2ed;
        color: white;
    }
    .ipf-contacts ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        font-size: 0.9em;
        color: #243953;
    }
    .ipf-contacts ::-moz-placeholder { /* Firefox 19+ */
        font-size: 0.9em;
        color: #243953;
    }
    .ipf-contacts :-ms-input-placeholder { /* IE 10+ */
        font-size: 0.9em;
        color: #243953;
    }
    .ipf-contacts:-moz-placeholder { /* Firefox 18- */
        font-size: 0.9em;
        color: #243953;
    }
    .ipf-contacts form .ipf-button{
        width: 120px;
        height: 50px;
        border: solid 2px #2091d5;
        display: block;
        margin-top:10px;
        text-align: center;
        float: left;
        line-height: 3;
        color: #fff;
        transition: all 0.4s ease-in;
        cursor: pointer;
        font-size: 1em;
        text-transform: uppercase;
        background-color: #23a2ed;
        border-radius: 3px;
        font-family: "Lato bold",sans-serif;

    }
    .ipf-contacts form .ipf-button:hover{
        color: #fff;
    }
    #feedback-error{
        text-align: center;
        font-size: 0.9em;
       margin-left: 10px;
      line-height: 4;
        visibility: hidden;
    }
    @media only screen and (max-width: 780px) {
        .ipf-contacts:after{
            background-position: bottom;
        }
    }
    @media only screen and (max-width: 520px) {
        .ipf-contacts:after{
            display: none;
        }
        .ipf-contacts div > h1{
            width: 100%;
            border-right: none;
            margin-bottom: 20px;
        }
        .ipf-contacts{
            padding: 50px 5% 100px 5%;
        }
        .ipf-contacts div > form{
            width: 100%;
            margin-left: 0;
        }

    }
</style>


<section class="ipf-contacts">
<div class="z-3" style="width: 100%;height: 100%">
<h1>we would <br/>
like to hear<br/>
    from you,
    <br/><br/>
    drop us an
    email
</h1>
<form>
    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <textarea id="message" placeholder="Enter Your Message"></textarea>
    <a href="javascript:sendEmailRamani()"><span class="ipf-button">Send</span></a>
    <span id="feedback-error">Hello testing this error message thing.</span>
</form>

</div>
</section>

<script type="text/javascript">

    function sendEmailRamani(){

        $(".ipf-button")
            .attr('disabled','disabled');


        var email=$('#email');
        var message=$('#message');
        var to="ramanihuria@gmail.com";



        if(validateEmail($.trim(email.val()))){

            $(".ipf-button").html('<i class="fa fa-spinner" aria-hidden="true" style="line-height: 2;font-size: 1.3em"></i>')
            var remarkJSONObj = {

                'email': $.trim(email.val()),
                'to'      : $.trim(to),
                'subject' : "Email From Event website",
                'message': $.trim(message)


            };
            var url='index.php/ramani_send_email/';
            $.ajax({
                type		:'POST',
                url         :url,
                data        : remarkJSONObj,
                dataType    : 'json',
                success     : function(data) {
                    $(".ipf-button").html("sent").removeAttr('disabled');;
                    $('#feedback-error')
                        .html("Thank you!For contacting us.")
                        .css({"color":"green",
                            "visibility":"visible" });


                    email.val("");
                    message.val("");


                }


            });


        }else{
            alert("Please tell us something cool.")
            $('#feedback-error')
                .html("Sorry!Message failed,Fill in all fields with correct values")
                .css({"color":"red",
                    "visibility":"visible" });
            $("#send-feedback").html('send')
                .removeAttr('disabled');
        }


    }
    function validateEmail(sEmail) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else if(sEmail==""){
            return true;
        }
        else {
            return false;
        }
    }

</script>