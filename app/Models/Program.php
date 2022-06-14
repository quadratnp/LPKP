<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    static $post = [
        [
            "title" => "Implementasi program KESEMPATAN",
            "body" => "di Jawa Timur yang difokuskan di Kabupaten Jember, 
            Probolinggo, dan Lumajang. Dalam ujicoba model telah dilakukan 
            pada daerah Kabupaten Lumajang yang meliputi Desa Jokarto dan 
            Desa Gesang di Kec. Tempeh. Momen launching DLA harus dijadikan 
            motivasi dan penyemangat kepada desa-desa yang lain untuk dapat 
            mereplikasi “Desa Layak Anak” sehingga desa-desa di Kabupaten 
            Lumajang dapat berperan aktif dalam perlindungan anak, khususnya 
            untuk penanggulangan pekerja anak yang akan berkontribusi pada 
            pencapaian indikator Kabupaten Layak Anak."
        ],
        [
            "title" => "Sosialiasi tentang penghaspusan pekerja anak di Desa Sumberejo",
            "body" => "Petani Desa Sumberejo, Kecamatan Ambulu, Kabupaten Jember mendapatkan 
            sosialisasi tentang anak, penghapusan pekerja anak dan bentuk-bentuk pekerjaan 
            terburuk bagi anak. Kegiatan tersebut sebagai salah satu upaya pencegahan dan 
            penanggulangan adanya pekerja anak di sektor pertanian. Mereka ikut terlibat 
            dalam upaya penghapusan Pekerja Anak. Kegiatan berlangsung 6 Oktober 2021 di 
            Balai Desa Sumberejo dengan dipandu oleh kader desa"
        ]
        ];

        public static function all(){
            return self::$post;
        }
}
