<x-layout>
    <div class="container-fluid p-5 bg-one text-center text-white title">
        <div class="row justify-content-center">
            <h1 class="display-1 my-3 font-title my-3 py-2">
                Accedi
            </h1>
        </div>
    </div>
    <div class="container-login my-5">
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

                <form class="container-form mx-5 shadow" action="{{route('login')}}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" >
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Accedi</button>
                    <p class="small mt-2 font-title">Non sei registrato?<a class="mx-2 text-dark font-title" href="{{route('register')}}">registrati</a> </p>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
                      
                    
