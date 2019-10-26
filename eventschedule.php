<!DOCTYPE html>
<html>
<head>
    <title>  Event Schedule </title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="./css/try.css">


</head>
<body>
<!-- Event Schedule -->
       <style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}


div {
  border-radius: 6px;
  background-color: white;
  padding: 17px;
  width:30%;
}

#b{
    display: none;
}

#c{
    display: none;
}

.button{
    color: blue;
}

</style>


                
<button type="button" id="showA">15th June,2019</button>
<button type="button" id="showB">16th June,2019 </button>
<button type="button" id="showC">17th June,2019</button>



<div id="a">
<form action="">
    <label for="fname">9:00 AM</label>
    <input type="text" id="fname" name="firstname" placeholder="Registration opens (open all day)">
    <div class="clear"></div>

    <label for="lname">10:00 AM</label>
    <input type="text" id="lname" name="lastname" placeholder="Educational presentations begin">
 <div class="clear"></div>

<label for="lname">12:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Lunch">
 <div class="clear"></div>

 <label for="lname">4:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Educational presentations end">
 <div class="clear"></div>

 <label for="lname">5:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Team formation workshop">
 <div class="clear"></div>

 <label for="lname">6:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Dinner">
 <div class="clear"></div>

<label for="lname">7:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Opening ceremony begins">
 <div class="clear"></div>

<label for="lname">8:30 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Hacking officially begins!">
 <div class="clear"></div>

<label for="lname">9:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Workshops begin">
 <div class="clear"></div>

  </form>
      </div> 
  

       



 
<div id="b">
<form>
<label for="lname">8:00 AM</label>
    <input type="text" id="lname" name="lastname" placeholder="Breakfast">
 <div class="clear"></div>

<label for="lname">10:00 AM</label>
    <input type="text" id="lname" name="lastname" placeholder="Morning talks begin">
 <div class="clear"></div>

<label for="lname">12:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Lunch">
 <div class="clear"></div>

<label for="lname">2:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Afternoon talks begin">
 <div class="clear"></div>

<label for="lname">>8:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Dinner">
 <div class="clear"></div>

<label for="lname">12:00 AM</label>
    <input type="text" id="lname" name="lastname" placeholder="Midnight Snacks">
 <div class="clear"></div>

<label for="lname">12:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Lunch">
 <div class="clear"></div>
</div>
</form>

<div id="c" class="w3-container w3-border city">

<form>
<label for="lname">8:00 AM</label>
    <input type="text" id="lname" name="lastname" placeholder="Breakfast">
 <div class="clear"></div>

<label for="lname">9:30 AM</label>
    <input type="text" id="lname" name="lastname" placeholder="Project submission deadline">
 <div class="clear"></div>

 <label for="lname">10:30 AM </label>
    <input type="text" id="lname" name="lastname" placeholder="Judging begins">
 <div class="clear"></div>
 
 <label for="lname">12:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Lunch">
 <div class="clear"></div>
 
 <label for="lname">1:30 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Closing ceremonies begin">
 <div class="clear"></div>
 
 <label for="lname">3:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="End of ETHCapeTown!">
 <div class="clear"></div>
 
 <label for="lname">3:00 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="End of ETHCapeTown!">
 <div class="clear"></div>

 <label for="lname">3:30 PM</label>
    <input type="text" id="lname" name="lastname" placeholder="Afterparty begins! 🎉">
 <div class="clear"></div>
 
   
</div>

</body>

<script>
$(document).ready(function(){
$("#showA").click(function(){
$("#a").show();
$("#b").hide();
$("#c").hide();
});
$("#showB").click(function(){
$("#a").hide();
$("#b").show();
$("#c").hide();

});

$("#showC").click(function(){
$("#a").hide();
$("#b").hide();
$("#c").show();

});

});

</script>





</html>