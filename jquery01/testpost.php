<?php
$name = isset($_POST['name']) ?htmlspecialchars($_POST['name']):'';
$url = isset($_POST['url']) ?htmlspecialchars($_POST['url']):'';
echo "网站名称：".$name;
echo "\n";
echo "网址：".$url;
?>