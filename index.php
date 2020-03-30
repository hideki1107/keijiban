<?php

  mb_internal_encoding("utf8");
  $pdo=new PDO("mysql:dbname=lessooon1;host=localhost","root","mysql");
  $stmt=$pdo->query("select * from 4each_keijiban");
    
?>          
    


<!doctype html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">  
  

</head>  

<body>
    

      
    

 <img src="4eachblog_logo.jpg"> 
  
<header>
 <li>トップ</li>
 <li>プロフィール</li>
 <li>4eachについて</li>  
 <li>登録フォーム</li>
 <li>問い合わせ</li>
 <li>その他</li>
  
</header>  
  
<div class="left">

  <h1>プログラミングに役立つ掲示板</h1>
 
  
<form method="post" action="insert.php">
 <h2>入力フォーム</h2>
  
  <div>
    <p>ハンドルネーム</p>
    <title>ハンドルネーム</title>
    <input type="text" class="text" size="35" name="handlename">  
  </div>
  
  
  <div>
    <p>タイトル</p>
    <title>タイトル</title>
    <input type="text" class="text" size="35" name="title">
  </div>
  
  <div>
    <p>コメント</p>
    <title>コメント</title>
    <textarea cols="35" rows="3" name="comments"></textarea>
  </div>
  
  <div>
    <input type="submit" class="submit" value="送信する">
  </div>
  
  
</form> 
    
<?php
 foreach($stmt as $row){
     
    echo"<br>";
echo "<div class='kiji'>";
 echo "<h3>".$row['title']."</h3>";

echo "<div class='contents'>";
echo $row['comments'];  
 
echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
   
echo "</div>";
echo "</div>";
     echo"<br>";
 }
?>        
    

    
    

  
</div>

  
<div class="right">
　<h1>人気の記事</h1>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  
  <h1>人気の記事</h1>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  
  <h1>人気の記事</h1>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
  <li>PHPオススメ本</li>
</div>
  


  
  </body>  
    
<footer>
copylight internous | 4each blog is the one which provides A to Z about programming.  
  
</footer>  
      
</html>