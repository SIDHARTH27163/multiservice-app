<!-- resources/views/components/input.blade.php -->
@props(['name', 'type' => 'text', 'value' => '', 'placeholder' => ' ', 'class' => '', 'id' => '', 'label' => '', 'error' => ''])

<div class="relative z-0 w-full mb-5 group">
    <input type="{{ $type }}"
           name="{{ $name }}"
           value="{{ $value }}"
           id="{{ $id }}"
           class="{{ $class }} block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer"
           placeholder=" " />
    <label for="{{ $id }}" class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $label }}</label>
    @if ($error)
        <p class="text-red-600 text-sm mt-2 font-playwrite italic">{{ $error }}</p>
    @endif
</div>
