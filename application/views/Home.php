<!-- HTML -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <!-- Menyertakan Tailwind CSS dari CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Menambahkan scroll-margin-top untuk sektion agar tidak tertutup navbar */
    section {
      scroll-margin-top: 64px; /* Sesuaikan dengan tinggi navbar */
    }
  </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-blue-600 text-white shadow-md z-50">
        <div class="container mx-auto max-w-6xl flex justify-between items-center p-4">
        <div class="text-lg font-bold">MyWebsite</div>
        <div class="space-x-4">
            <a href="#home" class="hover:bg-blue-700 px-3 py-2 rounded">Home</a>
            <a href="#about" class="hover:bg-blue-700 px-3 py-2 rounded">About</a>
            <a href="#services" class="hover:bg-blue-700 px-3 py-2 rounded">Services</a>
            <a href="#contact" class="hover:bg-blue-700 px-3 py-2 rounded">Contact</a>
            <button class="bg-blue-400 hover:bg-blue-700 px-3 py-2 rounded">
                <a href="<?= base_url('Auth')?>">Login</a>
            </button>
        </div>
        </div>
    </nav>
    
    <!-- Seksi Home -->
    <section id="home" class="pt-20 h-screen bg-gray-200">
        <div class="container mx-auto max-w-6xl flex flex-col items-center justify-center h-full">
        <h1 class="text-4xl font-bold mb-4">Workshop PT Pusri</h1>
        <p class="text-lg">Tingkatkan keterampilan Anda bersama kami!</p>
        </div>
    </section>

    <!-- Seksi About -->
    <section id="about" class="h-screen bg-gray-300">
        <div class="container mx-auto max-w-6xl flex flex-col items-center justify-center h-full">
        <h1 class="text-4xl font-bold mb-4">Tentang PT Pusri</h1>
        <p class="text-lg">PT Pupuk Sriwidjaja Palembang (Pusri) adalah salah satu perusahaan pupuk terbesar di Indonesia. Kami berkomitmen untuk menyediakan pelatihan berkualitas tinggi bagi para pekerja di industri pertanian dan manufaktur.</p>
        </div>
    </section>

    <!-- Seksi Services -->
    <section id="services" class="h-screen bg-gray-400">
        <div class="container mx-auto max-w-6xl flex flex-col items-center justify-center h-full">
        <h1 class="text-4xl font-bold mb-4">Jadwal Workshop</h1>
        <div class="flex gap-4 mt-5">

            <a href="">
                <div class="card bg-white rounded-lg shadow max-w-sm hover:bg-gray-100">
                    <div class="card-body p-10">
                        <h5 class="card-title">Workshop Pertanian Berkelanjutan</h5>
                        <p class="card-text">Tanggal: 15 Oktober 2024</p>
                        <p class="card-text">Lokasi: Palembang</p>
                    </div>
                </div>
            </a>
            
            <a href="">
                <div class="card bg-white rounded-lg shadow max-w-sm hover:bg-gray-100">
                    <div class="card-body p-10">
                        <h5 class="card-title">Workshop Teknik Pemupukan</h5>
                        <p class="card-text">Tanggal: 20 Oktober 2024</p>
                        <p class="card-text">Lokasi: Jakarta</p>
                    </div>
                </div>
            </a>
            
            <a href="">
                <div class="card bg-white rounded-lg shadow min-w-sm max-w-sm hover:bg-gray-100">
                    <div class="card-body p-10">
                        <h5 class="card-title">Workshop Inovasi Industri</h5>
                        <p class="card-text">Tanggal: 25 Oktober 2024</p>
                        <p class="card-text">Lokasi: Surabaya</p>
                    </div>
                </div>
            </a>
            
        </div>
        </div>
    </section>

    <!-- Seksi Contact -->
    <section id="contact" class="h-screen bg-gray-500">
        <div class="container mx-auto flex flex-col items-center justify-center h-full">
        <h1 class="text-4xl font-bold mb-4">Daftar Workshop</h1>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
                <label for="workshop" class="form-label">Pilih Workshop</label>
                <select class="form-select" id="workshop">
                    <option selected>Pilih workshop</option>
                    <option value="1">Workshop Pertanian Berkelanjutan - Palembang</option>
                    <option value="2">Workshop Teknik Pemupukan - Jakarta</option>
                    <option value="3">Workshop Inovasi Industri - Surabaya</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
        </form>
        </div>
    </section>

    <footer class="text-white text-center py-3 bg-gray-700">
        <div class="container">
            <p class="mb-0">© 2024 PT Pusri. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
