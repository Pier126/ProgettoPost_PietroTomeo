<x-layout>

    <div class="container-fluid colorone text-center text-white marginfascia">
        <div class="row justify-content-center">
            <h2 class=" bg-one font-title my-3">
                CATEGORIA: {{ $category->name }}
            </h2>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card
                    :tags="$article->tags"
                    :article="$article"
                    {{-- title="{{ $article->title }}"
                    subtitle="{{ $article->subtitle }}"
                    image="{{ $article->image }}"
                    category="{{ $article->category->name }}"
                    data=" {{ $article->created_at->format('d/m/y') }}"
                    user=" {{ $article->user->name }}"
                    url="{{ route('article.show' , compact('article')) }}"
                    urlCategory="{{ route('article.byCategory' , ['category' => $article->category->id]) }}" --}}
                    />
                </div>
            @endforeach
        </div>
    </div>
 
    
    
    </x-layout>