<?php include('views/layout/nav.inc.php'); ?>

                <div class='p-20 flex flex-col gap-5 bg-gray-200'>
                   <div>
                       <form action='register.add.php' method='post' class='flex rounded-xl overflow-hidden gap-4 bg-white w-2/3 m-auto'>
                            <img class='w-1/2 object-cover' src='assets/parrot_b.png'>     
                            
                            <div class='flex flex-col gap-2 w-1/2 p-10 '>
                                <h2 class='text-xl m-auto'>Login</h2>
                                <hr class='w-3/4 h-4 m-auto mt-4'>
                                <input id='login' name='login' class='w-full m-auto indent-4 rounded-full h-10 bg-white border border-gray-500' type='text' placeholder='LOGIN'>
                                <input id='password' name='password' class='w-full m-auto indent-4 rounded-full h-10 bg-white border border-gray-500' type='password' placeholder='PASSWORD'>
                                
                                <hr class='w-3/4 h-4 m-auto mt-4'>

                                <input class='bg-amber-500 h-10 rounded-full text-white hover:cursor-pointer' type='submit'>
                                <button class='bg-white-500 h-10 rounded-full border border-gray-500 hover:cursor-pointer' type='button'>Login With Google</button>
                                <button class='bg-indigo-500 h-10 rounded-full text-white hover:cursor-pointer' type='button'>Login With Facebook</button>
                           
                                <hr class='w-3/4 h-4 m-auto mt-4'>
                                <a href='' class='text-sm m-auto text-indigo-400'>Forgot password?</a>
                                <a href='register.php' class='text-sm m-auto text-indigo-400'>Not registered yet? Register</a>
                            </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>

<?php include('views/layout/footer.inc.php'); ?>
