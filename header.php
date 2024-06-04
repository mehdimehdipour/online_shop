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
                <?php session_start(); if (isset($_SESSION['login'])): ?>
                <li><a href="functions/logout.php">خروج</a></li>
                <?php else: ?>
                <li><a href="./login.php">ورود</a></li>
                <?php endif; ?>
                <li><a href="">پیام ها</a></li>
                <li><a href="">پروفایل</a></li>
            </ul>
        </div>
    </div>
</header>
