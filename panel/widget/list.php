<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <a class="btn btn-outline-dark" href="dashbord.php?page=add_category">افزودن دسته جدید</a>
                <span>  تعداد کل :
                <?php
                include_once '../functions/f-widget.php';
                $count= count(list_widget());
                echo $count;
                ?>
                </span>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $list_widget=list_widget();
                foreach ($list_widget as $widget): ?>
                <tr>
                    <td><a class="title" href="#"> <?php echo $widget->title; ?></a></td>

                    <td><a href="dashbord.php?page=edit_widget&id=<?php echo $widget->id; ?>" class="btn btn-primary btn-xs">
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
                    <td><a href="dashbord.php?page=delete_widget&id=<?php echo $widget->id; ?>" class="btn btn-danger btn-xs">
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

                <?php endforeach; ?>


                </tbody>

            </table>
        </section>
    </div>
</div>