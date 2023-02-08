@extends('base')

@section('page_title', 'Contact')

@section('content')

<div class="contact">
    		<h2>Contact :</h2>
	<ul>
    {{-- -- affichage de l'adresse et tel --}}
		<li> {{"téléphone : le 06 00 00 00 00"}}</li>
    	<li>{{"adresse : 5 Bd Louis XIV, 59800 Lille"}}</li>
	</ul>
</div>

 {{-- pour affichage de la carte --}}
<div class="maps">
	<ul>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9156913348857!2d3.0682156159653724!3d50.628682979500375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1674488780417!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</ul>
</div>
	<br>
    {{-- formulaire page de contact --}}
	<div class="formulaire">
    <h2>formulaire de Contact</h2>
			<form action="#" method="post">
				<label for="nom">Votre Nom : </label>
				<input type="text" name="nom" id="nom" placeholder="votre Nom" required="">
				
				<label for="nom">Sujet : </label>
				<input type="text" name="sujet" id="sujet" placeholder="l'objet de votre message" required="">
		
				<label for="email">Votre Email : </label>
				<input type="text" name="email" id="email" placeholder="votre Email" required="">
		
					<label for="message">Message : </label>
					<!-- texarea permet d'ajouter plusieurs lignes -->
					<textarea name="message" id="message" placeholder="Votre message"  required=""></textarea>

					<input type="submit" value="Envoyer">
				</div>
								
			</form>


	<br>
    @endsection