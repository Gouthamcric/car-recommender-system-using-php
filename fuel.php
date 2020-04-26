<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
//$values="200000,5000000,0,50,0,50,,personal*";
$array=explode(",",$values);

$array2=explode("*",$array[6]);
$array4=explode("*",$array[7]);
$array6=explode("*",$array[8]);

$array3=array("","","","","","","");
$array5=array("","","");
$array7=array("","","","","","","");

$size=sizeof($array2);
$size2=sizeof($array4);
$size3=sizeof($array6);

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

$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  "
        . "between $array[2] and $array[3] and dailyUtilization between $array[4] "
        . "and $array[5] and RCID like '%$array3[0]%' and RCID like '%$array3[1]%' "
        . "and RCID like '%$array3[2]%' and RCID like '%$array3[3]%' and "
        . "RCID like '%$array3[4]%' and RCID like '%$array3[5]%' and RCID like '%$array3[6]%'"
        . " and `usage` like '%$array5[0]%' and `usage` like '%$array5[1]%' and `usage` like '%$array5[2]%' " 
        ."and fuel like '%$array7[0]%' and fuel like '%$array7[1]%' "
        . "and fuel like '%$array7[2]%' and fuel like '%$array7[3]%' and "
        . "fuel like '%$array7[4]%' and fuel like '%$array7[5]%' and fuel like '%$array7[6]%'"
        ;
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 
   $str="
     <div class='container' >
   <div class='row' style='margin-top:-150px;'>
                       <h1 class=' col-md-2 ' id='form-h1'> 7.Body_Style</h1>
                     </div>
   <div class='row' style='margin-top:20px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
    <ul>
  <li>".'
    <input type="checkbox" id="myCheckboxanyB" />
    <label class="label" for="myCheckboxanyB"><img src="body/any.png" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxconvertible" />
    <label class="label" for="myCheckboxconvertible"><img src="body/convertible.png" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxcrossover" />
    <label class="label" for="myCheckboxcrossover"><img src="body/crossover.png" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckboxhatchback" />
    <label class="label" for="myCheckboxhatchback"><img src="body/hatchback.png" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxmuv" />
    <label class="label" for="myCheckboxmuv"><img src="body/muv.png" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxsedan" />
    <label class="label" for="myCheckboxsedan"><img src="body/sedan.png" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckboxsuv" />
    <label class="label" for="myCheckboxsuv"><img src="body/suv.png" /></label>
  </li>
</ul>    '."
            </div>
                          </div>  
                          <div class='row'>

        </div>
      
    <div class='col-md-offset-5'>
      <button class='btn btn-dark' style='margin-top:-15px;padding-left:38px;padding-right:40px;' id='id7'>Next</button>                  
        </div>        
".'<script>  


$(document).ready(function(){
    document.getElementById("id7").onclick = function() {
    var val="";
var arr;
if(document.getElementById("myCheckboxanyB").checked===true)
{val +="any*";};
if(document.getElementById("myCheckboxconvertible").checked===true)
{val +="convertible*";};
if(document.getElementById("myCheckboxcrossover").checked===true)
{val +="crossover*";};
if(document.getElementById("myCheckboxhatchback").checked===true)
{val +="hatchback*";};
if(document.getElementById("myCheckboxmuv").checked===true)
{val +="muv*";};
if(document.getElementById("myCheckboxsedan").checked===true)
{val +="sedan*";};
if(document.getElementById("myCheckboxsuv").checked===true)
{val +="suv*";};
bodyStyle=val;
                     var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
                      values += rdType+",";
                      values += usg+",";
                      values += fuelPrefer+",";
                      values += val;
       
        $.ajax({
          url:"body.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
                arr=data.split("!");
                if((arr[0])!==""){
              $("#ele8").html(arr[1]);
              $("#ele3").html(arr[0]);
    }
    else
    {
              $("#ele3").html("No Result!!!");
   
    }
            }
            });
                 };
                 });</script>';
                     
include 'resultWin.php';
 echo $opt.'@'.$str;

?>

