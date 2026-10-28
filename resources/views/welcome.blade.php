<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 header-homepage">
                <h1>Ciao</h1>
            </div>
            @if(session('messaggio'))
                <div class="div-custom">
                    {{session('messaggio')}}
                </div>
            @endif
        </div>
    </div>
</x-layout>