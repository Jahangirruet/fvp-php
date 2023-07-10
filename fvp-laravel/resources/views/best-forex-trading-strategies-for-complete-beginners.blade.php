<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
    <link
      rel="stylesheet"
      href="css/style.css"
    />
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->

  </head>
  <body
    class="font-quicksand font-normal bg-[url(../images/homepage-background.png)] bg-cover bg-no-repeat"
  >
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
    <!--main-->
    <div>
    <section
        class="sm:px-4 pb-10 md:pb-20 xl:pb-32 pt-8 md:pt-20 overflow-x-clip"
      >
        <div class="container mx-auto space-y-12">
          <div
            class="px-4 py-6 sm:p-8 md:p-12 lg:p-16 sm:rounded-[3rem] bg-opacity-50 bg-white border border-gray-300 relative space-y-8 xl:space-y-14"
          >
            <h1 class="text-black font-bold text-2xl lg:text-3xl">
              Best Forex Trading Strategies for Complete Beginners
            </h1>
            <div class="space-y-5">
              <figure>
                <img
                  class="w-full rounded-3xl lg:rounded-[50px] h-[300px] object-cover sm:h-auto"
                  src="~/assets/images/kanchanara-5hcV51EeeWc-unsplash.png"
                  alt="best_forex.png"
                />
              </figure>
              <br />
              <p class="text-base md:text-lg text-black !leading-[1.6]">
                Successful people never succeeded without taking risks. It
                applies to every aspect of events in life. Risk-taking is the
                first footstep of every successful story but in the financial
                market, calculated risk is the key.
              </p>
              <p class="text-base md:text-lg text-black !leading-[1.6]">
                For the beginners, the Forexmarket may look like a complete
                maze. Dizzying about where to play the first shot, when to hit,
                when to let go and what will be the game plan. Here’s a
                comprehensive guideline is laid out for the complete beginners
                so that they can climb the rope steadily. Be cleared that, “Life
                is 10% what happens and 90% of how you react to it.” Theodore
                Roosevelt (26th U.S. President)
              </p>
              <p class="text-base md:text-lg text-black !leading-[1.6]">
                So, guidance is not the only key to success, how you follow it &
                use it in the future that’s all matters.
              </p>
              <p class="text-base md:text-lg text-black !leading-[1.6]">
                Before you startjumping in you should familiarize yourself with
                the market and basic fundamental terminology of the forex
                market. To get started easier, first you need to study these
                online to get an idea, however, you should discuss with expert
                traders for getting vast ideas.
              </p>
              <p class="text-base md:text-lg text-black !leading-[1.6]">
                Then when you are finally familiar with the basics, you need to
                practice before jumping into the battleground. Try with a demo
                account, feel the process, know your empty spaces where you need
                more things to stuff.
              </p>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Know your surroundings
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  The most obvious thing is to teach oneself on the Forex
                  market. If you know your enemy very well, you can win the war
                  easily.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Study and research the currency, which currency pair is
                  volatile from most to least. Find out what are the odds that
                  affect them before you put your capital at risk. In a picture,
                  it’s an investment in preparation & time so that you can jump
                  off almost flawlessly and save yourself from collateral
                  damage.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Stick with a plan
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Nothing happens properly if it is off the proper planning.
                  Sticking with an appropriate trading plan is an essential
                  component of successful trading in the Forex market. Plan that
                  explains your profit margin, profit goals, risk tolerance
                  level, approach style & assessment condition.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Once the plan is developed, make sure each action you take
                  should follow your every principle which are in the plan.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Always remember, you are likely most logical before you place
                  a trade & most illogical after your trade is placed.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Exercise
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Now you have the game plan, it’s time to test it out. Before
                  stepping into the real market, consider a start-up with a
                  risk-free demo practice account. You will see what it’s like
                  to trading different currency pairs while putting your trading
                  plan for a test practice without putting any risk on your
                  capital.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Forecast the condition of the Market
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Traditionally fundamental traders like to trade based on news
                  & other financial, political information. On the other hand,
                  technical traders most likely to use analytical analysis
                  tools.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Such as Fibonacci retracements & indicators to predict the
                  market condition and movements.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  The majority of the traders use a composite of the two. It
                  doesn’t matter what manner you follow; you must use the
                  instruments & techniques at your disposal to find a window of
                  opportunity of trading in constantly moving markets.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Know your boundaries
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  This is the general rule for your future success: always know
                  your limitations. It should also explain how much you’re
                  willing to take risks for every move you make, keeping your
                  leverage to capital ratio in proper alignment that matches
                  your need & never risking more than you can afford to lose
                  your asset. Always remember, “Always risk what you can afford
                  to lose”
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Know when to stop & let go
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Nobody has the all-time to sit & watch the markets every
                  moment of every day. You should manage your risk and safeguard
                  potential profits by stop & limit orders. This will get you
                  out of the market at the price you have set.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Trailing stops are particularly beneficial. These will trail
                  your spot at a specific range as the market continues to moves
                  and assisting you to safeguard profits if the market reverses.
                  Placing conditional orders may not guarantee your risk limit
                  for losses.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Control your emotions
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  An open position opportunity and the market is not favoring
                  the way. Maybe you could make it up with a trade or more that
                  don’t go with your trading plan. Your mind is like - Just a
                  twosome will not hurt, right?
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Remember this, “Revenge trading” hardly results well. You
                  should not allow your emotions to control you while trading.
                  When you have a losing side, don’t put all in to try to make
                  it back in one shot like poker. It’s always wise to keep going
                  with your plan & make the lost back a little by little
                  throughout the time than to finding yourself crippling losses.
                </p>
              </div>
              <br />
              <br />
              <figure>
                <img
                  class="w-full rounded-3xl lg:rounded-[50px] h-[300px] object-cover sm:h-auto"
                  src="~/assets/images/kanchanara-5hcV51EeeWc-unsplash.png"
                  alt="best_forex.png"
                />
              </figure>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Keep It Slow and Steady
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  No matter how experienced you are, without consistency, you
                  will not get big success.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Educating yourself and developing a trading plan is an obvious
                  step but the real test is following the plan through patience
                  & discipline.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Be an explorer
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Remembering that consistency & limitation is important but
                  never be afraid to re-estimate your trading scheme if things
                  aren’t favoring like you planned.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  As the experiences jump up, your direction of needs may
                  change. What you do should reflect what you are and so does
                  the plan to your goals. Go with the flow if you intend to
                  change your plans.
                </p>
              </div>
            </div>
            <div>
              <h1 class="text-black font-bold text-2xl lg:text-3xl">
                Exercise
              </h1>
              <br />
              <div class="space-y-5">
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Starting with the right trading partner is the most reasonable
                  choice as you engage the Forex market. Pricing execution & the
                  quality of thinking can make a huge distinction in trading
                  experience.
                </p>
                <p class="text-base md:text-lg text-black !leading-[1.6]">
                  Don’t be afraid of doing something new. Remember, there is no
                  such word like “Losing”. Either win or learn something new.
                  Best of luck.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--footer-->
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