<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
//$values="200000,5000000,0,50,0,50,,,,,,,,abs*";
$array=explode(",",$values);

$array2=explode("*",$array[6]);
$array4=explode("*",$array[7]);
$array6=explode("*",$array[8]);
$array8=explode("*",$array[9]);
$array10=explode("*",$array[10]);
$array12=explode("*",$array[11]);//user info(age)
$array14=explode("*",$array[12]);//user info(gen)
$array16=explode("*",$array[13]);

$array3=array("","","","","","","");
$array5=array("","","");
$array7=array("","","","","","","");
$array9=array("","","","","","","");
$array11=array("","","","","","","");
$array13=array("","","","","","","");

$size=sizeof($array2);
$size2=sizeof($array4);
$size3=sizeof($array6);
$size4=sizeof($array8);
$size5=sizeof($array10);
$size6=sizeof($array16);

for($i=0;$i<$size;$i++)
{
    $array3[$i]=$array2[$i];   
}
 for($i=0;$i<$size2;$i++)
{
    $array5[$i]=$array4[$i];
}
for($i=0;$i<$size3;$i++)
{
    $array7[$i]=$array6[$i];   
}
for($i=0;$i<$size4;$i++)
{
    $array9[$i]=$array8[$i];   
}
for($i=0;$i<$size5;$i++)
{
    $array11[$i]=$array10[$i];   
}
for($i=0;$i<$size6;$i++)
{
    $array13[$i]=$array16[$i];   
}

$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  "
        . "between $array[2] and $array[3] and dailyUtilization between $array[4] "
        . "and $array[5] and RCID like '%$array3[0]%' and RCID like '%$array3[1]%' "
        . "and RCID like '%$array3[2]%' and RCID like '%$array3[3]%' and "
        . "RCID like '%$array3[4]%' and RCID like '%$array3[5]%' and RCID like '%$array3[6]%'"
        . " and `usage` like '%$array5[0]%' and `usage` like '%$array5[1]%' and `usage` like '%$array5[2]%' " 
        ."and fuel like '%$array7[0]%' and fuel like '%$array7[1]%' "
        . "and fuel like '%$array7[2]%' and fuel like '%$array7[3]%' and "
        . "fuel like '%$array7[4]%' and fuel like '%$array7[5]%' and fuel like '%$array7[6]%'"
        ."and bodyStyle like '%$array9[0]%' and bodyStyle like '%$array9[1]%' "
        . "and bodyStyle like '%$array9[2]%' and bodyStyle like '%$array9[3]%' and "
        . "bodyStyle like '%$array9[4]%' and bodyStyle like '%$array9[5]%' and bodyStyle like '%$array9[6]%'"
        ."and keyConsider like '%$array11[0]%' and keyConsider like '%$array11[1]%' "
        . "and keyConsider like '%$array11[2]%' and keyConsider like '%$array11[3]%' and "
        . "keyConsider like '%$array11[4]%' and keyConsider like '%$array11[5]%' and keyConsider like '%$array11[6]%'"
        ."and features like '%$array13[0]%' and features like '%$array13[1]%' "
        . "and features like '%$array13[2]%' and features like '%$array13[3]%' and "
        . "features like '%$array13[4]%' and features like '%$array13[5]%' and features like '%$array13[6]%'";

$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 
 $str="
     <div class='container' >
     <div class='row' style='margin-top:-150px;'>
                      <label class=' col-md-2 control-label '>Features</label>
                     </div>
    <div class='row' > <div class='col-md-12'>
                     
    <ul>
  <li>".'
    <input type="checkbox" id="myCheckboxabs" />
    <label class="label" for="myCheckboxabs"><img src="features/abs.png" alt="abs"/></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxairbags" />
    <label class="label" for="myCheckboxairbags"><img src="features/airbags.png" alt="airbags" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxautomatic" />
    <label class="label" for="myCheckboxautomatic"><img src="features/automatic.png" alt="Automatic"/></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxbluetooth" />
    <label class="label" for="myCheckboxbluetooth"><img src="features/bluetooth.png" alt="Bluetooth"/></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxclimatecontrol" />
    <label class="label" for="myCheckboxclimatecontrol"><img src="features/climatecontrol.png" alt="Climate Control" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxkeylessentry" />
    <label class="label" for="myCheckboxkeylessentry"><img src="features/keylessentry.png" alt="Key Less Entry"/></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxparkingsensors" />
    <label class="label" for="myCheckboxparkingsensors"><img src="features/parkingsensors" alt="Prking Sensors" /></label>
  </li>
</ul>    '."
            </div>
                          </div>  
                          <div class='row'>

        </div>
      
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-80px;padding-left:38px;padding-right:40px;' id='id11'>Next</button>                    
        </div>        
".'<script>  


$(document).ready(function(){
    document.getElementById("id10").onclick = function() {
    var val="";
var arr;
if(document.getElementById("myCheckboxabs").checked===true)
{val +="abs*";};
if(document.getElementById("myCheckboxairbags").checked===true)
{val +="airbags*";};
if(document.getElementById("myCheckboxautomatic").checked===true)
{val +="automatic*";};
if(document.getElementById("myCheckboxbluetooth").checked===true)
{val +="bluetooth*";};
if(document.getElementById("myCheckboxclimatecontrol").checked===true)
{val +="climateControl*";};
if(document.getElementById("myCheckboxkeylessentry").checked===true)
{val +="keylessEntry*";};
if(document.getElementById("myCheckboxparkingsensors").checked===true)
{val +="parkingSensor*";};
features += val;
                      var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
                      values += rdType+",";
                      values += usg+",";
                      values += fuelPrefer+",";
                      values += bodyStyle+",";
                      values += keyConsider+",";
                      values += userInfo+",";
                      values += val;
                      
       
        $.ajax({
          url:"features.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
                arr=data.split("!");
                if((arr[0])!==""){
              $("#ele11").html(arr[1]);
              $("#ele3").html(arr[0]);
    }
    else
    {         $("#ele3").html("No Result!!!");
   }
            }
            });
                 };
                 });</script>';
                     
include 'resultWin.php';
 echo $opt.'@'."";

?>

