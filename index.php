<?php


require 'koneksi.php';

$posts = getdata("SELECT * FROM artikels limit 6");

// var_dump($posts);

?>









<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="images/navbar.png " rel="icon" />
    <title>SMA HSI-IDN</title>
    <style>
      * {
        font-family: Poppins;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        background-color: white;
      }
    </style>
  </head>
  <body>
    <!-- navbar nyoba -->
    <nav class="bg-[#1a2025] p-4 fixed z-50 w-full">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="" class="text-white text-2xl font-bold">HSIIDN</a>

        <!-- Hamburger Icon (Mobile) -->
        <button
          id="menu-btn"
          class="text-white block md:hidden focus:outline-none"
        >
          <svg
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16m-7 6h7"
            />
          </svg>
        </button>

        <!-- Menu (hidden on mobile) -->
        <div id="menu" class="hidden md:flex space-x-4">
          <a href="#home" class="text-white hover:text-gray-200">Home</a>
          <a href="#patner" class="text-white hover:text-gray-200"
            >Companny Patner</a
          >
          <a href="#about" class="text-white hover:text-gray-200">About</a>
          <a href="#news" class="text-white hover:text-gray-200">News</a>
          <a href="#kata" class="text-white hover:text-gray-200">Quotes</a>
          <a href="#galeri" class="text-white hover:text-gray-200"
            >Our Gallery</a
          >
        </div>
      </div>

      <!-- Mobile Menu (shown when clicked on hamburger) -->
      <div
        id="mobile-menu"
        class="md:hidden flex flex-col space-y-4 mt-4 p-4 bg-[#1a2025]"
      >
        <a href="#home" class="text-white hover:text-gray-200">Home</a>
        <a href="#patner" class="text-white hover:text-gray-200"
          >Companny Patner</a
        >
        <a href="#about" class="text-white hover:text-gray-200">About</a>
        <a href="#news" class="text-white hover:text-gray-200">News</a>
        <a href="#kata" class="text-white hover:text-gray-200">Quotes</a>
        <a href="#galeri" class="text-white hover:text-gray-200">Our Gallery</a>
      </div>
    </nav>

    <div class="w-full h-16"></div>

    <section
      id="home"
      class="flex bg-[url('./images/heroo.png')] h-full w-full bg-center bg-cover bg-no-repeat relative"
    >
      <div
        class="w-full h-full bg-[#10171D] bg-opacity-70 md:bg-opacity-100 absolute z-2"
      ></div>
      <div
        class="container mx-auto gap-3 flex flex-col-reverse md:flex-row px-4 py-10 items-center md:justify-center z-10"
      >
        <div class="title h-full w-full gap-6 max-w-md md:pt-16">
          <button
            class="text-white text-[14px] bg-[#2a3641] rounded-full font-thin py-1 px-2 w-fit hidden md:flex items-center mb-3"
          >
            Haii Students 👨🏼‍🎓👩🏼‍🎓
          </button>

          <h1 class="text-4xl font-bold">
            Welcome to Website SMA TI-HSI IDN PURWOREJO
          </h1>
          <p class="py-6 font-light">
            Making someone a reliable programmer and having the ability to
            become a successful person will be.
          </p>
          <h2 class="pt-6 text-sm text-white font-light">Annoucement</h2>
          <p class="py-1 text-xs">
            We make a new Registration!!, for those who want to register for SMK
            Mangcoding can come directly to the Location
          </p>
        </div>
      </div>
      <div class="hero-image hidden md:block z-20">
        <img src="images/hero.png" alt="" class="w-full h-full" />
      </div>
    </section>

    <section id="patner" class="gap-2">
      <div class="pt-10">
        <h2
          class="text-lg md:text-[40px] pt-5 font-bold flex justify-center text-[#0E1422]"
        >
          Company Partner
        </h2>
      </div>
      <div
        class="container mx-auto gap-10 flex flex-col-reverse md:flex-row px-4 py-10 items-center md:justify-center"
      >
        <div class="hero-image">
          <img src="images/logo hsi.jpeg" alt="" class="w-full h-full" />
        </div>
        <div class="hero-image">
          <img src="images/idn logo.png" alt="" class="w-full h-full" />
        </div>
        <div class="hero-image">
          <img src="images/porjo logo.jpeg" alt="" class="w-full h-full" />
        </div>
      </div>
    </section>

    <section class="flex" id="about">
      <div
        class="container mt-10 mx-auto px-2 md:px-3 justify-around items-center gap-7 md:flex md:flex-row-reverse"
      >
        <div class="lg:w-[478px] lg:h-[295px]">
          <img src="images/sekolah.png" alt="" />
        </div>

        <div class="md:max-w-[354px]">
          <h2 class="text-lg md:text-[40px] pt-5 font-bold text-[#0E1422]">
            Tentang Kami
          </h2>
          <p class="text-xs md:text-md pt-2 md:mt-5 text-[#0E1422]">
            Video detail SMK Mangcoding Lorem ipsum dolor sit amet, consectetur
            adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing
            elit.
          </p>
        </div>
      </div>
    </section>
    <section class="flex mt-10">
      <div
        class="container mt-10 mx-auto px-2 md:px-3 justify-around items-center gap-7 md:flex"
      >
        <div class="lg:w-[478px] lg:h-[295px]">
          <img src="images/uwong.png" alt="" />
        </div>

        <div class="md:max-w-[354px]">
          <h2 class="text-lg md:text-[25px] pt-5 font-bold text-[#0E1422]">
            Headmaster's Message Mangcoding Vocational High School learn
          </h2>
          <p class="text-xs md:text-md pt-2 md:mt-5 text-[#0E1422]">
            “Let's praise and give thanks to Allah SWT. Who always with the
            nature of love and affection gives a lot of favors". elit.
          </p>
        </div>
      </div>
    </section>

    <section id="news" class="w-full">
   
      <div class="container mx-auto py-12 px-6">
        <div class="md:max-w-[354px] mb-5">
          <h2 class="text-lg md:text-[40px] pt-5 font-bold text-[#0E1422]">
            News
          </h2>
          <p class="text-xs md:text-md pt-2 md:mt-5 text-[#0E1422] mb-5">
            Berikut ini merupakan berita berita yang ada di SMA TI HSI-IDN
            PURWOREJO
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach($posts as $pots): ?>
          <!-- Card 1 -->
          <div class="relative rounded overflow-hidden shadow-lg bg-red-400">
            
            <img
              class="w-full h-64 object-cover hover:transform transition duration-500 hover:scale-110"
              src="images/satu (1).png"
              alt="Learning in House"
            />
            <div
              class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-60 p-4 text-white"
            >
              <a href="news1.html" class="hover:underline">
                <h2 class="text-lg font-bold"> <?= $pots["title"]?> </h2>
                
                <p class="text-sm mt-2 truncate">
                  <?= $pots["content"]?>
                </p>
                <div class="flex justify-between items-center mt-4 text-sm">
                  <span>20 Juni 2022</span>
                  <span>Arsail12</span>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach;?>


          <!-- Card 2 -->
          <!-- <div class="relative rounded overflow-hidden shadow-lg">
            <img
              class="w-full h-64 object-cover transform transition duration-500 hover:scale-110"
              src="images/satu (2).png"
              alt="Being An Important Person For People"
            />
            <div
              class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-60 p-4 text-white"
            >
              <a href="news2.html" class="hover:underline">
                <h2 class="text-lg font-bold">
                  Being An Important Person For People
                </h2>
                <p class="text-sm mt-2">
                  Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem
                  belajar dirumah online.
                </p>
                <div class="flex justify-between items-center mt-4 text-sm">
                  <span>20 Juni 2022</span>
                  <span>Arsail12</span>
                </div>
              </a>
            </div>
          </div> -->

          <!-- Card 3 -->
          <!-- <div class="relative rounded overflow-hidden shadow-lg">
            <img
              class="w-full h-64 object-cover transform transition duration-500 hover:scale-110"
              src="images/satu (3).png"
              alt="Study Group"
            />
            <div
              class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-60 p-4 text-white"
            >
              <a href="news3.html" class="hover:underline">
                <h2 class="text-lg font-bold">Study Group</h2>
                <p class="text-sm mt-2">
                  Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem
                  belajar dirumah online.
                </p>
                <div class="flex justify-between items-center mt-4 text-sm">
                  <span>20 Juni 2022</span>
                  <span>Purny Od.</span>
                </div>
              </a>
            </div>
          </div> -->

          <!-- Card 4 -->
          <!-- <div class="relative rounded overflow-hidden shadow-lg">
            <img
              class="w-full h-64 object-cover transform transition duration-500 hover:scale-110"
              src="images/satu (4).png"
              alt="Study in Class"
            />
            <div
              class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-60 p-4 text-white"
            >
              <a href="news4.html" class="hover:underline">
                <h2 class="text-lg font-bold">Study in Class</h2>
                <p class="text-sm mt-2">
                  Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem
                  belajar dirumah online.
                </p>
                <div class="flex justify-between items-center mt-4 text-sm">
                  <span>20 Juni 2022</span>
                  <span>Arsail12</span>
                </div>
              </a>
            </div>
          </div> -->

          <!-- Card 5 -->
          <!-- <div class="relative rounded overflow-hidden shadow-lg">
            <img
              class="w-full h-64 object-cover transform transition duration-500 hover:scale-110"
              src="images/satu (5).png"
              alt="Study in House"
            />
            <div
              class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-60 p-4 text-white"
            >
              <a href="news5.html" class="hover:underline">
                <h2 class="text-lg font-bold">Study in House</h2>
                <p class="text-sm mt-2">
                  Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem
                  belajar dirumah online.
                </p>
                <div class="flex justify-between items-center mt-4 text-sm">
                  <span>20 Juni 2022</span>
                  <span>Admin12</span>
                </div>
              </a>
            </div>
          </div> -->

          <!-- Card 6 -->
          <!-- <div class="relative rounded overflow-hidden shadow-lg">
            <img
              class="w-full h-64 object-cover transform transition duration-500 hover:scale-110"
              src="images/satu (6).png"
              alt="Study With my Friend"
            />
            <div
              class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-60 p-4 text-white"
            >
              <a href="news6.html" class="hover:underline">
                <h2 class="text-lg font-bold">Study With my Friend</h2>
                <p class="text-sm mt-2">
                  Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem
                  belajar dirumah online.
                </p>
                <div class="flex justify-between items-center mt-4 text-sm">
                  <span>20 Juni 2022</span>
                  <span>Admin12</span>
                </div>
              </a>
            </div>
          </div> -->
        </div>

        <!-- Button -->
        <div class="flex justify-center mt-8">
          <button
            class="bg-[#2a3641] text-white px-4 py-2 rounded hover:bg-green-700 transition"
          >
            See more
          </button>
        </div>
      </div>
    </section>

    <section id="kata" class="flex mt-5 md:flex-col justify-center">
      <div
        class="container mt-5 mx-auto px-2 md:px-3 justify-around items-center gap-7 md:flex md:flex-row-reverse"
      >
        <div class="flex justify-center">
          <img src="images/kakek.png" alt="" />
        </div>

        <div class="md:max-w-[354px]">
          <h2
            class="text-lg md:text-[30px] pt-5 font-bold text-center text-[#0E1422]"
          >
            “The only way to do great work is LOVE what you do”
          </h2>
          <p class="text-xs md:text-md pt-2 md:mt-5 text-[#0E1422]">
            STEVE JOBS
          </p>
          <p class="text-xs md:text-md pt-2 md:mt-5 text-[#0E1422]">
            Former CEO of Apple Inc.
          </p>
        </div>
      </div>
    </section>

    <section id="galeri" class="px-10 pt-8">
      <h2
        class="text-lg md:text-[30px] pt-8 text-center px-10 font-bold text-[#0E1422] mb-5"
      >
        Gallery
      </h2>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
          <img
            class="h-auto max-w-full rounded-lg hover:scale-90 transition-all duration-500"
            src="images/satu (1).png"
            alt=""
          />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg hover:scale-90 transition-all duration-500"
            src="images/satu (2).png"
            alt=""
          />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg hover:scale-90 transition-all duration-500"
            src="images/satu (3).png"
            alt=""
          />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg hover:scale-90 transition-all duration-500"
            src="images/satu (4).png"
            alt=""
          />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg hover:scale-90 transition-all duration-500"
            src="images/satu (5).png"
            alt=""
          />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg hover:scale-90 transition-all duration-500"
            src="images/satu (6).png"
            alt=""
          />
        </div>
      </div>
    </section>
    <div class="mx-auto flex justify-center py-5">
      <button class="text-center">
        <a class="btn bg-[#10171D] hover:bg-[#1d2730]">See more</a>
      </button>
    </div>

    <footer class="bg-white dark:bg-gray-900 mt-7">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
              <img
                src="images/navbar.png"
                class="h-8 me-3"
                alt="HSI-IDN logo"
              />
              <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                >HSIIDN</span
              >
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Navigation
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-2">
                  <a>Home</a>
                </li>
                <li class="mb-2">
                  <a>Info</a>
                </li>
                <li class="mb-2">
                  <a>News</a>
                </li>
                <li class="mb-2">
                  <a>About Us</a>
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Follow us
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a
                    href=" https://www.instagram.com/smaithsiidn/"
                    target="_blank"
                    class=""
                    >Instagram</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/@smaithsiidnpurworejo"
                    target="_blank"
                    class=""
                    >Youtube</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Address
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="#" class="">Krajan, Baledono</a>
                </li>
                <li>
                  <a href="#" class="">Purworejo</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © 2023
            <a href="" class="">HSIIDN™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a
              href="https://www.youtube.com/@smaithsiidnpurworejo"
              target="_blank"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
            >
              <svg
                class="w-4 h-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 256 256"
              >
                <path
                  d="M164.44,121.34l-48-32A8,8,0,0,0,104,96v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,145.05V111l25.58,17ZM234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-15.49,113a8,8,0,0,1-4.77,5.49c-31.65,12.22-85.48,12-86,12H128c-.54,0-54.33.2-86-12a8,8,0,0,1-4.77-5.49C34.8,173.39,32,156.57,32,128s2.8-45.39,5.16-54.47A8,8,0,0,1,41.93,68c30.52-11.79,81.66-12,85.85-12h.27c.54,0,54.38-.18,86,12a8,8,0,0,1,4.77,5.49C221.2,82.61,224,99.43,224,128S221.2,173.39,218.84,182.47Z"
                ></path>
              </svg>
              <span class="sr-only">Youtube</span>
            </a>
            <a
              href="https://www.instagram.com/smaithsiidn/"
              target="_blank"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4"
                fill="currentColor"
                viewBox="0 0 256 256"
              >
                <path
                  d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                ></path>
              </svg>
              <span class="sr-only">Instagram</span>
            </a>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    // Toggle mobile menu
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
</html>
