@extends('templates.default')


@section('content')
    <h1>Contatos</h1>   

    <form action="/contact" method="POST">
    
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="lastName">Sobre nome</label>
            <input type="text" name="lastName">
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection
