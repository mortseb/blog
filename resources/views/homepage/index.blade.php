<!-- <h1>Liste des articles</h1>
<ul>
    @foreach($articles as $article)
    <li>{{ $article->title }}</li>
    @endforeach
</ul> -->
<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">Liste des articles</h1>
    <ul class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
        @foreach ($articles as $article)
        <li>
            <a class="flex bg-white rounded-md shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition"
    href="{{ route('articles.show', $article) }}">
    {{ $article->title }}
</a>
        </li>
        @endforeach
    </ul>

    <div class="mt-8">
        {{ $articles->links() }}
    </div>
</x-guest-layout>