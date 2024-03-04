<x-layout>

    <div class="container-fluid bg-one text-center text-white marginfascia">
        <div class="row justify-content-center">
            <h2 class="font-title my-3">
                I NOSTRI ARTICOLI: 
            </h2>
        </div>
    </div>


      {{-- SEZIONE ARTICOLI --}}
    
    <section class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 col-sm-6 mb-5">
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
    </section>


    </x-layout>
