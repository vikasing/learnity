<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel='stylesheet' href='style.css' />
<script src="jquery-2.0.2.min"></script>
<script type="text/javascript">
function doajax(){
var yid = $("#yid").val();
$.ajax({
  type: "POST",
  url: "youtube.php",
  data: { yt: yid}
}).done(function( msg ) {
  var obj = $.parseJSON(msg);
  $.each(obj.entry,function(i,item){
  	console.log(item);
  	$("#yt").append("<div style=vid>"+item.title+"</div>");
  	});
});
}

</script>

</head>
<body>
<div class="main">
<div><div>Age</div><div><input size="50" type="text" /></div></div></div>
<div><div>Headline</div><div><input size="150" type="text" /></div></div></div>
<div>Skills</div>
<div>Import Portfolio</div>
<div>To import your Youtube videos, please enter your Youtube Id: </div> 
<div><input size="50" type="text" id="yid" name="yid" /></div>
<div><input type="button" size="50" value="Get Videos" onclick="doajax();" /></div>
<div id="yt" style="width=100%">dfd</div>
</body>
</html>