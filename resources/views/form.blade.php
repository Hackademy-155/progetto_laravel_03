<x-layout>
    <x-header> 
        Parla con noi
    </x-header>

    @if (session('emailError'))
    <div class="alert alert-danger">
        {{ session('emailError') }}
    </div>
    @endif
    
    <div class="container mt-5 p-5 bg-body-secondary">
        <h2 class="text-center">Contattaci</h2>
        <form class="p-5 shadow" action="{{route('contatto.invio')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="name" name="nome" placeholder="Inserisci il tuo nome" required>
            </div>
            <div class="form-group mb-3">
                <label for="cognome">Cognome</label>
                <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserisci il tuo cognome" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="mail" placeholder="Inserisci la tua email" required>
            </div>
            <div class="form-group">
                <label for="floatingTextarea2">Comments</label>
                <textarea class="form-control" name="messaggio" placeholder="scrivici la tua opinione" id="description" style="height: 100px"></textarea>
                
            </div>
            
            <button type="submit" class="btn btn-primary m-3">Invia</button>
        </form>
    </div>
</x-layout>