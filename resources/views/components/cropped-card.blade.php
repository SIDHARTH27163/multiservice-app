@props([ 'title' => '', 'date', '' , 'location' =>'' , 'comment'=>'comment'])
<article class="flex flex-col mt-2">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8cd2fdb5a5681497fba4d9b1504e62f230404f1dfec15073ee7fe9ad8138c0cb?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain w-full aspect-[1.06] rounded-t-lg" alt="Blog post featured image" />
    <div class="flex z-10 flex-col rounded-b-lg -mt-16 w-full bg-white lg:max-w-[330px] md:max-w-[320px] sm:max-w-[310px]   max-w-full  shadow-[0px_4px_10px_rgba(0,0,0,0.25)]">
        <header class="flex gap-2.5 items-start self-start mt-4 leading-tight lg:text-base md:text-base sm:text-xs text-xs">
            <div class="flex shrink-0 mt-1.5 h-6 bg-amber-500 w-[3px] " aria-hidden="true"></div>
            <time datetime="2021-09-17">{{$date}}</time>
          </header>
          <h2 class="mt-3 whitespace-normal tracking-tight break-words text-justify  lg:text-3xl md:text-3xl sm:text-base text-base lg:font-bold md:font-bold sm:font-semibold font-normal leading-6 max-md:mx-4  lg:mx-2 md:mx-2 sm:mx-1 mx-0 ">
            {{$title}}
          </h2>
         <footer class="flex lg:flex-row md:flex-row flex-row gap-2 justify-between self-center  max-w-full w-full max-md:mt-1 px-3 pb-4">
            <div class="flex gap-1 lg:text-base md:text-base sm:text-xs text-xs mt-2 items-start leading-10 whitespace-nowrap">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c90f2f880b8e3a4bbcd4a7a9fea6d73c4951645c2672b00eb00ccd76f42d2c2?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain shrink-0 mt-3 aspect-[0.73] w-[10px]" />
              <p class=" mt-1">{{$location}}</p>
            </div>
            <div class="flex gap-1 lg:text-base md:text-base sm:text-xs text-xs mt-2 items-start leading-10 whitespace-nowrap">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c90f2f880b8e3a4bbcd4a7a9fea6d73c4951645c2672b00eb00ccd76f42d2c2?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain shrink-0 mt-3 aspect-[0.73] w-[10px]" />
                <p class=" mt-1">{{$comment}}</p>
              </div>
          </footer>
    </div>
</article>
