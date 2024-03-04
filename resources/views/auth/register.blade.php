<x-layout>
    <div class="container-fluid p-5 bg-one text-center text-white title">
        <div class="row justify-content-center">
            <h1 class="display-1 my-3 font-title my-5 py-2">
                Registrati
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="container-form p-5 shadow" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">Username:</label>
                      <input type="text" class="form-control" id="username" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                      
                    
                    <button type="submit" class="btn btn-dark">Registrati</button>
                    <p class="small mt-2 font-title">Già registrato? <a class="mx-2 text-dark font-title" href="{{route('login')}}">clicca qui</a> </p>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
