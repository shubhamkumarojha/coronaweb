<!DOCTYPE html>
<html>
<head>
<title>http://gocoronago.com</title>
  
<?php include 'link/links.php' ; ?>
<?php include 'css/style.php' ; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg  nav_style  p-3">
  <a class="navbar-brand pl-5 hs" href="#">!!HUM SWASTH TO JAG SWASTH!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="#Latest Update States"> States Cases</a>
      </li> 
 <li class="nav-item">
        <a class="nav-link" href="#Latest Update Countries">Countries Cases</a>
      </li> 
 <li class="nav-item">
        <a class="nav-link" href="#Latest News">Latest News</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>

  </div>
</nav>



<div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src="img/corona-4960366__480.webp" width="200" height="200">
</div>
</div>
<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
<div class="rightside w-200 h-200 d-flex justify-content-center align-items-center">
<h2 id="first">!Let's Stay Home &  Fight Together Against Cor<span class="corona"><img src="img/virus-4974193__480.webp" width="200" height="200"></span>na Virus!</h2>
</div>
</div>
</div>
</div>

<!-- ////////////table show update//////// -->


<div class="container-fluid" id="Latest Update States">
<div class="section_header text-center mb-5 mt-4">
<h3 class="text-uppercase text-center lu">COVID-19 LIVE UPDATES OF STATES</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped text-center">
<tr>
	<th>Last Updated Time</th>
	<th>States</th>
	<th>Total Active Case</th>
	<th>Total Confirmed</th>
	<th>Total Recovered</th>
	<th>Total Death</th>
	
</tr>
<?php
$data= file_get_contents('https://api.covid19india.org/data.json');
$covidlive=json_decode($data,true);
$statecount= count($covidlive['statewise']);
$i=1;
while($i<$statecount){
?>
<tr>
	<td><?php echo $covidlive['statewise'][$i]['lastupdatedtime'] ?></td>
	<td><?php echo $covidlive['statewise'][$i]['state'] ?></td>
	<td><?php echo $covidlive['statewise'][$i]['active'] ?></td>
	<td><?php echo $covidlive['statewise'][$i]['confirmed'] ?></td>
	<td><?php echo $covidlive['statewise'][$i]['recovered']  ?></td>
	<td><?php echo $covidlive['statewise'][$i]['deaths'] ?></td>
	
</tr>
<?php
$i++;
}

?>	
</table>
</div>
</div>







<div class="container-fluid" id="Latest Update Countries">
<div class="section_header text-center mb-5 mt-4">
<h3 class="text-uppercase text-center lu">COVID-19 LIVE UPDATES OF COUNTRIES </h3>
</div>


<div class="table-responsive">
<table class="table table-bordered table-striped text-center">
<tr>
	<th>Countries</th>
	<th>Total confirmed</th>
	<th>Total recovered</th>
	<th>Total deaths</th>
	<th>NewConfirmed</th>
	<th>NewRecovered</th>
	<th>NewDeaths</th>
</tr>
<?php
$data= file_get_contents('https://api.covid19api.com/summary');
$coronalive=json_decode($data,true);
$countrycount= count($coronalive['Countries']);
$i=0;
while($i<$countrycount){
?>
<tr>
	<td><?php echo $coronalive['Countries'][$i]['Country'] ?></td>
	<td><?php echo $coronalive['Countries'][$i]['TotalConfirmed'] ?></td>
	<td><?php echo $coronalive['Countries'][$i]['TotalRecovered'] ?></td>
	<td><?php echo $coronalive['Countries'][$i]['TotalDeaths']  ?></td>
	<td><?php echo $coronalive['Countries'][$i]['NewConfirmed'] ?></td>
	<td><?php echo $coronalive['Countries'][$i]['NewRecovered']  ?></td>
	<td><?php echo $coronalive['Countries'][$i]['NewDeaths']  ?></td>
</tr>
<?php
$i++;
}

?>	
</table>
</div>
</div>









<div id="flip"> Click Here To See Tips for Food Safety during COVID-19 </div>
<div id="panel">

<img src="img/fruit-575762__480.webp" class="img-fluid">

<h2 class="diets">Tips for maintaining a healthy diet:</h2><hr>


<h3 class="tips">1. Eat a variety of food, including fruits and vegetables</h3>



<p class="para">•  Every day, eat a mix of wholegrains like wheat, maize and rice, legumes like beans, plenty of fresh fruit and vegetables ,
 with some foods from animal sources (e.g. meat, fish, eggs and milk).</p>

<p class="para">•  Choose wholegrain foods like oats, wheat and brown rice when you can;
 they are rich in valuable fibre and can help you feel full for longer.</p>

<p class="para">•  For snacks, choose raw vegetables, fresh fruit, and unsalted nuts.</p>

<h3 class="tips">2. Cut back on salt</h3>

<p class="para"> • Limit salt intake to 5 grams (equivalent to a teaspoon) a day.</p>

<p class="para">• When cooking and preparing foods, use salt sparingly and reduce use of salty sauces and condiments (like soy sauce, stock or fish sauce).</p>

<p class="para">• If using canned or dried food, choose varieties of vegetables, nuts and fruit, without added salt and sugars.</p>

<p class="para"> • Remove the salt shaker from the table, and experiment with fresh or dried herbs and spices for added flavor instead.</p>

<p class="para"> • Check the labels on food and choose products with lower sodium content.</p>


<h3 class="tips">3. Eat moderate amounts of fats and oils</h3>

<p class="para"> • Replace butter, ghee and lard with healthier fats like olive, soy, sunflower or corn oil when cooking.</p>

<p class="para"> • Choose white meats like poultry and fish which are generally lower in fats than red meat; 
trim meat of visible fat and limit the consumption of processed meats.</p>

<p class="para"> • Select low-fat or reduced-fat versions of milk and dairy products.</p>

<p class="para"> • Avoid processed, baked and fried foods that contain industrially produced trans-fat.</p>

<p class="para"> • Try steaming or boiling instead of frying food when cooking.</p>


<h3 class="tips">4. Limit sugar intake</h3>

<p class="para">• Limit intake of sweets and sugary drinks such as fizzy drinks, fruit juices and juice drinks, liquid 
and powder concentrates, flavoured water, energy and sports drinks, ready-to-drink tea and coffee and flavoured milk drinks.

<p class="para">• Choose fresh fruits instead of sweet snacks such as cookies, cakes and chocolate.</p>
<p class="para"> • When other dessert options are chosen, ensure that they are low in sugar and consume small portions.</p>

<p class="para">• Avoid giving sugary foods to children. Salt and sugars should not be added to complementary foods given to children under 2 years of age, and should be limited beyond that age.</p>

<h3 class="tips">5. Stay hydrated: Drink enough water</h3>

<p class="para">• Good hydration is crucial for optimal health. Whenever available and safe for consumption, 
tap water is the healthiest and cheapest drink. </p>
<p class="para" >• Drinking water instead of sugar-sweetened beverages is a simple way to limit your intake of sugar and excess calories.</p>


<h3 class="tips">6. Avoid hazardous and harmful alcohol use.</h3>

<p class="para" >• Alcohol is not a part of a healthy diet. Drinking alcohol does not protect against COVID-19 and can be dangerous. </p>

<h3 class="tips">7. Breastfeed babies and young children</h3>

<p class="para">• Breastmilk is the ideal food for infants. It is safe, clean and contains antibodies which help protect against many common childhood illnesses.
<p class="para">•  Babies should be breastfed exclusively during the first 6 months of life, as breast milk provides all the nutrients and fluids they need.</p>

<p class="para">• From 6 months of age, breast milk should be complemented with a variety of adequate, safe and nutrient-dense foods.</p>
<p class="para">• Breastfeeding should continue under babies at 2 years of age or beyond.</p>

<p class="para">• Women with COVID-19 can breastfeed if they wish to do so and should take infection prevention and control measures. </p>




</div>

<script>
$(document).ready(function(){
$('#flip').click(function(){
$('#panel').slideToggle('slow');
});
});
</script>





<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
<h2>!!About COVID-19!!</h2>
</div>
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-1">
<img src="img/house-4952706__480.webp" class="img-fluid">
</div>

<div class="col-lg-6 col-md-6 col-12 mr-5">
<h3>What is Covid-19</h3>
<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases
 such as Middle East Respiratory Syndrome (MERS-CoV) and  Severe Acute Respiratory Syndrome (SARS-CoV
 Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.</p>
<p>Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties.
 In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.</p>
</div>
</div>
</div>




<!-- ////////////table show update//////// -->



<div class="container-fluid" id="Latest News">
<div class="section_header text-center mb-5 mt-4">
<h3 class="text-uppercase text-center news">LATEST NEWS REPORT OF INDIA </h3>
</div>


<div class="table-responsive">
<table class="table table-bordered table-striped text-center">
<tr>
	
	<th>urlToImage</th>
	<th>Title</th>
	<th>Description</th>
	<th>Content</th>
	
	
</tr>
<?php
$url= file_get_contents('http://newsapi.org/v2/top-headlines?country=in&apiKey=5a57d0bb1c494114b075124e7831a648');
$newslive=json_decode($url,true);
$newsreport= count($newslive['articles']);
$i=0;
while($i<$newsreport){
?>
<tr>
	   
	<td><img src="<?php echo $newslive['articles'][$i]['urlToImage'] ?>"  class="img-fluid" width="140" height="400"></td>
	
	
	<td class="ti"><?php echo $newslive['articles'][$i]['title'] ?></td>
	<td  class="des"><?php echo $newslive['articles'][$i]['description'] ?></td>
	<td  class="con">><?php echo $newslive['articles'][$i]['content']  ?></td>
	
	
	
</tr>
<?php
$i++;
}

?>	
</table>
</div>
</div>











<div class="container-fluid  pt-5 pb-5" id="sympid">
         <div class="section_header text-center mb-5 mt-4">
         <h2 class="sympt">!!Corona Virus Symptoms!!</h2>
         </div>

<div class="container">
<div class="row">
	<div class="col-lg-4 col-md-4 col-12 mt-5">
	<figure class="text-center">
	<img src="img/cough.jpg" class="img-fluid" width="100" height="100">
	<figcaption>cough</figcaption>
	</figure>
	</div>
<div class="col-lg-4 col-md-4 col-12  mt-5">
<figure class="text-center">
<img src="img/influenza-156098__480.webp" class="img-fluid" width="180" height="180">
<figcaption>fever</figcaption>
</figure>
</div>
	<div class="col-lg-4 col-md-4 col-12  mt-5">
	<figure class="text-center">
	<img src="img/sad-3176411__480.webp" class="img-fluid" width="140" height="140">
	<figcaption>headache </figcaption>
	</figure>
	</div>
<div class="col-lg-4 col-md-4 col-12  mt-5">
<figure class="text-center">
<img src="img/sleep-2035383__480.webp" class="img-fluid" width="90" height="90">
<figcaption>tired </figcaption>
</figure>
</div>
	<div class="col-lg-4 col-md-4 col-12  mt-5">
	<figure class="text-center">
	<img src="img/runnose.jpg" class="img-fluid" width="120" height="120">
	<figcaption>cold </figcaption>
	</figure>
	</div>
<div class="col-lg-4 col-md-4 col-12  mt-5">
<figure class="text-center">
<img src="img/new file.jpg" class="img-fluid" width="110" height="110">
<figcaption>difficulty in breathing</figcaption>
</figure>
 </div>

</div>
</div>
</div>



<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
	<h2>!!7 Steps Prevention Against Corona Virus!!</h2>
	</div>
<div class="container">
 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/coronavirus-4912023__480.webp" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand sanitizer.</p>
       </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/wearing-a-mandatory-mask-5405387__480.webp" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>Cover your nose and mouth with a disposable tissue or fiexed elbow when you cough and sneeze. </p>
       </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/coronavirus-4958512__480.webp" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>Avoid close contact(2 meters or 3 feet) with people who are unwell. ie; maintain social distancing.</p>
       </div>
</div>
</div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/virus-4976408__480.webp" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>Stay home and self-isolate from others in the household if you feel unwell and Spend quality times with your loved ones.</p>
       </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/stay-at-home-5049118__480.webp" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>Stay informed by watching news and follow the recommended practices.</p>
       </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/sym.jpg" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>If you have fever,cough and difficulty breathing.Seek medical care early.</p>
       </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
               <img src="img/bin-1300476__480.webp" class="img-fluid" width="80" height="80">
               </figure>
               </div>
       <div class="col-lg-8 col-md-8 col-12">
       <p>Regularly cleaning and disinfecting the house is important to keep corona virus away .</p>
       </div>
</div>
</div>
</div>
</div>


<div class="container-fluid   pt-5 pb-5  frm" id="contactid">
	<div class="section_header text-center mb-5 mt-5">
<p class="inf">!If someone is showing any of <span class="co"> COVID-19 </span> symptoms signs in your eyes,Please inform below!.</p>
	<h2 class="sympt">!ASAP Contact Here!</h2>
	</div>
<div class="container">
<div class="row">
               <div class="col-lg-8 offset-lg-2 col-12">

<form action="" method="POST">

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" id=""  name="username" placeholder="Enter your name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Enter your email address" autocomplete="off">
  </div>
<div class="form-group">
    <label>Mobile</label>
    <input type="number" maxlength="10" class="form-control" id="" name="mobile" placeholder="Enter your mobile number" autocomplete="off" required>
  </div>
 
<div class="form-group">
    <label>Select Symptoms</label><br>




  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customCheck1"  value="cold" name="coronasym[]">
    <label class="custom-control-label" for="customCheck1">cold</label>
  </div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customCheck2" value="fever" name="coronasym[]">
    <label class="custom-control-label" for="customCheck2">fever</label>
  </div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customCheck3"  value="breath" name="coronasym[]">
    <label class="custom-control-label" for="customCheck3">difficulty in breath</label>
  </div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customCheck4"  value="tired" name="coronasym[]">
    <label class="custom-control-label" for="customCheck4">feeling weak</label>
  </div>

  <div class="form-group mt-4">
    <label for="exampleFormControlTextarea1">How are they feeling? Just Mention here.</label>
    <textarea class="form-control" id="" name="msg" rows="3"></textarea>
  </div>
<center><button type="submit" class="btn btn-primary"  name="submit">Submit</button></center>
</form>

	</div>

</div>
</div>
</div>

<!-- //////////// top cursor //////// -->

<div class="container scrooltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
<div class="footer_style text-white text-center container-fluid">
<p>!!Copyright By Shubham Kumar Ojha!!</p>
</div>
</footer>	


<script type="text/javascript">


$('.count').counterUp({
delay:10,
time:3000
})

mybutton= document.getElementById("myBtn");
window.onscroll=function() {scrollFunction()};
function scrollFunction() {
if(document.body.scrollTop >50 || document.documentElement.scrollTop >50)
{
mybutton.style.display="block";
}else{
mybutton.style.display="none";
}
}

function topFunction() {
document.body.scrollTop=0;
document.documentElement.scrollTop=0;
}





</script>	
</body>
</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$symp=$_POST['coronasym'];
$msg=$_POST['msg'];

$chk="";
foreach($symp as $chk1){
     $chk .=$chk1."," ;
}
$insertquery="insert into coronacase(username,email,mobile,symp,message) values('$username', '$email', '$mobile', '$chk', '$msg')";
$query=mysqli_query($con, $insertquery);
if($query){
?>
<script>
alert("inserted successful");
</script>
<?php
}else{
?>
<script>
alert("no insert");
</script>
<?php
}
}
?>	