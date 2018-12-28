@extends('plantilla')

@section('titulo')
<title>Nosotros</title>
@endsection

@section('seccion')
    <h1>Este es mi equipo de trabajo</h1>
   @foreach ($equipo as $item)
<a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
   @endforeach

   @if (!empty($nombre))
        @switch($nombre)
            @case($nombre=='jose')
                <h2 class="mt-5">El nombre es {{$nombre}}: </h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta amet veritatis cum voluptatibus praesentium inventore reprehenderit optio iure ullam aut, repellendus voluptas adipisci? Dolor ex fugit laboriosam dolore quibusdam eligendi!</p>
                
                @break
            @case($nombre=='lucho')
            <h2 class="mt-5">El nombre es {{$nombre}}: </h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta amet veritatis cum voluptatibus praesentium inventore reprehenderit optio iure ullam aut, repellendus voluptas adipisci? Dolor ex fugit laboriosam dolore quibusdam eligendi!</p>
            
                
                @break
            @case($nombre=='andres')
            <h2 class="mt-5">El nombre es {{$nombre}}: </h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta amet veritatis cum voluptatibus praesentium inventore reprehenderit optio iure ullam aut, repellendus voluptas adipisci? Dolor ex fugit laboriosam dolore quibusdam eligendi!</p>
            
                
                @break
            @default
                
        @endswitch
   @endif

@endsection