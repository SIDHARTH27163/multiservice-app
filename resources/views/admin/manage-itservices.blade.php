@extends('admin.layout.layout')
@section('content')
<div class="p-4 border-2 border-dashed rounded-lg border-gray-700 font-Robotomedium underline">

@include('components.heading', ['headingText' => 'Add And Delete It Services Here', 'headingClass' => 'text-2xl font-semibold font-Montserrat text-gray-950'])


<div class="max-w-6xl mx-auto p-2 flex  justify-center py-8">
    <form action="add_t_cat" method="post" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4   rounded-lg shadow-lg ">
        @csrf
        @method('post')
    @include('components.input', [
        'name' => 'username',
        'type' => 'text',
        'value' => old('username'),
        'placeholder' => 'Enter your username',
        'class' => 'border border-rose-500 font-Montserrat',
        'id' => 'username-input',
        'label'=>"Name"
    ])

 @include('components.textarea', [
    'name' => 'username',
    'type' => 'text',
    'value' => old('username'),
    'placeholder' => 'Enter your username',
    'class' => 'border border-rose-500 font-Montserrat',
    'id' => 'username-input',
    'label'=>"Name"
])
 @include('components.file', [
    'name' => 'username',



    'label'=>"Icon"
])


    </form>
</div>

</div>

@stop
