<x-layout>
    <div class="container-fluid bg-one text-center text-white margin-careers">
        <div class="row justify-content-center">
            <h2 class="font-title my-3">
                BENTORNATO AMMINISTRATORE
            </h2>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="subtitle font-title">Richiesta per ruolo di amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="subtitle font-title">Richiesta per ruolo di revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="subtitle font-title">Richiesta per ruolo di redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="subtitle font-title">I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="subtitle font-title">Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categories"/>
                <form action="{{ route('admin.storeCategory') }}" class="d-flex" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control py-2" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn btn-success text-white">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
                

