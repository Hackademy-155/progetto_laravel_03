<x-layout>

    
    <x-header> 
        BENVENUTI SU AUTOTRASH
    </x-header>
    
   
    @if (session('emailSent'))
    <div class="alert alert-success">
        {{ session('emailSent') }}
    </div>
@endif
   
    
</x-layout>