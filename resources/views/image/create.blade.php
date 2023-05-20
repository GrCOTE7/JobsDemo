@extends('base')

@section('title', 'Image')

@section('content')

    {{-- @dump({{ $session }}) --}}

    <div class="container vstack gap-2 mt-3">
        <h1>Uploader an image</h1>

        <form action="{{ route('image.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">File</label>
                <br>
                <input type="file" name="file" id="file" class="@error('file') is-invalid @enderror">
                @error('file')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary mt-3" type="submit">Apply</button>

        </form>
    </div>
@endsection
