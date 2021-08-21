<html>
<head>
<style>
body{
background-color:black;
}
p
{
margin:20px;
font-family:arial;
font-size:20px;
color:lightgray;
}
ul,ol{
 margin:10 100 10 100;
 font-family:arial;
 font-size:16px;
 color:lightgray;
}
.b{
    font-size:28px;
line-height:1.8;
font-style:bold;
color:white;
display: inline;
font size:30px;
font-family:"Luis sans";
}

img{
display: inline;
width:40px;
height:40px;
}

span.a{
display: inline;
color:white;
width: 100px;
    height: 100px;
    padding: 15px;
 
}
imgfaq{
display: inline;
color:white;
width: 75px;
    height: 75px;
    padding: 15px;
 
}

.header
{
 float:center;
 text-align:center;
 font-family:verdana;
 font-size:10px;
 padding:15px;
 
}
#link
{
 padding:15px;
 font-size:18px;
 border-radius:15px;
}
a{
text-decoration:none;
}
a:hover {
  color: black;
  background-color:gainsboro;
}
#about
{
color:white;
font-family:"arial";
font-size:18px;

line-height:1.8;
}

.faq_question {
    margin: 0 100 0 100px;
    padding: 0px 0px 5px 0px;
    color:white;
	background-color:black;
    cursor: pointer;
    font-weight: bold;
    font-family:"arial";
    font-size:20px;
    line-height:1.8;
	
}
 
.faq_answer_container {
    height: 0px;
	margin:0px;
    overflow: hidden;
    padding: 0px;
    font-family:"arial";
    font-size:20px;
    line-height:1.8;
}
</style>
<title> Homepage</title>
</head>
<body background="dark.jpg">


<span class="a"><img src="bloodline.jfif"></span>
<span class=a><div class="b">Bloodline MIT<br></div></span>

<div class="header">
<a id="link" href="homepage.php">Home</a>
<a id="link" href="joinus.php">Join Us</a>
<a id="link" href="about.php">About</a>
<a id="link" href="instruction.php">Guidelines for donation</a>
<a id="link" href="checkavailability.php">Check Availability</a>
<a id="link" href="whocangiveblood.php">Who can give Blood?</a>
<a id="link" href="faq.php">FAQs</a>
<a id="link" href="importantlinks.php">Important Links</a>
<a id="link" href="request blood.php">Request blood</a>
</div><br><br>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
 
    });
 
});
</script>

<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >How much blood is removed during the donation?<span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><br><ul>The amount of blood withdrawn varies from 350ml- 450ml.</ul><br></div>
           </div>        
    </div>
 </div>
<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >How long does my body take to recover,after the donation?<span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><br><ul>It normally takes 24hrs for the blood volume to be replaced. And red cells get replaced in about 6 weeks.</ul><br></div>
           </div>        
    </div>
 </div>

<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >Will I become physically weak or get any infection after blood donation?<span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><br><ul>No if you are in normal health there is no cause for concern. The chances of infections are minimum if you donate to a reputed lab as they take all the necessary precautions.</ul><br></div>
           </div>        
    </div>
 </div>

<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >Why should I donate Blood? <span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><ul>Safe blood saves lives and improves health. Blood transfusion is needed for:<br>
<li>

women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth;</li>
<li>
children with severe anaemia often resulting from malaria or malnutrition;</li>

<li>
people with severe trauma following man-made and natural disasters;</li>
<li>
many complex medical and surgical procedures and cancer patients.</li></ul><br>
</div>
           </div>        
    </div>
 </div>

<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >Can I donate blood frequently?<span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><br><ul>"Yes you can donate blood regularly. Many blood banks depend on voluntary regular blood donor. Frequent blood donors have no health ill effects. "</ul><br></div>
           </div>        
    </div>
 </div>

<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >How often can I donate blood?<span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><br><ul>"In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply."</ul><br></div>
           </div>        
    </div>
 </div>

<div class="faq_container">
   <div class="faq">
      <div class="faq_question" >Will it hurt when you insert the needle?
<span class="a"><img src="arrow.png"></span>
</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><br><ul>Only for a moment. Pinch the fleshy, soft underside of your arm. That pinch is similar to what you will feel when the needle is inserted.</ul><br></div>
           </div>        
    </div>
 </div>



</body>
</html>