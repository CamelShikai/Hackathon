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
    <?php echo $this->Html->script("jquery-1.9.1.min");?>
    <?php echo $this->Html->script("bootstrap.min");?>    
    <?php echo $this->Html->script("verticaltab");?>
    <!--background transformation js and css-->
    
    
    <?php echo $this->Html->css("custom")?>
    <?php echo $this->Html->css("demo")?>
    <?php echo $this->Html->css("slicebox")?>

    <?php echo $this->Html->css("bootstrap.min")?>
    <?php echo $this->Html->css("style")?>
</head>
<body>



	<section class="header" style="background-color: #F99259; height: 120px;">
    <div class="container-fluid">

    <!-- header -->
        <div class="row-fluid">

            <span><?php echo $from_email;?></span>
            <span>        
                <button id="send">send</button>
            </span>
            
        <?php echo $this->Html->image('i13.png', array('alt' => 'CakePHP', 'id' => 'titleimg'));?>
            <div class="span12 text-center"
                 style="font-size:14em;color:#ffffff">

                <h3 style="padding-top:40px">
                    Say Hi to Thanksgiving
                </h3>
            </div>
        </div>
        </div>
    </section>

    <section id="mainsection" style="background-color: #F99259">
        <div>
        <div class="row" style="margin:0px;">
            <!-- vertical tab -->

                <div class="col-lg-4 col-md-4 bhoechie-tab-container tabcontent">
                    <div class="col-lg-3 col-md-3 bhoechie-tab-menu">
                        <div class="list-group">
                            <a href=" " class="list-group-item active text-center tabbutton">
                                    <p class="tabtext">BACKGROUND</p>
                            </a>
                            <a href="#" class="list-group-item text-center tabbutton">
                                    <p class="tabtext">TEXT STYLE</p>
                            </a>
                            <a href="#" class="list-group-item text-center tabbutton">
                                    <p class="tabtext">PENDANTS</p>
                            </a>
                            <a href="#" class="list-group-item text-center tabbutton">
                                    <p class="tabtext">PREVIEW</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 bhoechie-tab thunmbnailimg">

                            <div class="bhoechie-tab-content active">

                                <div id="nav-dots" class="background scrollwindow">
                                </div>
                                </div>


                            <div class="bhoechie-tab-content">
                                <div class="greetingtext scrollwindow">

                                </div>
                            </div>

                            <div class="bhoechie-tab-content">
                                <center>
                                    <img src="http://placehold.it/250x100">
                                    <img src="http://placehold.it/250x100">
                                    <img src="http://placehold.it/250x100">
                                    <img src="http://placehold.it/250x100">
                                </center>
                            </div>

                            <div class="bhoechie-tab-content">
                                <center>
                                    <a class="btn btn-default" id="btn1" role="button" href="#">Test BTN</a>
                                </center>
                            </div>

                    </div>
                </div>

            <!-- botttom-right -->

                <div class="col-lg-8 col-md-8 bhoechie-tab-container" style = "background-color:grey;height:500px;">
                   
                    <div class="wrappers" style="z-index: -1;height:509px;margin-top:-10px;overflow:hidden;">
                        <ul id="sb-slider" class="sb-slider">
                            <li>
                            <?php echo $this->Html->image('card0.png', array('alt' => 'CakePHP'));?>

                            </li>
                            <li>
                                <?php echo $this->Html->image('card1.png', array('alt' => 'CakePHP'));?>
                            </li>
                            <li>
                                <?php echo $this->Html->image('card2.png', array('alt' => 'CakePHP'));?>
                            </li>
                            <li>
                                <?php echo $this->Html->image('card3.png', array('alt' => 'CakePHP'));?>
                            </li>
                            <li>
                                <?php echo $this->Html->image('card4.png', array('alt' => 'CakePHP'));?>
                            </li>
                            <li>
                                <?php echo $this->Html->image('card5.png', array('alt' => 'CakePHP'));?>
                            </li>
                            <li>
                                <?php echo $this->Html->image('card6.png', array('alt' => 'CakePHP'));?>
                            </li>
                        </ul>

                        <div id="shadow" class="shadow"></div>                

                    </div>
                </div>


        </div>
    </div>
        </section>
        <footer>
            <div class="container text-center footer">
                <p>
                    We Are Not Coders. All Rights Reserved. 2015 HACKATHON@PSU
                </p>

            </div>
        </footer>
</body>
</html>
<?php echo $this->Html->script("modernizr.custom.46884")?>
<?php echo $this->Html->script("jquery.slicebox")?>
<?php echo $this->Html->script("html2canvas")?>
<script type="text/javascript">
    $(function() {

        var Page = (function() {
            var $navDots = $('#nav-dots'),
                $nav = $navDots.children('img'),
                
                slicebox = $('#sb-slider').slicebox( {
                    onReady : function() {                              
                        $navDots.show();                                
                    },
                    onBeforeChange : function( pos ) {
                        $nav.removeClass( 'nav-dot-current' );
                        $nav.eq( pos ).addClass( 'nav-dot-current' );

                    }
                } ),
                
                init = function() {

                    initEvents();
                    
                },
                initEvents = function() {
                    console.log($nav);           
                    $nav.each( function(i) {                            
                        $(this).on( 'click', function( event ) {
                            console.log(i);
                            var $dot = $( this );                                   
                            if( !slicebox.isActive() ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $dot.addClass( 'nav-dot-current' );
                            
                            }                                   
                            slicebox.jump( i + 1 );
                            return false;
                        
                        } );
                        
                    } );

                };

                return { init : init };

        })();

        Page.init();
    });




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
//click small pic
    /*$(".smallpic").click(function(){
        console.log("smallpic");
    })*/


    //this function is for click and save image
        $("#btn1").on("click", function(event) {
            html2canvas(document.getElementById("mycard"), {
                onrendered: function (canvas) {
                    var img = canvas.toDataURL("image/jpeg", 1.0).replace("image/jpeg", "image/octet-stream");
                    window.location.href = img;
                }
            });
        });

</script>

