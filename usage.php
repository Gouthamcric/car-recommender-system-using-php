<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
//$values="200000,5000000,0,50,0,50,,personal*";
$array=explode(",",$values);
$array2=explode("*",$array[6]);
$array4=explode("*",$array[7]);
$array3=array("","","","","","","");
$array5=array("","","");
$size=sizeof($array2);
$size2=sizeof($array4);
 for($i=0;$i<$size;$i++)
{
    $array3[$i]=$array2[$i];
   
}
 for($i=0;$i<$size2;$i++)
{
    $array5[$i]=$array4[$i];
   
}

$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  "
        . "between $array[2] and $array[3] and dailyUtilization between $array[4] "
        . "and $array[5] and RCID like '%$array3[0]%' and RCID like '%$array3[1]%' "
        . "and RCID like '%$array3[2]%' and RCID like '%$array3[3]%' and "
        . "RCID like '%$array3[4]%' and RCID like '%$array3[5]%' and RCID like '%$array3[6]%'"
        . " and `usage` like '%$array5[0]%' and `usage` like '%$array5[1]%' and `usage` like '%$array5[2]%' ";
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 
  $str="
     <div class='container' >
  <div class='row' style='margin-top:-150px;'>
                      <h1 class=' col-md-2 ' id='form-h1'> 6.Fuel_Type</h1>
                     </div>
  <div class='row' style='margin-top:20px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
    <ul>
  <li>".'
    <input type="checkbox" id="myCheckboxany" />
    <label class="label" for="myCheckboxany"><img src="fuel/any.png" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxcng" />
    <label class="label" for="myCheckboxcng"><img src="fuel/cng.png" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxdiesel" />
    <label class="label" for="myCheckboxdiesel"><img src="fuel/diesel.png" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxelectric" />
    <label class="label" for="myCheckboxelectric"><img src="fuel/electric.png" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxhybrid" />
    <label class="label" for="myCheckboxhybrid"><img src="fuel/hybrid.png" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxlpg" />
    <label class="label" for="myCheckboxlpg"><img src="fuel/lpg.png" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxpetrol" />
    <label class="label" for="myCheckboxpetrol"><img src="fuel/petrol.png" /></label>
  </li>
</ul>    '."
            </div>
                          </div>  
                          <div class='row'>
<div class='col-md-2' style='margin-top:-34px;margin-left:70px'>Any</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:230px'>CNG</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:375px'>Diesel</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:515px'>Electric</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:643px'>Hybrid</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:787px'>LPG</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:949px'>Petrol</div>
</div>
        </div>
      
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-80px;padding-left:40px;padding-right:40px;' id='id6'>Next</button>                
        </div>        
".'<script>  


$(document).ready(function(){
    document.getElementById("id6").onclick = function() {
    var val="";
var arr;
if(document.getElementById("myCheckboxany").checked===true)
{val +="any*";};
if(document.getElementById("myCheckboxcng").checked===true)
{val +="cng*";};
if(document.getElementById("myCheckboxdiesel").checked===true)
{val +="diesel*";};
if(document.getElementById("myCheckboxelectric").checked===true)
{val +="electric*";};
if(document.getElementById("myCheckboxhybrid").checked===true)
{val +="hybrid*";};
if(document.getElementById("myCheckboxlpg").checked===true)
{val +="lpg*";};
if(document.getElementById("myCheckboxpetrol").checked===true)
{val +="petrol*";};
fuelPrefer=val;
                     var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
                      values += rdType+",";
                      values += usg+",";
                      values += val;
       
        $.ajax({
          url:"fuel.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
                arr=data.split("@");
                 if((arr[0])!==""){
              $("#ele7").html(arr[1]);
              $("#ele3").html(arr[0]);
    }
    else
    {
     $("#ele3").html("No Result!!");
    }
            }
            });
                 };
                 });</script>';
                     
include 'resultWin.php';
 echo $opt.'!'.$str;

?>

