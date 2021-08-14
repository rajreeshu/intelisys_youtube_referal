<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url('assets/img/xicon.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Signup | Youtube Referal</title>
    <style>
        a{
            color:#F68900;
        }
        .background_wall_image{
            position: fixed;
            bottom: 0;
        } 
        .background_wall_image img{
            height:650px;
        }
        .top_intelisys_logo{
            width:250px;
        }
        .back-normal-text{
            font-size:32px;
        }
        .front-bold-text{
            font-size:32px;
        }
        .box-grey-login{
            background: #3A3A3A; 
            border-radius:25px; 
            font-size:20px; 
            width:440px;
        }
        .input-field{
            border:2px solid white;
            border-radius:20px;
            height:50px;
            width:90%;
            background: #3A3A3A;
            color:white;
        }

        .input-submit{
            background:#F68900; 
            color:white;
            height:45px;
            border-radius:15px;
            padding-left:35px;
            padding-right:35px;
        }
        

        @media only screen and (max-width: 1100px) {
            .top_intelisys_logo{
                width:150px;
            }
            .back-normal-text{
                font-size:18px;
            }
            .front-bold-text{
                font-size:18px;
            }
            .box-grey-login{
                font-size:15px; 
                width:auto;
            }
            .background_wall_image img{
                height:auto;
                width:100%;
                opacity:0.6;
            }
        }
    </style>
</head>
<body>
    <div class="background_wall_image">
    <img src="<?= base_url('assets/image/home_Wall.png');?>">
    </div> 
    <div class="container-fluid" style="min-height:100%;">
        <div class="row">
            <div class="col m-md-5 m-3">
                <img src="<?=base_url('assets/img/logo-s.png');?>" class="top_intelisys_logo">
            </div>
        </div>

        <div class="row mx-md-5">
            <div class="col-12 col-md-6">
                <ul>
                    <li style="font-size:20px;">
                        <span class="font-weight-bold front-bold-text">Subscribe</span><span class="back-normal-text"> to our Youtube channel</span>
                    </li>
                    <li style="font-size:20px;">
                        <span class="font-weight-bold front-bold-text">Refer</span><span class="back-normal-text"> to Your Friends</span>
                    </li>
                    <li style="font-size:20px;">
                        <span class="font-weight-bold front-bold-text">Earn</span><span class="back-normal-text"> amazing Rewards</span>
                    </li>
                </ul>
                

            </div>
            <div class="col">
                <div class="p-md-5 p-3 pt-4 pb-4 pt-md-5 pb-md-5 mx-3 text-center text-white float-md-right box-grey-login">
                    <h1 style="font-size:50px;">Register</h1>

                    <br>
                    <form class="">
                        <center>
                        <div style="font-size:15px; color:white;float:right; position:relative; right:20px;" id="name_error"></div>
                        <input type="text" id="user_name" class="form-control m-3 input-field" placeholder="Enter Name">                    
                        <div style="font-size:15px; color:white;float:right; position:relative; right:20px;" id="phone_error"></div>
                        <input type="number" id="user_phone" class="form-control m-3 input-field" placeholder="Enter Phone Number">
                        <div style="font-size:15px; color:white;float:right; position:relative; right:20px;" id="email_error"></div>
                        <input type="text" id="user_email" class="form-control m-3 input-field" placeholder="Enter Email Address">
                        <div style="font-size:15px; color:white;float:right; position:relative; right:20px;" id="password_error"></div>
                        <input type="password" id="user_password" class="form-control m-3  input-field" placeholder="Enter Password">
                        <input type="submit" id="signup_submit" class="btn input-submit" >
                        </center>
                    </form>
                    <br>
                    <hr style="background:white;"> 
                    <br>
                    Already have an account? <a a href="<?=base_url();?>">Sign In</a>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>

var key="<?php echo $this->security->get_csrf_hash(); ?>"; 


function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

    $("#signup_submit").click(function (e) {
        e.preventDefault();
        user_name = $("#user_name").val();
        user_email = $("#user_email").val();
        user_password = $("#user_password").val();
        user_phone = $("#user_phone").val();
        
        var error_val=false;
        
        // console.log(user_name);
        if(user_name==""){
            $("#name_error").html("*Empty Field");
            error_val = true;
        }else{
            $("#name_error").html("");
        }
        if(user_phone==""){
            $("#phone_error").html("*Empty Field");
            error_val = true;
        }else{
            $("#phone_error").html("*");
        }
        if(user_email==""){
            $("#email_error").html("*Empty Field");
            error_val = true;
        }else if(!isEmail($("#user_email").val())){
            $("#email_error").html("*Invalid Email");
            error_val = true;
        }else{
            $("#email_error").html("");
        }
        if(user_password==""){
            $("#password_error").html("*Empty Field");
            error_val = true;
        }else{
            $("#password_error").html("");
        }

        

        if(error_val){
            return;
        }

        
        $.ajax({
        url:"<?=base_url('main_helper/signup');?>",
        type:"POST",
        async:false, 
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            name:$("#user_name").val(),
            email:$("#user_email").val(),
            phone:$("#user_phone").val(),
            password:$("#user_password").val()            
            },
            dataType:"json",
            success:function(data){
                key=data.key;
                console.log(data);
                if(data.data){
                    window.location="<?=base_url('welcome/dashboard');?>";
                }
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
        });
    });


</script>

</html>