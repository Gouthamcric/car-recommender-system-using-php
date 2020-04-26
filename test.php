<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper.min.css">

  <!-- Demo styles --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
    
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    </head>
<body>
    <input type="text" class="js-btn_d5" name="my_range" value="" id="demo_5" />
   
    <script>
    
    var $d4 = $("#demo_5");
    
    $d4.ionRangeSlider({
        skin: "big",
        min: 0,
        max: 100,
        from: 0,
        to: 20
    });
    
    $d4.on("change", function () {
        var $inp = $(this);
        var v = $inp.prop("value");     // input value in format FROM;TO
        var from = $inp.data("from");   // input data-from attribute
        var to = $inp.data("to");       // input data-to attribute
    
               // all values
    });
    
</script>
</body>
</html>