<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/vue@3"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body>
        <div id='app' class='flex'>
            <nav class='sticky top-0 bg-indigo-600 w-48 h-screen p-4'>
                <a href='' class='flex flex-col border-1 border-b border-indigo-200 p-4'>
                    <img src='assets/admin_photo.png' class='bg-yellow-400 m-auto w-12 h-12 rounded-full border-2 border-indigo-200'>
                    <span href='' class=' m-auto text-indigo-200 text-semibold text-xs'>admin</span>
                </a>

                <ul class='flex flex-col gap-2 py-4'>
                    <a href='dashboard.php'>
                        <li class='flex px-4 n py-1 gap-2 bg-white rounded hover:cursor-pointer'>
                            <svg class='fill-gray-800 w-5 h-5' viewBox="0 0 384 384"><path d="M384,24.75c-.94,7.53-1.7,15.09-2.84,22.59-5.23,34.59-17.21,66.86-34.16,97.32-15.79,28.38-35.44,53.8-59.52,75.68-2.22,2.02-2.24,4.23-2.37,6.71-2.64,51.24-21.64,95.45-57.18,132.46-1.85,1.92-4.7,3.46-7.31,3.94-4.17,.77-7.68-2.92-8.37-7.74-2.82-19.77-5.66-39.55-8.62-60.24-2.58,2.29-4.74,4.21-6.91,6.13-5.39,4.78-9.07,4.68-14.22-.47-33.24-33.22-66.47-66.46-99.7-99.7-5.13-5.13-5.2-8.79-.36-14.2,1.88-2.1,3.75-4.22,6.08-6.85-9.74-1.42-18.7-2.74-27.66-4.02-11-1.57-22-3.12-33-4.65-3.51-.49-6.23-2.11-7.35-5.54-1.16-3.56,.09-6.5,2.75-9.11,23.35-22.87,50.6-39.25,81.76-49.09,17.36-5.48,35.13-8.58,53.35-9.23,1.75-.06,3.91-1.02,5.1-2.3C204.38,52.66,253.94,23.45,311.73,8.06c14.87-3.96,30.01-6.47,45.39-7.45,.97-.06,1.92-.4,2.88-.61h18c2,2,4,4,6,6V24.75Zm-109.94,125.14c21.99,.04,40.11-18.07,40.08-40.07-.03-21.88-17.89-39.82-39.78-39.97-21.99-.16-40.16,17.84-40.25,39.87-.1,21.99,17.95,40.13,39.96,40.17Z"/><path class="b" d="M0,373.5c3.24-9.66,6.4-19.35,9.74-28.98,7.48-21.57,15.22-43.01,26.06-63.23,10.6-19.78,33.72-29.1,54.87-23.78,21.71,5.46,37.24,24.76,37.24,47.31,0,18.75-7.96,33.49-24.58,42.95-16.11,9.17-33.36,15.79-50.78,21.9-13.06,4.58-26.26,8.75-39.4,13.12-.91,.3-1.76,.8-2.64,1.21H6c-2-2-4-4-6-6,0-1.5,0-3,0-4.5Z"/></svg>
                            <span class='text-gray-800'>Dashboard</span>
                        </li>
                    </a>

                    <li @click='menu.pages = !menu.pages' class='flex px-4 py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer'>
                        <img class='w-5 h-5' src='assets/pages.svg'>
                        <span class='text-indigo-100'>Pages</span>
                        <img v-if='menu.pages' class='h-6 py-2 ml-auto rotate-180' src='assets/arrow.svg'>
                        <img v-else class='h-6 py-2 ml-auto' src='assets/arrow.svg'>
                    </li>

                    <li v-if='menu.pages'>
                        <ul class='flex flex-col pl-8'>
                            <a href='index.php'><li class='flex px-4 n py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer text-white'>Home</li></a>
                            <a href='about.php'><li class='flex px-4 n py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer text-white'>About</li></a>
                            <a href='contact.php'><li class='flex px-4 n py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer text-white'>Contact</li></a>
                        </ul>
                    </li>

                    <a href='users.admin.php'>
                        <li class='flex px-4 py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer'>
                            <img class='w-5 h-5' src='assets/users.svg'>
                            <span class='text-indigo-100'>Users</span>
                        </li>
                    </a>

                    <a href='articles.admin.php'>
                        <li class='flex px-4 py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer'>
                            <img class='w-5 h-5' src='assets/articles.svg'>
                            <span class='text-indigo-100'>Articles</span>
                        </li>
                    </a>

                    <a href='comments.admin.php'>
                        <li class='flex px-4 py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer'>
                            <img class='w-5 h-5' src='assets/comments.svg'>
                            <span class='text-indigo-100'>Comments</span>
                        </li>
                    </a>

                    <a href='categories.admin.php'>
                        <li class='flex px-4 py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer'>
                            <img class='w-5 h-5' src='assets/categories.svg'>
                            <span class='text-indigo-100'>Categories</span>
                        </li>
                    </a>

                    <a href='inbox.admin.php'>
                        <li class='flex px-4 py-1 gap-2 rounded hover:bg-indigo-500 hover:cursor-pointer'>
                            <img class='w-5 h-5' src='assets/inbox.svg'>
                            <span class='text-indigo-100'>Inbox</span>
                        </li>
                    </a>
                </ul>
            </nav>