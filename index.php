<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="Style/css/style.css" />
  <link rel="stylesheet" href="/Style/scss/custom.css" />

  <link rel="stylesheet" href="Style/css/style.css" />
  <link rel="stylesheet" href="Style/scss/custom.css" />

  <link rel="stylesheet" href="Style/css/output.css" />
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>

<body>
  <header class="flex">
    <div class="relative">
      <img src="svgs/menu.svg" id="menu" alt="" class="w-10 mr-5" />
      <div id="menu-bar"
        class="absolute top-12 -right-3 flex flex-row gap-2 h-80 w-[340px] bg-white m-3 drop-shadow-md rounded-3xl transition-transform duration-1500 translate-x-96 z-10">
        <div class="w-40 h-40 pt-3 pr-3">
          <ul class="flex flex-col list-none">
            <li><a href="">پارچه</a></li>
            <hr />
            <li><a href="">خیاط</a></li>
            <hr />
            <li><a href="">درباره ما</a></li>
            <hr />
          </ul>
        </div>
        <div class="w-56 h-40 pt-3">
          <p class="inline mr-10">دسته بندی</p>
          <img src="svgs/down.svg" class="inline w-5" id="cateico" />
          <ul id="category" class="flex flex-col list-none mt-[21px]">
            <li><a href="shop.php">ست مجلسی</a></li>
            <hr class="w-24" />
            <li><a href="shop.php">ست خواب</a></li>
            <hr class="w-24" />
            <li><a href="shop.php">کیف</a></li>
            <hr class="w-24" />
            <li><a href="shop.php">کفش</a></li>
            <hr class="w-24" />
          </ul>
        </div>
      </div>
    </div>
    <div>
      <p class="font-bold text-3xl">logo</p>
    </div>

    <div class="relative">
      <img src="svgs/user.svg" id="profileico" alt="" class="w-10 ml-8" />

      <div id="profile"
        class="bg-white drop-shadow-sm rounded-3xl h-40 w-32 transition-opacity duration-500 absolute top-16 left-2">
        <ul class="flex flex-col gap-3 p-3 list-none mr-7">
          <li><a href="./login.php">ورود</a></li>
          <li><a href="">پیام ها</a></li>
          <li><a href="">پروفایل</a></li>
        </ul>
      </div>
    </div>
  </header>

  <section style="background-color: #eef5fa; height: 100vh">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
          class="active mb-0 bg-black" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"
          class="bg-black"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"
          class="bg-black"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active mt-5 ml-5">
          <img src="images/Rectangle 7.png" class="d-block" style="width: 25%; height: 100%" alt="..." />
        </div>
        <div class="carousel-item mt-5 ml-5">
          <img src="images/Rectangle 7.png" class="d-block" style="width: 25%; height: 100%" alt="..." />
        </div>
        <div class="carousel-item mt-5 ml-5">
          <img src="images/Rectangle 7.png" class="d-block" style="width: 25%; height: 100%" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev mt-52" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next mt-52" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <div class="best">
    <hr />
    <p>بهترین ها</p>
    <hr />
  </div>
  <div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left left"></i>
    <div class="carousel1">
      <img src="images/img-1.jpg" alt="img" draggable="false" />
      <img src="images/img-2.jpg" alt="img" draggable="false" />
      <img src="images/img-3.jpg" alt="img" draggable="false" />
      <img src="images/img-4.jpg" alt="img" draggable="false" />
      <img src="images/img-5.jpg" alt="img" draggable="false" />
      <img src="images/img-6.jpg" alt="img" draggable="false" />
      <img src="images/img-7.jpg" alt="img" draggable="false" />
      <img src="images/img-8.jpg" alt="img" draggable="false" />
      <img src="images/img-9.jpg" alt="img" draggable="false" />
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <div class="best">
    <hr />
    <p>بهترین ها</p>
    <hr />
  </div>
  <div class="wrapper2">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel2">
      <img src="images/img-1.jpg" alt="img" draggable="false" />
      <img src="images/img-2.jpg" alt="img" draggable="false" />
      <img src="images/img-3.jpg" alt="img" draggable="false" />
      <img src="images/img-4.jpg" alt="img" draggable="false" />
      <img src="images/img-5.jpg" alt="img" draggable="false" />
      <img src="images/img-6.jpg" alt="img" draggable="false" />
      <img src="images/img-7.jpg" alt="img" draggable="false" />
      <img src="images/img-8.jpg" alt="img" draggable="false" />
      <img src="images/img-9.jpg" alt="img" draggable="false" />
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <div class="best">
    <hr />
    <p>بهترین ها</p>
    <hr />
  </div>
  <div class="wrapper3">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel3">
      <img src="images/img-1.jpg" alt="img" draggable="false" />
      <img src="images/img-2.jpg" alt="img" draggable="false" />
      <img src="images/img-3.jpg" alt="img" draggable="false" />
      <img src="images/img-4.jpg" alt="img" draggable="false" />
      <img src="images/img-5.jpg" alt="img" draggable="false" />
      <img src="images/img-6.jpg" alt="img" draggable="false" />
      <img src="images/img-7.jpg" alt="img" draggable="false" />
      <img src="images/img-8.jpg" alt="img" draggable="false" />
      <img src="images/img-9.jpg" alt="img" draggable="false" />
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>

  <script src="js/js.js" defer></script>
</body>

</html>