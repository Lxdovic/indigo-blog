<?php include('views/layout/nav.inc.php'); ?>

                <div class='flex w-screen overflow-hidden bg-black relative'>
                    <img class='w-screen h-80 blur brightness-50 object-cover' src='assets/headers/header-1.jpg'>
                    <h1 class='px-20 py-10 w-full absolute text-center text-[3rem] text-white uppercase font-bold drop-shadow-xl'>Indigo Blog</h1>
                </div>

                <div class='flex flex-col w-screen p-16 lg:w-[50rem] m-auto'>
                    <?php foreach ($data as $onedata){ ?>

                        <div class="py-4 flex flex-col gap-4">
                            <a href="article.php?article=<?= $onedata["post_ID"] ?>">
                                <h2 class="text-2xl uppercase font-semibold"><?= $onedata['post_title'] ?></h2>
                            </a>
                            <img src=" <?= $onedata["post_img_url"] ?> " alt="" width="100%" >


                            <p class="text-gray-700">
                                <?= $onedata["post_content"] ?>
                            
                            </p>
                            <p class="text-gray-700 text-xs">
                                Posted by
                                <a href="#"><?= $onedata["display_name"] ?></a>
                                <?= $onedata["post_date"] ?>
                                <br>
                                classé dans <b> <?= $onedata["cat_descr"] ?> </b>
                            </p>
                        </div>
                        <hr class="my-4" />

                    <?php } ?>

                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>

<?php include('views/layout/footer.inc.php'); ?>
