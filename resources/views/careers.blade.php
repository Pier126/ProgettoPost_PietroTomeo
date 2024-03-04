<x-layout>

    <div class="container-fluid bg-one text-center margin-careers">
        <div class="row justify-content-center">
            <h2 class="font-title mt-3 text-white">Lavora con noi!</h2>
        </div>
    </div>
    <div class="container-carrers my-5">
        <div class="row justify-content-between align-items-center border rounded p-2 box">
            <div class="col-12 col-md-6 text-center ">
                <h2 class="subtitle">Lavora come amministratore</h2>
                <p class="fw-small">La sua responsabilità principale è monitorare attentamente le richieste di lavoro che giungono attraverso
                    la piattaforma, assicurandosi che ogni richiesta sia adeguatamente indirizzata e che i potenziali candidati siano idonei per le posizioni disponibili.</p>
                <h2 class="subtitle">Lavora come revisore</h2>
                <p>La sua responsabilitä principale comprende la pianificazione e l’esecuzione di procedure di conferma esterna, come la circolarizzazione, per acquisire dati da terzi e esaminare le asserzioni, la coerenza e la correttezza dei contenuti.</p>
                <h2 class="subtitle">Lavora come redattore</h2>
                <p>Il redattore si occupa della ricerca, produzione, selezione e revisione di testi e contenuti destinati alla pubblicazione. L’obiettivo del lavoro del redattore è la pubblicazione di contenuti di qualità, che interessano il pubblico target, formalmente corretti e rispettosi delle linee guida editoriali.</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('careers.submit')}}" method="POST" class="p-5">
                    @csrf
                    <div class="md-3">
                        <label for="role" class="form-label ruolo">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                            
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="title" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" placeholder="Scrivi qui" rows="7" class="form-control">{{old('message')}}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-dark text-white">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    
    
    </x-layout>