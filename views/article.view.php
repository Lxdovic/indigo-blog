<?php include('views/layout/nav.inc.php'); ?>

                <div class='flex w-screen overflow-hidden bg-black relative'>
                    <img class='w-screen h-80 blur brightness-50 object-cover' src='<?= $data["post_img_url"] ?>'>
                    <h1 class='px-20 py-10 w-full absolute text-center text-[2.2rem] text-white uppercase font-bold drop-shadow-xl'><?= $data["post_title"] ?></h1>
                </div>

                <div class='flex flex-col gap-4 w-screen p-16 lg:w-[50rem] m-auto'>
                    <h2 class='font-semibold'>Posté le <span class='text-indigo-500'><?= $data["post_date"] ?></span></h2>
                    <p class='text-justify'><?= $data["post_content"] ?></p>
                </div>
            </div>
        </div>

<?php include('views/layout/footer.inc.php'); ?>
