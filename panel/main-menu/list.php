<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <a class="btn btn-outline-dark" href="dashbord.php?page=add_category">افزودن دسته جدید</a>
                <span>  تعداد کل :
                <?php
                include_once '../functions/main-menu.php';
                $count=count(count_menu());
                echo $count;

                ?>
                </span>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>ترتیب</th>
                    <th>فعال/غیرفعال</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $parent=list_menu();
                foreach ($parent as $cat): ?>
                <tr>
                    <td><a class="title" href="#"> <?php echo $cat->title; ?></a></td>
                    <td><?php echo $cat->sort; ?></td>
                    <td>
                        <div class="custom-control custom-switch">
                            <input name="info[status]" type="checkbox" class="custom-control-input" id="<?php  echo $cat->id; ?>" disabled
                            <?php if ($cat->status=='on'){echo " checked ";} ?>
                            >
                            <label class="custom-control-label" for="<?php  echo $cat->id; ?>"></label>
                        </div>
                    </td>
                    <td><a href="dashbord.php?page=edit_cat&id=<?php echo $cat->id; ?>" class="btn btn-primary btn-xs">
                            <svg class="bi bi-pencil" width="1.2em" height="1.2em"
                                 viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"
                                      clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                      d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </td>
                    <td><a href="dashbord.php?page=delete_cat&id=<?php echo $cat->id; ?>" class="btn btn-danger btn-xs">
                            <svg class="bi bi-trash" width="1.2em" height="1.2em"
                                 viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path>
                                <path fill-rule="evenodd"
                                      d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </td>
                </tr>
<!--                --><?php
//                    $subcategory=list_subcategory($cat->id);
//                    foreach ($subcategory as $subcat) : ?>
<!---->
<!--                        <tr>-->
<!--                            <td>-->
<!--                                <svg class="bi bi-arrow-return-left" width="1.7m" height="1.7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"></path>-->
<!--                                    <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>-->
<!--                                </svg>-->
<!--                                <a class="title" href="#"> --><?php //echo $subcat->title; ?><!--</a></td>-->
<!--                            <td>--><?php //echo $subcat->sort; ?><!--</td>-->
<!--                            <td>-->
<!--                                <div class="custom-control custom-switch">-->
<!--                                    <input name="info[status]" type="checkbox" class="custom-control-input" id="--><?php // echo $cat->id; ?><!--" disabled-->
<!--                                        --><?php //if ($subcat->status=='on'){echo " checked ";} ?>
<!--                                    >-->
<!--                                    <label class="custom-control-label" for="--><?php // echo $subcat->id; ?><!--"></label>-->
<!--                                </div>-->
<!--                            </td>-->
<!--                            <td><a href="dashbord.php?page=edit_cat&id=--><?php //echo $subcat->id; ?><!--" class="btn btn-primary btn-xs">-->
<!--                                    <svg class="bi bi-pencil" width="1.2em" height="1.2em"-->
<!--                                         viewBox="0 0 16 16" fill="currentColor"-->
<!--                                         xmlns="http://www.w3.org/2000/svg">-->
<!--                                        <path fill-rule="evenodd"-->
<!--                                              d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"-->
<!--                                              clip-rule="evenodd"></path>-->
<!--                                        <path fill-rule="evenodd"-->
<!--                                              d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z"-->
<!--                                              clip-rule="evenodd"></path>-->
<!--                                    </svg>-->
<!--                                </a>-->
<!--                            </td>-->
<!--                            <td><a href="dashbord.php?page=delete_cat&id=--><?php //echo $subcat->id; ?><!--" class="btn btn-danger btn-xs">-->
<!--                                    <svg class="bi bi-trash" width="1.2em" height="1.2em"-->
<!--                                         viewBox="0 0 16 16" fill="currentColor"-->
<!--                                         xmlns="http://www.w3.org/2000/svg">-->
<!--                                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path>-->
<!--                                        <path fill-rule="evenodd"-->
<!--                                              d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"-->
<!--                                              clip-rule="evenodd"></path>-->
<!--                                    </svg>-->
<!--                                </a>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                    --><?php //endforeach; ?>
                <?php endforeach; ?>


                </tbody>

            </table>
        </section>
    </div>
</div>