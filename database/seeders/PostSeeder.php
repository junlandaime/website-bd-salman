<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::create(
            [
                'title' => 'Layanan Konsultasi',
                'slug' => Str::of('Layanan Konsultasi')->slug('-'),
                'excerpt' => '
                <p>Konsultasikan permasalahanmu bersama Asatidz Bidang Dakwah Masjid Salman ITB. a. Konsultasi ibadah b. Konsultasi keluarga c. Konsultasi zakat, infak-sedekah & wakaf d. Konsultasi waris, dan lainnya
                </p>
                <p>&nbsp;</p>
                <p><strong>Ade Mastur</strong></p>
                </p><a href="https://wa.me/628882031623" target="_blank"><p><strong>088-820-316-23</strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Layanan Pengurusan Jenazah ',
                'slug' => Str::of('Layanan Pengurusan Jenazah ')->slug('-'),
                'excerpt' => '
                <p>Kami hadir sebagai partner yang dapat membantu Anda menghadapi masa-masa sulit ini
                a. Pemulasaraan jenazah (memandikan, shalat jenazah hingga penguburan) 
                b. Pelatihan pengurusan jenazah 
                </p>
                <p>&nbsp;</p>
                <p><strong>Ade Mastur</strong></p>
                </p><a href="https://wa.me/628882031623" target="_blank"><p><strong>088-820-316-23</strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Layanan Ceramah Keagamaan ',
                'slug' => Str::of('Layanan Ceramah Keagamaan ')->slug('-'),
                'excerpt' => '
                <p>Kami menyediakan layanan ceramah keagamaan, melayani kebutuhan ustadz 
                untuk aneka ceramah/khutbah, imam shalat, maupun tilawah/tadarus Al-Quran. 
                </p>
                <p>&nbsp;</p>
                <p><strong>Ade Mastur</strong></p>
                </p><a href="https://wa.me/628882031623" target="_blank"><p><strong>088-820-316-23</strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Kelas Belajar Islam',
                'slug' => Str::of('Kelas Belajar Islam')->slug('-'),
                'excerpt' => '
                <p>a. Belajar Baca Al-Qur&#39;an (BBAQ), tahsin (perbaikan bacaan) dan tahfidz |&nbsp;b. Bahasa Arab (untuk percakapan atau memahami Al-Qur&#39;an) |&nbsp;c. Dasar Keislaman (akidah dan tata cara ibadah) untuk Mualaf |&nbsp;d. Ilmu Waris (teori dan praktik)</p>
                <p>&nbsp;</p>
                <p><strong>Admin Bidang Dakwah</strong></p>
                </p><a href="https://wa.me/6285722183585" target="_blank"><p><strong>0857-2218-3585 </strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Privat Belajar Islam',
                'slug' => Str::of('Privat Belajar Islam')->slug('-'),
                'excerpt' => '
                <p>Pengajar dapat berkunjung ke rumah/ mengajar privat untuk area dalam Kota Bandung sesuai waktu peserta (biaya Rp175 ribu per 90 menit 
                pertemuan). 
                Info biaya dan pendaftaran silakan hubungi CP. 
                </p>
                <p>&nbsp;</p>
                <p><strong>Admin Bidang Dakwah</strong></p>
                </p><a href="https://wa.me/6285722183585" target="_blank"><p><strong>0857-2218-3585 </strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Sekolah Pra Nikah (SPN)',
                'slug' => Str::of('Sekolah Pra Nikah (SPN)')->slug('-'),
                'excerpt' => '
                <p>Materi mencakup persiapan menikah menurut syariat 
                syariat dan hukum negara, pengenalan diri & pasangan, manajemen keuangan rumah tangga, kesehatan reproduksi dan mental, dll. 
                • Narasumber dari para ustadz Kota Bandung, psikolog, Kandepag Kota Bandung, praktisi komunikasi dan. financial advisor. 
                Dapat mengikuti Program Taaruf. 
                Gratis biaya 
                dan ustadz. 
                konsultasi 
                lanjutan 
                permasalahan keluarga dengan psikolog 
                Info biaya pendaftaran silakan hubungi CP
                . 
                </p>
                <p>&nbsp;</p>
                <p><strong>Admin Bidang Dakwah</strong></p>
                </p><a href="https://wa.me/6285722183585" target="_blank"><p><strong>0857-2218-3585 </strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Pengajian Wanita Salman ',
                'slug' => Str::of('Pengajian Wanita Salman ')->slug('-'),
                'excerpt' => '
                <p>PWS adalah komunitas muslimah untuk mempelajari Islam. Kegiatan PWS antara 
                lain adalah: 
                Kelas Online Tafsir 
                Kelas Online Fikih Ibadah 
                Kelas Online Akidah 
                Kelas l`rab (Bahasa Arab Lanjutan) Kelas Tahsin
                 
                </p>
                <p>&nbsp;</p>
                <p><strong>Ade Mastur</strong></p>
                </p><a href="https://wa.me/628882031623" target="_blank"><p><strong>088-820-316-23</strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Kelompok Bimbingan Ibadah Haji dan Umroh',
                'slug' => Str::of('Kelompok Bimbingan Ibadah Haji dan Umroh')->slug('-'),
                'excerpt' => '
                <p>Kelompok Bimbingan Ibadah Haji dan Umrah (KBIHU) YPM Salman ITB melayani pendaftaran, manasik, pemberangkatan dan bimbingan ibadah haji maupun umrah di Tanah Suci.
                </p>
                <p>&nbsp;</p>
                <p><strong>H. Tian</strong></p>
                </p><a href="https://wa.me/62817624185" target="_blank"><p><strong>081-762-4185</strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Layanan Kemanusiaan',
                'slug' => Str::of('Layanan Kemanusiaan')->slug('-'),
                'excerpt' => '
                <p>Bidang 
                Dakwah Salman ITB melayani 
                kebutuhan ambulans untuk keperluan medis. maupun mobil jenazah, secara cuma-cuma. Info selengkapnya hubungi CP.
                 
                </p>
                <p>&nbsp;</p>
                <p><strong>Ade Mastur</strong></p>
                </p><a href="https://wa.me/628882031623" target="_blank"><p><strong>088-820-316-23</strong></a>',
                'body' => '-',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Tentang Kami',
                'slug' => Str::of('Tentang Kami')->slug('-'),
                'excerpt' => '-',
                'body' => '<p><strong>Bidang Dakwah Masjid Salman ITB</strong> adalah salah satu bidang utama di bawah Yayasan Masjid Salman ITB, fokus pada program dan kegiatan dakwah, layanan dan keislaman.&nbsp;</p>

                <p>&nbsp;</p>
                
                <p>Terdapat beberapa program dan layanan utama di bidang dakwah, diantaranya <strong>Program Ketakmiran Masjid, Program Studi Islam dan bahasa Arab, Program Pendidikan Keluarga, Program Bimbingan Ibadah Haji dan Umroh, Program Pengajian Wanita Salman, Program Pengembangan Jaringan Dakwah</strong>.&nbsp;</p>
                
                <p>&nbsp;</p>',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 1,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Program Kami',
                'slug' => Str::of('Program Kami')->slug('-'),
                'excerpt' => '-',
                'body' => '<p><strong>Program Ketakmiran</strong></p>

                <ul>
                    <li>Kajian Sabtu Dhuha</li>
                    <li>Kajian Shaum Senin Kamis / KISSMIS</li>
                    <li>Layanan Ibadah Harian</li>
                    <li>Konsultasi</li>
                    <li>Pelatihan dan Pengurusan Jenazah</li>
                    <li>Pelayanan Muallaf</li>
                </ul>
                
                <p><br />
                <strong>Program Studi Islam dan Bahasa Arab</strong></p>
                
                <ul>
                    <li>Kelas Tahsin</li>
                    <li>Kelas Tahfidz</li>
                    <li>Kelas Maqamat/Murattal</li>
                    <li>Kelas Bahasa Arab Percakapan</li>
                    <li>Kelas Bahasa Arab Al Quran</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <p><br />
                <strong>Program Pendidikan Keluarga</strong></p>
                
                <ul>
                    <li>Sekolah Pranikah</li>
                    <li>Ta&#39;aruf Talk</li>
                    <li>Seminar Pranikah</li>
                    <li>Seminar Parenting</li>
                    <li>Sekolah Sakinah Salman</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <p><strong>Kelompok Bimbingan Haji dan Umrah (KBIHU)</strong></p>
                
                <ul>
                    <li>Bimbingan Haji</li>
                    <li>Bimbingan Umrah</li>
                    <li>Manasik Haji dan Umrah</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <p><strong>Pengajian Wanita Salman (Kelas khusus Wanita)</strong></p>
                
                <ul>
                    <li>Kelas Irob A</li>
                    <li>Kelas Irob B&nbsp;</li>
                    <li>Kelas Tahsin&nbsp;</li>
                    <li>Kelas Hadits&nbsp;</li>
                    <li>Kelas Fiqih&nbsp;</li>
                    <li>Kelas Waris&nbsp;</li>
                    <li>Kelas Tafsir&nbsp;</li>
                    <li>Kelas Aqidah&nbsp;</li>
                </ul>',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 1,
                'user_id' => 1,
            ],
        );
        $post = Post::create(
            [
                'title' => 'Visi Misi Nilai Kami',
                'slug' => Str::of('Visi Misi Nilai Kami')->slug('-'),
                'excerpt' => '-',
                'body' => '<p><strong>Bidang Dakwah Masjid Salman ITB</strong> merupakan bagian dari <strong>Yayasan Masjid Salman ITB</strong>, yang mempunyai <strong>Visi Misi</strong>:</p>

                <p>&nbsp;</p>
                
                <p><strong>VISI</strong></p>
                
                <p>Menjadi masjid kampus mandiri, pelopor pembangunan peradaban islami</p>
                
                <p>&nbsp;</p>
                
                <p><strong>MISI</strong></p>
                
                <p>1. Mewujudkan masjid sebagai rumah ruhani, sanggar ruhani, dan laboratorium peradaban islami</p>
                
                <p>2. Membina kader pembangun peradaban islami</p>
                
                <p>3. Mengembangkan konsep dan model peradaban islami</p>
                
                <p>&nbsp;</p>
                
                <p>&nbsp;</p>
                
                <p>Nilai yang dipegang oleh <strong>bidang dakwah </strong>adalah <strong>7 nilai salman </strong>yang di</p>
                
                <p>1. <strong>Merdeka</strong></p>
                
                <p>2. <strong>Jujur</strong></p>
                
                <p>3. <strong>Hanif</strong></p>
                
                <p>4. <strong>Sabar-Syukur</strong></p>
                
                <p>5. <strong>Rahmatan lil aalamiin</strong></p>
                
                <p>6. <strong>Ihsan</strong></p>
                
                <p>7. <strong>Kerjasama</strong></p>',
                'image' => '-',
                'published_at' => Carbon::now(),
                'category_id' => 1,
                'user_id' => 1,
            ],
        );
    }
}
