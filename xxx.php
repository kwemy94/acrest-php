<style type="text/css">
#afficher {
   width:500px;
}
#divjoconde {
   display:none;
   background: #ddd
}
#afficher:target #divjoconde {
   display:block
}
.masquer {
   display:none;
}
#afficher:target .masquer {
   display:inline;
}
#afficher:target .afficher {
   display:none;
}
</style>

le code HTML :

   <div id="afficher">
      <div id="masquer">
         <p>
          Léonard de Vinci, né à Vinci le 15 avril 1452 et mort à Amboise le 2 mai 1519, est un peintre florentin et un homme d'esprit universel, à la fois artiste, organisateur de spectacles et de fêtes, scientifique, ingénieur, inventeur, anatomiste, peintre, sculpteur, architecte, urbaniste, botaniste, musicien, poète, philosophe et écrivain. océan de langues.
         </p>
         
         <p>
            C'est d'abord comme peintre que Léonard de Vinci est reconnu. Deux de ses œuvres, 
            <a href="#afficher" class="afficher">La Joconde1</a>
            <a href="#masquer" class="masquer">La Joconde</a> 
            et La Cène, sont des peintures mondialement célèbres, souvent copiées et parodiées
         </p>

         <p id="divjoconde">
         <img src="IMG/g_civil1.jpg">
         </p>

         
      </div>
   </div>
</body>