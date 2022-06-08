<!DOCTYPE php>
<?
$url = "http://api.openweathermap.org/data/2.5/find?q=Hong+Kong&units=metric&type=accurate&mode=xml&APPID=9da4a81e00e67412875447a5136c7d50";
$getweather = simplexml_load_file($url);
$gethumidity = $getweather->list->item->humidity['value'];
$gettemp = $getweather->list->item-temperature['value'];
?>


<html>
  <head>
    <link rel="stylesheet" href="write.css" />


<script type="text/javascript">
  var tops_list = [
       "assets/tops_white.png"
     , "assets/tops_cats.png"
  ];
  var bottoms_list = [
       "assets/bottoms_green.png"
     , "assets/bottoms_blue.png"
  ];
  function get_tops() {
    var img = '<img src=\"';
    var randomIndex = Math.floor(Math.random() * tops_list.length);
    img += tops_list[randomIndex];
    img += '\" alt=\"Some alt text\"/>';
    return img;
  }
  function get_bottoms() {
    var img = '<img src=\"';
    var randomIndex = Math.floor(Math.random() * bottoms_list.length);
    img += bottoms_list[randomIndex];
    img += '\" alt=\"Some alt text\"/>';
    return img;
  }
</script>

  </head>
  






<body>
<!-- <div id="write-here" contenteditable="true"> 
</div> -->


<div id="generate">
  <div class="clothes">
    <img src="" id="tops"> <script type="text/javascript">document.write(get_tops());</script>

    <img src="" id="bottoms"> <script type="text/javascript">document.write(get_bottoms());</script>
  </div>
</div>


<ul>
  <li> Humidity : <? echo($gethumidity); ?>%</li>
  <li> Temperature :<? echo($gettemp); ?> &deg;C</li>
</ul>




</body>
</html>
