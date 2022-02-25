<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-100">{{$post->name}}</h1>

        
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

            <!-- CONTENIDO PRINCIPAL -->
            
            <div class="lg:col-span-2">
                <div class="post text-justify mb-2 text-lg text-gray-100">
                    {!!$post->extract!!}
                </div>
                <figure>
                   @if ($post->image)
                       <img class="object-cover object-center w-full h-full" src="{{Storage::url($post->image->url)}}" alt="">
                   @else
                       <img class="object-cover object-center w-full h-80" src="https://cdn.pixabay.com/photo/2020/03/17/13/04/desert-4940300_1280.jpg" alt="">
                   @endif 
                </figure>
                <div class="post text-justify mt-4 text-base text-gray-100">
                    {!!$post->body!!}
                </div>
                <div class="flex justify-end mt-4 text-base">
                    <b class="text-yellow-400">Posted by: {{$post->user->name}}</b> 
                </div>
            </div>
            <!-- CONTENIDO RELACIONADO -->
            <aside>
                <h1 class="mb-4 text-2xl font-bold text-gray-100">Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('post.show',$similar)}}">
                                @if ($similar->image)
                                    <img class="object-cover object-center h-20 w-36" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                    <img class="object-cover object-center h-20 w-36" src="https://cdn.pixabay.com/photo/2020/03/17/13/04/desert-4940300_1280.jpg" alt="">
                                @endif
                                <span class="ml-2 text-gray-100">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
