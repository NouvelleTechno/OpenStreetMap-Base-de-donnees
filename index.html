<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OpenStreetMap</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <!-- CSS -->
        <style>
            body{
                margin:0
            }
            #maCarte{
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <div id="maCarte"></div>

        <!-- Fichiers Javascript -->
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
        <script>
            // On initialise la carte
            var carte = L.map('maCarte').setView([48.852969, 2.349903], 13);
            
            // On charge les "tuiles"
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(carte);

            let xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = () => {
                // La transaction est terminée ?
                if(xmlhttp.readyState == 4){
                    // Si la transaction est un succès
                    if(xmlhttp.status == 200){
                        // On traite les données reçues
                        let donnees = JSON.parse(xmlhttp.responseText)
                        
                        // On boucle sur les données (ES8)
                        Object.entries(donnees.agences).forEach(agence => {
                            // Ici j'ai une seule agence
                            // On crée un marqueur pour l'agence
                            let marker = L.marker([agence[1].lat, agence[1].lon]).addTo(carte)
                            marker.bindPopup(agence[1].nom)
                        })
                    }else{
                        console.log(xmlhttp.statusText);
                    }
                }
            }

            xmlhttp.open("GET", "http://agence.test/liste_simple.php");

            xmlhttp.send(null);
        </script>
    </body>
</html>