<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss/custom.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <title>Document</title>
</head>
<header>
  <nav>
    <ul>
        <li style="width: 20px; margin-left: 10px;">
            <a href="#" class="reg"><div style="width:40px; border-radius:20px; height:30px; padding-right: 7.5px; background-color: #F3D67E;"><img id="menu" class="menu" src="../icons/menu.svg" alt=""></div></a>
            <ul class="menu-bar" id="menu-bar">
                <!-- Sub-menu 1 -->
                <!-- Sub-menu 2 -->
                <li  style="margin-top: 18px;"><a href="#">پیام</a></li>
                <!-- Sub-menu 3 -->
                <li><a href="#">ثبت نام / ورود</a></li>
                <!-- Sub-menu 4 -->
                <li><a href="#">درباره ما</a></li>
                <!-- Sub-menu 5 with nested categories -->
                <li>
                    <a href="#" class="dropdown">دسته بندی</a> <img id="cate-ic" src="../icons/dropdown.svg" alt="" style="width: 30px; margin-right: 60px;">
                    <ul class="dropdown-menu" id="dropdown-menu">
                        <li><a href="shop.html">ست مجلسی</a></li>
                        <li><a href="shop.html">ست خواب</a></li>
                        <li><a href="shop.html">کیف</a></li>
                        <li><a href="shop.html">کفش</a></li>
                        <!-- Add other category items here -->
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Other top-level menu items -->
        <li><a href="#">خیاط ها</a></li>
        <li><a href="#">پارچه</a></li>
    </ul>
</nav>

  <form action="">
    <input type="text" placeholder="search">
    <button type="submit">go</button>
  </form>

  <div class="container-name">
    <h1 class="logo">clothes shop</h1>
  </div>
</header>

<body>
  <section style="background-color: antiquewhite;; height: 100vh;">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active mb-0"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../icons/Rectangle 7.png" class="d-block" style="width: 30%; height: 100%;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../icons/Rectangle 7.png" class="d-block " style="width: 30%; height: 100%;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../icons/Rectangle 7.png" class="d-block " style="width: 30%; height: 100%;" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>







  <div class="best">
    <hr>
    <p>بهترین ها</p>
    <hr>
  </div>
  <div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel">
      <img src="images/img-1.jpg" alt="img" draggable="false">
      <img src="images/img-2.jpg" alt="img" draggable="false">
      <img src="images/img-3.jpg" alt="img" draggable="false">
      <img src="images/img-4.jpg" alt="img" draggable="false">
      <img src="images/img-5.jpg" alt="img" draggable="false">
      <img src="images/img-6.jpg" alt="img" draggable="false">
      <img src="images/img-7.jpg" alt="img" draggable="false">
      <img src="images/img-8.jpg" alt="img" draggable="false">
      <img src="images/img-9.jpg" alt="img" draggable="false">
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <div class="best">
    <hr>
    <p>بهترین ها</p>
    <hr>
  </div>
  <div class="wrapper2">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel2">
      <img src="images/img-1.jpg" alt="img" draggable="false">
      <img src="images/img-2.jpg" alt="img" draggable="false">
      <img src="images/img-3.jpg" alt="img" draggable="false">
      <img src="images/img-4.jpg" alt="img" draggable="false">
      <img src="images/img-5.jpg" alt="img" draggable="false">
      <img src="images/img-6.jpg" alt="img" draggable="false">
      <img src="images/img-7.jpg" alt="img" draggable="false">
      <img src="images/img-8.jpg" alt="img" draggable="false">
      <img src="images/img-9.jpg" alt="img" draggable="false">
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <div class="best">
    <hr>
    <p>بهترین ها</p>
    <hr>
  </div>
  <div class="wrapper3">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel3">
      <img src="images/img-1.jpg" alt="img" draggable="false">
      <img src="images/img-2.jpg" alt="img" draggable="false">
      <img src="images/img-3.jpg" alt="img" draggable="false">
      <img src="images/img-4.jpg" alt="img" draggable="false">
      <img src="images/img-5.jpg" alt="img" draggable="false">
      <img src="images/img-6.jpg" alt="img" draggable="false">
      <img src="images/img-7.jpg" alt="img" draggable="false">
      <img src="images/img-8.jpg" alt="img" draggable="false">
      <img src="images/img-9.jpg" alt="img" draggable="false">
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>


  </main>
  <script src="js/js.js" defer></script>
</body>


</html>