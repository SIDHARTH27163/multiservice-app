@extends('admin.layout.layout')

@section('content')
<div class="container bg-white">
    <h1>Gallery for {{ $casestudy->title }}</h1>

    <form action="{{ route('managecasestudies.addImageToGallery', $casestudy->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="images">Add Images:</label>
            <input type="file" name="images[]" multiple class="form-control">
        </div>
        <button type="submit" class="bg-rose-600">Upload</button>
    </form>

    <hr>

    <h2>Existing Images</h2>
    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Image" class="img-fluid">
                    <form action="{{ route('managecasestudies.deleteImageFromGallery', ['id' => $casestudy->id, 'imageId' => $gallery->id]) }}" method="POST" style="margin-top: 10px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" bg-rose-700 btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
