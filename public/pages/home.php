<section id="category" class="reduce flex">
    <a class="fifty" href="food.html"><img class="responsive" src="img/Alimentation.png" alt="Photo de nourriture pour animaux"></a>
    <a class="fifty" href="Accessories.html"><img class="responsive" src="img/Accéssoires.png" alt="photo d'accessoires pour animaux"></a>
    <a class="fifty" href="Services.html"><img class="responsive" src="img/Nos Services.png" alt="Photo d'un dogsitter"></a>
    <a class="fifty" href="Advices.html"><img class="responsive" src="img/Nos Conseils.png" alt="un véterinaire tenant un lézard"></a>
</section>
<section id="best-of" class="relative align-center bg-grey">
    <h2>Nos best-sellers</h2>
    <div class="reduce flex">
        <?php
            foreach ($_SESSION['articles'] as $product){
                echo('
                    <div class="product two-col InBl">
                        <img class="responsive" src="img/'.$product['PhotoName'].'" alt="'.$product['altValue'].'">
                        <div class="InfoProduct">
                            <div class="max-left">'.$product['productName'].'</div>
                            <div><img src="img/ico/Cat-alim-ico.png" alt="catégorie alimentation" class="max-right"></div>
                            <div class="Prix">'.$product['prix'].'€</div>
                            <div><a href="addToCart.php" class="btn btn-gold">Ajouter</a></div>
                        </div>
                    </div>
                ');
            }
        ?>
    </div>
    <img src="img/chatsurbloc.png" alt="Chat accoudé sur le bloc"  class="absolute " id="FirstCat">
    <img src="img/chatjoueurbestsellers.png" alt="Chat qui essaie d'attraper les produits"  id="SecondCat" class="absolute">
</section>
<section id="avis">
    <h2>Déja des centaines de clients satisfaits</h2>
    <div class="reduce flex">
        <img src="img/Commentaire1.png" alt="" class="quart">
        <img src="img/Commentaire2.png" alt="" class="quart">
        <img src="img/Commentaire3.png" alt="" class="quart">
        <img src="img/Commentaire4.png" alt="" class="quart">
    </div>
    <div class="reduce">
        <div class="tiers InBl">
            <img src="img/ico/Avis-paiement-securisé.png" alt="" width="150px">
            <h3>Paiements<br>sécurisés</h3>
        </div>
        <div class="tiers InBl">
            <img src="img/ico/Avis-livraison24H.png" alt="">
            <h3>Livraison<br>en 24H</h3>
        </div>
        <div class="tiers InBl">
            <img src="img/ico/Avis-refund.png" alt="" >
            <h3>Satisfait ou<br>remboursé 30 jours</h3>
        </div>
        <div class="tiers InBl">
            <img src="img/paiement-secu.png" alt="" width="115px">
            <h3>Paiements<br>sécurisés</h3>
        </div>
        <div class="tiers InBl">
            <img src="img/livraison-24h-chronometre.png" alt="" width="150px">
            <h3>Livraison<br>en 24H</h3>
        </div>
        <div class="tiers InBl">
            <img src="img/ico/Avis-remboursement.png" alt="" >
            <h3>Satisfait ou<br>remboursé 30 jours</h3>
        </div>
    </div>
</section>
<section class="relative bg-grey">
    <h2>Nos services 3.0</h2>
    <article class="flex fifty m-auto">
        <div class="four-col flex column fifty">
            <h3 class="align-left">Un programme de l'armée Américaine</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis consectetur, obcaecati assumenda nostrum ipsum enim soluta unde delectus, nam impedit earum dolorem itaque eveniet praesentium possimus voluptas sit repellat eaque.</p>
            <img class="responsive" src="img/Servives_chien.png" alt="chien soldat">
        </div>
        <div class="four-col flex column fifty">
            <img class="responsive" src="img/Services_astronaute.png" alt="voyage dans l'espace">
            <h3 class="align-left">Envoyez votre compagnon dans l'espace</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio veniam voluptatum perferendis porro, laudantium labore dolorem possimus mollitia pariatur, fuga dicta illo ipsum tenetur, nihil eaque iure vitae dolor rerum.</p>
        </div>
    </article>
    <a href="#" class="btn btn-gold">Plus de détails</a>
    <img src="img/chiots_appuyés.png" alt="" class="absolute" id="dogs">
    <img src="img/fusée.png" alt="" class="absolute" id="fusee" />
</section>
<section class="reduce align-center">
    <figure class="tiers InBl">
        <img src="img/Capard.png" alt="Photo du fondateur">
        <figcaption>M Capard, le fondateur</figcaption>
    </figure>
    <div class="tiers InBl">
        <h2>Qui sommes nous?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere atque itaque voluptate magni. Ex doloribus, ratione libero nisi placeat aspernatur consequatur
                quas accusamus nemo cupiditate! Sequi qui quis eaque sed? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic nesciunt culpa aliquam earum voluptate
                amet rerum dolorum eius. Deleniti quaerat, adipisci eveniet magni totam et eum corrupti delectus corporis earum? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur, inventore! Facilis ullam incidunt expedita ad at a dolorem nesciunt distinctio, laboriosam enim, pariatur assumenda rem possimus minima perspiciatis consectetur minus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere atque itaque voluptate magni. Ex doloribus, ratione libero nisi placeat aspernatur consequatur
                quas accusamus nemo cupiditate!</p>
    </div>
    <div class="tiers InBl">
        <figure>
            <img src="img/boutique.png" alt="l'interieur de notre boutique">
            <figcaption>Notre boutique</figcaption>
        </figure>
    </div>
</section>