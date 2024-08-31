@props([ 'title' => '', 'date', '' , 'location' =>'' , 'comment'=>'' , 'class'=>'' ,  'description' => ''])
<article class="flex flex-col  pb-4 w-full bg-white  max-md:max-w-full  rounded-xl shadow-xl mt-2">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1f5e655e88fe4ffd70c1934f41ff69769862bd5f851be82839a3ae74dd391a6c?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="Penang, Malaysia landscape" class="object-contain w-full aspect-[1.73] max-md:max-w-full" />
    <header class="flex gap-2.5 items-start self-start mt-4 leading-tight lg:text-base md:text-base sm:text-xs text-xs">
            <div class="flex shrink-0 mt-1.5 h-6 bg-amber-500 w-[3px] " aria-hidden="true"></div>
            <time datetime="2021-09-17">{{$date}}</time>
          </header>
          <div class="px-2">
            <h2 class="mt-3 whitespace-normal tracking-tight break-words text-justify  lg:text-3xl md:text-3xl sm:text-base text-base lg:font-bold md:font-bold sm:font-semibold font-normal leading-6 max-md:mx-4  lg:mx-2 md:mx-2 sm:mx-1 mx-0 ">
                {{$title}}
              </h2>
              @if(!empty($description))
        <p class="mt-5 whitespace-normal tracking-wide mx-4 text-lg text-justify leading-8 max-md:mt-10 max-md:max-w-full font-Robotoregular">
            {{ $description }}
        </p>
    @endif
          </div>
         <footer class="flex py-2 lg:flex-row md:flex-row flex-row gap-2 justify-between self-center  max-w-full w-full max-md:mt-1 px-3 pb-2">
            <div class="flex gap-1 lg:text-base md:text-base sm:text-xs text-xs mt-2 items-start leading-10 whitespace-nowrap">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c90f2f880b8e3a4bbcd4a7a9fea6d73c4951645c2672b00eb00ccd76f42d2c2?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain shrink-0 mt-3 aspect-[0.73] w-[10px]" />
              <p class=" mt-1">{{$location}}</p>
            </div>
            <div class="flex gap-1 lg:text-base md:text-base sm:text-xs text-xs mt-2 items-start leading-10 whitespace-nowrap">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c90f2f880b8e3a4bbcd4a7a9fea6d73c4951645c2672b00eb00ccd76f42d2c2?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain shrink-0 mt-3 aspect-[0.73] w-[10px]" />
                <p class=" mt-1">{{$comment}}</p>
              </div>
          </footer>


  </article>

