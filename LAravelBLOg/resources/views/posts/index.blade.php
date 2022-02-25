<x-app-layout>

    <div class="container py-8">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-2">
            @foreach ($posts as $post)
                <article class="@if($loop->first) md:col-span-1 @endif bg-gray-900 bg-opacity-25">
                    <a href="{{route('post.show',$post)}}">
                        <figure>
                            @if ($post->image)
                                <img class="object-fill w-full h-80" src="{{Storage::url($post->image->url)}}" alt="">
                            @else
                                <img class="object-cover object-center w-full h-80" src="https://cdn.pixabay.com/photo/2020/03/17/13/04/desert-4940300_1280.jpg" alt="">
                            @endif 
                        </figure>
                        {{-- <div class="flex flex-col justify-center w-full h-full px-8"> --}}

                        <div class="">
                            @foreach($post->tags as $tag)
                                    <a class="px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-r m-0" href="{{route('posts.tag',$tag)}}">{{$tag->name}}</a>
                            @endforeach
                            
                            
                        </div>

                        <h1 class="mt-2 text-2xl font-bold leading-8 ">
                            <a href="{{route('post.show',$post)}}" class="text-yellow-400">{{$post->name}}</a>
                        </h1>
                        <div class="">
                                <b class="text-red-600"><i>By: {{$post->user->name}}</i></b>
                        </div>
                    {{-- </div> --}}
                    </a>
                </article>
            @endforeach
        </div>

        <div class="mt-4 text-gray-200 ">
            {{$posts->links()}}
        </div>
    </div>

</x-app-layout>
