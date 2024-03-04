<x-layout>

    <div class="container-fluid bg-one text-center text-white margin-careers">
        <div class="row justify-content-center">
            <h2 class="font-title my-3">
                TITOLO: {{ $article->title }}
            </h2>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            
                <div class="col-12 col-md-8 overflow-hidden">
                    <img src="{{Storage::url($article->image) }}" alt="" class="img-fluid image mx-5">
                    <div class="text-center">
                        <h2>{{ $article->subtitle }}</h2>
                        <div class="my-3 text-muted fst-italic">
                            <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/y') }}</p>
                        </div>
                    </div>
                    <hr>
                    <p class="acapo text-pre-line">{{ ($article->body) }}</p>
                    <div class="text-center">
                        <a href="{{ route('article.index')}}" class="btn btn-dark text-white my-5">Torna indietro</a>
                    </div>
                </div>
            <div class="d-flex justify-content-between">
                @if (Auth::user() && Auth::user()->is_revisor)
                <form class="none" action="{{ route('revisor.rejectArticle', compact('article')) }}" method="POST">
                    @csrf
                    <button class="take btn btn-danger text-white">Rifiuta l'articolo</button>
                </form>
                <form class="none" action="{{ route('revisor.acceptArticle', compact('article')) }}" method="POST">
                    @csrf
                    <button class="take btn btn-success text-white">Accetta articolo</button>
                </form>
                @endif
            </div>
        </div>
    </div>
    
    
    </x-layout>
                
                    