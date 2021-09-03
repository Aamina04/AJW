<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	

	*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
body{
  font-family:'tahoma', serif;
}
.container{
  width:260px;
  margin:20px auto;
  height:300px;
  background-color:#333;
  overflow:hidden;
}
ul{
  list-style:none;
  position:relative;
}
li{
  height:100px;
  background-color:rgba(57, 173, 117,0.3);
   text-align:center;
  border-bottom:1px solid #333;
}
h2{
  color:#fff;
  padding-top:10px;
}
p{
  text-align:left;
  padding:10px;
  color:#eee;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space: nowrap;
 }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
  <ul>
    <li>
      <h2>Head line 1</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li>
      <h2>Head line 2</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li>
      <h2>Head line 3</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li>
      <h2>Head line 4</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
   
    
  </ul>
</div>

</body>

<script type="text/javascript">
	

	$(function(){
  var tickerLength = $('.container ul li').length;
  var tickerHeight = $('.container ul li').outerHeight();
  $('.container ul li:last-child').prependTo('.container ul');
  $('.container ul').css('marginTop',-tickerHeight);
  function moveTop(){
    $('.container ul').animate({
      top : -tickerHeight
    },600, function(){
     $('.container ul li:first-child').appendTo('.container ul');
      $('.container ul').css('top','');
    });
   }
  setInterval( function(){
    moveTop();
  }, 3000);
  });
</script>
</html><!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<style type="text/css">
  

  *{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
body{
  font-family:'tahoma', serif;
}
.container{
  width:260px;
  margin:20px auto;
  height:300px;
  background-color:#333;
  overflow:hidden;
}
ul{
  list-style:none;
  position:relative;
}
li{
  height:100px;
  background-color:rgba(57, 173, 117,0.3);
   text-align:center;
  border-bottom:1px solid #333;
}
h2{
  color:#fff;
  padding-top:10px;
}
p{
  text-align:left;
  padding:10px;
  color:#eee;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space: nowrap;
 }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
  <ul>
    <li>
      <h2>Head line 1</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li>
      <h2>Head line 2</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li>
      <h2>Head line 3</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li>
      <h2>Head line 4</h2>
      <p>News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
   
    
  </ul>
</div>

</body>

<script type="text/javascript">
  

  $(function(){
  var tickerLength = $('.container ul li').length;
  var tickerHeight = $('.container ul li').outerHeight();
  $('.container ul li:last-child').prependTo('.container ul');
  $('.container ul').css('marginTop',-tickerHeight);
  function moveTop(){
    $('.container ul').animate({
      top : -tickerHeight
    },600, function(){
     $('.container ul li:first-child').appendTo('.container ul');
      $('.container ul').css('top','');
    });
   }
  setInterval( function(){
    moveTop();
  }, 2000);
  });
</script>
</html>