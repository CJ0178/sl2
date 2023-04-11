<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $products = [
        [
            'id' => 1,
            'image' => 'Meja.png',
            'name' => 'Meja',
            'description' => 'Sebuah meja adalah sebuah furnitur yang dirancang untuk berfungsi sebagai tempat kerja, belajar, atau melakukan aktivitas lainnya. Meja dapat memiliki berbagai bentuk, ukuran, dan bahan, tergantung pada kebutuhan dan gaya dekorasi.Secara umum, sebuah meja memiliki permukaan datar yang didukung oleh satu atau beberapa kaki. Permukaan meja dapat terbuat dari kayu, kaca, logam, atau bahan lainnya. Beberapa meja memiliki laci atau rak di bawah permukaan untuk menyimpan barang-barang, sedangkan yang lainnya hanya memiliki permukaan datar. Meja dapat digunakan di berbagai ruangan, seperti kantor, ruang keluarga, atau kamar tidur. Beberapa meja memiliki desain yang ergonomis untuk memastikan kenyamanan dan produktivitas pengguna saat bekerja. Dalam hal ukuran, meja dapat bervariasi dari yang kecil dan sederhana hingga yang besar dan kompleks. Beberapa meja juga dapat dilipat atau disesuaikan untuk memenuhi kebutuhan ruang yang berbeda.',
            'status' => 'R',
            'price' => 10000,
        ],
        [
            'id' => 2,
            'image' => 'Kursi.png',
            'name' => 'Kursi',
            'description' => 'Sebuah kursi adalah sebuah furnitur yang dirancang untuk duduk dan bersantai. Kursi umumnya terdiri dari rangka, kursi, dan punggung, serta beberapa kursi memiliki tangan sebagai tambahan. Bahan yang umum digunakan untuk membuat kursi adalah kayu, logam, plastik, atau bahan kain, tergantung pada kegunaan dan gaya desain. Kursi bisa berbentuk berbeda seperti kursi empuk, kursi dengan sandaran, kursi goyang, kursi ergonomis, dan masih banyak lagi. Kursi juga dapat digunakan di berbagai ruangan, seperti ruang tamu, ruang makan, atau kamar tidur. Beberapa kursi memiliki desain yang ergonomis untuk memastikan kenyamanan dan dukungan tubuh penggunanya saat duduk. Kursi juga dapat memiliki berbagai macam aksesoris tambahan, seperti bantal dan bahan pelapis untuk membuatnya lebih nyaman. Beberapa kursi juga dilengkapi dengan fungsi tambahan, seperti fitur pijat atau penyangga kaki, untuk meningkatkan kenyamanan pengguna. Secara keseluruhan, kursi adalah furnitur yang sangat penting dalam kehidupan sehari-hari kita, dan terus berkembang dengan inovasi desain dan teknologi untuk memberikan kenyamanan dan fungsionalitas yang lebih baik.',
            'status' => 'SR',
            'price' => 20000,
        ],
        [
            'id' => 3,
            'image' => 'Vas Bunga.png',
            'name' => 'Vas Bunga',
            'description' => 'Sebuah vas bunga adalah sebuah wadah yang dirancang khusus untuk menampilkan bunga atau tanaman lainnya. Vas bunga tersedia dalam berbagai bentuk, ukuran, dan bahan, tergantung pada kegunaan dan gaya dekorasi. Bahan yang umum digunakan untuk membuat vas bunga adalah keramik, kaca, logam, atau kayu. Vas bunga juga dapat dihias dengan berbagai motif dan desain, seperti bunga, pola abstrak, atau bahkan ukiran tangan. Ukuran vas bunga dapat bervariasi dari yang kecil dan sederhana hingga yang besar dan menonjol. Beberapa vas bunga juga dapat memiliki bentuk unik, seperti bentuk bulat, persegi, atau oval. Beberapa vas bunga juga dapat dihias dengan aksesoris tambahan seperti pita, rantai, atau manik-manik, untuk menambahkan keindahan dan daya tarik visual. Fungsi utama vas bunga adalah sebagai tempat untuk menempatkan bunga atau tanaman, dan sebagai penampilan estetika yang menarik dalam sebuah ruangan. Beberapa vas bunga dapat digunakan untuk menampilkan bunga segar, sedangkan yang lainnya dapat digunakan untuk menampilkan bunga buatan atau tanaman hijau. Dalam keseluruhan, vas bunga adalah furnitur dekoratif yang sangat penting dalam kehidupan sehari-hari kita, dan dapat digunakan untuk menambahkan sentuhan alami dan keindahan pada ruangan manapun.',
            'status' => 'SSR',
            'price' => 30000,
        ],
        [
            'id' => 4,
            'image' => 'Laptop.png',
            'name' => 'Laptop',
            'description' => 'Sebuah laptop adalah sebuah perangkat komputer portabel yang dirancang untuk digunakan di atas pangkuan atau di atas meja dengan kemampuan untuk membawa ke mana saja. Laptop terdiri dari beberapa bagian utama, termasuk layar, keyboard, touchpad atau trackpad, dan unit pemrosesan yang terletak di dalamnya. Layar laptop dapat bervariasi dalam ukuran dan resolusi, tetapi biasanya memiliki lebar antara 11 hingga 17 inci. Layar juga dapat memiliki fitur seperti teknologi layar sentuh, layar dengan resolusi tinggi atau layar yang dapat dilipat. Keyboard laptop biasanya terdiri dari huruf, angka, dan simbol yang sama seperti keyboard pada komputer desktop. Keyboard pada laptop juga dapat dilengkapi dengan fitur tambahan seperti lampu latar dan tombol khusus untuk mengakses fungsi tertentu seperti pengaturan suara dan layar. Touchpad atau trackpad pada laptop digunakan sebagai pengganti mouse dan berfungsi sebagai alat navigasi pada layar. Touchpad dapat mendeteksi gerakan jari, seperti gerakan menggeser atau mengklik, dan digunakan untuk memindahkan kursor di layar. Unit pemrosesan pada laptop terletak di dalamnya dan biasanya terdiri dari prosesor, memori, penyimpanan dan kartu grafis. Laptop juga dapat dilengkapi dengan port USB, port HDMI, dan port jaringan untuk menghubungkan dengan perangkat eksternal dan jaringan internet. Laptop sangat populer karena kemampuannya yang portabel dan fleksibel, sehingga memungkinkan pengguna untuk bekerja atau belajar dari mana saja dengan koneksi internet. Beberapa laptop juga memiliki fitur tambahan seperti kamera web, mikrofon, dan speaker, sehingga memungkinkan pengguna untuk berkomunikasi secara online dengan mudah.',
            'status' => 'SR',
            'price' => 40000,
        ],
        [
            'id' => 5,
            'image' => 'Jam Dinding.png',
            'name' => 'Jam Dinding',
            'description' => 'Sebuah jam dinding adalah alat pengukur waktu yang dirancang untuk dipasang di dinding dan digunakan untuk menunjukkan waktu secara akurat. Jam dinding tersedia dalam berbagai gaya, ukuran, dan jenis, dan biasanya terdiri dari tiga bagian utama, yaitu bagian tengah, jarum penunjuk waktu, dan angka penunjuk waktu. Bagian tengah jam dinding biasanya berbentuk bulat atau persegi dan dapat terbuat dari berbagai bahan, seperti kayu, kaca, logam, atau plastik. Beberapa jam dinding juga dapat dilengkapi dengan dekorasi atau gambar yang menarik, seperti angka Romawi, desain geometris, atau gambar tumbuhan. Jarum penunjuk waktu jam dinding terdiri dari jarum menit dan jarum jam yang dipasangkan pada poros tengah bagian tengah. Jarum menit akan bergerak dengan cepat dan terus menerus mengelilingi jam dinding, sementara jarum jam akan bergerak lebih lambat dan menunjukkan waktu dengan presisi lebih tinggi. Angka penunjuk waktu biasanya tercetak pada bagian dalam bagian tengah jam dinding, dan digunakan untuk menunjukkan waktu dengan jelas dan mudah dibaca. Beberapa jam dinding juga dilengkapi dengan skala penunjuk waktu dalam satuan jam dan menit, sehingga pengguna dapat melihat waktu dengan lebih detail. Jam dinding dapat diatur dengan mudah dengan memutar poros tengah dengan tangan atau menggunakan tombol pengatur yang terletak di belakang bagian tengah jam dinding. Beberapa jam dinding juga dapat diatur secara otomatis menggunakan teknologi terbaru, seperti jam dinding atomik yang disinkronkan dengan sinyal radio. Secara keseluruhan, jam dinding adalah alat pengukur waktu yang berguna dan serbaguna yang dapat digunakan di berbagai ruangan dan lokasi. Jam dinding juga dapat menambahkan sentuhan dekoratif dan gaya pada dinding rumah atau kantor Anda.',
            'status' => 'R',
            'price' => 50000,
        ],
        [
            'id' => 6,
            'image' => 'Smartphone.png',
            'name' => 'Smartphone',
            'description' => 'Sebuah smartphone adalah perangkat telekomunikasi portabel yang menggabungkan fungsi dari telepon seluler dan komputer genggam. Smartphone biasanya dilengkapi dengan layar sentuh atau layar dengan tombol fisik yang digunakan untuk memasukkan dan mengakses informasi serta berinteraksi dengan aplikasi. Layar smartphone dapat berukuran bervariasi, dari sekitar 4 inci hingga lebih dari 6 inci, dan dapat memiliki resolusi tinggi untuk menampilkan gambar dan video dengan kualitas yang baik. Layar juga dapat memiliki teknologi canggih seperti layar sentuh yang responsif dan layar yang dapat menampilkan gamut warna yang luas. Smartphone biasanya memiliki sistem operasi yang canggih seperti Android atau iOS, yang memungkinkan pengguna untuk mengakses berbagai aplikasi dan layanan online. Aplikasi seperti media sosial, pesan instan, email, dan berbagai aplikasi produktivitas dapat diunduh dan diinstal pada smartphone untuk memudahkan pengguna dalam berkomunikasi dan beraktivitas sehari-hari. Smartphone dilengkapi dengan fitur kamera yang canggih, baik kamera depan maupun belakang, yang memungkinkan pengguna untuk mengambil foto dan video dengan kualitas tinggi. Smartphone juga dapat dilengkapi dengan fitur tambahan seperti pemindai sidik jari, pengisian daya nirkabel, dan koneksi internet nirkabel melalui Wi-Fi atau jaringan seluler. Selain itu, smartphone juga dapat berfungsi sebagai perangkat pemutar musik dan video, serta memungkinkan pengguna untuk memainkan game yang menarik. Smartphone juga dilengkapi dengan berbagai sensor, seperti sensor akselerometer, giroskop, dan sensor cahaya, yang memungkinkan pengguna untuk mengakses berbagai fitur dan aplikasi. Secara keseluruhan, smartphone adalah perangkat yang sangat serbaguna dan berguna untuk membantu pengguna dalam berkomunikasi, beraktivitas sehari-hari, dan berhibur. Smartphone memungkinkan pengguna untuk selalu terhubung dengan dunia, dan memungkinkan pengguna untuk mengakses informasi dan layanan di mana saja dan kapan saja.',
            'status' => 'SSR',
            'price' => 60000,
        ],
    ];

    public function index()
    {
        $products = $this->products;

        return view('produk', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        return view('detail', [
            'product' => $product,
        ]);
    }
}
