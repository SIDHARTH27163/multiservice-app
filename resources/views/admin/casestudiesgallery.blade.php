@extends('admin.layout.layout')

@section('content')
<div class="p-4 bg-gray-100 h-screen overflow-y-auto rounded-lg font-Robotomedium">
@include('components.heading', ['headingText' => 'Add Gellery To Case Study Article', 'headingClass' => 'text-2xl font-normal font-Robotomedium text-rose-950 whitespace-nowrap leading-relaxed'])
<div class="container w-full   mx-auto flex justify-center py-4">
    <form action="{{ route('managecasestudies.addImageToGallery', $casestudy->id) }}" method="POST" enctype="multipart/form-data" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4 rounded-lg shadow-lg">
        @csrf
        <div class="my-3 w-full">
            <label for="images">Add Images:</label>
            <input type="file" name="images[]" multiple class="form-control">
        </div>
       
        @include('components.button', [
                'name' => 'submit',
                'type' => 'submit',
                'label' => "Submit",
                'role' => 'submit',
                'class' => 'font-Montserrat select-none rounded-lg bg-gradient-to-tr from-slate-950 to-gray-800 py-3 px-6 text-center align-middle  text-ls font-bold text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none'
            ])
    </form>
</div>
    <hr>


<div class="p-5 w-full bg-white h-auto">
<div class="grid grid-cols-3 gap-5">
        @foreach($galleries as $gallery)
            <div class="w-full h-72  ">
                <div class=" h-full">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Image" class="h-full">
                    <form class="mt-2 flex items-center justify-center w-full " action="{{ route('managecasestudies.deleteImageFromGallery', ['id' => $casestudy->id, 'imageId' => $gallery->id]) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        @include('components.button', [
                'name' => 'delete',
                'type' => 'submit',
                'label' => 'Delete',
                'role' => 'submit',
                'class' => 'font-Montserrat select-none rounded-lg bg-gradient-to-tr from-rose-950 to-red-800 py-2 px-4 text-center align-middle  text-md font-bold  text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none'
            ])
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
@endsection
