
<?php
//从360壁纸获取图片，建议修改GET的url
$api="http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAppsByCategory&cid=26&start=1&count=200&from=360chrome";
//cid=分类id||start=页数||count=图片数
$arr=json_decode(file_get_contents($api),true);
$arr_data=$arr['data'];
$img=$arr_data[rand(0,count($arr_data))]['url'];
header("Location:$img"); 