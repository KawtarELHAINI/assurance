<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title></title>
</head>
<body >
  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full w-[200px] px-3 py-4 overflow-y-auto bg-green-500 dark:bg-green-200">
      <a href="#" class="flex flex-col items-center ps-3.5 mb-5">
      <img src="<?php echo URL_ROOT ?>/photos/Screenshot 2023-12-26 164347.png" class="h-12 me-3 sm:h-12" alt="pic" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
          
        </span>
      </a>
      

    

      <ul class="space-y-2 font-medium">
        <br>

        <li>
          <a href="<?php echo URL_ROOT ?>/pages/assurence"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">


            <span class="flex-1 ms-3 whitespace-nowrap">Assurences</span>
          </a>
        </li>

        <li>
          <a href="<?php echo URL_ROOT ?>/pages/clients"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
           

            <span class="flex-1 ms-3 whitespace-nowrap">Clients</span>

          </a>
        </li>

        <li>
          <a href="<?php echo URL_ROOT ?>/pages/article"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

            <span class="flex-1 ms-3 whitespace-nowrap">Articles</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URL_ROOT ?>/pages/claim"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">


            <span class="flex-1 ms-3 whitespace-nowrap">Claims</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URL_ROOT ?>/pages/prime"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

            <span class="flex-1 ms-3 whitespace-nowrap">Primes</span>
          </a>
        </li>


        <br><br><br><br><br><br><br>

        <li>
          <a href="index.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">



            <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  </body>
  </html>