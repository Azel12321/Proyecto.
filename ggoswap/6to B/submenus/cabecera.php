<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<header>
       
       <h1 id="alexo">mas informacion</h1>
       
    </header>
    <nav id="uni"><a href="" id="pexo">EDUCACION</a></nav>
    <nav id="dosi"><a href="" id="pexo">RECOLECCION</a></nav>
    <nav id="tresi"><a href="" id="pexo">TIENDA</a></nav>
    <section class="s1"> 
        <div class="cara cara-adelante"></div>
      <div class="cara cara-atras"></div>
</section >
    <section class="s1s"></section>
    <section class="s2">
         <div class="image-container">
    <img src="" alt="Imagen"> 
</section>
    <section class="pie" ><h1>horarios:</h1> <br> coming soon </section>
    <script> //estoy usando jqly
    const images = [
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY9LQ-y5tiNYZugiTwNAiUNWHyfnbejT07jA&s",
      "https://img.freepik.com/free-photo/galactic-night-sky-astronomy-science-combined-generative-ai_188544-9656.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1724371200&semt=ais_hybrid",
      "https://img.freepik.com/fotos-premium/pico-montana-nevada-galaxia-estrellada-majestad-ia-generativa_1038396-50.jpg"
    ];
    function changeImage() {  
      const imageContainer = document.querySelector(".image-container");
      const randomIndex = Math.floor(Math.random() * images.length);
      imageContainer.querySelector("img").src = images[randomIndex];
    }
    setInterval(changeImage, 1000);
  </script>
</body>
</html>