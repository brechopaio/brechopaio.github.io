<?php

$azureMapsKey = '<yQWArQ19F7PiMdW3cyT5VKwAJlzVSoxNRrv78pLSNmY>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <!-- Inclua o script da API do Azure Maps -->
    <script type="text/javascript" src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.js"></script>
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
<body>

    <h1>Sobre Nós</h1>
    
    <!-- Div para o mapa -->
    <div id="map"></div>

    <script>
        // Chave da API do Azure Maps
        var azureMapsKey = '<?php echo $azureMapsKey; ?>';

        // Configurações do mapa
        var map = new atlas.Map('map', {
            center: [-122.33, 47.60],  // Coordenadas de exemplo (Seattle)
            zoom: 12,
            view: 'Auto',
            authOptions: {
                authType: 'subscriptionKey',
                subscriptionKey: azureMapsKey
            }
        });
    </script>

</body>
</html>
