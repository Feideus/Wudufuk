<!DOCTYPE html>
<html>
    <head>
        <title>Wudufuk</title>
        <link href="{{ URL::asset('css/welcome.css') }}" rel="stylesheet"/>
	<script type="text/javascript" src="{!! asset('js/toggleConnectionForm.js') !!}"></script>
    </head>
    <body>
      <header>
        <div class="titles">
	  <div>
	    <p>Bienvunue sur Wudufuk !</p>
	    <div>
	      <form>
		<input type="button" value="Se connecter" class="hiddenButton" onclick="toggleConnectionForm()"/>
	      </form>
	    </div>
	  </div>
	</div>
      </header>
      <div id="connectionForm" value="{{ csrf_token() }}">
	<form method="POST" action="/connection">
	  <div class="inputConnection"><input type="text" value="Pseudo" name="pseudo"></input></div>
	  <div class="inputConnection"><input type="text" value="Password" name="password"></input></div>
	  <button type="submit">Envoyer</button>
	</form>
      </div>
        <footer><p>This site was imagined, designed and developped by Léo 'Superleo19' Barouh and Erwan 'Feideus' Ulrich</p></footer>
    </body> 
    
</html>
