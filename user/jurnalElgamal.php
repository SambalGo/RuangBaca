<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jurnal algoritma Elgamal</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-center bg-cover px-28 py-64 bg-[url('images/bghitam.jpg')]">
    <div>
    <h1
            class="leading-loose text-center text-white text-4xl font-serif font-semibold"
          >
            Daftar Jurnal Algoritma Enkripsi Elgamal
          </h1>
        </div>
    <div class="flex flex-col items-center justify-center min-h-min">
      <nav class="flex items-center">
        <ul class="flex-1 text-center">
          
          <p id="coin-count" class="text-2xl mb-4 text-white font-mono">
            Koin: 0
          </p>
        </div>
    <div class="flex flex-col items-center justify-center min-h-min">
      <nav class="flex items-center">
        <ul class="flex-1 text-center">
          <img src="images/jurnalelgamal1.png" alt="Gambar" class="mb-3">
          <button
            id="coin-button"
            onclick="addCoin()"
            class="bg-indigo-600 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-indigo-600 hover:text-white duration-300 hover:border border border-transparent"
          >
            <a href="elgamal/jurnal algoritma elgamal 1.pdf">
              Jurnal Elgamal 1
            </a>
          </button>
        </div>
        <div class="flex flex-col items-center justify-center min-h-screen">
          <nav class="flex items-center">
            <ul class="flex-1 text-center">
              <img src="images/jurnalelgamal2.png" alt="Gambar" class="mb-3">
          <button
            id="coin-button"
            onclick="addCoin()"
            class="bg-green-400 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-green-400 hover:text-white duration-300 hover:border border border-transparent"
          >
            <a href="elgamal/jurnal algoritma elgamal 2.pdf">
              Jurnal Elgamal 2
            </a>
          </button>
        </div>
        <div class="flex flex-col items-center justify-center min-h-fit">
          <nav class="flex items-center">
            <ul class="flex-1 text-center">
              <img src="images/jurnalelgamal3.png" alt="Gambar" class="mb-3">
          <button
            id="coin-count"
            onclick="subtractCoin()"
            class="bg-blue-500 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-blue-500 hover:text-white duration-300 hover:border border border-transparent"
          >
            <a href="elgamal/jurnal algoritma elgamal 3.pdf" id="file-link">
              Jurnal Elgamal 3
            </a>
          </button>
        </div>
        <div class="flex flex-col items-center justify-center min-h-screen">
          <li class="list-none inline-block px-5">
            <a
              href="jurnal.php"
              class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent"
            >
              Kembali ke daftar jurnal
            </a>
          </li>
        </div>
        </ul>
      </nav>
    </div>
  </body>
  <section>
    <script>
      var coinData = localStorage.getItem("coinData");
      if (coinData) {
        var coinObj = JSON.parse(coinData);
      } else {
        var coinObj = { count: 0 };
      }

      document.getElementById("coin-count").innerHTML =
        "Koin: " + coinObj.count;

      function addCoin() {
        coinObj.count++;
        saveCoinData();
        updateCoinCount();
        enableSubtractButton();
        enableFileLink();
      }

      function subtractCoin() {
        if (coinObj.count > 0) {
          coinObj.count--;
          saveCoinData();
          updateCoinCount();
          if (coinObj.count === 0) {
            disableSubtractButton();
          }
        } else {
          alert("Nilai koin anda sudah habis!!!");
          disableFileLink();
        }
      }

      function saveCoinData() {
        localStorage.setItem("coinData", JSON.stringify(coinObj));
      }

      function updateCoinCount() {
        document.getElementById("coin-count").innerHTML =
          "Koin: " + coinObj.count;
      }

      function enableSubtractButton() {
        document.getElementById("subtract-button").removeAttribute("disabled");
      }

      function disableSubtractButton() {
        document
          .getElementById("subtract-button")
          .setAttribute("disabled", true);
      }
      function enableFileLink() {
        document
          .getElementById("file-link")
          .setAttribute("href", "elgamal/jurnal algoritma elgamal 3.pdf");
      }

      function disableFileLink() {
        document.getElementById("file-link").removeAttribute("href");
      }
    </script>
  </section>
</html>
