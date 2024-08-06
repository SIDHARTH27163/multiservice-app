@extends('admin.layout.layout')

@section('content')
@include('components.confirm-modal', ['id' => 'confirmModal', 'message' => 'Are you sure you want to delete this item?'])

<div class="p-4 border-2 border-dashed rounded-lg border-gray-700 font-Robotomedium ">
    @include('components.heading', ['headingText' => 'Manage Case Studies Here', 'headingClass' => 'text-2xl font-semibold font-Montserrat text-gray-950'])

    <div class="max-w-6xl mx-auto p-2 flex justify-center py-8">
        <form action="{{ isset($casestudy) ? route('managecasestudies.update', $casestudy->id) : route('managecasestudies.store') }}" method="post" enctype="multipart/form-data" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4 rounded-lg shadow-lg">
            @csrf
            @if(isset($casestudy))
                @method('put')
            @else
                @method('post')
            @endif

            @include('components.input', [
                'name' => 'title',
                'type' => 'text',
                'placeholder' => 'Enter the title',
                'class' => 'border border-rose-500 font-Montserrat',
                'id' => 'title-input',
                'label' => "Enter title",
                'error' => $errors->first('title'),
                'value' => isset($casestudy) ? $casestudy->title : ''
            ])

            @include('components.textarea', [
                'name' => 'description',
                'placeholder' => 'Enter description',
                'class' => 'border border-rose-500 font-Montserrat',
                'id' => 'description-input',
                'label' => "Enter Description",
                'error' => $errors->first('description'),
                'value' => isset($casestudy) ? $casestudy->description : ''
            ])

            @include('components.file', [
                'name' => 'image',
                'label' => "Choose Image",
                'error' => $errors->first('image'),
                'value' => ''
            ])

            @include('components.button', [
                'name' => 'submit',
                'type' => 'submit',
                'label' => "Submit",
                'role' => 'submit',
                'class' => 'font-Montserrat select-none rounded-lg bg-gradient-to-tr from-slate-950 to-gray-800 py-3 px-6 text-center align-middle font-sans text-ls font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none'
            ])
        </form>
    </div>

    <div class="p-3 my-5">
        @if(session('success'))
            @include('components.success-alert', [
                'class' => 'font-playwrite font-white',
                'msg' => session('success')
            ])
        @endif
    </div>

    @if(isset($casestudies))
        <div class="container w-full mx-auto px-2">
            <div class="dark:bg-gray-900 p-3 sm:p-5">
                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                            <div class="w-full md:w-1/2">
                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required>
                                    </div>
                                </form>
                            </div>

                            <!-- Other elements like actions and filter can be added here -->
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Sr.no</th>
                                        <th scope="col" class="px-4 py-3">Title</th>
                                        <th scope="col" class="px-4 py-3">Description</th>
                                        <th scope="col" class="px-4 py-3">Image</th>
                                        <th scope="col" class="px-4 py-3">Edit</th>
                                        <th scope="col" class="px-4 py-3">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($casestudies as $index => $casestudy)
                                        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                                            <td class="px-4 py-3">{{ $casestudy->title }}</td>
                                            <td class="px-4 py-3">{{ $casestudy->description }}</td>
                                            <td class="px-4 py-3">
                                                <img src="{{ asset('storage/' . $casestudy->image) }}" alt="Image" width="100">
                                            </td>
                                            <td class="px-4 py-3">
                                                <a href="{{ route('managecasestudies.edit', $casestudy->id) }}" class="text-blue-600 hover:underline">Edit</a>

                                            </td>
                                            <td class="px-4 py-3">
                                                <form action="{{ route('managecasestudies.destroy', $casestudy->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this case study?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination or other actions can be added here -->
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@endsection
