<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/vue@3"></script>
    </head>

    <body>
        <div id='app' class='flex flex-col overflow-x-hidden'>
            <nav class='sticky z-10 top-0 left-0 bg-indigo-600 h-12 w-screen'>
                <ul class='flex w-screen justify-center md:justify-start'>
                    <a class='h-12 py-3 px-10 hover:bg-indigo-500 hover:cursor-pointer text-white' href='index.php'><li>Home</li></a>
                    <a class='h-12 py-3 px-10 hover:bg-indigo-500 hover:cursor-pointer text-white' href='about.php'><li>About</li></a>
                    <a class='h-12 py-3 px-10 hover:bg-indigo-500 hover:cursor-pointer text-white' href='contact.php'><li>Contact</li></a>
                    <a class='h-12 py-3 px-10 hover:bg-indigo-500 hover:cursor-pointer text-white ml-auto' href='login.php'><li>Login</li></a>
                    <a class='h-12 py-3 px-10 hover:bg-indigo-500 hover:cursor-pointer text-white' href='register.php'><li>Register</li></a>
                </ul>
            </nav>