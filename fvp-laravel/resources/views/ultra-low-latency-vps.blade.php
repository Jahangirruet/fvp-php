<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ultra Low latency vps</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Quicksand:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body
    class="font-quicksand font-normal bg-[url(../images/homepage-background.png)] bg-cover bg-no-repeat"
  >
    <div class="py-3 sm:py-4 bg-gradient-to-r from-primary to-secondary px-4">
      <div class="container mx-auto">
        <div
          class="sm:gap-3 flex flex-wrap gap-1.5 justify-between items-center"
        >
          <a
            href="#"
            class="hidden md:flex gap-1.5 sm:gap-2 text-white items-center text-sm sm:text-base lg:text-lg"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
              />
            </svg>
            <span>Email: support@fxvps.pro</span>
          </a>
          <ul class="sm:gap-3 flex gap-1.5 flex-wrap md:gap-6 items-center">
            <li>
              <a
                href="/blog"
                class="flex gap-1.5 sm:gap-2 text-white items-center text-sm sm:text-base lg:text-lg"
              >
                <img src="./images/blogs.svg" alt="blogs.svg" />
                <span>Blogs </span>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex gap-1.5 sm:gap-2 text-white items-center text-sm sm:text-base lg:text-lg"
              >
                <img src="./images/cart.svg" alt="cart.svg" />
                <span>View Cart </span>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex gap-1.5 sm:gap-2 text-white items-center text-sm sm:text-base lg:text-lg"
              >
                <img src="./images/lang.svg" alt="lang.svg" />
                <span>Choose Language </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <header
      class="navigation header relative z-30 bg-transparent top-0 transition-all duration-200"
    >
      <div class="px-4">
        <div class="mx-auto container">
          <div class="relative flex items-center justify-between gap-5 py-4">
            <a href="/" classs="relative shrink-0">
              <figure>
                <img class="w-32" src="./images/logo.svg" alt="logo.svg" />
              </figure>
            </a>
            <nav
              class="ease fixed -right-[999px] top-0 flex h-full w-72 flex-col justify-start gap-5 bg-white px-10 pt-20 transition-all duration-300 xl:static xl:w-full xl:items-center xl:justify-center xl:bg-transparent xl:px-0 xl:pt-0"
              id="navbar"
            >
              <button
                type="button"
                id="close"
                class="xl:hidden w-8 h-8 absolute top-0 -left-7 bg-white p-1"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
              <ul
                class="flex flex-col gap-8 xl:flex-row xl:items-center xl:gap-5 2xl:gap-10"
              >
                <li>
                  <a href="/pricing" class="font-bold text-base xl:text-xl text-black"
                    >VPS PLANS
                  </a>
                </li>
                <li>
                  <a href="/ultra-low-latency-vps" class="font-bold text-base xl:text-xl text-black"
                    >BROKER LATENCY</a
                  >
                </li>
                <li>
                  <a href="/pricing" class="font-bold text-base xl:text-xl text-black"
                    >EXCL VPS</a
                  >
                </li>
                <li>
                  <a href="/dedicated-server" class="font-bold text-base xl:text-xl text-black"
                    >DEDICATED SERVER</a
                  >
                </li>
                <li>
                  <a href="/affiliate" class="font-bold text-base xl:text-xl text-black"
                    >AFFILIATE</a
                  >
                </li>
                <li>
                  <a href="/free-vps" class="font-bold text-base xl:text-xl text-black"
                    >FREE VPS</a
                  >
                </li>
                <li class="xl:hidden flex">
                  <a
                    href="#"
                    class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                  >
                    <span
                      class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1 px-6 sm:py-2.5 transition-all group-hover:bg-transparent sm:px-10"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:stroke-white"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                        />
                      </svg>
                      <span class="group-hover:text-white">Login</span>
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
            <div class="shrink-0">
              <ul class="flex gap-3 items-center justify-end">
                <li class="xl:flex hidden">
                  <a
                    href="#"
                    class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                  >
                    <span
                      class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1 px-6 sm:py-2.5 transition-all group-hover:bg-transparent sm:px-10"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:stroke-white"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                        />
                      </svg>
                      <span class="group-hover:text-white">Login</span>
                    </span>
                  </a>
                </li>
                <li class="shrink-0 xl:hidden">
                  <button
                    type="button"
                    id="burger"
                    class="border-0 bg-transparent"
                  >
                    <svg
                      class="stroke-primary"
                      width="26"
                      height="22"
                      viewBox="0 0 18 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M1 1H17M1 7H17M1 13H17"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div
          class="mobile-overlay fixed left-0 top-0 right-0 bottom-0 z-50 hidden h-full w-full bg-black bg-opacity-30 transition-all duration-500 ease-in-out xl:hidden"
        ></div>
      </div>
    </header>
    <main>
      <section
        class="sm:px-4 pb-10 md:pb-20 lg:pb-32 pt-8 md:pt-20 overflow-x-clip"
      >
        <div class="container mx-auto space-y-12">
          <div
            class="px-4 py-6 sm:p-8 md:p-12 lg:p-16 sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 relative space-y-8 lg:space-y-14"
          >
            <div class="space-y-6 md:space-y-10">
              <div class="space-y-3">
                <h2 class="text-xl md:text-2xl font-bold">Free Forex VPS</h2>
                <p class="text-lg font-semibold text-primary">
                  Slippage can be 99% eliminated with our low latency
                  infrastructure.
                </p>
              </div>
              <table
                class="w-full rounded-[2rem] overflow-hidden border-collapse"
              >
                <thead>
                  <tr
                    class="bg-secondary bg-opacity-10 hidden lg:flex flex-col lg:flex-row"
                  >
                    <th
                      class="flex items-center justify-center lg:justify-start text-black font-bold lg:basis-[20%] py-3 lg:py-8 text-base lg:pl-8"
                    >
                      BROKER NAME
                    </th>
                    <th
                      class="flex items-center justify-center text-black font-bold lg:basis-[20%] py-3 lg:py-8 text-base lg:px-5 text-center"
                    >
                      NEWYORK (USA) <br />
                      LATENCY (MS)
                    </th>
                    <th
                      class="flex items-center justify-center text-black font-bold lg:basis-[20%] py-3 lg:py-8 text-base lg:px-5 text-center"
                    >
                      LONDON (UK) <br />
                      LATENCY (MS)
                    </th>
                    <th
                      class="flex items-center justify-center text-black font-bold lg:basis-[20%] py-3 lg:py-8 text-base lg:px-5 text-center"
                    >
                      AMSTERDAM LATENCY (MS)
                    </th>
                    <th
                      class="flex items-center justify-center text-black font-bold lg:basis-[20%] py-3 lg:py-8 text-base lg:pr-8 text-center"
                    >
                      ORDER SERVER
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      ActivTrades
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      73
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      1
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Admiral Markets
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      7
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Ads Securities
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      78
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      10
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      ATC Brokers
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      12
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      88
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      97
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      ActivTActivTradesrades
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      67
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      7
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      AxiTrader
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      76
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      82
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Citi FX Pro
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      78
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      76
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Currenex
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      67
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      71
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Dukascopy
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      88
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      8
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      15
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Exness
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      88
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      6
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      FBS
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      88
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      6
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      14
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Forex Club
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      6
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      86
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Forex.Com
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      67
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      13
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Fx Choice
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      18
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      14
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      FXCM
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      80
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      85
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      FXDD
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      12
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      FxNet
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      76
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      78
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      FxOpen
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      89
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Fx Optimax
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      78
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      7
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      FX Primus
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      GCI Financial
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      67
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      59
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Global Prime
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      70
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      70
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      IC Markets
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      76
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      79
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      IG
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Instaforex (EU)
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      52
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Instaforex (US)
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      13
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Interactive Brokers
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      11
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Invast
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      72
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      11
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      IronFX
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      12
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      LiteForex
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      7
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      13
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      LMAX
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Markets.com
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      7
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Oanda
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      88
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Octafx
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      13
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      17
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Pepperstone
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      72
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      71
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      RoboForex
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      14
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Swissquote
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      67
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      5
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      12
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      LMAX
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      SYnergy FX
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      76
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Tickmill
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      78
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      LMAX
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Traders Way
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      88
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      7
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      2
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Vantage FX
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      66
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      8
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      XM
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      49
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      9
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Xtrade
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      3
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      11
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="odd:bg-primary pb-2 lg:pb-0 odd:bg-opacity-20 even:bg-opacity-10 even:bg-secondary flex flex-col lg:flex-row"
                  >
                    <td
                      class="flex justify-center lg:justify-start text-black lg:basis-[20%] py-2 lg:py-6 text-base lg:pl-8"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >BROKER NAME:</span
                      >
                      Yadix
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >NEWYORK (USA) LATENCY (MS):</span
                      >
                      77
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >LONDON (UK) LATENCY (MS):</span
                      >
                      4
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <span class="text-base font-bold pr-2 lg:hidden"
                        >AMSTERDAM LATENCY (MS):</span
                      >
                      11
                    </td>
                    <td
                      class="flex justify-center text-black text-center lg:basis-[20%] py-2 lg:py-6 text-base lg:px-5"
                    >
                      <div class="flex justify-center items-center">
                        <span class="text-base font-bold pr-2 lg:hidden"
                          >ORDER SERVER:</span
                        >
                        <a
                          href="#"
                          class="text-base text-white bg-secondary rounded-full px-6 py-2 hover:bg-opacity-80"
                          >Configure</a
                        >
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
              <div
                class="px-6 py-8 md:px-8 rounded-xl sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 flex items-start gap-3"
              >
                <figure class="shrink-0">
                  <img src="./images/speedometer.png" alt="speedometer.png" />
                </figure>
                <div class="space-y-3">
                  <h3 class="font-bold text-black text-lg lg:text-xl uppercase">
                    LIGHTNING SPEED & SSD
                  </h3>
                  <p class="text-base md:text-lg text-black !leading-[1.6]">
                    Our latency based vps are deployed & optimized with the 100%
                    ssd disk and very near to the forex brokers trading server
                    which give you lighting speeed.
                  </p>
                </div>
              </div>
              <div
                class="px-6 py-8 md:px-8 rounded-xl sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 flex items-start gap-3"
              >
                <figure class="shrink-0">
                  <img src="./images/chart _1_.png" alt="chart _1_.png" />
                </figure>
                <div class="space-y-3">
                  <h3 class="font-bold text-black text-lg lg:text-xl uppercase">
                    SLIPPAGE REDUCTIO
                  </h3>
                  <p class="text-base md:text-lg text-black !leading-[1.6]">
                    Slippage is a difference in time between the moment you
                    place a trade (click “buy” or “sell” button) and the moment
                    when it is executed by the trading server. It can be reduced
                    up to 99% buy using vps.
                  </p>
                </div>
              </div>

              <div
                class="px-6 py-8 md:px-8 rounded-xl sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 flex items-start gap-3"
              >
                <figure class="shrink-0">
                  <img src="./images/high-quality.png" alt="high-quality.png" />
                </figure>
                <div class="space-y-3">
                  <h3 class="font-bold text-black text-lg lg:text-xl uppercase">
                    HIGH AVAILIBILITY
                  </h3>
                  <p class="text-base md:text-lg text-black !leading-[1.6]">
                    As we are using the soft raid drive, so any data will not be
                    missing. During low latency you will get 100% abailibilty of
                    each data and no data will be lost due to the mirror drive.
                  </p>
                </div>
              </div>
              <div
                class="px-6 py-8 md:px-8 rounded-xl sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 flex items-start gap-3"
              >
                <figure class="shrink-0">
                  <img src="./images/clock.png" alt="clock.png" />
                </figure>
                <div class="space-y-3">
                  <h3 class="font-bold text-black text-lg lg:text-xl uppercase">
                    ORDER ROUTING & EXECUTION
                  </h3>
                  <p class="text-base md:text-lg text-black !leading-[1.6]">
                    These are areas of electronic trading where the playing
                    field can be skewed directly because of latency issues.
                    Consistent order fills and low slippage are key components
                    of profitability .
                  </p>
                </div>
              </div>
              <div
                class="px-6 py-8 md:px-8 rounded-xl sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 flex items-start gap-3"
              >
                <figure class="shrink-0">
                  <img src="./images/shield _1_.png" alt="shield _1_.png" />
                </figure>
                <div class="space-y-3">
                  <h3 class="font-bold text-black text-lg lg:text-xl uppercase">
                    OFF QUOTE REDUCTION
                  </h3>
                  <p class="text-base md:text-lg text-black !leading-[1.6]">
                    Off-quote is when your broker doesn't place your order at
                    all, and as the result, you receive and off-quote message
                    starting that trade cannot be accepted at the price you
                    requested.
                  </p>
                </div>
              </div>

              <div
                class="px-6 py-8 md:px-8 rounded-xl sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 flex items-start gap-3"
              >
                <figure class="shrink-0">
                  <img src="./images/investment.png" alt="investment.png" />
                </figure>
                <div class="space-y-3">
                  <h3 class="font-bold text-black text-lg lg:text-xl uppercase">
                    Ea & maximize profit
                  </h3>
                  <p class="text-base md:text-lg text-black !leading-[1.6]">
                    Your any EA's will work exactly what you want as there is no
                    possiblity of data missing data (or be hang) from the
                    trading server. Your EA will maximize your profit.
                  </p>
                </div>
              </div>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-12 lg:pb-14">
              <p
                class="text-lg md:text-xl text-black !leading-[1.6] w-full md:w-1/2"
              >
                Latency is the delay from input into a system to desired
                outcome. In Forex Trading Latency is the time that it takes for
                a signal to be sent from your trading platform, received by your
                broker, and responded to. In terms of latency, typical household
                and office internet connections can provide only mediocre
                connection quality. Our VPS servers, co-located in financial
                data centers, deliver ultra low latency and fast execution speed
                for forex trading.
              </p>
              <figure
                class="w-full md:w-1/2 bg-white py-8 px-5 rounded-2xl md:rounded-[3rem]"
              >
                <img class="w-full" src="./images/chat.png" alt="chart" />
              </figure>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="border-t border-gray-400 pt-12 md:pt-20">
      <div class="px-4">
        <div class="container mx-auto">
          <div
            class="w-full xl:px-24 grid grid-cols-1 sm:flex flex-wrap lg:flex-nowrap lg:justify-between gap-7 xl:gap-10 pb-8 sm:pb-14"
          >
            <div class="space-y-4 sm:space-y-6">
              <h2 class="text-lg md:text-xl font-bold text-black">
                OUR SERVICES
              </h2>
              <ul class="grid gap-2">
                <li>
                  <a
                    href="/pricing"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Regular VPS</a
                  >
                </li>
                <li>
                  <a
                    href="/dedicated-server"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                  >
                    Managed Dedd. Server</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Exclusive VPS</a
                  >
                </li>
                <li>
                  <a
                    href="/ultra-low-latency-vps"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Latency Optimized VPS</a
                  >
                </li>
                <li>
                  <a
                    href="best-forex-vps"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Best Forex VPS</a
                  >
                </li>
              </ul>
            </div>
            <div class="space-y-4 sm:space-y-6">
              <h2 class="text-lg md:text-xl font-bold text-black">COMPANY</h2>
              <ul class="grid gap-2">
                <li>
                  <a
                    href="/privacy-policy"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Privacy Policy</a
                  >
                </li>
                <li>
                  <a
                    href="/terms-and-conditions"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Terms Of Service</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Contact Us</a
                  >
                </li>
              </ul>
            </div>
            <div class="space-y-4 sm:space-y-6">
              <h2 class="text-lg md:text-xl font-bold text-black">
                BROKERAGE SOLUTIONS
              </h2>
              <ul class="grid gap-2">
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >FOREX CRM</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >MT4/MT5 Manager API</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Auto Trading Copy Trading</a
                  >
                </li>
              </ul>
            </div>
            <div class="space-y-4 sm:space-y-6">
              <h2 class="text-lg md:text-xl font-bold text-black">CONNECT</h2>
              <ul class="grid gap-2">
                <li class="flex items-center gap-2">
                  <img class="w-5" src="./images/facebook.png" alt="facebook" />
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Facebook</a
                  >
                </li>
                <li class="flex items-center gap-2">
                  <img class="w-5" src="./images/twitter.png" alt="twitter" />
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Twitter</a
                  >
                </li>
                <li class="flex items-center gap-2">
                  <img class="w-5" src="./images/linkedin.png" alt="linkedin" />
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Linkedin</a
                  >
                </li>
                <li class="flex items-center gap-2">
                  <img class="w-5" src="./images/youtube.png" alt="youtube" />
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Youtube</a
                  >
                </li>
              </ul>
            </div>
            <div class="space-y-4 sm:space-y-6">
              <h2 class="text-lg md:text-xl font-bold text-black">WE ACCEPT</h2>
              <ul class="flex gap-3">
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                  >
                    <img src="./images/pay-1.png" alt="pay-one" />
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                  >
                    <img src="./images/pay-2.png" alt="pay-two" />
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                  >
                    <img src="./images/pay-3.png" alt="pay-three" />
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                  >
                    <img src="./images/pay-4.png" alt="pay-four" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="py-6 border-t border-gray-400 px-4">
        <p class="text-base md:text-lg text-center">
          Copyright 2016 - 2017
          <a href="#" class="font-semibold text-secondary">Fxvps.pro </a> All
          Rights Reserved.
        </p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/custom.js"></script>
  </body>
</html>
