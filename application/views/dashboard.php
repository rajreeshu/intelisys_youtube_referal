<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url('assets/img/xicon.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard | Youtube Referal</title>
</head>
<style>
    button{
        background:#F68900; 
        color:white;
        /* height:45px; */
        border-radius:15px;
        padding-left:35px;
        padding-right:35px;
        margin-top:20px;
        
    }
    .background_wall_image{
        position: fixed;
        bottom: 0;
        right: 0;
    }
    .background_wall_image img{
        height:450px;
        opacity:0.7;
    }
    .logo_img{
        width:300px;
    }
    .opt_body{
        padding-top:80px;
    }
    .copy_referal_out_box{
        background:#3A3A3A; color:white; border-radius:20px; width:85%;
    }

    .gift_box_1{
        position:absolute; margin-top:0px; left:calc(25% - 25px); height:60px;
    }
    .gift_box_2{
        position:absolute; margin-top:0px; left:calc(50% - 20px); height:60px;
    }
    .gift_box_3{
        position:absolute; margin-top:0px; left:calc(75% - 23px); height:60px;
    }   
    .gift_box_4{
        position:absolute; margin-top:0px; left:calc(100% - 35px); height:60px;
    }

    .gift_box_div{
        width:100%;  height:150px; margin:0px; position:relative;
    }

    #non_subs_change h5{
        font-size:30px;
        /* font-weight:bold; */
    }


    @media only screen and (max-width: 1100px) {
        .logo_img{
            width:150px;
            margin-top:-30px;
        }
        .opt_body{
            padding-top:30px;
        }

        .opt_body h1{
            font-size:30px;
            font-weight: bold;
        }

        .opt_body h2{
            font-size:23px;
        }
        .copy_referal_out_box{
            width:100%;
        }
        .background_wall_image img{
                height:auto;
                width:100%;
                opacity:0.6;
        }
        .gift_box{
            height:45px;
        }

        .gift_box_1{
            margin-top:17px; left:calc(25% - 17px);
        }
        .gift_box_2{
            margin-top:15px; left:calc(50% - 13px);
        }

        .gift_box_3{
            margin-top:15px; left:calc(75% - 17px);
        }
        .gift_box_4{
            margin-top:15px; left:calc(100% - 30px);
        }

        .gift_box_div{
            top:-35px;
        }
        #non_subs_change h5{
        font-size:20px;
        
    }
    }

</style>
<body>
<div class="background_wall_image">
        <img src="<?= base_url('assets/image/home_Wall.png');?>">
    </div> 
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-3 pl-5 d-none d-md-inline">
            <img src="<?=base_url("assets/image/Three_Smartphones_Mockup.png");?>" style="width:90%;">
        </div>
        <div class="col-md-4 opt_body" >
        <div id="subs_change" class="">
            <h1>Thank You</h1>
            <h2 style="color:#737373;">for Subscribing to our Channel</h2>
            <img src="<?=base_url("assets/img/youtube-subscribed.png")?>" style="width:300px;">
            <br><br><br>
            <h2 class="pl-4 p-md-0">Refer and Earn assured Rewards</h2>
            <h2 class="pl-4 p-md-0" style="color:#737373;">using your Referral Link below</h2>

        </div>
        <div id="non_subs_change">
            <h5>Click the Button <br> to Subscribe to out YouTube channel</h5>
            <img src="<?=base_url("assets/img/youtube-subscribe-s.png")?>" id="click_to_subs" style="width:300px; margin-left:-30px; margin-top:-10px; cursor:pointer;">
            <h5 style="margin-top:-10px;">and Unlock your Referral Link</h5>
        </div>
            <br><br>
            <div class=" row p-md-3 p-2 mx-1 copy_referal_out_box">
                <div class="col-8">
                    <div style="font-size:18px; margin-bottom:10px;">Your Referral Code</div>
                    <h2><?=$referal_id;?></h2>
                </div>
                <div class="col-4">
                    <button class="btn px-md-3 pt-md-2 pb-md-2 btn-default float-right" id="copy_btn">Copy Link</button>
                </div>
                
            </div>

            <div class="row px-md-0 mt-5 gift_box_div">
                <img class="gift_box gift_box_1" src="<?=base_url('assets/img/gift-1.png');?>" style="">
                <img class="gift_box gift_box_2" src="<?=base_url('assets/img/gift-2.png');?>" style="">
                <img class="gift_box gift_box_3" src="<?=base_url('assets/img/gift-3.png');?>" style="">
                <img class="gift_box gift_box_4"  src="<?=base_url('assets/img/gift-4.png');?>" style="">

                <div style="background:#c4c4c4; width:100%; height:5px; display:block; margin-top:auto; margin-bottom:auto;"></div>
                
                <div style="position:absolute; left:calc(0% - 5px); margin-top:78px; font-weight:bold; font-size:25px;">0</div>
                <div style="width:15px; height:15px; border-radius:50%; background:#c4c4c4; position:absolute; left:0px; margin-top:68px;"></div>

                <div style="position:absolute; left:calc(25% - 5px); margin-top:78px; font-weight:bold; font-size:25px;">25</div>
                <div style="width:15px; height:15px; border-radius:50%; background:#c4c4c4; position:absolute; left:25%;  margin-top:68px;"></div>

                <div style="position:absolute; left:calc(50% - 5px); margin-top:78px; font-weight:bold; font-size:25px;">50</div>
                <div style="width:15px; height:15px; border-radius:50%; background:#c4c4c4; position:absolute; left:50%; margin-top:68px;"></div>

                <div style="position:absolute; left:calc(75% - 5px); margin-top:78px; font-weight:bold; font-size:25px;">75</div>
                <div style="width:15px; height:15px; border-radius:50%; background:#c4c4c4; position:absolute; left:75%; margin-top:68px;"></div>

                <div style="position:absolute; left:calc(100% - 30px); margin-top:78px; font-weight:bold; font-size:25px;">100</div>
                <div style="width:15px; height:15px; border-radius:50%; background:#c4c4c4; position:absolute; right:0; margin-top:68px;"></div>
                
                <div style="width:15px; height:15px; border-radius:50%; background: #F16522; position:absolute; left:50%; margin-top:68px;" id="orange_dot"></div>
                <div>
                    <img src="<?=base_url('assets/img/message-box-orange.png');?>" id="msg_refer_id" style="position:absolute; margin-top:85px; left:calc(50% - 25px); height:100px;">
                    <h4 id="msg_refer_no" style="font-size:16px ;position:absolute; margin-top:130px; left:calc(50% - 5px); color: white; line-height:15px;"><span style="font-size:30px; position:relative; top:15px;"> <?=$total_referal;?></span> Referals<div id="referal_done_space">Done</div></h4>
                </div>


            </div>

        </div>
        <div class="col-5 order-first order-md-last pr-5 text-right">
        <img src="<?=base_url("assets/img/logo-s.png")?>" class="logo_img">
        <h1 class="d-none d-md-block" id="right_total_referal" style="margin-top:150px;"> Total Referals <br> <?=$total_referal;?></h1>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    var key="<?php echo $this->security->get_csrf_hash(); ?>"; 
    $("#copy_btn").click(function(e){
        e.preventDefault();
        copyToClipboard()
    });

    function copyToClipboard() {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val("<?=base_url('welcome/index/'.$referal_id);?>").select();
  if(document.execCommand("copy")){
      alert("Copied to clipboard");
  }
  $temp.remove();
}

var refer_right=<?=$total_referal;?>;
$("#orange_dot").css("left",refer_right+"%");
$("#msg_refer_id").css("left","calc("+refer_right+"% - 25px)");
$("#msg_refer_no").css("left","calc("+refer_right+"% - 5px)");
$("#referal_done_space").css("margin-left",20+refer_right/2+"px");

if("<?=$subscribed;?>"!=1){
    $(".copy_referal_out_box").css("filter", "blur(13.388px)");
    $(".gift_box_div").css("filter","blur(13.338px");
    $("#non_subs_change").show();
    $("#subs_change").hide();
    $("#right_total_referal").removeClass("d-md-block");
}else{
    $("#non_subs_change").hide();
    $("#subs_change").show();
}

$("#click_to_subs").click(function(e){
    $.ajax({
    url:"<?=base_url('main_helper/click_to_subscribe');?>",
    type:"POST",
    async:false, 
    data:{
        "<?php echo $this->security->get_csrf_token_name();?>":key,
        user_id:"<?=$user_id;?>"

        },
        dataType:"json",
    success:function(data){
        key=data.key;
        console.log(data);
        window.location="https://www.youtube.com/channel/UCNzHHQfPpTOxzxjQhrokHbg?sub_confirmation=1";
        
    },
    error:function(data){
        console.log(data);
        // result=data;
    }
});
});
</script>


</body>
</html>