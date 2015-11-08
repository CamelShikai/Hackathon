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
            
            
        <?php echo $this->Html->image('i13.png', array('alt' => 'CakePHP', 'id' => 'titleimg'));?>
            <div class="span12 text-center"
                 style="font-size:14em;color:#ffffff">

                <h3 style="padding-top:40px">
                    <span class="glyphicon glyphicon-heart"></span> HAPPY THANKSGIVING! <span class="glyphicon glyphicon-star"></span>
                </h3>
            </div>
        </div>
        </div>
    </section>

    <section id="mainsection" style="background-color: #F99259">
        
        <div class="row" style="margin:0px;">
            <!-- vertical tab -->

                <div class="col-lg-4 col-md-4 bhoechie-tab-container tabcontent">
                    <div class="col-lg-3 col-md-3 bhoechie-tab-menu">
                        <div class="list-group">
                            <a href=" " class="list-group-item active text-center tabbutton" id="bgimg">
                                    <p class="tabtext">BACKGROUND</p>
                            </a>
                            <a href="#" class="list-group-item text-center tabbutton" id="textstyle">
                                    <p class="tabtext">TEXT STYLE</p>
                            </a>
                            <a href="#" class="list-group-item text-center tabbutton" id="pendants">
                                    <p class="tabtext">PENDANTS</p>
                            </a>
                            <a href="#" class="list-group-item text-center tabbutton" id="preview">
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
                                <div id="dragbox" class="dragbox" draggable="true">
                                    <?php echo $this->Html->image('01.png', array('alt' => 'CakePHP', 'id' => 'dragimg'));?>
                                </div>

                            </div>

                            <div class="bhoechie-tab-content">
                                <center>
                                    <div style="margin-bottom: 30px">
                                        <form>
                                            <fieldset class="form-group">
                                                <label for="emailInput" class="previewfont">Send Thanksgiving Greeting to Your Friend</label>
                                                <input type="email" class="form-control" id="emailInput" placeholder="Email">
                                            </fieldset>
                                            <button id="send" type="submit" class="btn btn-warning btn150">Send to Friend</button>
                                        </form>
                                    </div>

                                    <p class="previewfont">You can also save the static image to your computer.</p>
                                    <a class="btn btn-warning btn150" id="btn1" role="button" href="#" >Save to Computer</a>
                                </center>
                            </div>

                    </div>
                </div>
                                

            <!-- botttom-right -->
                <div id="card_pic" class="col-lg-8 col-md-8 bhoechie-tab-container" style = "background-color:grey;height:500px;overflow:hidden;">
                    <div id="blesscontent" style= "width:500px;position:absolute; left:33%; top:50%; color:#fff; font-weight:bold; font-size:35px;"> <span id="greetingtext" data="<?php echo $bless_content;?>"><?php echo $bless_content;?></span>
                        <span><button class="btn btn-warning" data-toggle="modal" data-target="#myModal" id="textinput">edit<span class="glyphicon glyphicon-pencil"></span></button>
                    </div>
                    <div class="wrappers" style="height:509px;margin-top:-10px;">
                        <ul id="sb-slider" class="sb-slider" style="z-index:-1;">
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

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #F99259; -webkit-border-radius: 4px 4px 0 0;color: white">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Input Your Thanksgiving Greetings to Your Friend</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <input class="form-control inputtext" id="inputgreeting" type="text">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" id="save">Save</button>
                    </div>
                </div>



             </div>
        </div>
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

        //
        var semaphore = "<?php echo $semaphore;?>";
        if (semaphore == "1") {
            console.log(semaphore);
            $("div.tabcontent").remove();
            $("section.header").remove();
            $("#textinput").remove();
            var styles = {
              width : "100%",
              height: "1137px"
                };
            $("#card_pic").css(styles);            
            
            
            

        }else{
            console.log("no");
        };


        
    });




    $("#send").click(function(){
        
        var to_email = $("#emailinput").val();
        console.log(to_email);

        $.ajax({
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                    "key": "jrf4U4fYNFIoPQFGhgXqJg",
                    "message": {
                    "from_email": "wearenotcoders@gmail.com",
                    "to": [
                      {
                        "email": "gejun0907@163.com",
                        "name": "RECIPIENT NAME (OPTIONAL)",
                        "type": "to"
                      },
                      {
                        "email": to_email,
                        "name": "ANOTHER RECIPIENT NAME (OPTIONAL)",
                        "type": "to"
                      }
                    ],
                    "autotext": "true",
                    "subject": "Thanksgiving Greetings",
                    "html": "<a href=''>YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!</a>"
                    }
                }
            }).done(function(response) {
                console.log(response); // if you're into that sorta thing
            });

    });
//click small pic
    /*$(".smallpic").click(function(){
        console.log("smallpic");
    })*/


    //this function is for click and save image
        $("#btn1").on("click", function(event) {
            html2canvas(document.getElementById("card_pic"), {
                onrendered: function (canvas) {
                    var img = canvas.toDataURL("image/jpeg", 1.0).replace("image/jpeg", "image/octet-stream");
                    window.location.href = img;
                }
            });
        });


        //this function for saving greeting text
            /* click change text content*/
            $("#save").on("click", function( ) {
                var getValue = $("#inputgreeting").val();
                console.log(getValue);
                var endValue=((getValue.replace(/<(.+?)>/gi,"&lt;$1&gt;")).replace(/ /gi,"&nbsp;")).replace(/\n/gi,"<br>");
                console.log(endValue);
                $("#greetingtext").html(endValue);
            });

            //this function for hide/show edit button
                    $("#preview").on("click", function() {
                        $("#textinput").css("display", "none");
                    });

                    $("#bgimg").on("click", function() {
                        $("#textinput").css("display", "none");
                    });

                    $("#pendants").on("click", function() {
                        $("#textinput").css("display", "none");
                    });

                    $("#textstyle").on("click", function() {
                        $("#textinput").css("display", "block");
                    });


</script>

