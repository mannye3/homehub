<?php
require_once('core/connect.php');

// $property_no=$_SESSION['property_no'];     
// $sql = "SELECT * FROM property WHERE property_no='$property_no' ";
// $query  = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($query);

?>
 

<!--  <style type="text/css">
#slideshow { 
    margin: 0 auto; 
    position: relative; 
    width: 100%;
    padding: 1% 1% 56.25% 1%; /*56.25 is for 16x9 resolution*/
        border-radius:20px;
        background: rgba(0,0,0,0.2);
    box-shadow: 0 0 20px rgba(0,0,0,0.6);
  box-sizing:border-box;
}

#slideshow > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}

#slideshow > div > img {
    width:100%;
    height:100%;
    border-radius:20px;
}

#slideshow:hover i, #slideshow:hover .slider-dots{
    opacity: 1;
    }

.slidebtn {
    z-index:99;
    background:transparent;
    outline:none;
    border:none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    padding:0 10px 0 10px;
    }

.slidebtn:active,
.slidedtn:focus {
    outline:none;}
    
.slidebtn i {
    color:#FFF;
    font-size:72px;
    opacity: 0.2;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;

    }

.prev {
    position: absolute; 
    top: 10px; 
    left: 10px; 
    bottom: 10px;
}

.next {
    position: absolute; 
    top: 10px; 
    right: 10px; 
    bottom: 10px;
}


.slider-dots {
    opacity: 0.2;
  list-style: none;
  display: inline-block;
  padding-left: 0;
  margin-bottom: 0;
  position:absolute;
  left:50%;
  bottom:3%;
  transform: translate(-50%, 0);
  z-index:99;
  -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;

}

.slider-dots li {
  color: #000;
  display: inline;
  font-size: 48px;
  margin-right: 5px;
  cursor:pointer;
}

.slider-dots li.active-dot {
  color: #fff;
}


 </style>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>
 -->


<!-- <div id="slideshow">
   <div class="slideitem current">
     <img src="img/properties/properties-1.jpg" class="img-fluid" alt="slider-properties">
   </div>
   <div class="slideitem">
     <img src="img/properties/properties-2.jpg" class="img-fluid" alt="slider-properties">
   </div>
   <div class="slideitem">
    <img src="img/properties/properties-3.jpg" class="img-fluid" alt="slider-properties">
   </div>
  
</div>

 -->



<!-- <script type="text/javascript">
  $(document).ready(function(){

$("#slideshow > div:gt(0)").hide();

var buttons = "<button class=\"slidebtn prev\"><i class=\"fa fa-chevron-circle-left\"></i></button><button class=\"slidebtn next\"><i class=\"fa fa-chevron-circle-right\"></i></button\>";

var slidesl = $('.slideitem').length
var d = "<li class=\"dot active-dot\">&bull;</li>";
for (var i = 1; i < slidesl; i++) {
  d = d+"<li class=\"dot\">&bull;</li>";
}   
var dots = "<ul class=\"slider-dots\">" + d + "</ul\>";

$("#slideshow").append(dots).append(buttons);
var interval = setInterval(slide, 3000);

function intslide(func) {
    if (func == 'start') { 
    interval = setInterval(slide, 3000);
    } else {
        clearInterval(interval);        
        }
}

function slide() {
        sact('next', 0, 1200);
}
    
function sact(a, ix, it) {
        var currentSlide = $('.current');
        var nextSlide = currentSlide.next('.slideitem');
        var prevSlide = currentSlide.prev('.slideitem');
            var reqSlide = $('.slideitem').eq(ix);

            var currentDot = $('.active-dot');
          var nextDot = currentDot.next();
          var prevDot = currentDot.prev();
            var reqDot = $('.dot').eq(ix);
        
        if (nextSlide.length == 0) {
            nextDot = $('.dot').first();
            nextSlide = $('.slideitem').first();
            }

        if (prevSlide.length == 0) {
            prevDot = $('.dot').last();
            prevSlide = $('.slideitem').last();
            }
            
        if (a == 'next') {
            var Slide = nextSlide;
            var Dot = nextDot;
            }
            else if (a == 'prev') {
                var Slide = prevSlide;
                var Dot = prevDot;
                }
                else {
                    var Slide = reqSlide;
                    var Dot = reqDot;
                    }

        currentSlide.fadeOut(it).removeClass('current');
        Slide.fadeIn(it).addClass('current');
        
        currentDot.removeClass('active-dot');
        Dot.addClass('active-dot');
}   

$('.next').on('click', function(){
        intslide('stop');                       
        sact('next', 0, 400);
        intslide('start');                      
    });//next

$('.prev').on('click', function(){
        intslide('stop');                       
        sact('prev', 0, 400);
        intslide('start');                      
    });//prev

$('.dot').on('click', function(){
        intslide('stop');
        var index  = $(this).index();
        sact('dot', index, 400);
        intslide('start');                      
    });//prev
//slideshow
});


    
</script> -->

<body>
<div id="load_tweets">

 </div>
</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>

<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('email2.php').fadeIn("slow");
}, 2000); // refresh every 10000 milliseconds



</script>