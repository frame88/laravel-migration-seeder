{{-- Esercizio di oggi:
nome repo: laravel-migration-seeder
Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto :occhiolino:
Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.
Lunedì lavoreremo sulla stessa repo per aggiungere i seeder. --}}

{{-- SECONDA MILESTONE LUNEDI 21/02

    
Ciao Ragazzi,
ecco la repo di oggi
https://github.com/ChiaraPassaro/classe49-real-estate
Esercizio
Stessa repo di venerdì
aggiungiamo un TrainSeeder
php artisan make:seeder TrainSeeder
Usiamo anche Faker per i dati, il procedimento è nelle slide :faccia_leggermente_sorridente:
Infine proviamo a fare una Show come visto stamattina
Domani alle 9.30 lezione su Git con @Elisabetta Dahò
Buon Lavoro! :laptop_parrot: --}}

@extends('layouts.base')

@section('content')
<div class="cards">
@foreach ($trains as $train)
    <ul class="card">
        <li>Agenzia {{ $train -> agency }}</li>
        <li>Partenza {{ $train -> departure_station }} - {{ $train -> departure_time }}</li>
        <li>Arrivo{{ $train -> arrival_station }} - {{ $train -> arrival_time }}</li>
        <li>{{ $train -> train_code }} - N# Carrozze: {{ $train -> train_carriage }}</li>
        <li>{{ ($train -> in_time) ? 'in orario' : 'in ritardo' }}</li>
        <li>{{ ($train -> deleted) ? 'Cancellato' : ''  }}</li>
    </ul>
@endforeach
</div>
@endsection
