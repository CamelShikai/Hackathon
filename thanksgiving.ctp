<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
        @font-face
        {
        font-family: FontOne;
        src: url(../fonts/OpenSans-Light.ttf);
        }
        .bold{font-weight: bold;}
        h1{font-family: FontOne;}
    </style>
    <title>Thanksgiving Ecard</title>
    <?php echo $this->Html->script("bootstrap.min");?>
    <?php echo $this->Html->script("jquery-1.9.1.min");?>
    <?php echo $this->Html->script("verticaltab");?>
    <?php echo $this->Html->css("verticaltab")?>
    <?php echo $this->Html->css("bootstrap.min")?>
</head>
<body>
    


    <div class="container-fluid">

    <!-- header -->
        <div class="row-fluid">
            <span><?php echo $from_email;?></span>
            <span>        
                <button id="send">send</button>
            </span>
            <div class="span12" style="font-size:14em;color:#ffffff; background-color:#f99259;height:200px">

                <h3 style="margin-left:200px;padding-top:40px">
                    <?php echo $this->Html->image('i13.png', array('alt' => 'CakePHP',"id" => "turkey"));?>
                    Say Hi to Thanksgiving
                </h3>
            </div>
        </div>

        <div class="row-fluid">
            <!-- vertical tab -->
            <div class="span4">
                <div class="col-lg-4 col-md-4 bhoechie-tab-container" style = "margin-left:0px">
                    <div class="col-lg-3 col-md-3 bhoechie-tab-menu">
                        <div class="list-group">
                            <a href=" " class="list-group-item active text-center">
                                <h4 class="glyphicon glyphicon-plane"></h4><br/>Menu1
                            </a >
                            <a href="#" class="list-group-item text-center">
                                <h4 class="glyphicon glyphicon-road"></h4><br/>Menu2
                            </a >
                            <a href="#" class="list-group-item text-center">
                                <h4 class="glyphicon glyphicon-home"></h4><br/>Menu3
                            </a >
                            <a href="#" class="list-group-item text-center">
                                <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Menu4
                            </a >
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 bhoechie-tab">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active">
                            <center>
                                
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu1</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu1</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu1</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu1</h2>
        
                            </center>
                        </div>
                        <!-- train section -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu2</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu2</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu2</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu2</h2>
                            </center>
                        </div>

                        <!-- hotel search -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu3</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu3</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu3</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu3</h2>
                            </center>
                        </div>

                        <div class="bhoechie-tab-content">
                            <center>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu4</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu4</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu4</h2>
                                <h2 style="margin-top: 0;color:#55518a";font-size:14em;>Sub-Menu4</h2>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <!-- botttom-right -->
            <div class="span8">
                <div class="col-lg-8 col-md-8 bhoechie-tab-container" style = "background-color:grey;height:500px;">
                    Hi
                </div>
            </div>

        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $("#send").click(function(){
        alert("in");
        //return;
        $.ajax({
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                "key": "jrf4U4fYNFIoPQFGhgXqJg",
                "message": {
                    "from_email": "wearenotcoders@gmail.com",
                    "to": [
                      {
                        "email": "yuhanluo.xfx@gmail.com",
                        "name": "RECIPIENT NAME (OPTIONAL)",
                        "type": "to"
                      },
                      {
                        "email": "jinshiweikai@gmail.com",
                        "name": "ANOTHER RECIPIENT NAME (OPTIONAL)",
                        "type": "to"
                      }
                    ],
                    "autotext": "true",
                    "subject": "YOUR SUBJECT HERE!",
                    "html": "YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!"
                    }
                }
            }).done(function(response) {
                console.log(response); // if you're into that sorta thing
            });
    })
    
</script>

