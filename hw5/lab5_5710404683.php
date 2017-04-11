<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<link rel="stylesheet"  media="screen"  href="style_lab4.css">
  <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
  <?php if (isset($_POST["birth"])){

  $age = date_diff(date_create($_POST["birth"]), date_create('today'))->y;
  if($age<13){

    echo "<style type=\"text/css\" media=\"screen\">
      
    body{
        background-image: url(img_lab4/kid.jpg) ;
        background-size:     cover;                      /* <------ */
        background-repeat:   no-repeat;
        position: fixed;
        font-family: 'Itim', cursive;
        font-size: 43px;
        position: absolute;
        left: 580px;
        top: 50px;
    }
    div.demo{
          
      color: #696969;
      
    } </style>";
  }
  if($age>13){
    if($_POST['sex'] == 'male'){
    echo "<style type=\"text/css\" media=\"screen\">
      
    body{
        background-image: url(img_lab4/man1.jpg) ;
        background-size:     cover;                      
        background-repeat:   no-repeat;
        position: fixed;
        font-family: 'Sriracha', cursive;
        font-size: 30px;
        position: absolute;
        left: 580px;
        top: 50px;
    }
    div.demo{

      position: absolute;
      top: 550px;
      text-align: center;    
      color: white;
      
    } </style>";
    }
    if($_POST['sex'] == 'female'){
    echo "<style type=\"text/css\" media=\"screen\">
      
    body{
        background-image: url(img_lab4/female1.jpg) ;
        background-size:     cover;                      
        background-repeat:   no-repeat;
        position: fixed;
        font-family: 'Sriracha', cursive;
        font-size: 30px;
        position: absolute;
        left: 580px;
        top: 50px;
    }
    div.demo{

      position: absolute;
      top: 550px;
      text-align: center;    
      color: #FF9999;
      
    } </style>";
    }

  }
}
  
  ?>
	<title>Lab4_5710404683</title>
	
</head>
<body>
  <div id="demo1" class="allEle" >
    <div id="demo1" class="radio" >
	   <form action= "" method="post" id = "form" >
	      Firstname :
        <input type="text" name="fname" placeholder="Enter your name" id="fname" />
        <br>
        <!-- <br><br> -->
        Lastname :
        <input type="text" name="lname" placeholder="Enter your lastname" id="lname" />
        <!-- <br> -->
        <br>
	      Birthday :
        <input type="date" name="birth" placeholder="Enter your Birthday" id="birth" /> 
          


    <br>
      What is your gender?   <br>
      <input type="radio" name="sex" value="male" />Male<br>
      <input type="radio" name="sex" value="female" checked="checked" />Female

<br>
จังหวัด
<select id = "province" name="province">
      <!-- <option value="" selected>--------- เลือกจังหวัด ---------</option> -->
        <!-- <option value="" selected>--------- เลือกจังหวัด ---------</option> -->
        <option value="1" selected>กรุงเทพมหานคร</option>
        <option value="2">กระบี่ </option>
        <option value="3">กาญจนบุรี </option>
        <option value="4">กาฬสินธุ์ </option>
        <option value="5">กำแพงเพชร </option>
        <option value="6">ขอนแก่น</option>
        <option value="7">จันทบุรี</option>
        <option value="8">ฉะเชิงเทรา </option>
        <option value="9">ชัยนาท </option>
        <option value="10">ชัยภูมิ </option>
        <option value="11">ชุมพร </option>
        <option value="12">ชลบุรี </option>
        <option value="13">เชียงใหม่ </option>
        <option value="14">เชียงราย </option>
        <option value="15">ตรัง </option>
        <option value="16">ตราด </option>
        <option value="17">ตาก </option>
        <option value="18">นครนายก </option>
        <option value="19">นครปฐม </option>
        <option value="20">นครพนม </option>
        <option value="21">นครราชสีมา </option>
        <option value="22">นครศรีธรรมราช </option>
        <option value="23">นครสวรรค์ </option>
        <option value="24">นราธิวาส </option>
        <option value="25">น่าน </option>
        <option value="26">นนทบุรี </option>
        <option value="27">บึงกาฬ</option>
        <option value="28">บุรีรัมย์</option>
        <option value="29">ประจวบคีรีขันธ์ </option>
        <option value="30">ปทุมธานี </option>
        <option value="31">ปราจีนบุรี </option>
        <option value="32">ปัตตานี </option>
        <option value="33">พะเยา </option>
        <option value="34">พระนครศรีอยุธยา </option>
        <option value="35">พังงา </option>
        <option value="36">พิจิตร </option>
        <option value="37">พิษณุโลก </option>
        <option value="38">เพชรบุรี </option>
        <option value="39">เพชรบูรณ์ </option>
        <option value="40">แพร่ </option>
        <option value="41">พัทลุง </option>
        <option value="42">ภูเก็ต </option>
        <option value="43">มหาสารคาม </option>
        <option value="44">มุกดาหาร </option>
        <option value="45">แม่ฮ่องสอน </option>
        <option value="46">ยโสธร </option>
        <option value="47">ยะลา </option>
        <option value="48">ร้อยเอ็ด </option>
        <option value="49">ระนอง </option>
        <option value="50">ระยอง </option>
        <option value="51">ราชบุรี</option>
        <option value="52">ลพบุรี </option>
        <option value="53">ลำปาง </option>
        <option value="54">ลำพูน </option>
        <option value="55">เลย </option>
        <option value="56">ศรีสะเกษ</option>
        <option value="57">สกลนคร</option>
        <option value="58">สงขลา </option>
        <option value="59">สมุทรสาคร </option>
        <option value="60">สมุทรปราการ </option>
        <option value="61">สมุทรสงคราม </option>
        <option value="62">สระแก้ว </option>
        <option value="63">สระบุรี </option>
        <option value="64">สิงห์บุรี </option>
        <option value="65">สุโขทัย </option>
        <option value="66">สุพรรณบุรี </option>
        <option value="67">สุราษฎร์ธานี </option>
        <option value="68">สุรินทร์ </option>
        <option value="69">สตูล </option>
        <option value="70">หนองคาย </option>
        <option value="71">หนองบัวลำภู </option>
        <option value="72">อำนาจเจริญ </option>
        <option value="73">อุดรธานี </option>
        <option value="74">อุตรดิตถ์ </option>
        <option value="75">อุทัยธานี </option>
        <option value="76">อุบลราชธานี</option>
        <option value="77">อ่างทอง </option>
      <!-- <option value="อื่นๆ">อื่นๆ</option> -->

  </select> 
   <button  type="submit" name="submit" text="login" id ="submit">Submit</button>
  <button id ="clear" onclick="clearFunction()" type="button">Clear</button>  
  </form> 
<!-- <br> -->

  </div>
 </div> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script> -->
<script src="script_lab4.js"></script>
<script>
// 	function loadDoc() {
// 	  var xhttp = new XMLHttpRequest();
// 	  xhttp.onreadystatechange = function() {
// 	    if (this.readyState == 4 && this.status == 200) {
// 	      document.getElementById("demo").innerHTML =
// 		"<img  src='/province/"+$('#province').val()+".png'></>"+ "<br>" + this.responseText;
// 	    }
// 	  };
// 	  // console.log($('#province').val());
// 	  var dir =  "/province/" ;
// 	  xhttp.open("GET", dir + $('#province').val()+".txt", true);
// 	  // xhttp.open("GET", dir + $('#province').val()+".png" , true);
// 	  xhttp.send();
// }	
		
</script>

<div class="demo" id="demo" >
<?php
if (isset($_POST['province'])){
  $myfile = fopen('motto/' . $_POST['province'].".txt", "r") or die("Unable to open file!");
  echo fgets($myfile,4096);

  }
?>

  <img src=<?php if (isset($_POST['province'])){ echo '/sign'. '/' . $_POST['province']. '.png';} ?> />
</div>

</body>
</html>