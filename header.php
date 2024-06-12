<header class="flex">
    <div class="relative">
        <img src="svgs/menu.svg" id="menu" alt="" class="w-10 mr-5"/>
        <div id="menu-bar"
             class="absolute top-12 -right-3 flex flex-row gap-2 h-80 w-[340px] bg-white m-3 drop-shadow-md rounded-3xl transition-transform duration-1500 translate-x-96 z-10">
            <div class="w-40 h-40 pt-3 pr-3">
                <ul class="flex flex-col list-none">

                    <?php include_once 'functions/main-menu.php';
                    $listmenu = show_menu();
                    foreach ($listmenu as $menu):

                        $listsubmenu = show_submenu($menu->id);
                        if (!$listsubmenu):
                            ?>
                            <li><a href=""><?php echo $menu->title; ?></a></li>
                            <hr/>
                        <?php endif;
                    endforeach;
                    ?>
                </ul>
            </div>


            <div class="w-56 h-40 pt-3">
                <?php $listmenu = show_menu();
                foreach ($listmenu as $menu):

                    $listsubmenu = show_submenu($menu->id);
                    if ($listsubmenu ):
                        ?>
                        <p class="inline mr-10"><?php echo $menu->title?></p>
                    <?php endif;
                    foreach ($listsubmenu as $submenu) :
                        ?>
                        <img src="svgs/down.svg" class="inline w-5" id="cateico"/>
                        <ul id="category" class="flex flex-col list-none mt-[21px]">
                            <li><a href="shop.php"><?php echo $submenu->title; ?></a></li>
                            <hr class="w-24"/>
                        </ul>
                    <?php endforeach; ?>
                <?php endforeach; ?>

            </div>


        </div>
    </div>
    <div>
        <p class="font-bold text-3xl">logo</p>
    </div>

    <div class="relative">
        <img src="svgs/user.svg" id="profileico" alt="" class="w-10 ml-8"/>

        <div id="profile"
             class="bg-white drop-shadow-sm rounded-3xl h-40 w-32 transition-opacity duration-500 absolute top-16 left-2">
            <ul class="flex flex-col gap-3 p-3 list-none mr-7">

                <?php session_start();
                if (!isset($_SESSION['login'])): ?>
                    <li><a href="./login.php">ورود</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['admin'])): ?>
                    <li><a href="./panel/dashbord.php">پنل ادمین</a></li>
                <?php endif; ?>

                <li><a href="">پروفایل</a></li>

                <?php if (!isset($_SESSION['admin'])): ?>
                    <li><a href="#">پیغام ها</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['login'])): ?>
                    <li><a href="functions/logout.php">خروج</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</header>
