@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Lista progetti</h1>
    
    <table class="project">
        
        <tr>
            <th>Id Progetto</th>
            <th>Nome Progetto</th>
            <th>Campo di utilizzo</th>
            <th>Tipo</th>
            <th>Immagine</th>
            <th>Descrizione</th>
            <th>Data Pubblicazione</th>
        </tr>

        @foreach ( $types as $type)

            @foreach ( $type -> projects as $project)
                
                @if (@isset($type))
                <tr>
                    <td>{{$project -> id}}</td>
                    
                    <td>{{$project -> nome}}</td>

                    <td>     
                        {{$type -> campo_uso}}
                    </td>

                    <td>{{$type -> nome}}</td>

                    <td>

                    <img src="{{$project -> img_riferimento}}" alt="Girl in a jacket" width="50" height="60">
                    
                    </td>

                    <td>{{$project -> descrizione}}</td>
                    
                    <td>{{$project -> data_pubblicazione}}</td>
                
                </tr>
                    
                @else
               
                <tr>
                    <td>{{$project -> id}}</td>
                    
                    <td>{{$project -> nome}}</td>

                    <td>     
                        ok
                    </td>

                    <td>
                        ok
                    </td>

                    <td>

                    <img src="{{$project -> img_riferimento}}" alt="Girl in a jacket" width="50" height="60">
                    
                    </td>

                    <td>{{$project -> descrizione}}</td>
                    
                    <td>{{$project -> data_pubblicazione}}</td>
                
                </tr>
                    
                @endif
            
            @endforeach

        @endforeach 
       
@endsection
