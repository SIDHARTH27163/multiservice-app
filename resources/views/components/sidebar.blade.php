<div id="sidebar" class="w-full inset-y-0 left-0 overflow-y-auto bg-white z-30 fixed top-16 lg:max-w-sm md:max-w-sm sm:max-w-full max-w-full p-5 h-auto transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:block">

    <div class="flex w-full items-end justify-end">
        <button id="closeSidebar" class="text-black lg:hidden">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
    </div>
    <div class="flex flex-col text-black pt-2 ">
    <article class="flex flex-col px-1 pt-1 pb-10 w-full shadow-lg rounded-lg ">
      <h2 class="self-center text-3xl font-bold leading-loose">About Us</h2>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/604509bcb2de1f93943ea3dfc9b261b4ba855fa26315c816e0fa7b2a5e1e3c91?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="About Me image" class="object-contain mt-2 w-full aspect-[1.24]" />
      <p class="self-start mt-2 -mb-6 px-2 text-base font-playwrite text-justify font-medium leading-7">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum in vel massa donec sit. Mi ut risus sem malesuada ornare. Ac eu erat eget et lorem est arcu. Gravida hendrerit sit blandit semper lacus. Nulla amet suscipit sit lectus tortor. Dolor non eget suspendisse leo scelerisque sed d.
      </p>

    </article>
  </div>
  {{-- recent posts --}}
  <section class="flex flex-col  px-1 py-3">
    <div class="bg-gray-100">
    <header class=" py-5 text-center text-3xl font-bold leading-none text-black bg-white shadow-xl">
      <h2>Recent Post</h2>
    </header>
    <article class="flex gap-2 pyy-2 bg-white my-2">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d7f10bc6078a9dd9b04b50bceba54531e712acda6633051a3ddb170ec0e6bcc1?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain z-10 shrink-0 aspect-[1.07] w-[88px]" alt="Article preview image" />
        <div class="flex flex-col grow shrink-0 self-start mt-0 basis-0 w-fit">
            <header class="self-start text-xs font-medium  text-neutral-950">
                <time datetime="2018-09-17">September 17, 2018</time> - Tips & Tricks
            </header>
            <h2 class="mt-1 text-md font-semibold  text-black">
                Finding Love & home in Tbilisi, Georgia
            </h2>
        </div>
    </article>
    <article class="flex gap-2 p-2 bg-white my-2">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d7f10bc6078a9dd9b04b50bceba54531e712acda6633051a3ddb170ec0e6bcc1?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain z-10 shrink-0 aspect-[1.07] w-[88px]" alt="Article preview image" />
        <div class="flex flex-col grow shrink-0 self-start mt-0 basis-0 w-fit">
            <header class="self-start text-xs font-medium  text-neutral-950">
                <time datetime="2018-09-17">September 17, 2018</time> - Tips & Tricks
            </header>
            <h2 class="mt-1 text-md font-semibold  text-black">
                Finding Love & home in Tbilisi, Georgia
            </h2>
        </div>
    </article>
    <article class="flex gap-2 py-2 bg-white my-2">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d7f10bc6078a9dd9b04b50bceba54531e712acda6633051a3ddb170ec0e6bcc1?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain z-10 shrink-0 aspect-[1.07] w-[88px]" alt="Article preview image" />
        <div class="flex flex-col grow shrink-0 self-start mt-0 basis-0 w-fit">
            <header class="self-start text-xs font-medium  text-neutral-950">
                <time datetime="2018-09-17">September 17, 2018</time> - Tips & Tricks
            </header>
            <h2 class="mt-1 text-md font-semibold  text-black">
                Finding Love & home in Tbilisi, Georgia
            </h2>
        </div>
    </article>
    </div>
  </section>

  {{-- recent posts --}}
   {{-- popular posts --}}
   <section class="flex flex-col">
    <header class=" py-5 w-full text-3xl font-bold leading-none text-black bg-white">
      <h2 class="text-center">Popular Post</h2>
    </header>
    <article class="flex flex-col px-1 mt-4 w-full bg-blue-800 bg-opacity-30">
      <div class="flex relative flex-col items-start px-8 py-10 w-full min-h-[364px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/643c6d82de23fedf0ee0418191eb69fbe740d7c03792c673050f053530a8954d?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-cover absolute inset-0 size-full" alt="Background image for popular post" />
        <p class="relative self-stretch text-2xl font-medium leading-9 text-white">
          September 17, 2018 - Tips & Tricks
        </p>
        <h3 class="relative mt-20 text-3xl font-bold leading-10 text-white">
          Finding Love & home in Tbilisi, Georgia
        </h3>

      </div>
    </article>
  </section>
   {{-- popular posts --}}
   {{-- categories --}}
   <section class="flex flex-col text-2xl font-medium leading-loose text-black ">
    <div class=" bg-white ">
        <h2 class=" text-3xl font-bold text-center leading-loose">Categories</h2>

<ul class="w-auto divide-y divide-gray-200 dark:divide-gray-700 whitespace-nowrap px-q my-5 font-Robotoregular">
<li class="pb-3 sm:pb-4">
<div class="flex items-center space-x-4 rtl:space-x-reverse">

<div class="flex-1 min-w-0">
 <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
    Neil Sims
 </p>
 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
    email@flowbite.com
 </p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
 $320
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4 rtl:space-x-reverse">

<div class="flex-1 min-w-0">
 <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
    Bonnie Green
 </p>
 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
    email@flowbite.com
 </p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
 $3467
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4 rtl:space-x-reverse">

<div class="flex-1 min-w-0">
 <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
    Michael Gough
 </p>
 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
    email@flowbite.com
 </p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
 $67
</div>
</div>
</li>
<li class="py-3 sm:py-4">
<div class="flex items-center space-x-4 rtl:space-x-reverse">

<div class="flex-1 min-w-0">
 <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
    Thomas Lean
 </p>
 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
    email@flowbite.com
 </p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
 $2367
</div>
</div>
</li>
<li class="pt-3 pb-0 sm:pt-4">
<div class="flex items-center space-x-4 rtl:space-x-reverse">

<div class="flex-1 min-w-0">
 <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
    Lana Byrd
 </p>
 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
    email@flowbite.com
 </p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
 $367
</div>
</div>
</li>
</ul>


    </div>
  </section>

   {{-- categopries --}}
  {{-- social media --}}
  <section class="flex flex-col items-center max-w-full">
    <header class="self-stretch px-16 pt-8 pb-8 w-full text-3xl font-bold leading-none text-black bg-white">
      <h2>Get In Touch</h2>
    </header>
    <div class="flex gap-4 mt-2 w-full ">
      <article class="flex flex-1 gap-8 px-7 py-5 text-base font-semibold leading-4 text-white bg-indigo-800 rounded-lg">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/aa242c2f29e9aa200577c2cb8f4f10a0a9ff4b5c3a3d61ebb48d2f2dccc9fd4c?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain shrink-0 self-start w-4 aspect-[0.5]" alt="Likes icon" />
        <div>
          <span class="font-bold">65.5K</span>
          <br />
          <span class="font-medium">Likes</span>
        </div>
      </article>
      <article class="flex flex-col flex-1">
        <div class="flex gap-5 justify-between px-5 py-5 bg-blue-400 rounded-lg">
          <div class="flex overflow-hidden flex-col self-start mt-1">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5b6d75f961dc00703de124962f10b158e90687ee29f1fadb05b443dc1dd053a8?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain aspect-[1.29] w-[31px]" alt="Followers icon" />
          </div>
          <div class="text-base font-medium leading-4 text-white">
            <span class="font-bold">105 k</span>
            <br />
            Followers
          </div>
        </div>
      </article>
    </div>
    <div class="flex gap-7 mt-7 w-full max-w-[391px]">
      <article class="flex flex-1 gap-4 px-4 py-5 text-base font-semibold leading-4 text-white bg-red-500 rounded-lg">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/956b267d3a5aaf9caefc3d3bb9a45a80020e1ee4642dc2c13b14ec1a73b4b0fb?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain shrink-0 my-auto aspect-[1.43] w-[30px]" alt="Subscribers icon" />
        <div>
          <span class="font-bold">1.5 M</span>
          <br />
          Subscribers
        </div>
      </article>
      <article class="flex flex-col flex-1">
        <div class="flex gap-5 justify-between px-4 py-5 bg-pink-500 rounded-lg">
          <div class="flex overflow-hidden flex-col self-start">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2949108b2d9b06829946b31ab37413577fc0ad6ee7d2d3c9ee1c555debb56d6?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain aspect-square w-[30px]" alt="Followers icon" />
          </div>
          <div class="text-base font-medium leading-4 text-white">
            <span class="font-bold">85 k</span>
            <br />
            Followers
          </div>
        </div>
      </article>
    </div>
  </section>
  {{-- social mdia --}}
</div>
