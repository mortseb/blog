<x-guest-layout>
<a href="../articles">Retour à la liste des articles</a>

    <h1 class="font-bold text-xl mb-4">{{ $article->title }}</h1>
    <div class="mb-4 text-xs text-gray-500">
        {{ $article->published_at }}
    </div>
    <div>
        {!! \nl2br($article->body) !!}
    </div>
    <div class="text-xs text-gray-500">
    <img src="{{ asset('images/' . $article->img_path) }}" alt="">
    </div>
</x-guest-layout>