<!-- resources/views/components/input.blade.php -->
@props(['name', 'type' => '', 'value' => '', 'placeholder' => ' ', 'class' => '', 'id' => '', 'label' => '' , 'error'=>''])



<div class="my-8 ">
    <label class="flex flex-col-reverse relative focus group bg-gray-100">

      <textarea
           type="{{ $type }}"
           name="{{ $name }}"

          id="{{ $id }}"
          class="flex-grow bg-transparent outline-none px-4 py-2 leading-9 rounded-md  {{$class}} " rows="2">{{ $value }}</textarea>

      <span class="absolute font-Montserrat  transform -translate-y-8 left-2 transition leading-10 group-focus-within:-translate-y-20 text-slate-900">
        {{ $label }}
      </span>



    </label>
    @if ($error)
        <p class="text-red-600 text-sm mt-2 font-playwrite ">{{ $error }}</p>
    @endif
</div>
