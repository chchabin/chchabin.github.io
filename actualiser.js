"use strict";
(()=>{
    //paramétrage des données
    const jourAff = 3;
    const heureAff = 14;
    const duree=2;
    //paramétrage des variables
    const date = new Date();
    const heure = date.getHours();
    const jour = date.getDate();
    //fonctions
    function actualiser() {
        const e1 = document.getElementById("e1");
        const e2 = document.getElementById("e2");
        e1.style.display = "none";
        e2.style.display = "none";
       // console.log(jour);
        if(jour === jourAff){
            //ouverture de e1
            if (jour === jourAff && (heure >= heureAff &&  heure<= heureAff + duree)) {

                if (getComputedStyle(e1).display === "none") {
                    e1.style.display = "block";
                }
            }
            //ouverture de e2 à e1+2
            if (jour === jourAff && (heure >= (heureAff+2) &&  heure<= (heureAff+2) + duree)) {

                if (getComputedStyle(e1).display === "none") {
                    e1.style.display = "block";
                    e2.style.display = "block";
                }
            }
        }
        else{clearInterval(actualiser);}
    }
    (()=>{
        actualiser();
        setInterval(actualiser,5000);
    })();
})();

/*
<script type="text/javascript">
    "use strict";
    (() => {
    //paramétrage des données
    const jourAff = 28;
    const heureAff = 13;
    const duree = 9;
    //paramétrage des variables
    const date = new Date();
    const heure = date.getHours();
    const jour = date.getDate();

    //fonctions
    function actualiser() {
    const e1 = document.getElementById("e1");
    const e2 = document.getElementById("e2");
    e1.style.display = "none";
    e2.style.display = "none";
    //alert(jour);
    if (jour === jourAff) {
    if (jour === jourAff && (heureAff >= heure && heureAff + duree <= heure)) {
    if (getComputedStyle(e1).display === "none") {
    e1.style.display = "block";
    e2.style.display = "block";
}
}
} else {
    clearInterval(actualiser);
}
}

    (() => {

    actualiser();
    setInterval(actualiser, 5000);
})();
})();

</script>*/
