<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>学习Jquery</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-2.2.3.min.js"></script>
		<script>
		/* $(document).ready(function(){
			$("p").click(function(){
				$(this).hide();
			});
		}
		); */
		
		$(document).ready(function(){
			/*$("button").click(function(){
			$("button").dblclick(function(){
				$("p.lei").hide();
				$("p#idmc").hide();
				$("p").hide();
				$("h1").hide();
				$(this).hide(); 
				$("[href]").hide();
				$("[href='#']").hide();
				$("[href$='.jpg']").hide();
				$("[href!='#']").hide();
				$("p").css("background-color","#cc5522")
				$(".lei").hide();
			});*/
			$("input").focus(function(){
				$("input").css("background-color","#3079ed");
			});
			$("input").blur(function(){
				$("input").css("background-color","#cc5522");
			});
			$("input").mouseover(function(){
				$("input").css("background-color","#000");
			});
			$("input").mouseout(function(){
				$("input").css("background-color","#f8f8f8");
			});
		});
		
		</script>
    </head>
    <body>
	<h1 class="lei">快来隐藏我这个H1</h1>
	<p class="lei">class</p>
	<p id="idmc">如果点击我，我就消失掉！</p>
	<p><a href="http://w3school.com.cn/jquery/jquery_selectors.asp">shuxing</a></p>
	<p><a href="#">lianjie wei kong</a></p>
	<p><a href="http://127.0.0.1:9096/jquery/images/hk.jpg">lianjiedaotupian</a></p>
	<img style="width:100px;height:100px" src="images/hk.jpg" />
	<p>又消失掉！</p>
	<p>还消失掉！</p>
	<button type="button">点击隐藏</button>
	<input type="text" />
    </body>
</html>