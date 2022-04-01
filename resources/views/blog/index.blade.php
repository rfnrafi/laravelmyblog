@extends("layouts.app")
@section("content")
<div class="flex flex-col items-center justify-center">
    <div class="w-4/5 pt-4 px-5 sm:px-2">
        <h1 class="text-4xl font-bold">Blog Post</h1>
    </div>
    @if (Auth::check())
        <div class="flex w-4/5 pt-4 px-5 sm:px-2 items-start justify-start">
            <a href="/blog/create" class="text-xl font-bold bg-gray-900 text-white flex items-center justify-center mt-4 px-3 py-2 duration-300 hover:bg-white border border-transparent hover:text-black hover:border hover:border-black">Create a post</a>
        </div>
    @endif
    <div class="w-4/5 pt-4 px-5 sm:px-2">
        @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20">
            <div>
                <img src="{{$post->image_path}}" alt="" class="w-full">
            </div>
            <div class="flex justify-center items-start flex-col">
                <h1 class="text-2xl font-bold">{{$post->title}}</h1>
                <span class="text-lg text-gray-700">Created by <span class="font-bold">{{$post->user->name}}</span> at {{date("jS M Y", strtotime($post->created_at))}}</span>
                <p>{{$post->description}}</p>
                <a href="/blog/{{$post->slug}}" class="text-xl font-bold bg-gray-900 text-white flex items-center justify-center mt-4 px-3 py-2 duration-300 hover:bg-white border border-transparent hover:text-black hover:border hover:border-black">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
