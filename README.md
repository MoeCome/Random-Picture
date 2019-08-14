# Random-Picture
随机图片api    

实验地址:  <http://miku.ueuo.com/>*(无稳定性保证)*  
注意:  [show.php](http://miku.ueuo.com/show.php)用于展示所有图片，如若不需要，可以删除


## 访问[index.php](http://miku.ueuo.com/)

直接跳转至图片地址   

访问?id=数字，跳转至指定图片


## 访问[?type=output](http://miku.ueuo.com/?type=output)

服务器读取图片后输出   

不建议使用


## 访问[?type=json](http://miku.ueuo.com/?type=json)
```json  
  {"code":"200","url":"https:\/\/fp1.fghrsh.net\/2019\/07\/15\/c2549aaa63db078834ead6a92fe63b61.jpg","width":"1920","height":"1080","mime":"image\/jpeg","size":"821735"}
```

## 访问[?type=js](http://miku.ueuo.com?type=js)

输出js
```javascript
 var pic_random='https://fp1.fghrsh.net/2019/07/15/aceb221b57c4987ac324e10aeaf69ede.jpg';
 var pic_end=34;  //最后一张图片的id
 var pic_rdn=25;  //随机图片的id，每次不同
```
