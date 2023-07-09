<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page</title>
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}"></script>

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
                href="#"
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
            <a href="#" class="relative shrink-0">
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
                  <a href="#" class="font-bold text-base xl:text-xl text-black"
                    >VPS PLANS
                  </a>
                </li>
                <li>
                  <a href="#" class="font-bold text-base xl:text-xl text-black"
                    >BROKER LATENCY</a
                  >
                </li>
                <li>
                  <a href="#" class="font-bold text-base xl:text-xl text-black"
                    >EXCL VPS</a
                  >
                </li>
                <li>
                  <a href="#" class="font-bold text-base xl:text-xl text-black"
                    >DEDICATED SERVER</a
                  >
                </li>
                <li>
                  <a href="#" class="font-bold text-base xl:text-xl text-black"
                    >AFFILIATE</a
                  >
                </li>
                <li>
                  <a href="#" class="font-bold text-base xl:text-xl text-black"
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
      <section class="px-4 overflow-x-clip py-5">
        <div class="container mx-auto">
          <div class="flex flex-col md:flex-row items-center gap-10">
            <div class="w-full md:w-6/12 pt-5 lg:pt-14">
              <div class="swiper banner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide pb-14 space-y-3 lg:space-y-6">
                    <h1
                      class="font-fredoka text-black text-[28px] md:text-[40px] 2xl:text-[3rem] leading-none"
                    >
                      Ultra Fast Forex Trading VPS
                    </h1>
                    <p
                      class="text-lg md:text-xl 2xl:text-2xl text-black xl:pr-20 2xl:pr-32"
                    >
                      Pro Windows Fx VPS for EA Trading, Ctrader,Low Latency
                      Trading .
                    </p>
                    <div
                      class="flex flex-wrap xl:flex-nowrap xl:gap-5 gap-3 pt-2"
                    >
                      <div class="xl:space-y-5 space-y-3 min-w-[250px]">
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            Latest Hardware Tech.
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            Support All Broker & MT4.
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            High Performance Server.
                          </p>
                        </div>
                      </div>
                      <div class="xl:space-y-5 space-y-3">
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            24/7,Customer Support.
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            100% Uptime Guarantee.
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            3 Days Partial Moneyback Guarantee.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center gap-4 pt-2">
                      <a
                        href="#"
                        class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-xl font-normal text-black"
                      >
                        <span
                          class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-5 sm:py-3.5 transition-all group-hover:bg-transparent md:px-8 lg:px-10"
                        >
                          <span class="group-hover:text-white"
                            >Register Now</span
                          >
                        </span>
                      </a>
                      <a
                        href="#"
                        class="hover:text-primary hover:font-bold p-1 text-xl font-normal text-black"
                        >View Services
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide space-y-3 pb-14 lg:space-y-6">
                    <h1
                      class="font-fredoka text-black text-[28px] md:text-[40px] 2xl:text-[3rem] leading-none"
                    >
                      EXCL WINDOWS FX VPS
                    </h1>
                    <p
                      class="text-lg md:text-xl 2xl:text-2xl text-black xl:pr-20 2xl:pr-32"
                    >
                      Get our big RAM & Space VPS with full RDP
                    </p>
                    <div
                      class="flex flex-wrap xl:flex-nowrap xl:gap-5 gap-3 pt-2"
                    >
                      <div class="xl:space-y-5 space-y-3 min-w-[250px]">
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            Latest Hardware Tech.
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            High Performance Servers
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            Dedicated Environments
                          </p>
                        </div>
                      </div>
                      <div class="xl:space-y-5 space-y-3">
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            KVM/Hyper-V/XEN Virtualization
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            24/7,Customer Support
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            99.9% Uptime Guarantee
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center gap-4 pt-2">
                      <a
                        href="#"
                        class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-xl font-normal text-black"
                      >
                        <span
                          class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-6 sm:py-3.5 transition-all group-hover:bg-transparent md:px-8 lg:px-10"
                        >
                          <span class="group-hover:text-white"
                            >Register Now</span
                          >
                        </span>
                      </a>
                      <a
                        href="#"
                        class="hover:text-primary hover:font-bold p-1 text-xl font-normal text-black"
                        >View Services
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide space-y-3 pb-14 lg:space-y-6">
                    <h1
                      class="font-fredoka text-black text-[28px] md:text-[40px] 2xl:text-[3rem] leading-none"
                    >
                      Premium Dedicated Server
                    </h1>
                    <p
                      class="text-lg md:text-xl 2xl:text-2xl text-black xl:pr-20 2xl:pr-32"
                    >
                      Get Fully Managed High End Dedicated Server from FxVps Pro
                    </p>
                    <div
                      class="flex flex-wrap xl:flex-nowrap xl:gap-5 gap-3 pt-2"
                    >
                      <div class="xl:space-y-5 space-y-3 min-w-[250px]">
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">SuperMicro Server</p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">Enterprise Hardware</p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">Full Server Control</p>
                        </div>
                      </div>
                      <div class="xl:space-y-5 space-y-3">
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">Premium Bandwidth</p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            1 Gbps Dedicated Port
                          </p>
                        </div>
                        <div class="flex gap-3 items-center">
                          <img src="./images/circle.svg" alt="circle.svg" />
                          <p class="text-lg text-black">
                            99.9% Uptime Guarantee
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center gap-4 pt-2">
                      <a
                        href="#"
                        class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-xl font-normal text-black"
                      >
                        <span
                          class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-6 sm:py-3.5 transition-all group-hover:bg-transparent md:px-8 lg:px-10"
                        >
                          <span class="group-hover:text-white"
                            >Register Now</span
                          >
                        </span>
                      </a>
                      <a
                        href="#"
                        class="hover:text-primary hover:font-bold p-1 text-xl font-normal text-black"
                        >View Services
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination flex justify-center"></div>
              </div>
            </div>
            <div class="w-full md:w-6/12 px-6 xl:pl-20">
              <figure class="md:-mr-5">
                <img
                  class="w-full"
                  src="./images/Character.png"
                  alt="Character.png"
                />
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for plant section  -->
      <section class="sm:px-4 pt-10 md:pt-20 pb-7">
        <div class="container mx-auto">
          <div
            class="sm:rounded-2xl w-full md:rounded-[3.5rem] border border-gray-300 bg-white bg-opacity-50 px-4 md:px-12 py-6 sm:py-14"
          >
            <div
              class="w-full grid grid-cols-2 md:grid-cols-3 place-items-center 2xl:flex justify-center 2xl:flex-nowrap gap-x-4 gap-y-5 md:gap-8"
            >
              <div class="flex items-start gap-2 flex-col sm:flex-row">
                <figure class="shrink-0">
                  <img src="./images/window.png" alt="window" />
                </figure>
                <div class="space-y-4">
                  <h2
                    class="text-xl sm:text-2xl leading-none text-black font-bold"
                  >
                    BASIC
                  </h2>
                  <ul class="grid gap-2">
                    <li class="font-normal text-black text-sm">
                      BASIC 512MB Dedicated RAM
                    </li>
                    <li class="font-normal text-black text-sm">
                      16GB Disk Space
                    </li>
                    <li class="font-bold text-sm text-primary">
                      $3.00 / Month
                    </li>
                    <li class="font-normal text-black text-sm">1 Core CPU</li>
                  </ul>
                  <a
                    href="#"
                    class="inline-block px-5 text-sm py-2.5 border text-secondary font-medium rounded-full border-secondary hover:bg-secondary hover:text-white transition-all"
                    >Order Now</a
                  >
                </div>
              </div>
              <div class="flex items-start gap-2 flex-col sm:flex-row">
                <figure class="shrink-0">
                  <img src="./images/window.png" alt="window" />
                </figure>
                <div class="space-y-4">
                  <h2
                    class="text-xl sm:text-2xl leading-none text-black font-bold"
                  >
                    STANDARD
                  </h2>
                  <ul class="grid gap-2">
                    <li class="font-normal text-black text-sm">
                      1GB Dedicated RAM
                    </li>
                    <li class="font-normal text-black text-sm">
                      16GB Disk Space
                    </li>
                    <li class="font-bold text-sm text-primary">
                      $5.90 / Month
                    </li>
                    <li class="font-normal text-black text-sm">1 Core CPU</li>
                  </ul>
                  <a
                    href="#"
                    class="inline-block px-5 text-sm py-2.5 border text-secondary font-medium rounded-full border-secondary hover:bg-secondary hover:text-white transition-all"
                    >Order Now</a
                  >
                </div>
              </div>
              <div class="flex items-start gap-2 flex-col sm:flex-row">
                <figure class="shrink-0">
                  <img src="./images/window.png" alt="window" />
                </figure>
                <div class="space-y-4">
                  <h2
                    class="text-xl sm:text-2xl leading-none text-black font-bold"
                  >
                    PROFESSIONAL
                  </h2>
                  <ul class="grid gap-2">
                    <li class="font-normal text-black text-sm">
                      2GB Dedicated RAM
                    </li>
                    <li class="font-normal text-black text-sm">
                      22GB Disk Space
                    </li>
                    <li class="font-bold text-sm text-primary">
                      $9.50 / Month
                    </li>
                    <li class="font-normal text-black text-sm">2 Core CPU</li>
                  </ul>
                  <a
                    href="#"
                    class="inline-block px-5 text-sm py-2.5 border text-secondary font-medium rounded-full border-secondary hover:bg-secondary hover:text-white transition-all"
                    >Order Now</a
                  >
                </div>
              </div>
              <div class="flex items-start gap-2 flex-col sm:flex-row">
                <figure class="shrink-0">
                  <img src="./images/window.png" alt="window" />
                </figure>
                <div class="space-y-4">
                  <h2
                    class="text-xl sm:text-2xl leading-none text-black font-bold"
                  >
                    ENTERPRISE
                  </h2>
                  <ul class="grid gap-2">
                    <li class="font-normal text-black text-sm">
                      3GB Dedicated RAM
                    </li>
                    <li class="font-normal text-black text-sm">
                      27GB Disk Space
                    </li>
                    <li class="font-bold text-sm text-primary">$13.90/Month</li>
                    <li class="font-normal text-black text-sm">2 Core CPU</li>
                  </ul>
                  <a
                    href="#"
                    class="inline-block px-5 text-sm py-2.5 border text-secondary font-medium rounded-full border-secondary hover:bg-secondary hover:text-white transition-all"
                    >Order Now</a
                  >
                </div>
              </div>
              <div class="flex items-start gap-2 flex-col sm:flex-row">
                <figure class="shrink-0">
                  <img src="./images/window.png" alt="window" />
                </figure>
                <div class="space-y-4">
                  <h2
                    class="text-xl sm:text-2xl leading-none text-black font-bold"
                  >
                    CORPORATE
                  </h2>
                  <ul class="grid gap-2">
                    <li class="font-normal text-black text-sm">
                      4GB Dedicated RAM
                    </li>
                    <li class="font-normal text-black text-sm">
                      35GB Disk Space
                    </li>
                    <li class="font-bold text-sm text-primary">$18.90/Month</li>
                    <li class="font-normal text-black text-sm">3 Core CPU</li>
                  </ul>
                  <a
                    href="#"
                    class="inline-block px-5 text-sm py-2.5 border text-secondary font-medium rounded-full border-secondary hover:bg-secondary hover:text-white transition-all"
                    >Order Now</a
                  >
                </div>
              </div>
              <div class="flex items-start gap-2 flex-col sm:flex-row">
                <figure class="shrink-0">
                  <img src="./images/window.png" alt="window" />
                </figure>
                <div class="space-y-4">
                  <h2
                    class="text-xl sm:text-2xl leading-none text-black font-bold"
                  >
                    Custom
                  </h2>
                  <ul class="grid gap-2">
                    <li class="font-normal text-black text-sm">
                      4GB Dedicated RAM
                    </li>
                    <li class="font-normal text-black text-sm">
                      35GB Disk Space
                    </li>
                    <li class="font-bold text-sm text-primary">$18.90/Month</li>
                    <li class="font-normal text-black text-sm">3 Core CPU</li>
                  </ul>
                  <a
                    href="#"
                    class="inline-block px-5 text-sm py-2.5 border text-secondary font-medium rounded-full border-secondary hover:bg-secondary hover:text-white transition-all"
                    >Order Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Choose The Most Suitable Forex section  -->
      <section class="px-4 pb-8 sm:pb-12 pt-14 sm:pt-20">
        <div class="container mx-auto space-y-12 xl:px-32">
          <h2
            class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-center"
          >
            Choose The Most Suitable Forex VPS Hosting Plan for
            <span
              class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
            >
              Trading</span
            >
          </h2>
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-7 2xl:gap-12">
            <div
              class="px-8 pt-24 rounded-[3rem] pb-14 space-y-4 flex justify-center items-center flex-col bg-opacity-50 bg-white border border-gray-300"
            >
              <h3 class="text-black text-3xl text-center font-fredoka">
                REGULAR VPS
              </h3>
              <figure>
                <img
                  src="./images/bookmark-fav-dynamic-premium.png"
                  alt="bookmark-fav-dynamic-premium.png"
                />
              </figure>
              <h4 class="font-bold text-primary text-center text-2xl">
                From $3.00/Month
              </h4>
              <p class="text-base text-black text-center !leading-[1.7]">
                Choose your desired regular windows VPS plans for mt4/mt5 EA
                trading, auto-copy trading etc. Our Web regular windows VPS
                plans will give you rock-solid fast trading experience.
              </p>
              <div class="flex justify-center">
                <a
                  href="#"
                  class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                >
                  <span
                    class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1.5 px-6 sm:py-2 transition-all group-hover:bg-transparent lg:px-8"
                  >
                    <span class="group-hover:text-white">Compare Plans</span>
                  </span>
                </a>
              </div>
            </div>
            <div
              class="px-8 pt-24 rounded-[3rem] pb-14 space-y-4 flex justify-center items-center flex-col bg-opacity-50 bg-white border border-gray-300"
            >
              <h3 class="text-black text-3xl text-center font-fredoka">
                REGULAR VPS
              </h3>
              <figure>
                <img
                  src="./images/bell-dynamic-premium.png"
                  alt="bell-dynamic-premium.png"
                />
              </figure>
              <h4 class="font-bold text-primary text-center text-2xl">
                From $19.90/Month
              </h4>
              <p class="text-base text-black text-center !leading-[1.7]">
                Gain increased power, big space and RAM, 6+ core CPU. Our
                exclusive VPS package comes with hyper-v virtualizations in
                datacenter editions Windows OS for fully dedicated environment.
              </p>
              <div class="flex justify-center">
                <a
                  href="#"
                  class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                >
                  <span
                    class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1.5 px-6 sm:py-2 transition-all group-hover:bg-transparent lg:px-8"
                  >
                    <span class="group-hover:text-white">Compare Plans</span>
                  </span>
                </a>
              </div>
            </div>
            <div
              class="px-8 pt-24 rounded-[3rem] pb-14 space-y-4 flex justify-center items-center flex-col bg-opacity-50 bg-white border border-gray-300"
            >
              <h3 class="text-black text-3xl text-center font-fredoka">
                REGULAR VPS
              </h3>
              <figure>
                <img
                  src="./images/trophy-dynamic-premium.png"
                  alt="trophy-dynamic-premium.png"
                />
              </figure>
              <h4 class="font-bold text-primary text-center text-2xl">
                From $12.90/Month
              </h4>
              <p class="text-base text-black text-center !leading-[1.7]">
                Gain maximum ultra speed and very low latency from your broker ,
                choose your server locations or send us of your broker name , we
                will provide you the VPS near to your broker's server location.
              </p>
              <div class="flex justify-center">
                <a
                  href="#"
                  class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                >
                  <span
                    class="flex h-full w-full items-center gap-2 rounded-full bg-white py-1.5 px-6 sm:py-2 transition-all group-hover:bg-transparent lg:px-8"
                  >
                    <span class="group-hover:text-white">Compare Plans</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Information section  -->
      <section class="sm:px-4 pt-6 md:pt-10 pb-10">
        <div class="container mx-auto">
          <div
            class="sm:rounded-2xl w-full md:rounded-[3.5rem] border border-gray-300 bg-white bg-opacity-50 px-4 md:px-16 py-6 sm:py-14"
          >
            <div
              class="w-full grid grid-cols-2 md:grid-cols-3 place-items-center 2xl:grid-cols-6 gap-x-4 gap-y-5 md:gap-8"
            >
              <div
                class="rounded-2xl space-y-2 w-full sm:rounded-[3.5rem] border border-gray-300 bg-white py-10 px-3 sm:px-6 flex flex-col justify-center items-center"
              >
                <figure>
                  <img
                    src="./images/Flash_drive_perspective_matte.png"
                    alt="Flash_drive_perspective_matte.png"
                  />
                </figure>
                <h2
                  class="text-xl sm:text-2xl font-bold text-black text-center"
                >
                  100%
                </h2>
                <p class="text-center text-base font-normal">Disk Space</p>
              </div>
              <div
                class="rounded-2xl space-y-2 w-full sm:rounded-[3.5rem] border border-gray-300 bg-white py-10 px-3 sm:px-6 flex flex-col justify-center items-center"
              >
                <figure>
                  <img
                    src="./images/Settings_perspective_matte.png"
                    alt="Settings_perspective_matte.png"
                  />
                </figure>
                <h2
                  class="text-xl sm:text-2xl font-bold text-black text-center"
                >
                  Setup TIme
                </h2>
                <p class="text-center text-base font-normal">Max 1 Hour</p>
              </div>
              <div
                class="rounded-2xl space-y-2 w-full sm:rounded-[3.5rem] border border-gray-300 bg-white py-10 px-3 sm:px-6 flex flex-col justify-center items-center"
              >
                <figure>
                  <img
                    src="./images/Stopwatch_perspective_matte.png"
                    alt="Stopwatch_perspective_matte.png"
                  />
                </figure>
                <h2
                  class="text-xl sm:text-2xl font-bold text-black text-center"
                >
                  Uptime
                </h2>
                <p class="text-center text-base font-normal">100% Guaranteed</p>
              </div>
              <div
                class="rounded-2xl space-y-2 w-full sm:rounded-[3.5rem] border border-gray-300 bg-white py-10 px-3 sm:px-6 flex flex-col justify-center items-center"
              >
                <figure>
                  <img src="./images/window.png" alt="window.png" />
                </figure>
                <h2
                  class="text-xl sm:text-2xl font-bold text-black text-center"
                >
                  RDP
                </h2>
                <p class="text-center text-base font-normal">Full Access</p>
              </div>
              <div
                class="rounded-2xl space-y-2 w-full sm:rounded-[3.5rem] border border-gray-300 bg-white py-10 px-3 sm:px-6 flex flex-col justify-center items-center"
              >
                <figure>
                  <img
                    src="./images/perspective_matte.png"
                    alt="perspective_matte.png"
                  />
                </figure>
                <h2
                  class="text-xl sm:text-2xl font-bold text-black text-center"
                >
                  24/7
                </h2>
                <p class="text-center text-base font-normal">Live Support</p>
              </div>
              <div
                class="rounded-2xl space-y-2 w-full sm:rounded-[3.5rem] border border-gray-300 bg-white py-10 px-3 sm:px-6 flex flex-col justify-center items-center"
              >
                <figure>
                  <img
                    src="./images/Increase_perspective_matte.png"
                    alt="Increase_perspective_matte.png"
                  />
                </figure>
                <h2
                  class="text-xl sm:text-2xl font-bold text-black text-center"
                >
                  Optimized
                </h2>
                <p class="text-center text-base font-normal">
                  For Forex Trading
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Information section  -->
      <div class="px-4 pb-12 lg:pb-20 pt-6 md:pt-8">
        <div class="container mx-auto">
          <div
            class="flex flex-col-reverse md:flex-row justify-between gap-6 md:gap-10 lg:gap-20 md:items-center"
          >
            <article class="space-y-3 max-w-[1050px]">
              <h2
                class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-left"
              >
                Why Forex VPS is
                <span
                  class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
                >
                  Essential</span
                >
                for You?
              </h2>
              <p class="text-base sm:text-lg !leading-[1.6] sm:!leading-[1.9]">
                A quality VPS service holds onto definite key factors that can
                hand the user a wide range of profits. Those facilities could be
                a dedicated VPS service, 24/7 support capability, optimized
                trading platform supportability, etc. Fx VPS Pro has been
                strictly maintaining the hallmark of strong technical &
                professional reliability in forex VPS hosting from its very
                first day.
              </p>
            </article>
            <figure class="shrink-0">
              <img
                src="./images/crown-dynamic-color.png"
                alt="crown-dynamic-color.png"
              />
            </figure>
          </div>
          <div class="max-w-[1200px] pt-10">
            <div
              class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-x-12 md:gap-y-8"
            >
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Effective Hosting
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Forex VPS pro will introduce you with ultra-fast hosting
                    experience. It could be any platform or website; this VPS
                    can deliver 3x faster speed than the regular server.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Optimized for MT4/MT5 Trading
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Our servers are technically optimized to run meta trader
                    trading accounts. Forex trading is going to be smooth &
                    uninterrupted with Fx VPS servers.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Ultra-Low Latency
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Forex VPS possesses the capacity of delivering the latency
                    in a millisecond. Our data centers are located at New York,
                    London, Amsterdam, Montreal to ensure shortest latency time.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Latest Hardware Technology
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Forex VPS servers are featured with SSD (Solid State Disk)
                    RAID-10 adroitness. This powerful feature will enhance the
                    speed of hosted website quality to a great extent.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    100% Uptime
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Fx VPS guarantees 100% uptime at any cost. Even the time of
                    power outage your business platform will remain fully
                    operational.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Continuous Security & Backup
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Our servers own enough technical resource to prevent any
                    sort of security breach or cyber-attack. Our backup
                    system(DDoS) will keep your data intact.
                  </p>
                </article>
              </div>
            </div>
            <div class="flex items-center gap-4 pt-12">
              <a
                href="#"
                class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
              >
                <span
                  class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-6 sm:py-3.5 transition-all group-hover:bg-transparent md:px-8 lg:px-10"
                >
                  <span class="group-hover:text-white">Choose Your Plan</span>
                </span>
              </a>
              <a
                href="#"
                class="hover:text-primary hover:font-bold p-1 text-lg font-normal text-black"
              >
                Register
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- start coding for Choose The Most Suitable Forex section  -->
      <section class="sm:px-4 pb-8 sm:pb-12 pt-14 lg:pt-20 overflow-x-clip">
        <div class="container mx-auto space-y-12">
          <h2
            class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-center"
          >
            Benefits of Using Our
            <span
              class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
            >
              Feature</span
            >
            Services
          </h2>
          <div
            class="px-4 py-10 md:py-24 sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 relative"
          >
            <figure
              class="flex justify-center md:absolute md:-top-20 md:-right-20 pb-8 md:pb-0"
            >
              <img
                src="./images/medal-dynamic-premium.png"
                alt="medal-dynamic-premium.png"
              />
            </figure>
            <div
              class="max-w-[1050px] mx-auto grid grid-cols-1 sm:grid-cols-2 gap-10 md:gap-x-16 md:gap-y-8"
            >
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle-blue.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Free Installation
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Our honored clients will get free installation &
                    high-quality tech support from the beginning to the last day
                    of our contract.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle-blue.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Refund Policy
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    In forex VPS you are getting 3 days partial money back
                    guarantee in case the service is not up to your expected
                    level.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle-blue.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Dedicated Customer Support
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Forex VPS client support team is available 24/7/365 at your
                    service. While facing any technical difficulties you can
                    contact our team without any hesitation.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle-blue.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Dedicated Server Plan
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    The dedicated server plans are set for pro traders who want
                    their trading platform singly running for one purpose only.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle-blue.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Reseller Plan
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    As an affiliate service, you will be rewarded with 5% to 20
                    % commission for every successful server selling on your
                    reference.
                  </p>
                </article>
              </div>
              <div class="flex gap-3 items-start">
                <figure class="shrink-0 mt-2">
                  <img src="./images/circle-blue.svg" alt="circle" />
                </figure>
                <article class="space-y-4">
                  <h3 class="text-xl lg:text-2xl font-bold text-black">
                    Affordable Server Price
                  </h3>
                  <p class="text-dark text-base md:text-lg">
                    Potential clients are getting access to the desired package
                    at a lower price than the usual market price.
                  </p>
                </article>
              </div>
            </div>
            <div class="flex justify-center items-center gap-3 sm:gap-4 pt-12">
              <a
                href="#"
                class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
              >
                <span
                  class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-4 sm:py-3.5 transition-all group-hover:bg-transparent md:px-8 lg:px-10"
                >
                  <span class="group-hover:text-white">Choose Your Plan</span>
                </span>
              </a>
              <a
                href="#"
                class="hover:text-primary hover:font-bold p-1 text-lg font-normal text-black"
              >
                Register Now
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Choose The Most Suitable Forex section  -->
      <section
        class="px-4 pb-8 sm:pb-12 pt-8 sm:pt-12 lg:pt-16 overflow-x-clip"
      >
        <div class="container mx-auto">
          <div
            class="flex flex-col md:flex-row gap-10 md:px-0 lg:gap-10 2xl:gap-20 items-center"
          >
            <div class="w-full md:w-7/12 space-y-6 lg:space-y-10">
              <div class="space-y-3">
                <h2
                  class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-left"
                >
                  Forex
                  <span
                    class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
                  >
                    Dedicated
                  </span>
                  Server
                </h2>
                <p class="text-base md:text-lg text-black !leading-[1.8]">
                  Forex VPS offers a full dedicated server to its clients.
                  Rather than a leap service we act as according to our featured
                  criteria. That’s why we give full dedication & effort to
                  ensure our dedicating service quality. The factors we
                  emphasize on to keep our service dedicated are in the
                  following;
                </p>
              </div>
              <ul class="grid gap-2">
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    Ensuring 100% site up guarantee.
                  </p>
                </li>
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    24/7/365 stand by the support team.
                  </p>
                </li>
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    Latest SSD based hardware support system
                  </p>
                </li>
              </ul>
              <p class="text-base md:text-lg text-black">
                With FX VPS dedicated plan, our clients will have a wide range
                of opportunity to choose the most suitable server according to
                the needs. We offer four modules; DS 1, DS 2, DS 3, DS 4
                categorized by:
              </p>
              <ul class="grid gap-2">
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    Price/monthly
                  </p>
                </li>
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    CPU feature
                  </p>
                </li>
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    Traffic range
                  </p>
                </li>
                <li class="flex gap-3 items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="stroke-primary w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4.5 12.75l6 6 9-13.5"
                    />
                  </svg>
                  <p class="text-base md:text-lg text-black font-bold">
                    RAM size.
                  </p>
                </li>
              </ul>
              <div
                class="sm:flex-row sm:items-center flex flex-col justify-start items-start gap-3 sm:gap-4"
              >
                <a
                  href="#"
                  class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-lg font-normal text-black"
                >
                  <span
                    class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-4 sm:py-3.5 transition-all group-hover:bg-transparent md:px-8 lg:px-10"
                  >
                    <span class="group-hover:text-white"
                      >View Dedicated Server</span
                    >
                  </span>
                </a>
                <a
                  href="#"
                  class="hover:text-primary hover:font-bold p-1 text-lg font-normal text-black"
                >
                  Register Now
                </a>
              </div>
            </div>
            <div class="w-full md:w-5/12">
              <figure class="px-6 md:px-0 md:-mr-6 lg:-mr-14 2xl:-mr-44">
                <img class="w-full" src="./images/img-1.svg" alt="img" />
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Questions section  -->
      <section class="sm:px-4 pb-8 sm:pb-14 pt-14 lg:pt-20 overflow-x-clip">
        <div class="container mx-auto space-y-12">
          <h2
            class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-center"
          >
            Frequently Asked
            <span
              class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
            >
              Questions</span
            >
          </h2>
          <div
            class="px-4 py-10 xl:pl-14 lg:pr-16 xl:pr-24 md:py-20 sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 relative"
          >
            <figure
              class="flex justify-center md:absolute md:-top-20 md:-right-20 pb-8 md:pb-0"
            >
              <img
                src="./images/chat-dynamic-color.png"
                alt="chat-dynamic-color.png"
              />
            </figure>
            <div
              class="w-full flex-col lg:flex-row flex gap-4 xl:gap-x-8 xl:gap-y-4 items-start"
            >
              <div class="grid gap-1 w-full lg:w-1/2">
                <div class="group space-y-4">
                  <button
                    type="button"
                    class="accordion-btn px-3 sm:px-6 py-3 gap-4 w-full rounded-3xl bg-white border border-green-300 flex justify-between items-center"
                  >
                    <span class="font-bold text-base xl:text-lg text-black">
                      What is Forex VPS?
                    </span>
                    <span class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-minus hidden group-[.open]:block"
                      >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus group-[.open]:hidden"
                      >
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 max-h-0"
                  >
                    <div
                      class="rounded-3xl border border-gray-300 bg-white p-8 mb-3"
                    >
                      <p class="text-base md:text-lg text-black">
                        The term “FOREX VPS” involves a virtual private server
                        system that is mainly applied in forex trading.
                        Basically, these servers host MT4/MT5 trading platforms
                        24/7 uninterruptedly. In forex VPS service the hardware
                        resources are allotted under a vast server arrangement.
                        Forex servers get optimized for meta-trading & latency
                        for conducting rigorous trading activities. VPS service
                        providers arrange respective plans for the individual
                        requirements based on disk space, CPU capacity, latency
                        & much more. Dedicated server plans are very common
                        nowadays because most of the pro traders prefer them
                        over other server policy.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="group space-y-4">
                  <button
                    type="button"
                    class="accordion-btn px-3 sm:px-6 py-3 gap-4 w-full rounded-3xl bg-white border border-green-300 flex justify-between items-center"
                  >
                    <span class="font-bold text-base xl:text-lg text-black">
                      I have no technical skill, can you help me for setup ?
                    </span>
                    <span class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-minus hidden group-[.open]:block"
                      >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus group-[.open]:hidden"
                      >
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 max-h-0"
                  >
                    <div
                      class="rounded-3xl border border-gray-300 bg-white p-8 mb-3"
                    >
                      <p class="text-base md:text-lg text-black">
                        The term “FOREX VPS” involves a virtual private server
                        system that is mainly applied in forex trading.
                        Basically, these servers host MT4/MT5 trading platforms
                        24/7 uninterruptedly. In forex VPS service the hardware
                        resources are allotted under a vast server arrangement.
                        Forex servers get optimized for meta-trading & latency
                        for conducting rigorous trading activities. VPS service
                        providers arrange respective plans for the individual
                        requirements based on disk space, CPU capacity, latency
                        & much more. Dedicated server plans are very common
                        nowadays because most of the pro traders prefer them
                        over other server policy.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="group space-y-4">
                  <button
                    type="button"
                    class="accordion-btn px-3 sm:px-6 py-3 gap-4 w-full rounded-3xl bg-white border border-green-300 flex justify-between items-center"
                  >
                    <span class="font-bold text-base xl:text-lg text-black">
                      How long does it take to setup my account?
                    </span>
                    <span class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-minus hidden group-[.open]:block"
                      >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus group-[.open]:hidden"
                      >
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 max-h-0"
                  >
                    <div
                      class="rounded-3xl border border-gray-300 bg-white p-8 mb-3"
                    >
                      <p class="text-base md:text-lg text-black">
                        As of March of 2022, we have completed our 5 section
                        programs for the following fields: Dental, Optometry, &
                        Pharmacy. We are currently working on completing our
                        Medical and PA programs, to stay updated click one of
                        the following links. <strong>Medical - PA</strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid gap-1 w-full lg:w-1/2">
                <div class="group space-y-4">
                  <button
                    type="button"
                    class="accordion-btn px-3 sm:px-6 py-3 gap-4 w-full rounded-3xl bg-white border border-green-300 flex justify-between items-center"
                  >
                    <span class="font-bold text-base xl:text-lg text-black">
                      What type of payment do you accept ?
                    </span>
                    <span class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-minus hidden group-[.open]:block"
                      >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus group-[.open]:hidden"
                      >
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 max-h-0"
                  >
                    <div
                      class="rounded-3xl border border-gray-300 bg-white p-8 mb-3"
                    >
                      <p class="text-base md:text-lg text-black">
                        As of March of 2022, we have completed our 5 section
                        programs for the following fields: Dental, Optometry, &
                        Pharmacy. We are currently working on completing our
                        Medical and PA programs, to stay updated click one of
                        the following links. <strong>Medical - PA</strong>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="group space-y-4">
                  <button
                    type="button"
                    class="accordion-btn px-3 sm:px-6 py-3 gap-4 w-full rounded-3xl bg-white border border-green-300 flex justify-between items-center"
                  >
                    <span class="font-bold text-base xl:text-lg text-black">
                      Can I upgrade my plan later?
                    </span>
                    <span class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-minus hidden group-[.open]:block"
                      >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus group-[.open]:hidden"
                      >
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 max-h-0"
                  >
                    <div
                      class="rounded-3xl border border-gray-300 bg-white p-8 mb-3"
                    >
                      <p class="text-base md:text-lg text-black">
                        Guideology was created by graduate students & advisors
                        to help make the process of getting into your dream
                        school as simple as possible. Our goal is to provide
                        everything students need under one easy to manage
                        platform. To learn more, visit our
                        <strong>Mission Statement</strong> page.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="group space-y-4">
                  <button
                    type="button"
                    class="accordion-btn px-3 sm:px-6 py-3 gap-4 w-full rounded-3xl bg-white border border-green-300 flex justify-between items-center"
                  >
                    <span class="font-bold text-base xl:text-lg text-black">
                      What is the advantages of using fx VPS over PC ?
                    </span>
                    <span class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-minus hidden group-[.open]:block"
                      >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus group-[.open]:hidden"
                      >
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 max-h-0"
                  >
                    <div
                      class="rounded-3xl border border-gray-300 bg-white p-8 mb-3"
                    >
                      <p class="text-base md:text-lg text-black">
                        Guideology was created by graduate students & advisors
                        to help make the process of getting into your dream
                        school as simple as possible. Our goal is to provide
                        everything students need under one easy to manage
                        platform. To learn more, visit our
                        <strong>Mission Statement</strong> page.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Everything You Should Know About Foxex VPS section  -->
      <section
        class="px-4 pb-8 sm:pb-12 pt-14 lg:pt-16 overflow-x-clip relative"
      >
        <img
          class="absolute top-1/2 -translate-y-1/2 left-0 opacity-20 md:block hidden"
          src="./images/bg-verify.png"
          alt="vg-verify"
        />
        <div class="container relative mx-auto space-y-12">
          <h2
            class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-left"
          >
            Everything You Should Know About
            <span
              class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
            >
              Foxex VPS</span
            >
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            <div class="space-y-3">
              <h3 class="text-xl font-bold text-black">
                How Does a VPS Function?
              </h3>
              <p class="text-base lg:text-lg text-black !leading-[1.5]">
                VPS is the acronym for VIRTUAL PRIVATE SERVER. Generally, a VPS
                system run by a separate operating system & allocated resources
                within a larger server system. This service is mainly required
                for hosting purpose backed by big chunks of hardware system
                placed in specific data centers or locations. Most of the VPS
                service provider presents customizable options for its users.
                When the trader selects a provider, that gives full access to
                its plans comprising with the maximum amount of RAM size,
                bandwidth & server capacity so the client can pick up the most
                appropriate one for trading.
              </p>
            </div>
            <div class="space-y-3">
              <h3 class="text-xl font-bold text-black">
                Why Use a Forex VPS For Trading?
              </h3>
              <p class="text-base lg:text-lg text-black !leading-[1.5]">
                Redundancy, usability & availability are the main reasons to
                introduce a VPS service in forex trading. There are some other
                purposes that we can extract. -Specially Optimized for
                Meta-trading: VPS servers are developed for running MT4/MT5
                trading accounts without any disturbance or failure. -Latency:
                The ultra-low latency required for forex trading cannot be
                maintained typical ISP’s. Only the latency optimized servers are
                capable to produce lightning fast business execution. -Back-up &
                Security In VPS hosting service a continuous data backup process
                will be running simultaneously with your trading.
              </p>
            </div>
            <div class="space-y-3">
              <h3 class="text-xl font-bold text-black">
                How To Set-up Forex VPS?
              </h3>
              <p class="text-base lg:text-lg text-black !leading-[1.5]">
                A user doesn’t need extra technical proficiency to run his/her
                MT4/mt5 account on a VPS server. It’s just required some simple
                steps to follow.
              </p>
              <ul class="grid gap-1">
                <li class="text-base lg:text-lg text-black !leading-[1.5]">
                  <strong>Step 1: </strong> Download the MT4/MT5 directly from
                  the official website.
                </li>
                <li class="text-base lg:text-lg text-black !leading-[1.5]">
                  <strong>Step 2: </strong> Select “Remote Desktop Protocol”
                  from the search bar.
                </li>
                <li class="text-base lg:text-lg text-black !leading-[1.5]">
                  <strong>Step 3: </strong> Enter the login credential provided
                  by the VPS service provider.
                </li>
                <li class="text-base lg:text-lg text-black !leading-[1.5]">
                  <strong>Step 4: </strong> Install the downloaded MT4/MT5
                  properly in the remote desktop.
                </li>
                <li class="text-base lg:text-lg text-black !leading-[1.5]">
                  <strong>Step 5: </strong> After successful installing enter
                  the login details that were provided from your brokerage
                  house. On successful completion of these steps, your MT4/MT5
                  platform hosting will be initiated.
                </li>
              </ul>
            </div>
            <div class="space-y-3">
              <h3 class="text-xl font-bold text-black">
                How Does a VPS Function?
              </h3>
              <p class="text-base lg:text-lg text-black !leading-[1.5]">
                VPS is the acronym for VIRTUAL PRIVATE SERVER. Generally, a VPS
                system run by a separate operating system & allocated resources
                within a larger server system. This service is mainly required
                for hosting purpose backed by big chunks of hardware system
                placed in specific data centers or locations. Most of the VPS
                service provider presents customizable options for its users.
                When the trader selects a provider, that gives full access to
                its plans comprising with the maximum amount of RAM size,
                bandwidth & server capacity so the client can pick up the most
                appropriate one for trading.
              </p>
            </div>
            <div class="space-y-3">
              <h3 class="text-xl font-bold text-black">
                How Does a VPS Function?
              </h3>
              <p class="text-base lg:text-lg text-black !leading-[1.5]">
                VPS is the acronym for VIRTUAL PRIVATE SERVER. Generally, a VPS
                system run by a separate operating system & allocated resources
                within a larger server system. This service is mainly required
                for hosting purpose backed by big chunks of hardware system
                placed in specific data centers or locations. Most of the VPS
                service provider presents customizable options for its users.
                When the trader selects a provider, that gives full access to
                its plans comprising with the maximum amount of RAM size,
                bandwidth & server capacity so the client can pick up the most
                appropriate one for trading.
              </p>
            </div>
            <div class="space-y-3">
              <h3 class="text-xl font-bold text-black">
                How Does a VPS Function?
              </h3>
              <p class="text-base lg:text-lg text-black !leading-[1.5]">
                VPS is the acronym for VIRTUAL PRIVATE SERVER. Generally, a VPS
                system run by a separate operating system & allocated resources
                within a larger server system. This service is mainly required
                for hosting purpose backed by big chunks of hardware system
                placed in specific data centers or locations. Most of the VPS
                service provider presents customizable options for its users.
                When the trader selects a provider, that gives full access to
                its plans comprising with the maximum amount of RAM size,
                bandwidth & server capacity so the client can pick up the most
                appropriate one for trading.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- start coding for Questions section  -->
      <section class="sm:px-4 pb-14 sm:pb-32 pt-8 lg:pt-12 overflow-x-clip">
        <div class="container mx-auto space-y-12">
          <div
            class="px-4 py-10 xl:pl-14 flex flex-col-reverse md:flex-row lg:pr-16 xl:pr-24 md:py-20 sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 relative"
          >
            <div class="space-y-7 w-full md:w-8/12">
              <div class="space-y-3">
                <h2
                  class="text-[28px] lg:text-[2.6rem] leading-[1.3] font-fredoka text-black text-left"
                >
                  Still Need Help For
                  <span
                    class="bg-clip-text bg-gradient-to-r from-primary to-secondary text-transparent"
                  >
                    Deciding</span
                  >
                </h2>
                <p class="text-base md:text-lg text-black !leading-[1.5]">
                  Talk to one of out VPS specialist who will review your needs
                  and propose a tailored hosting solution that will match your
                  spacific business reality and needs.
                </p>
              </div>
              <div
                class="sm:flex-row flex flex-col justify-start items-start gap-4 pt-2"
              >
                <a
                  href="#"
                  class="group rounded-full bg-gradient-to-r from-primary to-secondary p-1 text-xl font-normal text-black"
                >
                  <span
                    class="flex h-full w-full items-center gap-2 rounded-full bg-white py-2 px-5 sm:py-3.5 transition-all group-hover:bg-transparent md:px-7"
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
                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z"
                      />
                    </svg>

                    <span class="group-hover:text-white">
                      Chat with an Expert!</span
                    >
                  </span>
                </a>
                <a
                  href="#"
                  class="hover:text-primary flex items-center gap-3 hover:font-bold p-1 text-xl font-normal text-black"
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
                  View Services
                </a>
              </div>
              <div class="space-y-4 max-w-[700px]">
                <h4 class="font-bold text-black text-lg md:text-xl">
                  Subscribe To Our Newsletter!
                </h4>
                <div class="flex gap-5 items-center">
                  <input
                    type="text"
                    placeholder="Enter your email"
                    class="px-5 w-full placeholder:text-gray-400 py-3 text-lg text-black rounded-2xl border border-gray-300"
                  />
                  <button
                    type="submit"
                    class="px-5 py-4 bg-gradient-to-r from-primary to-secondary rounded-2xl hover:bg-opacity-75"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-send stroke-white"
                    >
                      <line x1="22" y1="2" x2="11" y2="13"></line>
                      <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="flex justify-center w-full md:w-4/12">
              <figure class="">
                <img
                  src="./images/rocket-dynamic-premium.png"
                  alt="rocket-dynamic-premium.png"
                />
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
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Regular VPS</a
                  >
                </li>
                <li>
                  <a
                    href="#"
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
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Latency Optimized VPS</a
                  >
                </li>
                <li>
                  <a
                    href="#"
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
                    href="#"
                    class="inline-block text-base lg:text-lg text-black hover:underline"
                    >Privacy Policy</a
                  >
                </li>
                <li>
                  <a
                    href="#"
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
</html>
