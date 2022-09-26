<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Banners;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Alif Narendro Jati',
            'email' => 'alif.jati@iconpln.co.id',
            'username' => 'alif.jati',
            'password' => bcrypt('12345')
        ]);


        Banners::create([
            'nama_banner' => 'ICONNET',
            'deskripsi' => 'Solusi Layanan Internet Broadband yang Andal (Reliable), Terjangkau(Affordable), dan Tanpa Batas (Unlimited)',
            'image' => 'https://corporate-fe-dev.air.id/img/slider/h3.jpg',
            'url' => 'https://iconnet.id/',
        ]);

        Banners::create([
            'nama_banner' => 'ICONNect',
            'deskripsi' => 'Solusi Konektivitas dengan Teknologi Terbaik untuk Komunikasi yang Mudah, Cepat dan Handal',
            'image' => '	https://corporate-fe-dev.air.id/img/slider/h4.jpg',
            'url' => 'https://www.iconpln.co.id/product/iconect/',
        ]);

        Product::create([
            'nama' => 'ICONNect',
            'kutipan' => 'Layanan ini merupakan solusi konektifitas yang memberikan nilai lebih bagi pelanggan. Solusi yang diberikan berupa komunikasi data yang menghubungkan lokasi pelanggan di berbagai wilayah Indonesia. Jaringan end to end fiber optic akan menjamin kelancaran pertukaran informasi yang cepat dan aman...',
            'deskripsi' => '<p>Layanan ini merupakan solusi konektifitas yang memberikan nilai lebih bagi pelanggan. Solusi yang diberikan berupa komunikasi data yang menghubungkan lokasi pelanggan di berbagai wilayah Indonesia. Jaringan end to end fiber optic akan menjamin kelancaran pertukaran informasi yang cepat dan aman sesuai dengan kebutuhan pelanggan.</p>
            <p><strong>Network Security</strong><br />
            Keamanan jaringan yang sangat tinggi karena security jaringan menerapkan metode Address Space, Routing Separation dan Analisa pada Label Spoofing.</p>
            <p><strong>End to End Fiber Optic</strong><br />
            media transmisi terbaik yang menghadirkan kehandalan jaringan serat optik yang berkualitas bila dibandingkan dengan media coaxial dan wireless.</p>
            <p><strong>Fast Delivery Services</strong><br />
            Paling cepat dalam delivery time karena menggunakan Row dan tiang milik PLN yang sudah tersebar diseluruh daerah di Indonesia untuk menggelar jaringan fiber optik kabel samapai ke pelanggan.</p>
            <p><strong>Cakupan Wilayah Luas</strong><br />
            Dengan jaringan yang dibangun secara ring terbentang luas diseluruh wilayah Jawa, Bali, Sumatera, NTB dan Sulawesi untuk kemudahan komunikasi data dan informasi tanpa kendala.</p>',
            'gambar_kutipan' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/Webp.net-compress-image-1.jpg',
            'gambar_deskripsi' => 'http://www.iconpln.co.id/wp-content/uploads/2017/09/Webp.net-compress-image.jpg',
            'url' => 'https://www.iconpln.co.id/product/iconect/',
        ]);

        Product::create([
            'nama' => 'ICONApps',
            'kutipan' => 'Sebagai “ICT Enabler of PLN“, ICON+ memberikan berbagai solusi aplikasi untuk menunjang integrasi proses bisnis PLN. Solusi-solusi tersebut ditujukan untuk dapat senantiasa membantu PLN memberikan pelayanan terbaik bagi pelanggannya. Real Time Online Layanan IconApps mendukung pemantauan kegiatan secara real time online...',
            'deskripsi' => '<p>Sebagai <b>&#8220;ICT Enabler of PLN</b>&#8220;, ICON+ memberikan berbagai solusi aplikasi untuk menunjang integrasi proses bisnis PLN. Solusi-solusi tersebut ditujukan untuk dapat senantiasa membantu PLN memberikan pelayanan terbaik bagi pelanggannya.</p>
            <p><b>Real Time Online</b><br />
            Layanan IconApps mendukung pemantauan kegiatan secara real time online<br />
            selama 24 jam 7 hari seminggu.</p>
            <p><b>Integrated</b><br />
            Solusi terintegrasi dan terpadu untuk menunjang proses bisnis perusahaan ketenagalistrikan.</p>
            <p><b>Nationwide</b><br />
            Terimplementasi secara terpusat untuk mendukung pelayanan terbaik bagi pelanggan ketenagalistrikan di seluruh kantor wilayah PLN di Indonesia.</p>
            <p><b>Cakupan Wilayah Luas</b><br />
            Dengan jaringan fiber optic end to end yang dibangun secara ring terbentang luas di seluruh wilayah Jawa, Bali, Sumatera, NTB dan Sulawesi untuk kemudahan komunikasi data dan informasi tanpa kendala.</p>',
            'gambar_kutipan' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/Webp.net-compress-image-2.jpg',
            'gambar_deskripsi' => 'http://www.iconpln.co.id/wp-content/uploads/2017/09/Webp.net-compress-image-2-300x150.jpg',
            'url' => 'http://www.iconpln.co.id/product/iconapps/',
        ]);

        Product::create([
            'nama' => 'ICONBase',
            'kutipan' => 'Infrastruktur yang handal menjadi kunci diamana keamanan data menjadi hal yang penting saat ini. ICON+ menyembahkan berbagai macam layanan, infrastruktur yang aman dan dapat memberikan nilai yang lebih bagi efensiensi bisnis pelanggan. Di dukung oleh data center Tier-3 yang berlokasi...',
            'deskripsi' => '<p>Infrastruktur yang handal menjadi kunci diamana keamanan data menjadi hal yang penting saat ini. ICON+ menyembahkan berbagai macam layanan, infrastruktur yang aman dan dapat memberikan nilai yang lebih bagi efensiensi bisnis pelanggan. Di dukung oleh data center Tier-3 yang berlokasi di dalam Negri. ICON+ berkomitmen untuk memberikan layanan infrastruktur terbaik dengan tingkat keamanan yang tinggi.</p>
            <p><b>Network Security</b><br />
            Kemanan jaringan yang sangat tinggi karena security jaringan menerapkan metode addres space, routing separation dan analisa pada label spoofing.</p>
            <p><br />
            <b>End To End Fiber Optic</b><br />
            Media transmisi terbaik yang menghadirkan kehandalan jaringan serat optic yang berkualitas bila dibandingkan dengan media coaxial dan wireless.</p>
            <p><b>Fast Delivery Service </b><br />
            Paling cepat dalam delivery time karena menggunakan ROW dan tiang milik PLN yang sudah tersebar di<br />
            seluruh daerah di Indonesia untuk menggear jaringan fiber optic kabel sampai kepelanggan.</p>
            <p><b>Cakupan wilayah luas</b><br />
            Dengan jaringan fiber optic end to end yang di bangun secara Ring terbentang luas di seluruh wilayah Jawa, Bali, NTB dan Sulawesi untuk kemudahan komunikasi data dan informasi tanpa kendala.</p>',
            'gambar_kutipan' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/figure-5.jpg',
            'gambar_deskripsi' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/Webp.net-compress-image-3-300x150.jpg',
            'url' => 'http://www.iconpln.co.id/product/iconbase/',
        ]);

        Product::create([
            'nama' => 'ICONWeb',
            'kutipan' => 'ICONWeb Solusi Koneksi Internet Kebutuhan pelanggan untuk mendapatkan akses informasi dan komunikasi tanpa batas melalui jaringan Internasional dan peering dengan provider local. Merupakan focus utama ICON+ untuk melayani pelanggannya. Network Security Kemanan jaringan yang sangat tinggi karena security jaringan menerapkan...',
            'deskripsi' => '<p><strong>ICONWeb Solusi Koneksi Internet</strong></p>
            <p>Kebutuhan pelanggan untuk mendapatkan akses informasi dan komunikasi tanpa batas melalui jaringan Internasional dan peering dengan provider local. Merupakan focus utama ICON+ untuk melayani pelanggannya.</p>
            <p><strong>Network Security</strong></p>
            <p>Kemanan jaringan yang sangat tinggi karena security jaringan menerapkan metode addres space, routing separation dan analisa pada label spoofing.</p>
            <p><strong>End To End Fiber Optic</strong></p>
            <p>Media transmisi terbaik yang menghadirkan kehandalan jaringan serat optic yang berkualitas bila dibandingkan dengan media coaxial dan wireless.</p>
            <p><strong>Fast Delivery Service</strong><br />
            <br />
            Paling cepat dalam delivery time karena menggunakan ROW dan tiang milik PLN yang sudah tersebar di seluruh daerah di Indonesia untuk menggear jaringan fiber optic kabel sampai kepelanggan.</p>
            <p><strong>Cakupan wilayah luas</strong><br />
            Dengan jaringan fiber optic end to end yang di bangun secara Ring terbentang luas di seluruh wilayah Jawa, Bali, NTB dan Sulawesi untuk kemudahan komunikasi data dan informasi tanpa kendala.</p>',
            'gambar_kutipan' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/figure-6.jpg',
            'gambar_deskripsi' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/1-287x300.jpg',
            'url' => 'http://www.iconpln.co.id/product/iconweb/',
        ]);

        Product::create([
            'nama' => 'ICONNet',
            'kutipan' => 'ICONWeb Solusi Koneksi Internet Kebutuhan pelanggan untuk mendapatkan akses informasi dan komunikasi tanpa batas melalui jaringan Internasional dan peering dengan provider local. Merupakan focus utama ICON+ untuk melayani pelanggannya. Network Security Kemanan jaringan yang sangat tinggi karena security jaringan menerapkan...',
            'deskripsi' => '<p>Dengan Pesatnya Perkembangan Teknologi Mempengaruhi Berbagai Aspek Kehidupan Kita Yang Semakin Bergantung Pada Internet. Kualitas Dan Kecepatan Yang Terus Bertambah Menjadi Kebutuhan Baik Di Rumah, Kantor, Dan Banyak Tempat Lainnya Membuat Kami Memberikan Layanan Terbaik Untuk Anda.</p>
            <br>

            zReliable
            Layanan Iconapps Mendukung Pemantauan Kegiatan Secara Real Time Online Selama 24 Jam 7 Hari Seminggu.
            Affordable
            Solusi Terintegrasi Dan Terpadu Untuk Menunjang Proses Bisnis Perusahaan Ketenagalistrikan.
            Unlimited
            Terimplementasi Secara Terpusat Untuk Mendukung Pelayanan Terbaik Bagi Pelanggan Ketenagalistrikan Di Seluruh Kantor Wilayah Pln Di Indonesia.
            Explicabo Exercitationem
            Dengan Jaringan Fiber Optic End To End Yang Dibangun Secara Ring Terbentang Luas Di Seluruh Wilayah Jawa, Bali, Sumatera, Ntb Dan Sulawesi Untuk Kemudahan Komunikasi Data Dan Informasi Tanpa Kendala.',
            'gambar_kutipan' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/figure-6.jpg',
            'gambar_deskripsi' => 'http://www.iconpln.co.id/wp-content/uploads/2017/08/1-287x300.jpg',
            'url' => 'http://www.iconpln.co.id/product/iconweb/',
        ]);

        // User::create([
        //     'name' => 'Putra Narendrojati',
        //     'email' => 'putra.narendra@iconpln.co.id',
        //     'username' => 'putra.narenda',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(5)->create();

        // Category::create([
        //     'name' => 'Products',
        //     'slug' => 'products'
        // ]);

        // Category::create([
        //     'name' => 'About Us',
        //     'slug' => 'about-us'
        // ]);

        // Category::create([
        //     'name' => 'E-Proc',
        //     'slug' => 'eproc'
        // ]);

        // Category::create([
        //     'name' => 'News',
        //     'slug' => 'news'
        // ]);

        // Category::create([
        //     'name' => 'Careers',
        //     'slug' => 'careers'
        // ]);

        // Category::create([
        //     'name' => 'Contacts',
        //     'slug' => 'contacts'
        // ]);


        // Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'post-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, illum!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dignissimos quidem nihil voluptatum reiciendis dicta possimus aut eius ipsum fugiat nobis labore iure natus cum sequi assumenda odit quae doloribus officia magni earum, saepe minus dolore tempora! Voluptatibus hic cum voluptatum illum iusto atque accusantium dignissimos culpa nostrum reprehenderit temporibus, doloribus veniam eligendi ipsum similique ad aliquam esse ea modi deleniti perferendis et?</p> <p>Eligendi debitis, voluptatibus nihil vel consequuntur unde totam. Voluptatem, debitis at eius quo veniam eos vel inventore et. Corporis saepe, dolores minus praesentium a voluptates itaque, optio explicabo eaque tempore soluta repellendus ab. Quos totam, earum nisi asperiores, porro dolor qui enim, ipsum quidem mollitia soluta eius nemo harum ratione nam suscipit voluptatum ex tenetur quibusdam a aliquam error quae! Deserunt porro eos ullam impedit cumque. Rem dolore repellat labore veniam. Incidunt sapiente reiciendis maxime in nesciunt, tenetur deserunt dolore debitis delectus. Minima culpa velit quidem consequuntur.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Post Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'post-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, illum!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dignissimos quidem nihil voluptatum reiciendis dicta possimus aut eius ipsum fugiat nobis labore iure natus cum sequi assumenda odit quae doloribus officia magni earum, saepe minus dolore tempora! Voluptatibus hic cum voluptatum illum iusto atque accusantium dignissimos culpa nostrum reprehenderit temporibus, doloribus veniam eligendi ipsum similique ad aliquam esse ea modi deleniti perferendis et?</p> <p>Eligendi debitis, voluptatibus nihil vel consequuntur unde totam. Voluptatem, debitis at eius quo veniam eos vel inventore et. Corporis saepe, dolores minus praesentium a voluptates itaque, optio explicabo eaque tempore soluta repellendus ab. Quos totam, earum nisi asperiores, porro dolor qui enim, ipsum quidem mollitia soluta eius nemo harum ratione nam suscipit voluptatum ex tenetur quibusdam a aliquam error quae! Deserunt porro eos ullam impedit cumque. Rem dolore repellat labore veniam. Incidunt sapiente reiciendis maxime in nesciunt, tenetur deserunt dolore debitis delectus. Minima culpa velit quidem consequuntur.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Post Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'post-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, illum!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dignissimos quidem nihil voluptatum reiciendis dicta possimus aut eius ipsum fugiat nobis labore iure natus cum sequi assumenda odit quae doloribus officia magni earum, saepe minus dolore tempora! Voluptatibus hic cum voluptatum illum iusto atque accusantium dignissimos culpa nostrum reprehenderit temporibus, doloribus veniam eligendi ipsum similique ad aliquam esse ea modi deleniti perferendis et?</p> <p>Eligendi debitis, voluptatibus nihil vel consequuntur unde totam. Voluptatem, debitis at eius quo veniam eos vel inventore et. Corporis saepe, dolores minus praesentium a voluptates itaque, optio explicabo eaque tempore soluta repellendus ab. Quos totam, earum nisi asperiores, porro dolor qui enim, ipsum quidem mollitia soluta eius nemo harum ratione nam suscipit voluptatum ex tenetur quibusdam a aliquam error quae! Deserunt porro eos ullam impedit cumque. Rem dolore repellat labore veniam. Incidunt sapiente reiciendis maxime in nesciunt, tenetur deserunt dolore debitis delectus. Minima culpa velit quidem consequuntur.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Post Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'post-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, illum!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dignissimos quidem nihil voluptatum reiciendis dicta possimus aut eius ipsum fugiat nobis labore iure natus cum sequi assumenda odit quae doloribus officia magni earum, saepe minus dolore tempora! Voluptatibus hic cum voluptatum illum iusto atque accusantium dignissimos culpa nostrum reprehenderit temporibus, doloribus veniam eligendi ipsum similique ad aliquam esse ea modi deleniti perferendis et?</p> <p>Eligendi debitis, voluptatibus nihil vel consequuntur unde totam. Voluptatem, debitis at eius quo veniam eos vel inventore et. Corporis saepe, dolores minus praesentium a voluptates itaque, optio explicabo eaque tempore soluta repellendus ab. Quos totam, earum nisi asperiores, porro dolor qui enim, ipsum quidem mollitia soluta eius nemo harum ratione nam suscipit voluptatum ex tenetur quibusdam a aliquam error quae! Deserunt porro eos ullam impedit cumque. Rem dolore repellat labore veniam. Incidunt sapiente reiciendis maxime in nesciunt, tenetur deserunt dolore debitis delectus. Minima culpa velit quidem consequuntur.</p>'
        // ]);

    }
}
