@props(['post'])

<article class="mb-8 bg-gray-800 shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)
        <a href="{{route('post.show',$post)}}"><img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""></a>
        
    @else
        <a href="{{route('post.show',$post)}}"><img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/03/17/13/04/desert-4940300_1280.jpg" alt=""></a>
        
    @endif
    {{-- <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""> --}}

    <div class="">
		<div class="pb-2">
            
			@foreach($post->tags as $tag)
                <a class="px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-r m-0" href="{{route('posts.tag',$tag)}}">{{$tag->name}}</a>
            @endforeach
        </div>
        <h1 class="font-bold text-xl mb-2 text-gray-200">
            <a href="{{route('post.show',$post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-200 text-base">
            {!!$post->extract!!}
        </div>
        
    </div>
</article>