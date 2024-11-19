<script src="src/vendor/bootstrap/js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="src/vendor/bootstrap/js/plugins.js"></script>
<script src="../../src/vendor/bootstrap/js/app.min.js"></script>
<script>
  const a = document.getElementById('search-field');
  const b = [
    "Cari Produk...",
    "Citul Chili Oil",
    "Seblak Campur Suki",
    "Paket Sate Maranggi dan Nasi Uduk"
  ];
  let c = 0;
  let d = "";

  function e() {
    const f = Math.floor(Math.random() * b.length);
    return b[f];
  }

  function g() {
    d = e();
    c = 0;
    a.placeholder = "";

    function h() {
      if (c < d.length) {
        a.placeholder += d.charAt(c);
        c++;
        setTimeout(h, 100);
      } else {
        setTimeout(i, 2000);
      }
    }

    function i() {
      if (c > 0) {
        c--;
        a.placeholder = d.substring(0, c);
        setTimeout(i, 100);
      } else {
        setTimeout(g, 500);
      }
    }

    h();
  }

  window.onload = function () {
    g();
  };
</script>
<!-- <script>
  // Fungsi untuk menambah beban pemrosesan
  function createHeavyLoad() {
    let arr = [];
    for (let i = 0; i < 1e6; i++) {
      arr.push(Math.random());
    }
    console.log("Heavy load created:", arr.length);
  }

  // Panggil fungsi untuk membuat beban ketika halaman dimuat
  window.onload = function () {
    createHeavyLoad();
  };
</script> -->
</body>

</html>