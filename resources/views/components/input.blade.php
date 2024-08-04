<!-- resources/views/components/input.blade.php -->
@props(['name', 'type' => 'text', 'value' => '', 'placeholder' => ' ', 'class' => '', 'id' => '', 'label' => '','error'=>''])



<div class="my-6 ">
    <label class="flex flex-col-reverse relative focus group bg-gray-100">

      <input
           type="{{ $type }}"
           name="{{ $name }}"
          value="{{ $value }}"
          id="{{ $id }}"
          class="flex-grow bg-transparent outline-none px-4 py-2 leading-9 rounded-md  {{$class}} ">

      <span class="absolute font-Montserrat  transform -translate-y-2 left-2 transition leading-10 group-focus-within:-translate-y-11 text-slate-900">
        {{ $label }}
      </span>




    </label>
    <p class="text-red-600 text-sm mt-2 font-playwrite ">{{$error}}</p>
</div>
