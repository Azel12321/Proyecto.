<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transición de Caja</title>
    <style>
        .caja {
            width: 200px;
            height: 200px;
            background-color: #3498db;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .caja:hover {
            transform: rotateY(180deg);
        }

        .cara {
            position: absolute;
           padding: auto;
           height: 60px;
           width: 60px;
           
            backface-visibility: hidden;
        }

        .cara-adelante {
            background-color: #3498db;
            transform: rotateY(180deg);
        }

        .cara-atras {
            background-color: #e74c3c;
            transform: rotateY(180deg);
        }
    </style>
</head>
<body>
    <div class="caja">
        <div class="cara cara-adelante"></div>
        <div class="cara cara-atras"></div>
    </div>
</body>
</html>