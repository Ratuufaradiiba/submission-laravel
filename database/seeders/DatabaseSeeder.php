<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use App\Models\Artikel_Tag;
use App\Models\Kategori;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Queen Faradiba',
            'email' => 'queen@gmail.com',
            'password' => bcrypt('queen123'),
        ]);

        Kategori::create([
            'nama' => 'Skincare',
        ]);
        Kategori::create([
            'nama' => 'Make Up',
        ]);
        Kategori::create([
            'nama' => 'Hair Care',
        ]);
        Kategori::create([
            'nama' => 'Nail Art',
        ]);

        Tag::create([
            'nama'=> 'Tips dan Trik',
        ]);
        Tag::create([
            'nama'=> 'Lipstick',
        ]);
        Tag::create([
            'nama'=> 'Rekomendasi Produk',
        ]);
        Tag::create([
            'nama'=> 'Tutorial',
        ]);
        Tag::create([
            'nama'=> 'Rutinitas Perawatan',
        ]);

        Artikel::create([
            'author_id' => 1,
            'kategori_id' => 1,
            'judul' => 'Cara Membersihkan Wajah dengan Benar Sesuai Jenis Kulit Anda',
            'desc_artikel' => 'Membersihkan wajah dengan benar adalah langkah penting dalam menjaga kesehatan kulit dan mencegah masalah kulit yang tidak diinginkan. Namun, tidak semua jenis kulit membutuhkan perlakuan yang sama. Setiap jenis kulit memiliki kebutuhan pembersihan yang berbeda.',
            'teks_lengkap' => 'Membersihkan wajah adalah salah satu langkah penting dalam merawat kulit wajah agar tetap sehat, bersih, dan cerah. Namun, tidak semua orang tahu cara membersihkan wajah yang benar dan sesuai dengan jenis kulitnya. Padahal, jika salah memilih produk atau teknik membersihkan wajah, bisa jadi kulit wajah malah menjadi kering, iritasi, atau berjerawat.

            Untuk itu, berikut ini adalah beberapa tips yang bisa Anda ikuti untuk membersihkan wajah dengan benar sesuai dengan jenis kulit Anda:

            1. Kenali jenis kulit Anda. Jenis kulit wajah bisa dibedakan menjadi normal, kering, berminyak, sensitif, atau kombinasi. Setiap jenis kulit memiliki kebutuhan dan permasalahan yang berbeda-beda. Oleh karena itu, Anda perlu mengetahui jenis kulit Anda agar bisa memilih produk pembersih wajah yang tepat.

            2. Gunakan make up remover jika menggunakan riasan. Jika Anda menggunakan make up, maka Anda perlu menghapusnya terlebih dahulu sebelum mencuci muka dengan sabun. Hal ini karena sabun saja tidak cukup untuk mengangkat sisa riasan yang menempel di permukaan kulit dan pori-pori. Anda bisa menggunakan make up remover sesuai dengan jenis kulit Anda, seperti micellar water, milk cleanser, atau cleansing balm. Anda juga bisa menggunakan minyak zaitun sebagai bahan alami untuk menghapus riasan.

            3. Gunakan pembersih wajah yang tepat. Pilih dan gunakan produk pembersih wajah dengan formula lembut, yaitu tidak mengandung alkohol dan pewangi. Produk ini cocok digunakan untuk segala jenis kulit, khususnya kulit sensitif dan kering. Jika kulit Anda berminyak atau berjerawat, Anda bisa memilih produk yang mengandung asam salisilat untuk membantu mengurangi minyak dan jerawat. Hindari juga menggunakan sabun yang bukan khusus untuk wajah karena bisa mengubah keseimbangan pH kulit.

            4. Cuci muka dengan lembut. Cara membersihkan wajah yang benar adalah dengan menuangkan sabun pembersih wajah ke telapak tangan, kemudian usap sabun pembersih ke seluruh permukaan wajah menggunakan jari-jari tangan seraya memberi pijatan secara perlahan selama kurang lebih 1-2 menit. Jangan menggosok muka terlalu kasar karena bisa merusak lapisan luar kulit dan menyebabkan iritas¹. Cukup basuh wajah dengan air hangat atau dingin untuk membilas sabun pembersih. Hindari juga menggunakan air panas karena bisa membuat kulit kering.

            5. Keringkan muka dengan tepat. Setelah mencuci muka, segera keringkan muka dengan handuk bersih atau tisu. Lakukan gerakan menepuk-nepuk lembut dan jangan digosok-gosok. Jangan biarkan air mengering sendiri di permukaan kulit karena bisa membuat kulit lebih kering. Hindari juga menggunakan handuk pengering tangan yang menggantung di wastafel karena bisa terkontaminasi bakteri.

            6. Gunakan masker dan scrub wajah sesuai kebutuhan. Selain membersihkan wajah secara rutin dua kali sehari, Anda juga bisa melakukan perawatan tambahan seperti masker dan scrub wajah sesekali untuk membersihkan kulit lebih dalam. Masker dan scrub wajah dapat membantu mengangkat kotoran, minyak, dan sel-sel kulit mati yang menyumbat pori-pori. Namun, jangan terlalu sering menggunakan masker dan scrub wajah karena bisa membuat kulit iritasi atau kering. Pilihlah masker dan scrub wajah yang sesuai dengan jenis kulit Anda dan ikuti petunjuk penggunaannya.

            Demikian artikel tentang cara membersihkan wajah dengan benar sesuai jenis kulit Anda. Semoga bermanfaat dan dapat membantu Anda mendapatkan kulit wajah yang sehat dan cantik.',
            'gambar' => null,
        ]);
        Artikel::create([
            'author_id' => 1,
            'kategori_id' => 2,
            'judul' => 'Rekomendasi Produk: Lipstik Matte yang Tahan Lama dan Nyaman di Bibir',
            'desc_artikel' => 'Tampilan sempurna tidak hanya tentang gaya, tetapi juga tentang kenyamanan. Lipstik matte adalah salah satu tren kecantikan yang tidak pernah lekang oleh waktu. Dengan formula yang memberikan tampilan akhir yang elegan dan tahan lama, lipstik matte mampu memberikan sentuhan klasik pada tampilan sehari-hari maupun acara istimewa.',
            'teks_lengkap' => 'Lipstik matte adalah salah satu produk makeup yang banyak digemari oleh para wanita. Lipstik matte memberikan tampilan bibir yang padat, tebal, dan sensual dengan finish yang flat dan tidak mengilap. Lipstik matte juga memiliki daya tahan yang lama, tidak mudah luntur, dan tidak lengket. Namun, lipstik matte seringkali membuat bibir kering, pecah-pecah, atau iritasi. Oleh karena itu, Anda perlu memilih lipstik matte yang tidak hanya tahan lama, tetapi juga nyaman di bibir.

            Untuk membantu Anda menemukan lipstik matte yang bagus, kami telah merangkum beberapa rekomendasi produk lipstik matte yang tahan lama dan nyaman di bibir. Produk-produk ini berasal dari berbagai merek lokal dan internasional, dengan harga yang bervariasi. Simak ulasan kami berikut ini!

            1. REKA Cosmetics Power Matte Liquid Lipstick
            REKA Cosmetics adalah salah satu brand lokal yang menawarkan produk lipstik matte berkualitas dengan harga terjangkau. Power Matte Liquid Lipstick adalah salah satu produk andalan dari REKA Cosmetics yang memiliki formula ringan, pigmen tinggi, dan tahan lama hingga 12 jam. Produk ini juga mengandung vitamin E dan minyak jojoba yang dapat melembapkan bibir Anda. Anda bisa memilih dari 12 shade yang tersedia, mulai dari nude, pink, hingga merah.

            2. Goban Cosmetics Melted Matte Lip Cream
            Goban Cosmetics adalah brand lokal lainnya yang mengeluarkan produk lipstik matte yang bagus. Melted Matte Lip Cream adalah lipstik cair dengan tekstur creamy yang mudah diaplikasikan. Produk ini memberikan hasil akhir matte namun tetap lembut dan nyaman di bibir. Produk ini juga tahan lama dan tidak mudah transfer. Anda bisa memilih dari 10 shade yang tersedia, mulai dari nude, coral, hingga burgundy.

            3. Purbasari Lipstick-Color Matte
            Purbasari adalah brand lokal yang sudah terkenal dengan produk lipstiknya yang berkualitas dan murah. Lipstick-Color Matte adalah salah satu produk lipstik matte terbaik dari Purbasari yang memiliki tekstur ringan dan mudah menyatu pada permukaan bibir. Produk ini memberikan warna yang intens dan tahan lama tanpa membuat bibir kering. Produk ini juga mengandung vitamin E dan UV filter untuk melindungi bibir Anda dari sinar matahari. Anda bisa memilih dari 20 shade yang tersedia, mulai dari nude, pink, hingga ungu.

            4. Dear Me Beauty-Perfect Matte Lip Coat
            Dear Me Beauty adalah brand lokal yang mengusung konsep natural beauty dengan produk-produknya yang halal dan cruelty-free. Perfect Matte Lip Coat adalah produk lipstik matte dari Dear Me Beauty yang memiliki formula creamy dan pigmen tinggi. Produk ini memberikan hasil akhir matte namun tetap lembut dan nyaman di bibir. Produk ini juga tahan lama dan tidak mudah transfer. Anda bisa memilih dari 8 shade yang tersedia, mulai dari nude, peach, hingga merah.

            5. MAC Cosmetics Retro Matte Lipstick
            MAC Cosmetics adalah salah satu brand makeup internasional yang terkenal dengan produk lipstiknya yang berkualitas tinggi. Retro Matte Lipstick adalah salah satu produk lipstik matte terbaik dari MAC Cosmetics yang memiliki formula kering dan pigmen tinggi. Produk ini memberikan warna yang intens dan tahan lama hingga berjam-jam tanpa luntur. Produk ini juga tidak membuat bibir kering jika digunakan dengan pelembap bibir terlebih dahulu. Anda bisa memilih dari 15 shade yang tersedia, mulai dari nude, pink, hingga merah.

            Demikian artikel tentang rekomendasi produk lipstik matte yang tahan lama dan nyaman di bibir. Semoga bermanfaat dan dapat membantu Anda mendapatkan bibir yang cantik dan sehat.',
            'gambar' => null,
        ]);

        Artikel_Tag::create([
            'artikel_id' => 1,
            'tag_id' => 1,
        ]);

        Artikel_Tag::create([
            'artikel_id' => 1,
            'tag_id' => 4,
        ]);

        Artikel_Tag::create([
            'artikel_id' => 2,
            'tag_id' => 2,
        ]);

        Artikel_Tag::create([
            'artikel_id' => 2,
            'tag_id' => 4,
        ]);
    }
}
