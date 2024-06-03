<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style/css/outputshop.css" />
    <title>Document</title>
    <style>
      #shop {
        transition: margin-left 1s ease;
        border-radius: 10px;
      }

      #preview {
        transition: width 1s ease;
        border-radius: 10px 0px 0px 10px;
      }
      #one {
        transition: opacity 0.5s ease;
      }
      #linkPage {
        transition: opacity 0.5s ease;
      }
      #closeprev {
        transition: opacity 0.5s ease;
      }
    </style>
  </head>
  <body>
    <?php include_once './header.php'?>
      <div class="relative">
        <img src="svgs/menu.svg" id="menu" alt="Menu" class="w-10 mr-5" />
        <div
          id="menu-bar"
          class="absolute top-12 -right-3 flex flex-col align-middle gap-2 h-52 w-[160px] bg-white m-3 drop-shadow-md rounded-3xl transition-transform duration-1500 translate-x-96 z-10"
        >
          <ul class="flex flex-col list-none gap-3">
            <li><a href="#" class="text-xl">پارچه</a></li>
            <hr />
            <li><a href="#" class="text-xl">خیاط</a></li>
            <hr />
            <li><a href="#" class="text-xl">درباره ما</a></li>
            <hr />
          </ul>
        </div>
      </div>
      <div>
        <p class="font-bold text-3xl">logo</p>
      </div>
      <div class="relative">
        <img src="svgs/user.svg" id="profileico" alt="User" class="w-10 ml-8" />
        <div
          id="profile"
          class="bg-white drop-shadow-md rounded-3xl h-40 w-32 transition-opacity opacity-0 duration-500 absolute top-16 left-2"
        >
          <ul class="flex flex-col gap-3 p-3 list-none mr-7">
            <li><a href="#">ورود</a></li>
            <li><a href="#">پیام ها</a></li>
            <li><a href="#">پروفایل</a></li>
          </ul>
        </div>
      </div>
    </header>
    <div
      class="bg-white h-20 w-screen pt-32 flex flex-row border-4 justify-center gap-20"
    >
      <a href="#" class="text-xl">مردانه</a>
      <a href="#" class="text-xl">زنانه</a>
      <a href="#" class="text-xl">بچگانه</a>
      <a href="#" class="text-xl">برندها</a>
    </div>
    <div class="flex justify-between">
      <div
        class="h-screen bg-glass flex flex-col gap-10"
        id="preview"
        style="width: 0px"
      >
        <div class="flex mt-5 justify-end gap-2 ml-5">
          <img
            id="closeprev"
            class="w-5 opacity-0"
            src="svgs/close.svg"
            alt=""
          />
          <img id="linkPage" class="w-5 opacity-0" src="svgs/link.svg" alt="" />
        </div>
        <div id="one" class="opacity-0 ml-6 flex flex-col items-center">
          <img class="w-60 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
            <p>this is a random text as description</p>
          </div>
        </div>
      </div>
      <div
        class="grid grid-cols-3 gap-16 justify-items-center ml-48 p-10 pt-32 bg-glass drop-shadow-sm"
        id="shop"
      >
        <div id="one">
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div id="two">
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div id="three">
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
        <div>
          <img class="w-52 h-60" src="images/img-1.jpg" alt="" />
          <div class="mr-3 flex flex-col">
            <p class="font-bold">تیشرت</p>
            <p class="font-bold">قیمت :10000$</p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/shop.js"></script>
  </body>
</html>
