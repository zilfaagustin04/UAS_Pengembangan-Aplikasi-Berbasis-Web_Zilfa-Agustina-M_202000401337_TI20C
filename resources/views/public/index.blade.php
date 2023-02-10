<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Learned</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header bg-[#5C50E3]">
        <section class="container mx-auto">
            <section id="topbar" class="flex flex-row lg:flex-row justify-between items-center py-3">
              <div id="left-side" class="flex items-center lg:gap-2 lg:justify-center">
                <div>
                  <img src="Logo.png">
                </div>
                <div >
                  <h2 class="text-ld text-white font-bold">Coding Learned</h2>
                </div>
              </div>
              <nav class="flex justify-center hidden lg:flex">
                <ul class="flex gap-5 items-center text-white">
                  <li><a href="#" class="active">Home</a></li>
                  <li><a href="#">Study Program</a></li>
                  <li><a href="#">Our Teacher</a></li>
                  <li><a href="#">Organisation</a></li>
                  <li><a href="#">Info</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
              @if (Route::has('login'))
              <div id="right-side" class="flex items-center gap-10">
                @auth
                <a href="{{ url('/dashboard') }}" class="border border-white text-white rounded-full py-2 px-5">Dashboard</a>
                @else
                <a href="{{ url('/login') }}" class="border border-white text-white rounded-full py-2 px-5">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="border border-white text-white rounded-full py-2 px-5">Registration</a>
                @endif
                @endauth
                </div>
                @endif
              </div>
             
              <button class="lg:hidden flex items-center px-3 py-2 border rounded text-white border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
              </button>
            </section>
        </section>
        <section id="hero" class="pt-8 flex justify-center ">
            <div>
                <div class=" mt-10 ">
                    <h1 class="text-[#FFCD52] font-nunito font-bold">100% good at programming</h1>
                    <p class="text-[72px] font-bold text-white py-5">
                        Welcome to the Codding <br> School Website</p>
                    <p class="text-white">Lörem ipsum dobel nid rearad i polilogi osent. Nyck fabel otere och autotunt. Sas nivis dekasalingar mikrotik. Krongar visade i vasebelt. </p>
                </div>
                <div class="action py-10 flex  gap-10">
                    <a href="{{ route('register') }}" class="button-primary border rounded-full bg-[#FFCD52] py-2 px-5 font-bold">Registration</a>
                    <a href="#" class="underline flex items-center gap-5 hover:no-underline text-white"><img src="Vector.png" >Play Video </a>
                </div>
                <p class="text-white">Student</p>
                <div class="flex py-3">
                    <img src="Frame 1597882761.png">
                    <img src="Frame 1597882762.png">
                    <img src="Frame 1597882763.png">
                    <img src="Frame 1597882764.png">
                    <img src="Frame 1597882765.png">
                </div>
                <div class="flex gap-2">
                    <img src="Star 1.png">
                    <p class="text-white">4.9</p>
                    <p class="text-white">(704.6k riview)</p>
                </div>
            </div>
            <div class=" hidden lg:flex lg:items-center ">
                <img class="w-full" src="girl.png">
            </div>
        </section>
    </header>

    @include('layouts.company')

    <section class="flex flex-col items-center relative">
        <h3 class="text-4xl font-bold mb-8 mt-24">Our Course</h3>
        <p class="w-full sm:w-5/12 text-center mb-8">Lörem ipsum patev antifili astrokålonat. Vanat aheten. Ekofiering makrora, </p>
    </section>

    @include('layouts.course')

    <section class="bg-[#F7F6FE]">
        <div class="flex justify-center ">    
        <div class="mt-24">
            <div class=" mt-24">
                <h1 class="text-[#FFCD52] font-nunito font-bold">About Us 🏫</h1>
                <p class="text-4xl font-bold py-5">
                    Professional and Quality <br>Teacher</p>
                <p class="text-sm">Lörem ipsum dobel nid rearad i polilogi osent. Nyck fabel otere och autotunt. <br> Sas nivis dekasalingar mikrotik. Krongar visade i vasebelt. </p>
            </div>
            <div class="action py-10 flex">
                <a href="#" class="button-primary border rounded-full bg-[#5C50E3] text-white py-2 px-5">Search Course</a>
            </div>
        </div>
        <div class=" hidden lg:flex ">
            <img class="w-full" src="2 teacher.png">
        </div>
    </div>
    </section>

    <section class=" mx-auto">
      <div class="flex mt-24 mb-24 justify-center gap-10">
        <div class="grid grid-cols-1 grid-rows-1">
          <div class="flex flex-col lg:flex-row gap-6">
            <div class=" pb-5 pr-5">
              <div> 
                <img src="fun teacher.png" alt="">
              </div>
              <div>
                <h1 class="text-2xl font-bold ">Fun Teacher</h1>
                <p class="text-sm mt-2 max-w-[200px]">Lörem ipsum mögunde seråpp pos. Faplasade jer och </p>
              </div>
            </div>
            <div class=" pb-5 pr-5">
              <div> 
                <img src="500 expert.png" alt="">
              </div>
              <div>
                <h1 class="text-2xl font-bold ">500 Expert Student</h1>
                <p class="text-sm mt-2  max-w-[200px]">Lörem ipsum mögunde seråpp pos. Faplasade jer och </p>
              </div>
            </div>
  
          </div>
          <div class="flex flex-col lg:flex-row  gap-6 mt-10">
            <div class=" pb-5 pr-5">
              <div> 
                <img src="24/7.png" alt="">
              </div>
              <div>
                <h1 class="text-2xl font-bold ">24/7 Tutor Availability</h1>
                <p class="text-sm mt-2 max-w-[200px]">Lörem ipsum mögunde seråpp pos. Faplasade jer och  </p>
              </div>
            </div>
  
            <div class=" pb-5 pr-5">
              <div> 
                <img src="easy payment.png" alt="">
              </div>
              <div>
                <h1 class="text-2xl font-bold ">Easy Payment</h1>
                <p class="text-sm mt-2 max-w-[200px]">Lörem ipsum mögunde seråpp pos. Faplasade jer och </p>
              </div>
            </div>
          </div>
        </div>

        <div class="">
          <p class="text-sm text-[#FFC741] mb-4">Why Choose Us</p>
          <h1 class="text-5xl max-w-[540px] font-semibold">Benefits of online Tutoring Services at Coding Learned</h1>
          <p class="text-sm mt-5 max-w-[540px]">
            Lörem ipsum mögunde seråpp pos. Faplasade jer och titeck såryledes. Eurossade gesat. Usoligen. Nåhet exonde rytubel der. 
          </p>
          <div class="pt-10 flex gap-5">
            <a href="#" class="button-primary border rounded-full bg-[#5C50E3] text-white py-2 px-5">Registration</a>
            <a href="#" class="underline font-semibold ">Program Study </a>
            <img class="py-2 px-5" src="Vector (2).svg" alt=""> 
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#F7F6FE]">
      <div class="flex justify-center gap-10">    
      <div class="mt-24">
          <div class="">
              <h1 class="text-[#FFCD52] font-nunito font-bold">Owner Said</h1>
              <p class="text-4xl font-bold py-5">
                Owner Coding <br> Learned</p>
              <p class="text-sm">“ Lörem ipsum mögunde seråpp pos. Faplasade jer och titeck såryledes. Eurossade gesat. Usoligen. Nåhet exonde rytubel der. “</p>
          </div>
          <div class="action py-10 flex">
            <div class="flex w-full mt-5">
              <div class="text-sm mr-auto flex">
                <div class="text-3xl ml-auto mr-10">
                  <img src="Ellipse 77.png" alt="">
                </div>
                <div class="">
                  <div class="flex gap-2">
                      <p class="font-bold text-lg">Prof. Nugraha</p>
                  </div>
                  <div class="text-sm ml-auto flex mt-2">
                      <div class="">
                        <span class="block text-sm text-[#969696]">Owner Coding Learned</span>
                      </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>
      <div class=" hidden lg:flex mt-24 mb-10">
          <img class="w-full" src="yt.png">
      </div>
      </div>
    </section>

    <section class="">
      <div class="flex justify-center gap-10">    
      <div class="mt-24">
          <div class="mt-24 ">
              <p class="text-4xl font-bold py-5">
                What Students Say <br>
                About Coding Learned</p>
              <p class="text-sm">Lörem ipsum dobel nid rearad i polilogi osent. Nyck fabel otere och autotunt. <br> Sas nivis dekasalingar mikrotik. Krongar visade i vasebelt. </p>
          </div>
      </div>
      <div class=" hidden lg:flex mt-24 mb-24">
          <img class="w-full" src="Group 1597882835 (1).png">
      </div>
  </div>
  </section>

    <section class="py-10 bg-[#F7F6FE]">
        <div class=" mx-auto">
            <section class="flex flex-col items-center relative">
                <h3 class="text-4xl font-bold mb-8 ">Our Teacher</h3>
                <p class="w-full sm:w-5/12 text-center mb-8">Lörem ipsum mögunde seråpp pos. Faplasade jer och titeck </p>
            </section>
          <div class="flex flex-wrap justify-center">
            <img src="bi_arrow-right-circle.svg" alt="">
            <div class="w-full md:w-1/4 lg:w-1/6 px-4 mb-10">
                <div class="w-full bg-gradient-to-b from-transparent to-[#5C50E30D] opacity-50 rounded-lg ">
                  <img src="pngwing 7.png" alt="teacher1" class="w-full rounded-lg object-cover">
                  
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-medium mt-2">Jacob Jones</h3>
                  <p class="text-gray-700">Math Teacher</p>
                </div>
            </div>
            <div class="w-full md:w-1/4 lg:w-1/6 px-4 mb-10">
                <div class="w-full bg-gradient-to-b from-transparent to-[#5C50E30D] opacity-50 rounded-lg ">
                  <img src="pngwing 6.png" alt="teacher1" class="w-full rounded-lg object-cover">
                  
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-medium mt-2">Marvin McKinney</h3>
                  <p class="text-gray-700">Math Teacher</p>
                </div>
            </div>
            <div class="w-full md:w-1/4 lg:w-1/6 px-4 mb-10">
                <div class="w-full bg-gradient-to-b from-transparent to-[#5C50E30D] opacity-90 rounded-lg ">
                  <img src="pngwing 3.png" alt="teacher1" class="w-full rounded-lg object-cover">
                  
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-medium mt-2">Cameron Williamson</h3>
                  <p class="text-gray-700">Math Teacher</p>
                </div>
            </div>
            <div class="w-full md:w-1/4 lg:w-1/6 px-4 mb-10">
                <div class="w-full bg-gradient-to-b from-transparent to-[#5C50E30D] opacity-50 rounded-lg ">
                  <img src="pngwing 5.png" alt="teacher1" class="w-full rounded-lg object-cover">
                  
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-medium mt-2">Ronald Richards</h3>
                  <p class="text-gray-700">Math Teacher</p>
                </div>
            </div>
              <div class="w-full md:w-1/4 lg:w-1/6 px-4 mb-10">
                <div class="w-full bg-gradient-to-b from-transparent to-[#5C50E30D] opacity-50 rounded-lg ">
                  <img src="pngwing 4.png" alt="teacher1" class="w-full rounded-lg object-cover">
                  
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-medium mt-2">Dianne Russell</h3>
                  <p class="text-gray-700">Math Teacher</p>
                </div>
            </div>
            <img src="bi_arrow-right-circle (1).svg" alt="">
            </div>
                <div class="w-full justify-center mt-7 flex">
                    <button class="bg-[#5C50E3] py-3 px-8 text-white rounded-full hover:bg-opacity-50">See course</button>
                  </div>
                </div>
    </section>

    <footer class="bg-[#030024] text-white py-10">
        <div class="">
          <div class="grid lg:grid-cols-12 grid-cols-5">
            <div class="lg:col-span-4 col-span-5 sm:pb-5 lg:pb-0">
              <a href="/">
                <img src="Group 2.png" alt=""/>
                <p class="text-sm mt-7 text-white">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  fermentum massa sit amet porta efficitur.
                </p>
                <ul class="flex mt-10 gap-5 justify-center md:justify-start">
                  <li class="mr-2">
                    <img src="Vector (3).svg" alt="">
                  </li>
                  <li class="mr-2">
                    <img src="Vector (4).svg" alt="">
                  </li>
                  <li class="mr-2">
                    <img src="Vector (5).svg" alt="">
                  </li>
                  <li class="mr-2">
                    <img src="Vector (6).svg" alt="">
                  </li>
                </ul>
              </a>
            </div>
            <div class="sm:col-span-1 col-span-2">
              <h6 class="font-bold">Home</h6>
              <ul class="flex flex-col gap-3 space-y-1 mt-3">
                <li>Course</li>
                <li>Teacher</li>
                <li>Study </li>
                <li>About</li>
                <li>Contact</li>
              </ul>
            </div>
            <div class="sm:col-span-2 col-span-3">
              <h6 class="font-bold">Feature</h6>
              <ul class="flex flex-col gap-5 space-y-1 mt-3">
                <li>Paymnet</li>
                <li>Virtual Account</li>
                <li>Company name</li>
                <li>Go pay</li>
              </ul>
            </div>
            <div class="sm:col-span-2 col-span-5">
              <h6 class="font-bold">Company</h6>
              <ul class="flex flex-col gap-5 space-y-1 mt-3">
                <li>Carrees</li>
                <li>Contact</li>
                <li>FAQ</li>
                <li>Partners</li>
                <li>Privacy & Policy</li>
              </ul>
            </div>
            <div class="lg:col-span-3 col-span-5 mt-4 lg:mt-0">
              <h6 class="font-bold mb-5">Subscribe to cheer us on</h6>
              <form action="?">
                <div class="w-full rounded-3xl bg-white overflow-hidden flex pr-3">
                  <input type="email " placeholder="@gmail.com" class="p-3 w-full px-5 outline-none"/>
                  <img src="panah email.svg" alt="">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="flex justify-center lg:justify-end mt-10">
            <p class="text-white">Copy right by mangcoding team 2022</p>
        </div>
    </footer>

    <script>
                // Get the button and nav element
        const hamburgerButton = document.querySelector('.border.rounded');
        const nav = document.querySelector('nav');

        // Add click event listener to the button
        hamburgerButton.addEventListener('click', function () {
        // Toggle the "hidden" class on the nav element
        nav.classList.toggle('hidden');
        });
    </script>
</body>
</html>
