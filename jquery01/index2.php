<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>学习Jquery</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-2.2.3.min.js"></script>
		<script>
		$(document).ready(function(){
			$("button").click(function(){
				//$(".spb").load('css/style.css');
				//$(".spb").load("css/style.css");
				//$(".spb").load("note.txt .tree2");
				/* $(".spb").load("css/style1.css",function(responseTxt,statusTxt,xhr){
					if(statusTxt=="success")
						alert("document load success!");
					else
					alert("Error:"+xhr.status+":"+xhr.statusTxt); */
				
				/* if(statusTxt=="success")
						alert("document load success!");
				if(statusTxt=="error")
					alert("Error:"+xhr.status+":"+xhr.statusTxt); */
				
				/* $.get("css/style.css",function(data,status){
					alert("Data:"+data+"\nStatus:"+status);
				}); */
				
				$.post("getpost.php",
				{
					xing:"li",
					ming:"shuang"
				},
				function(data,status){
					alert("Data:"+data+"\nStatus:"+status);
				});
				
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
	<div id="divtree" class="divtree">
		<div class="tree1">
		<p>树形结构</p>
		<p>重庆火锅</p>
		<p><span>驴肉火烧<span></p>
		<span>洞子火锅<span>
		</div>
		<p>火锅英雄很硬朗</p>
		<p>陈坤，白百何</p>
		<div class="tree2">
			<ul>
				<li>步行者</li>
				<li class="gzb">
					<span class="spb">沙坪坝</span>
				</li>
				<li>葛洲坝</li>
				<li>三峡大坝</li>
				<p>什么值得买</p>
				<p class="zd">sfs</p>
			</ul>
		</div>
	</div>
	<p>又消失掉！</p>
	<p>还消失掉！</p>
	<button type="button">点击隐藏</button>
	<input type="text" />
    </body>
</html>