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
        <h1 class="font-bold text-3xl">{{$post->title}}</h1>
            <span class="text-lg text-gray-700">Created by <span class="font-bold">{{$post->user->name}}</span> at {{date("jS M Y", strtotime($post->created_at))}}</span>
    </div>
    <div class="w-4/5 pt-4 px-5 sm:px-2">
        <p>{{$post->description}}</p>
    </div>

</div>
@endsection
