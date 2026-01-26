<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'nama_sekolah' => 'SMA Negeri 1 Nusantara',
             'alamat' => 'Jl. Pendidikan No. 1, Kecamatan Contoh, Kota Nusantara, Provinsi Indonesia',
             'telepon' => '02188997766',
             'email' => 'info@sman1nusantara.sch.id',
             'npsn' => '10293847',
             'akreditasi' => 'A',
 
             'sejarah' => 'SMA Negeri 1 Nusantara didirikan pada tahun 1985 sebagai wujud kepedulian pemerintah 
             terhadap peningkatan kualitas pendidikan menengah. Seiring berjalannya waktu, sekolah ini terus 
             berkembang baik dari segi sarana prasarana maupun kualitas tenaga pendidik. Berbagai prestasi 
             akademik dan non-akademik telah diraih oleh peserta didik di tingkat daerah maupun nasional. 
             Hingga saat ini, SMA Negeri 1 Nusantara menjadi salah satu sekolah unggulan yang berkomitmen 
             mencetak generasi berkarakter, berilmu, dan berdaya saing global.',
 
             'visi' => 'Terwujudnya peserta didik yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, 
             berakhlak mulia, berprestasi dalam bidang akademik dan non-akademik, serta mampu bersaing 
             di era global dengan tetap menjunjung tinggi nilai-nilai budaya bangsa.',
 
             'misi' => '1. Menyelenggarakan proses pembelajaran yang aktif, kreatif, inovatif, dan menyenangkan.
             2. Mengembangkan potensi peserta didik dalam bidang akademik maupun non-akademik.
             3. Menanamkan nilai-nilai karakter, kedisiplinan, dan tanggung jawab dalam kehidupan sekolah.
             4. Meningkatkan kompetensi pendidik dan tenaga kependidikan secara berkelanjutan.
             5. Menciptakan lingkungan sekolah yang aman, nyaman, dan berwawasan lingkungan.',
 
             'sambutan_kepsek' => 'Puji syukur ke hadirat Tuhan Yang Maha Esa atas rahmat-Nya sehingga website 
             resmi SMA Negeri 1 Nusantara ini dapat hadir sebagai sarana informasi dan komunikasi. Kami 
             berharap website ini dapat menjadi media yang efektif untuk menyampaikan berbagai kegiatan, 
             prestasi, dan program sekolah kepada masyarakat luas. Mari bersama-sama kita wujudkan 
             pendidikan yang berkualitas demi masa depan generasi penerus bangsa.',
 
             'foto_kepsek' => 'kepsek.jpg',
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}
