<!DOCTYPE html>
<html>
<head>
    <title>Test AJAX</title>
    <script>
        function loadSpecies() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var species = JSON.parse(this.responseText);
                    var speciesList = document.getElementById("species-list");
                    speciesList.innerHTML = "";
                    for (var i = 0; i < species.length; i++) {
                        var listItem = document.createElement("li");
                        listItem.textContent = species[i].NomEspece;
                        speciesList.appendChild(listItem);
                    }
                }
            };
            xhttp.open("GET", "AJAX.php", true);
            xhttp.send();
        }
    </script>
</head>
<body>
    <h1>Liste des espèces</h1>
    <button onclick="loadSpecies()">Charger les espèces</button>
    <ul id="species-list"></ul>
</body>
</html>
