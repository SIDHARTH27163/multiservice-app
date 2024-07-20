<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  
    <meta name="description" content="" />
    <meta name="keywords" content="  dharamshala ,Dharamshala tourist attractions,lookin dharamshala Things to do in Dharamshala, lookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
    <meta name="author" content="Lookin Dharamshala" />
    <link rel="canonical" href={{ request()->url() }} />
    <meta name="generator" content="All in One SEO (AIOSEO) 4.3.8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="lookindharamshala: Lookin Dharamshala , lookindharamshala,Latest Blogs, Blogs , Tourist Destinations , lookindharamshala &amp; Records | What You Want We Have It" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="lookindharamshala.com" />
    <meta property="og:description" content="What You Want We Have It." />
    <meta property="og:url" content={{ request()->url() }} />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="lookindharamshala.com" />
    <meta name="twitter:description" content="What You Want We Have It." />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    <!-- Scripts -->
    
    @vite('resources/js/app.js')
</head>

<body class="">


@include('components/navbar')
<section class="justify-center max-w-7xl mx-auto">
  <div class="flex gap-5 max-md:flex-col max-md:gap-0">
    <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
      <div class="flex flex-col self-stretch px-5 my-auto max-md:mt-10 max-md:max-w-full">
        <h2 class="font-Robotomedium text-5xl font-extrabold text-gray-900 bg-clip-text leading-[71px] max-md:max-w-full max-md:text-4xl max-md:leading-[59px]">
          <span class="text-5xl font-light">Great</span>
          <span class="text-5xl font-bold">Product</span>
          <span class="text-5xl font-light">is</span>
          <br />
          built by great teams
        </h2>
        <p class="mt-7 text-lg leading-9 text-slate-600 max-md:max-w-full font-playwrite">
          We help build and manage a team of world-class developers to bring your vision to life
        </p>
        <button class="justify-center self-start px-8 py-5 mt-20 text-sm font-semibold leading-4 bg-blue-600 rounded-md shadow-2xl text-neutral-50 max-md:px-5 max-md:mt-10">
          Let's get started!
        </button>
      </div>
    </div>
    <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
      <div class="flex flex-col grow justify-center max-md:max-w-full">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6edbac42fa6940652015227c93ee44b409217cc4e6a1b4138bd1d3fc9b1bbb01?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="Illustration of a product team" class="w-full aspect-[1.12] max-md:max-w-full" />
      </div>
    </div>
  </div>
</section>

  </div>
</section>




@include('components/multiplecrousel')

</body>





</html>