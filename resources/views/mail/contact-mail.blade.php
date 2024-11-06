<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: aquamarine;
            
        }
    </style>
  
</head>
<body>
    <h1>Grazie {{ $nome }} {{ $cognome }}per averci contattato</h1>
    <h2>Risponderemo il prima possibile</h2>
    
    <p>Ecco il riepilogo delle info</p>
    <ul>
        <li>Nome e cognome: {{$nome}} {{$cognome}}</li>
        <li>Indirizzo e-mail: {{$mail}}</li>
        <li>Messaggio: {{$messaggio}}</li>
    </ul>
    <small>Se non hai fatto tu richiesta, ignora pure questa e-mail</small>
</body>
</html>