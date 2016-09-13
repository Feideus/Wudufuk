@extends('master')

@section('head')
<link rel="stylesheet" href="{{ URL::asset('css/mainscreen.css') }}"/>
@stop

@section('header')

<div><p>Here you will find everending Fun !</p></div>

@stop

@section('content')
<div id="ongletPhoto"><p>Onglet Photo</p></div>
<div id="ongletGif"><p>Onglet Gif</p></div>
<div id="ongletVideo"><p>Onglet Video</p></div>
<div id="divBouton"><button id="leBouton">Suivant</button></div>
<div><img src="photos/giphy.gif" style="height: 100%; width: 100%; object-fit: contain"></img><!--p>Gifs are to be put here</p--></div>

@stop

@section('chatbox')

 <div class="chatbox"><div><p>ChatBox will be there !</p></div></div>

@stop
