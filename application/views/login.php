<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url('assets/img/xicon.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login | Youtube Referal</title>
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
                    <h1 style="font-size:50px;">Sign In</h1>

                    <br>
                    <form>
                        <center>
                        <div style="font-size:15px; color:white;float:right; position:relative; right:20px;" id="field_error"></div>
                        <input type="text" id="user_email" class="form-control m-3 input-field" placeholder="Enter Email Address">
                        <input type="password" id="user_password" class="form-control m-3  input-field" placeholder="Enter Password">
                        <input type="submit" id="login_submit" class="btn input-submit">
                        </center>
                    </form>
                    <br><br>
                    <hr style="background:white;"> 
                    <br>
                    Don't have an account? <a a href="<?=base_url('welcome/signup_login');?>">Sign up</a> 
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>

var key="<?php echo $this->security->get_csrf_hash(); ?>"; 

$("#login_submit").click(function(e){

    e.preventDefault();
    $.ajax({
        url:"<?=base_url('main_helper/login');?>",
        type:"POST",
        async:false, 
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            email:$("#user_email").val(),
            password:$("#user_password").val()            
            },
            dataType:"json",
            success:function(data){
                key=data.key;
                if(data.data){
                    window.location="<?=base_url('welcome/dashboard')?>";
                }else{
                    $("#user_email").val("");
                    $("#user_password").val("");
                    $("#field_error").html("*Incorrect Login Details.");
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