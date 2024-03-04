<x-layout>

    <div class="container-fluid text-center text-white title marginfascia">
        <div class="row justify-content-center fs-5 align-item-center">
            <h2 class="mt-3 font-title">
                NEWS IN PRIMO PIANO
            </h2>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container marginsection">
        @foreach ($articles as $article)
            
        <div class="linea"></div>

            <section class="row my-3 justify-content-between" id="{{ $loop->iteration }}">
                
                @if ($loop->iteration % 2 == 1)
                    <div class="col-4">
                        <a class="text-decoration-none text-dark fw-bold" href="{{ route('article.show', compact('article')) }}">
                            <h2 class="">{{ $article->title }}</h2>
                        </a>
                        {{-- <a class="text-decoration-none text-dark"
                            href="{{ route('article.show', compact('article')) }}">
                            <h3>{{ $article->subtitle }}</h3>
                        </a> --}}
                        <a class="text-decoration-none text-dark"
                            href="{{ route('article.show', compact('article')) }}">
                            <p class="fst-italic text-troncato"> {{ $article->body }}</p>
                        </a>
                        <span>Tempo di lettura: {{$article->readDuration()}} minuti</span>
                    </div>
                    <div class="col-6">
                        <div class="position-relative">
                            @if ($article->category)
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="position-absolute top-0 start-100 translate-middle-x badge font-corsivo p-2 fs-4 bg-danger">
                                {{ $article->category->name }}</a>
                            @else
                            <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                            @endif
                        <a href="{{ route('article.show', compact('article')) }}"><img class="image-container"
                                src="{{ Storage::url($article->image) }}" alt="">
                        </a>
                                <div class="card-footer text-muted d-flex justify-content-center align-items-center">
                                  Redatto il {{ date_format($article->created_at, 'd/m/Y') }}
                                  <span class="ps-2">
                                      da
                                  </span>
                                  <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}"
                                      class="ps-1 small text-muted d-flex justify-content-center d-inline-block align-items-center ml-2">
                                      {{ $article->user->name }}
                                  </a>
                                  
                                </div>
                        </div>
                    </div>
                    
                @else
                
                    <div class="col-6">
                        <div class="position-relative">
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="position-absolute top-0 start-0 translate-middle-x badge bg-danger p-2 fs-4 font-corsivo">
                                {{ $article->category->name }}
                            </a>
                        <a href="{{ route('article.show', compact('article')) }}">
                            <img class="image-container" src="{{ Storage::url($article->image) }}" alt="">
                        </a>
                        <div class="card-footer text-muted d-flex justify-content-center align-items-center">
                          Redatto il {{ date_format($article->created_at, 'd/m/Y') }}
                          <span class="ps-2">
                              da
                          </span>
                          <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}"
                              class="ps-1 small text-muted d-flex justify-content-center d-inline-block align-items-center ml-2">
                              {{ $article->user->name }}
                          </a>
                          <span>{{$article->readDuration()}}</span>
                        </div>
                      </div>
                    </div>
                      <div class="col-4">
                          <a class="text-decoration-none text-dark"
                              href="{{ route('article.show', compact('article')) }}">
                              <h2 class="corsivo-inclinato">{{ $article->title }}</h2>
                          </a>
                          {{-- <a class="text-decoration-none text-dark"
                              href="{{ route('article.show', compact('article')) }}">
                              <h3>{{ $article->subtitle }}</h3>
                          </a> --}}
                          <a class="text-decoration-none text-dark "
                              href="{{ route('article.show', compact('article')) }}">
                              <p class="fst-italic text-troncato">{{ $article->body }}</p>
                          </a>
                          <span> Tempo di lettura: {{$article->readDuration()}} minuti</span>
                      </div>
                  @endif                  
              </section>
          @endforeach
          <div class="linea"></div>
  
      </div>
  
    
  
  
  </x-layout>

        

      
      
      
      
      
      
