@props(['name', 'type' => 'text', 'value' => '', 'placeholder' => ' ', 'class' => '', 'id' => '', 'label' => ''])

<div class="px-1 max-w-xs">
    <label for="example3" class="mb-1 block text-sm font-medium text-gray-700 after:ml-0.5 after:text-red-500 after:content-['*']">{{ $label }}</label>
    <input id="example3"  name="{{ $name }}" type="file" class="block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-primary-500 file:py-2.5 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-primary-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />

  </div>
