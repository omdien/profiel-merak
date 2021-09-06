<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Didin Handiman',
            'email' => 'didin.handiman@kkp.go.id',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'nama' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Belajar Pemrograman Phyton',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'belajar-pemrograman-phyton',
            'excerpt' => 'Sebelum mempelajari Course Phyton iniini, pastikan kalian mengusai konsep OOP, IDE (Android Studio), dan pernah menggunakan bahasa pemrograman apapuna',
            'body' => '<p>Kotlin adalah expressive programming language yang mempunyai lambda, coroutines, dan properties dan banyak fitur lain yang memungkinkan kalian menulis lebih sedikit kode dan lebih sedikit bugs. Keunggulan dari bahasa pemrograman Kotlin adalah hasil kompilasinya, yang berbentuk JavaScript atau bytecode JVM. Pada Course kali ini, kalian akan mempelajari Kotlin dari tingkat paling dasar. Mulai dari instalasi program, fitur-fitur yang ada, serta memaksimalkan fitur dan elemen yang ada pada Kotlin. Setelah mengikuti Course ini, kalian diharapkan mampu untuk mengembangkan aplikasi-aplikasi Android dengan Kotlin tanpa kesulitan berarti.</p><p>Oleh karena itu saya memutuskan untuk membuat artikel khusus mengenai hal ini, dan semoga bisa menjadi panduan dasar untuk rekan-rekan semua.</p><p>HTML adalah inti dari seluruh halaman web. Sangat mustahil untuk membuat website tanpa memiliki dasar pengetahuan tentang HTML. Untungnya, HTML juga sangat mudah dipelajari. Anda tidak perlu memiliki dasar programming atau pengetahuan tentang algoritma apapun. Satu-satunya kemampuan yang dibutuhkan adalah anda sudah cukup familiar dengan cara penggunaan web browser seperti Google Chrome atau Mozilla Firefox.</p><p>Pokok nya sekarang digunakan untuk posting pemrograman phyton dari dasar banget</p>'
        ]);


        Post::create([
            'title' => 'Belajar HTML?',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'belajar-hrml',
            'excerpt' => 'Ini adalah postingan untuk bagaimana cara belajar HTML dari dasar banget, dasar bumi atau dasar neraka',
            'body' => '<p>Pertanyaan di atas sangat sering diajukan oleh programmer pemula atau kalangan awam yang ingin mulai belajar web programming. Saya juga sering ditanya terkait masalah ini baik melalui email maupun dari kolom komentar yang ada di duniailkom. Ini sangat sangat bisa dimaklumi, karena saking beragamnya materi terkait web programming, banyak programmer pemula bingung mesti memulai dari mana.</p><p>Oleh karena itu saya memutuskan untuk membuat artikel khusus mengenai hal ini, dan semoga bisa menjadi panduan dasar untuk rekan-rekan semua.</p><p>HTML adalah inti dari seluruh halaman web. Sangat mustahil untuk membuat website tanpa memiliki dasar pengetahuan tentang HTML. Untungnya, HTML juga sangat mudah dipelajari. Anda tidak perlu memiliki dasar programming atau pengetahuan tentang algoritma apapun. Satu-satunya kemampuan yang dibutuhkan adalah anda sudah cukup familiar dengan cara penggunaan web browser seperti Google Chrome atau Mozilla Firefox.</p><p>Duniailkom telah menyediakan tutorial dasar dan tutorial lanjutan seputar HTML. Anda bisa memulainya di sin</p>'
        ]);

        Post::create([
            'title' => 'Burung Bangau yang Mabuk',
            'category_id' => 3,
            'user_id' => 1,
            'slug' => 'burung-bangau-yang-mabuk',
            'excerpt' => 'Seekor bangau berjalan dengan langkah yang anggun di sepanjang sebuah sungai kecil, matanya menatap air sungai yang jernih',
            'body' => '<p>Seekor bangau berjalan dengan langkah yang anggun di sepanjang sebuah sungai kecil, matanya menatap air sungai yang jernih, leher dan paruhnya yang panjang siap untuk menangkap mangsa di air sebagai sarapan paginya. Saat itu, sungai dipenuhi dengan ikan-ikan yang berenang, tetapi sang Bangau merasa sedikit angkuh di pagi hari itu.</p><p>Saya tak mau makan ikan-ikan yang kecil," katanya kepada diri sendiri. "Ikan yang kecil tidak pantas dimakan oleh bangau yang anggun seperti saya.</p><p>Sekarang, seekor ikan yang sedikit lebih besar dari ikan lain, lewat di dekatnya</p><p>Tidak, kata sang Bangau. "Saya tidak akan merepotkan diri saya untuk membuka paruh dan memakan ikan sebesar itu</p>'
        ]);
    }
}
