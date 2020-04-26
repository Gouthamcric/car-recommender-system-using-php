
<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
$array=explode(",",$values);
$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  between $array[2] and $array[3] and dailyUtilization between $array[4] and $array[5]";

$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 $str="
     <div class='container' >
   <div class='row' style='margin-top:-150px;'>
                      <h1 class=' col-md-2 ' id='form-h1'> 4.Road_Type</h1>
                     </div>
    <div class='row' style='margin-top:20px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
    <ul>
  <li>".'
    <input type="checkbox" id="myCheckbox1" />
    <label class="label" for="myCheckbox1"><img src="roads/cement.jpg" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckbox2" />
    <label class="label" for="myCheckbox2"><img src="roads/mud.jpg" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckbox3" />
    <label class="label" for="myCheckbox3"><img src="roads/rock.jpg" /></label>
  </li>
  <li>

    <input type="checkbox" id="myCheckbox4" />
    <label class="label" for="myCheckbox4"><img src="roads/rural.jpg" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckbox5" />
    <label class="label" for="myCheckbox5"><img src="roads/semi-rural.jpg" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckbox6" />
    <label class="label" for="myCheckbox6"><img src="roads/semi-urban.jpg" /></label>
  
</li>
  <li>

    <input type="checkbox" id="myCheckbox7" />
    <label class="label" for="myCheckbox7"><img src="roads/urban.jpg" /></label>
  </li>
</ul>    '."
            </div>
                          </div>  
                          <div class='row'>
<div class='col-md-2' style='margin-top:-34px;margin-left:5px'>Cement road</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:230px'>Mud road</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:375px'>Rock road</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:515px'>Rural road</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:643px'>Semi Rural road</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:787px'>Semi Urban road</div>
<div class='col-md-2' style='margin-top:-34px;margin-left:949px'>Urban road</div>
</div>
        </div>
      
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-80px;padding-left:38px;padding-right:40px;' id='id4'>Next</button>                 
        </div>        
".'<script>  


$(document).ready(function(){
    document.getElementById("id4").onclick = function() {
    var val="";
var arr;
if(document.getElementById("myCheckbox1").checked===true)
{val +="1*";};
if(document.getElementById("myCheckbox2").checked===true)
{val +="2*";};
if(document.getElementById("myCheckbox3").checked===true)
{val +="3*";};
if(document.getElementById("myCheckbox4").checked===true)
{val +="4*";};
if(document.getElementById("myCheckbox5").checked===true)
{val +="5*";};
if(document.getElementById("myCheckbox6").checked===true)
{val +="6*";};
if(document.getElementById("myCheckbox7").checked===true)
{val +="7*";};
rdType=val;
                      var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
                      values +=val;
        values += $(this).val()+",";
        $.ajax({
          url:"roadType.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
                arr=data.split("@");
                if((arr[0])!==""){
              $("#ele5").html(arr[1]);
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
echo $opt.'~'.$str;
?>

