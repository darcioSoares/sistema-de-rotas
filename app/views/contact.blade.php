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

    <hr>

    <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button>upload</button>
    </form>

@endsection
