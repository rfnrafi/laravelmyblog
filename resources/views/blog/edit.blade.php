@extends("layouts.app")
@section("content")
<div class="flex flex-col items-center justify-center">
    <div class="w-4/5 pt-4 px-5 sm:px-2">
        @if ($errors->any())
        <ul class="flex flex-row gap-2">
            @foreach ($errors->all() as $error)
                <li class="text-xl font-bold bg-red-700 text-white flex items-center justify-center mt-4 px-3 py-2">{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="w-4/5 pt-4 px-5 sm:px-2">
        <h1 class="font-bold text-3xl">Create a post</h1>
    </div>
    <div class="w-4/5 pt-4 px-5 sm:px-2">
        <form action="/blog/{{$post->slug}}"
         method="POST"
        enctype="multipart/form-data">
        @csrf
        @method("PUT")
            <input value="{{$post->title}}" type="text" placeholder="Title..." name="title" class="text-2xl font-bold">
            <textarea name="description" id="" class="w-full h-60" placeholder="description...">{{$post->description}}</textarea>
                {{-- <label for="image" class="text-xl font-bold bg-gray-900 text-white flex items-center justify-center mt-4 px-3 py-2 duration-300 hover:bg-white border border-transparent hover:text-black hover:border hover:border-black cursor-pointer">
                    Select a file
                </label>
            <input id="image" name="image" type="file" class="hidden"> --}}
            <button type="submit" class="text-xl font-bold bg-white text-black flex items-center justify-center mt-4 px-3 py-2 duration-300 hover:bg-black border border-black hover:text-white hover:border hover:border-transparant cursor-pointer">SUBMIT</button>
        </form>
    </div>
</div>
@endsection
