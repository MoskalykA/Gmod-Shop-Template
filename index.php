<?php
    require ('lib/steamauth.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gmod Shop</title>
    <meta charset=utf-8>
    <meta name=description content="Gmod Shop.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <?php if(!isset($_SESSION['steamid'])) { ?>
    <div class="h-screen w-screen flex bg-gray-200">

    <aside
        class="flex flex-col items-center bg-white text-gray-700 shadow h-full">
        <div class="h-16 flex items-center w-full hover:bg-gray-200">
            <a class="h-6 w-6 mx-auto" href="https://page.cray-dev.com/gmod_shop_template/">
                <img
                    class="h-6 w-6 mx-auto"
                    src="https://page.cray-dev.com/gmod_shop_template/assets/cray-dev.png"
                    alt="logo" />
            </a>
        </div>

        <ul>
            <li class="hover:bg-gray-100">
                <a
                    href="https://page.cray-dev.com/gmod_shop_template/addons.php"
                    class="h-16 px-6 flex flex justify-center items-center w-full
                    focus:text-orange-500">
                    <svg
                        class="h-5 w-5"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path
                            d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0
                            2-1.61L23 6H6"></path>
                    </svg>

                </a>
            </li>
        </ul>

        <div class="mt-auto h-16 flex items-center w-full">
            <a
                class="h-16 w-10 mx-auto flex flex justify-center items-center
                w-full focus:text-orange-500 hover:bg-gray-200 focus:outline-none" href="?login">
                <svg
                    class="h-5 w-5 text-gray-700"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
            </a>
        </div>
    </aside>
    <?php } else { ?>
    <div class="h-screen w-screen flex bg-gray-200">

    <aside
        class="flex flex-col items-center bg-white text-gray-700 shadow h-full">
        <div class="h-16 flex items-center w-full hover:bg-gray-200">
            <a class="h-6 w-6 mx-auto" href="https://page.cray-dev.com/gmod_shop_template/">
                <img
                    class="h-6 w-6 mx-auto"
                    src="https://page.cray-dev.com/gmod_shop_template/assets/cray-dev.png"
                    alt="logo" />
            </a>
        </div>

        <ul>
            <li class="hover:bg-gray-100">
                <a
                    href="https://page.cray-dev.com/gmod_shop_template/addons.php"
                    class="h-16 px-6 flex flex justify-center items-center w-full
                    focus:text-orange-500">
                    <svg
                        class="h-5 w-5"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path
                            d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0
                            2-1.61L23 6H6"></path>
                    </svg>

                </a>
            </li>

            <li class="hover:bg-gray-100">
                <a
                    href="https://page.cray-dev.com/gmod_shop_template/settings.php"
                    class="h-16 px-6 flex flex justify-center items-center w-full
                    focus:text-orange-500">
                    <svg
                        class="h-5 w-5"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1
                            0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0
                            0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2
                            2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0
                            0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1
                            0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0
                            0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65
                            0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0
                            1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0
                            1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2
                            0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0
                            1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0
                            2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0
                            0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65
                            1.65 0 0 0-1.51 1z"></path>
                    </svg>
                </a>
            </li>

            <li class="hover:bg-gray-100">
                <a
                    href="https://page.cray-dev.com/gmod_shop_template/notifications.php"
                    class="h-16 px-6 flex flex justify-center items-center w-full
                    focus:text-orange-500">
                    <svg
                        class="h-5 w-5"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                </a>
            </li>

        </ul>

        <div class="mt-auto h-16 flex items-center w-full">
            <a
                class="h-16 w-10 mx-auto flex flex justify-center items-center
                w-full focus:text-orange-500 hover:bg-red-200 focus:outline-none" href="?logout">
                <svg
                    class="h-5 w-5 text-red-700"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>

            </a>
        </div>
    </aside>
    <?php } ?>
</div>
</body>
</html>