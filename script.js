  
    document.getElementById("home-link").addEventListener("click", function() {
        // Ana container'ın arka planını değiştir
        document.querySelector(".container").style.backgroundImage = "url('amanzara.jpg')";
    });

    document.getElementById("about-link").addEventListener("click", function() {
        // Ana container'ın arka planını değiştir
        document.querySelector(".container").style.backgroundImage = "url('different-image.jpg')";
    });

    document.getElementById("lyrics-button").addEventListener("click", function() {
        // İlgili işlemleri yap
        // Örneğin, merkezi metni değiştir
        document.querySelector(".center h1").innerText = "New Title";
    });

    document.getElementById("listen-button").addEventListener("click", function() {
        // İlgili işlemleri yap
    });

