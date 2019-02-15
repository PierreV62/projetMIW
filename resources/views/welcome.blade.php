@extends('layouts.app')

@section('content')
<div class="containerAcceuil"> 
    <div class="coloneGauche">
        <div class="videoPresentation">
        <iframe class="videoPresentation" src="https://www.youtube.com/embed/V_MXGdSBbAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="aPropos green">
            <h2> A propos de nous : </h2>
            <hr>
            <p>
                Bonjour et bienvenue sur La Radinerie, ce site à pour but d'informer les utilisateurs des differentes promos se trouvants à proximité d'eux ou à un endroit precis choisit par celui-ci.
            </p>
        </div>
    </div>
    
    <div class="coloneDroite green">
        <h5> Vous cherchez des promotions près de chez vous ? </h5>
        <div class="descriptifCarte">
            <div class="descriptifCarteItem">
                <label>
                    Que cherchez vous ? 
                </label>
                <input type="text" id="categorie" placeholder="Ex : Restaurant"/>
            </div>
            <div class="descriptifCarteItem">
                <label>
                    où ? 
                </label>
                <input type="text" id="ville" placeholder="Ex : Gap"/>
            </div>
            
        </div>
    </div>
</div>
@endsection