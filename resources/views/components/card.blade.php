
<div class="card my-0">
    <a href="{{ route('article.show', compact('article')) }}"><img src="{{ Storage::url($article->image) }}" alt="" data-aos="zoom-in" data-aos-delay="300" class="card-img-top"></a>
    <div class="card-body">
        <h2 class="card-title text-center fw-bold font-title">{{$article->title }}</h2>
        <p class="card-text text-center">{{ $article->subtitle }}</p>
        @if ($article->category)
            <a href="{{ route('article.byCategory' , ['category' => $article->category->id]) }}" class="small text-muted d-flex justify-content-center align-items-center"> {{ $article->category->name }} </a>
        @else
            <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
        @endif
        <span class="text-muted small fst-italic">Tempo di lettura {{$article->readDuration()}} min</span>
        @if ($tags)
        <p class="small text-justify fw-bold text-capitalize">
            @foreach ($tags as $tag)
                #{{ $tag->name }}
            @endforeach
        </p>
        @endif


    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">

            Redatto il {{ date_format($article->created_at, "d/m/Y") }} 


        <span class="ps-2">
            da
        </span> 



            <a href="{{ route('article.byUser' , ['user' => $article->user->id]) }}" class="ps-1 small text-muted d-flex justify-content-center d-inline-block align-items-center ml-2"> {{ $article->user->name }} 
            </a> 

    </div>
        <a href="{{ route('article.show' , compact('article')) }}" class="read btn btn-dark text-white">Leggi</a>
</div>


{{-- //card PROVA --}}

{{-- <div class="wrapper-grey padded">
    <div class="container">
      <div class="col-xs-12 col-sm-4">
          <div class="card-body" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('{{ Storage::url($article->image) }}');">
            <a href="{{ route('article.byCategory' , ['category' => $article->category->id]) }}" class="small text-muted d-flex justify-content-center align-items-center"> {{ $article->category->name }} </a>
            <div class="card-description">
              <h2>{{ $article->title }}</</h2>
              <p>{{ $article->subtitle }}</p>
            </div>
            <img class="card-user avatar avatar-large" src="">
            <a class="card-link" href="{{ route('article.show' , compact('article')) }}" >Leggi l'articolo</a>
          </div>
        </div>
        
        
      </div>
    </div>
  </div> --}}