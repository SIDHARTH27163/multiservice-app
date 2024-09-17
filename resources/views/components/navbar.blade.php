 <!--Nav-->
 <nav id="header" class="w-full drop-shadow-lg px-4  font-roboto fixed top-0 z-50">
    <div class="w-full flex flex-wrap items-center justify-between  mt-0 py-2.5 l px-2 ">

    <a href="/" class="flex flex-row  drop-shadow-lg  hover:rounded-full transform transition hover:scale-110 duration-500 ease-in-out">
        <img src="{{asset('assets/logo.png')}}" class="h-14 rounded-xl aspect-[3.5]" alt="Lookin Dharamshala"  />

    </a>



      <div class="block lg:hidden pr-2">
      <button id="nav-toggle" class="flex items-center p-1 text-gray-900 hover:text-slate-950  transform transition hover:scale-110 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
<<<<<<< HEAD
      <div class="shadow-b-tealsky w-full font-Robotomedium flex-grow lg:flex lg:items-center lg:w-auto hidden mt-1 lg:mt-0  lg:bg-transparent  p-2 lg:p-0 z-20 " id="nav-content">
=======
      <div class=" w-full font-Robotomedium flex-grow lg:flex lg:items-center lg:w-auto hidden mt-1 lg:mt-0  lg:bg-transparent  p-2 lg:p-0 z-20 " id="nav-content">
>>>>>>> edb96434f884654d8f258e2032abef6d8e231acf
        <ul class="list-reset lg:flex justify-end flex-1 items-center py-1">
        <li class="mr-0">
            <a id="navitem" class="toggleColour hover:bg-slate-900 hover:text-white text-rose-600 inline-block text-xl hover:shadow-lg hover:rounded-xl   no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="/">Home</a>
          </li>
          <li class="mr-0">
            <a id="navitem1" class="toggleColour2 hover:bg-slate-900 hover:text-white text-rose-600 inline-block text-xl hover:shadow-lg hover:rounded-xl  no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="/blogs">Blogs</a>
          </li>

          <li class="mr-0">
            <a id="navitem2" class="toggleColour3 hover:bg-slate-900 hover:text-white text-rose-600 inline-block text-xl hover:shadow-lg hover:rounded-xl  no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="/touristplaces">Tourist Places</a>
          </li>
          {{-- <li class="mr-0">
            <a id="navitem1" class="toggleColour6 hover:bg-slate-900 hover:text-white text-rose-600 inline-block text-xl hover:shadow-lg hover:rounded-xl  no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="/services">Services</a>
          </li> --}}
          @if(session()->has('user'))
          <li class="mr-0">
            <a id="navitem3" class="toggleColour4  text-rose-600 hover:bg-slate-900 hover:text-white inline-block text-xl hover:shadow-lg hover:rounded-xl  no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="/home">Dashboard</a>
          </li>
          <li class="mr-0">
            <a id="navitem3" class="  text-rose-500 inline-block text-xl hover:shadow-lg hover:rounded-xl hover:bg-slate-900 hover:text-white  no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="/logout">Logout</a>
          </li>
        @else


        <li class="mr-0">
          <a id="navitem3" class="toggleColour4 text-rose-600 hover:bg-slate-900 hover:text-white inline-block text-xl hover:shadow-lg hover:rounded-xl  no-underline  transform transition hover:scale-105 duration-500 ease-in-out py-2 px-4 font-bold" href="signin">Signin</a>
        </li>
         @endif



        </ul>



      </div>
    </div>

  </nav>

