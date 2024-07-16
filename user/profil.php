<!DOCTYPE html>
<html>
  <head>
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <body class="bg-center bg-cover px-28 py-64 bg-[url('/images/rakbuku.jpg')] ">
      <div>
        <h1
            class="leading-loose text-center text-white text-4xl font-serif font-semibold"
          >
            Informasi Pengguna
          </h1>
      </div>
      <div class="container mx-auto p-4">
        <table class="table-auto w-full">
          <thead>
            <tr class="text-white text-bold">
              <th class="px-4 py-2">Nama</th>
              <th class="px-4 py-2">Kelas</th>
              <th class="px-4 py-2">Prodi</th>
            </tr>
          </thead>
          <tbody>
            <img
                    class="rounded-t-lg"
                    src="images/irgi.jpg"
                    alt="" class="w-30 h-auto"
                  />
            <tr class="text-black text-semibold">
              <td class="border px-4 py-2">Muhammad Irgi Ramadhan</td>
              <td class="border px-4 py-2">PTIK - A</td>
              <td class="border px-4 py-2">Pendidikan teknologi Informatika dan Komputer</td>
            </tr>
          </tbody>
            </div>
      <div>
          <li class="list-none inline-block px-5">
            <a
              href="index.php"
              class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent"
            >
              Kembali ke halaman utama
            </a>
          </li>
      </div>
      <div>
          <li class="list-none inline-block px-5">
            <a
              href="../logout.php"
              class="bg-cyan-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-cyan-300 hover:text-white duration-300 hover:border border border-transparent"
            >
              logout
            </a>
          </li>
      </div>
    </body>
  </head>
</html>
