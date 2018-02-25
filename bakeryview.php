<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet"  href="homestyle.css">
</head>
<body>
  <div class="container">
   <header>
     <div class="title"><h1><a href="bakeryview.php?id=map">베이커리뷰</a></h1></div>
     <div class="bakeryname"><h2>윤하섭베이커리</h2></div>
     <div class="ceosay"><h3>"윤하섭베이커리는 진정성있는빵을 만듭니다"</h3></div>
   </header>
   <nav class="navbar">
    <div class="navitem">
          <a href="bakeryview.php?id=map">위치/길찾기</a>
          <a href="bakeryview.php?id=breadtime">빵나오는시간</a>
          <a href="bakeryview.php?id=bestitem">인기제품</a>
          <a href="bakeryview.php?id=etc">그외제품사진</a>
    </div>
   </nav>
   <section class="content">
    <main class="main">
    <?php
      if(isset($_GET['id'])){
        echo file_get_contents($_GET['id'].".php");
      } else {
        echo file_get_contents("data/map");
      }
         ?>

    </main>
    <aside class="bakerystory">
     BAKERY STORY
    </aside>
   </section>

   <footer>
  홈페이지
   </footer>
  </div>
</body>
</html>
