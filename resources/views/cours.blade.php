@extends('base')

@section('page_title', 'Cours')

@section('content')

<div class="horaires">
    <h2>Nos horaires de cours :</h2>
        <ul>
            <li>{{"lundi: 19h à 21h - zumba"}}</li>
            <li>{{"mardi: 19h30 à 21h30 - pilate"}}</li>
            <li>{{"jeudi: 20h à 22h - boxe anglaise"}}</li>
            <li>{{"vendredi: 20h à 22h - hiit"}}</li>
            <li>{{"samedi: 9h à 11h - yoga"}}</li>
        </ul>
</div>

<div id="conteneur_cours">
    <!--div id="cadres_photos_cours"-->
    <img class src="img/zumba-pexels.jpg" alt="Cours Zumba">
    <img class src="img/pilate-pexels.jpg" alt="Cours Pilate">
    <img class src="img/boxe-anglaise-pexels.jpg" alt="Cours Boxe anglaise">
    <img class src="img/yoga-pexels.jpg" alt="cours Yoga">
</div>
    
<div id="conteneur_cours_expert">
  
    <img class src="img/conseils-experts.jpg" alt="Cours conseil d'expert">
    <img class src="img/coach-istockphoto.jpg" alt="Cours coach">

</div>


<div class="bas_cours">  
    <ul> 
    <h2>Tritoutum ipsum salutum Cesarum</h2>        
    </ul>
    <ul>
      <h3>Lorem ipsum</h3>
      <p>Lorem ipsum dolor sit amet,
         consectetur adipiscing elit,
         sed do eiusmodtempor 
         incididunt ut labore et dolore magna</p>
         aliqua. Ut enim ad minim veniam, quis 
         nostrud exercitation ullamco laboris nisi 
         ut aliquip ex ea commodo consequat. </p>
         Duis aute irure dolor in reprehenderit in
         voluptate velit esse cillum dolore eu 
         fugiat nulla pariatur. Excepteur sint</p>
        occaecat cupidatat non proident, sunt in</p>
         culpa qui officia deserunt mollit anim 
         id est laborum.</p>
    </ul>
    <ul>
    <h3>Lorem ipsum</h3>
      <p>Lorem ipsum dolor sit amet,
         consectetur adipiscing elit,
         sed do eiusmodtempor 
         incididunt ut labore et dolore magna</p>
         aliqua. Ut enim ad minim veniam, quis 
         nostrud exercitation ullamco laboris nisi 
         ut aliquip ex ea commodo consequat. </p>
         Duis aute irure dolor in reprehenderit in
         voluptate velit esse cillum dolore eu 
         fugiat nulla pariatur. Excepteur sint</p>
        occaecat cupidatat non proident, sunt in</p>
         culpa qui officia deserunt mollit anim 
         id est laborum.</p>
    </ul>

    <ul>
        <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet,
             consectetur adipiscing elit,
             sed do eiusmodtempor 
             incididunt ut labore et dolore magna</p>
             aliqua. Ut enim ad minim veniam, quis 
             nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. </p>
             Duis aute irure dolor in reprehenderit in
             voluptate velit esse cillum dolore eu 
             fugiat nulla pariatur. Excepteur sint</p>
            occaecat cupidatat non proident, sunt in</p>
             culpa qui officia deserunt mollit anim 
             id est laborum.</p>
        </ul>
</div>
    @endsection