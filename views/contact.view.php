<?php include('views/layout/nav.inc.php'); ?>

                <div class='p-20 flex flex-col gap-5'>
                    <h2 class='w-1/2 m-auto text-xl text-semibold uppercase'>Contact</h2>
            
                    <form action='contact.add.php' method='post' class='py-2 flex flex-col gap-2 w-1/2 m-auto border-2 rounded border-gray-200 px-4'>
                        <input id="name" name="name" class='w-1/2 h-10 outline-none border-b border-indigo-400' required type='text' placeholder='NAME'>
                        <input id="email" name="email" class='w-1/2 h-10 outline-none border-b border-indigo-400' required type='email' placeholder='EMAIL'>
                        <input id="phone" name="phone"class='w-1/2 h-10 outline-none border-b border-indigo-400' required type='tel' placeholder='PHONE'>
                        <textarea id="message" name="message" class='w-full h-40 outline-none border-b border-indigo-400 resize-none' required placeholder='MESSAGE'></textarea>
                        <input class='bg-indigo-500 text-white w-32 m-auto rounded p-2 hover:cursor-pointer hover:bg-indigo-200 hover:text-black' type='submit'>
                    </form>
                    
                    <?php include('views/layout/socials.inc.php'); ?>
                </div>
            </div>
        </div>

<?php include('views/layout/footer.inc.php'); ?>
