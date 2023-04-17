<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 11,
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Syarat dan Cara Membuat NPWP',
                'slug' => 'syarat-dan-cara-membuat-npwp',
                'image_post' => 'post-images/r0ROrzsp3Ox2hc7EhYNT7vuChVTGnYTgVdZjYj5z.jpg',
                'excerpt' => 'Jika syarat membuat NPWP sudah dapat kamu penuhi, sekarang kamu sudah bisa mengajukan pembuatan NPWP untuk wajib pajak pribadi. Membuat NPWP dapat dilakukan secara online ataupun secara offline. Berik...',
            'body' => '<div>Jika syarat membuat NPWP sudah dapat kamu penuhi, sekarang kamu sudah bisa mengajukan pembuatan NPWP untuk wajib pajak pribadi. Membuat NPWP dapat dilakukan secara online ataupun secara offline. Berikut adalah opsi pembuatan NPWP:<br><br>Datang langsung ke Kantor Pelayanan Pajak/ KP2KP terdekat tempat tinggal/usaha<br><br>Siapkan dokumen persyaratan yang telah difotokopi.<br>Datang ke KPP terdekat dari alamat pada KTP Anda. Bila alamat domisili sekarang berbeda dengan KTP, Anda diharuskan melampirkan surat keterangan tinggal dari Kelurahan.<br>Isi formulir pengajuan NPWP.<br>Serahkan berkas ke petugas pendaftaran.<br>Menerima tanda terima pendaftaran Wajib Pajak.<br>Mengirim lewat kantor pos formulir pendaftaran beserta dokumen yang disyaratkan ke KPP terdekat tempat tinggal/usaha<br><br>Unduh formulir, cetak lalu isi formulir tersebut dengan lengkap pada kolom-kolom yang tersedia. Jangan lupa ditandatangani.<br>Kirim formulir yang sudah kamu isi, beserta dengan seluruh dokumen yang diminta sesuai dengan kategori wajib pajak melalui:<br>Kantor pos<br>Jasa ekspedisi atau kurir, seperti JNE, J&amp;T, TIKI, dan sebagainya.<br>Setelah seluruh persyaratan Permohonan Pendaftaran diterima oleh KPP secara lengkap, maka KPP akan menerbitkan Bukti Penerimaan Surat.<br>Lalu, KPP menerbitkan kartu NPWP dan Surat Keterangan Terdaftar (SKT) paling lambat 1 hari kerja setelah Bukti Penerimaan Surat diterbitkan.<br>Kamu hanya perlu menunggu SKT dan NPWP dikirimkan ke alamat tempat tinggal kamu melalui pos atau ekspedisi/kurir.<br>Daftar online melalui e-registration Direktorat Jenderal Pajak pada https://ereg.pajak.go.id/.<br><br>Untuk mendaftar NPWP Online ada 4 langkah yaitu membuat akun, membuat NPWP, dan penyampaian formulir. Berikut adalah langkahnya:<br><br>Membuat Akun</div><ol><li>Buka halaman ereg.pajak.go.id dan klik daftar.</li><li>Masukkan alamat e-mail yang masih aktif agar verifikasi bisa dilakukan.</li><li>Buka link verifikasi yang telah dikirim melalui e-mail.</li><li>Lakukan pengisian data diri secara lengkap agar bisa melangkah ke proses selanjutnya. Pastikan data diri yang diisikan adalah benar.</li><li>Setelah pengisian data diri selesai, buka e-mail dan klik link verifikasi.</li></ol><div><br><br>Membuat NPWP</div><ol><li>Masuk ke sistem e-registrasi dan pilih menu pengajuan NPWP.</li><li>Isi kategori wajib pajak</li><li>Isi identitas kamu dengan baik dan benar</li><li>Untuk menu penghasilan, kamu dapat memilih 4 pilihan jenis pekerjaan yaitu:<br>- Pekerjaan dalam hubungan kerja, bekerja sebagai pegawai atau karyawan, entah itu swasta, PNS, BUMN, atau jabatan lainnya.<br>- Kegiatan Usaha, memiliki usaha sendiri seperti usaha warung makan, perdagangan sembako, warnet, dan sebagainya.<br>- Pekerjaan Bebas, keahlian khusus seperti dokter atau notaris.<br>- Lainnya, memiliki pekerjaan selain dari 3 hal di atas, contohnya adalah kamu yang bekerja secara freelance. Mungkin ada yang bertanya cara mengisi formulir npwp online yang belum kerja ? Hal ini tidak bisa. Karena tidak ada kolom formulir npwp online yg belum kerja. Jadi sebaiknya kamu mengisi bagian ini dengan jawaban freelance.</li><li>Isi alamat tempat tinggal<br>Alamat tempat tinggal adalah domisili tempat kamu tinggal saat ini, yang seharusnya belum tentu sama dengan KTP. Tetapi sebaiknya isi saja kolom tempat tinggal sesuai dengan KTP. Isi semua kolom, namun jika tidak ada boleh dikosongi. Untuk yang tidak memiliki nama jalan bisa diisi nama Dusun/Desa/Kelurahan.</li><li>Isi alamat sesuai KTP<br>Jika sama dengan alamat tempat tinggal dapat klik paling atas agar otomatis terisi</li><li>Isi Alamat Usaha<br>Jika karyawan dapat langsung pilih next/selanjutnya</li><li>Isi tanggunan dan gaji<br>Tanggungan maksimal adalah 3. Jadi jika kamu memiliki lebih dari 3 anak, tetap diisi maksimal 3.</li><li>Isi Persyaratan<br>1) Pilih metode pengiriman berkas. Bisa dengan unggah/upload, bisa juga kirim manual via jasa antar.<br>2) Jika kamu pilih metode unggah, maka silahkan unggah scan KTP pada tombol upload.</li><li>Isi Pernyataan<br>1) Klik 2 centang Benar dan Lengkap<br>2) Klik Finish</li></ol><div><br>Penyampaian Formulir<br>Setelah selesai mengisi syarat untuk NPWP akan otomatis masuk ke menu dashboard. Pada menu dashboard klik “Minta token”. Setelah itu jika berhasil akan muncul notif token telah dikirimkan ke email yang diregistrasikan. Lalu buka email copy token, pilih “kirim permohonan” masukan kode token. Jika berhasil akan keluar notif NPWP akan diproses. Untuk bentuk fisik akan dikirimkan maksimal 1 bulan setelah pendaftaran.</div>',
                'published_at' => NULL,
                'created_at' => '2022-12-10 00:46:22',
                'updated_at' => '2022-12-10 00:46:22',
            ),
            1 => 
            array (
                'id' => 12,
                'category_id' => 3,
                'user_id' => 1,
                'title' => '10 Jenis Saham yang Perlu Diketahui Investor Pemula',
                'slug' => '10-jenis-saham-yang-perlu-diketahui-investor-pemula',
                'image_post' => 'post-images/pHAeJuWMo2bvI7XmCJsewbxUdjKmUY8NV48QCmQJ.jpg',
                'excerpt' => 'Saham adalah tanda kepemilikan atas perusahaan yang menjadi instrumen investasi. Jadi, untuk memiliki suatu perusahaan, Anda tidak harus ikut mendirikan perusahaan itu. Cukup membeli saham perusahaan...',
            'body' => '<div>Saham adalah tanda kepemilikan atas perusahaan yang menjadi instrumen investasi. Jadi, untuk memiliki suatu perusahaan, Anda tidak harus ikut mendirikan perusahaan itu. Cukup membeli saham perusahaan tersebut, Anda juga bisa menjadi pemiliknya.<br>Fungsinya adalah untuk menambah aset atau kekayaan di masa depan karena umumnya perusahaan akan berkembang, sehingga membuat nilai sahamnya juga naik.<br>Berikut merupakan 10 saham yang cocok untuk pemula</div><ol><li><strong>Saham biasa&nbsp;<br></strong>Salah satu saham yang dilihat dari klaim atau hak tagihnya adalah saham biasa (common stock). Saham ini adalah saham paling sering dipilih investor dan saham yang sering ditransaksikan juga.&nbsp;<br>Anda yang memilih saham ini akan meraih keuntungan seperti dividen (ketika emiten yang menerbitkannya memperoleh laba), hak suara ketika berlangsung Rapat Umum Pemegang Saham, dan berhak atas hasil penjualan aset perusahaan yang mengalami kebangkrutan (apabila hal itu terjadi).</li><li><strong>Saham preferen<br></strong>Merupakan saham yang membuat pemiliknya mendapatkan hak-hak istimewa yang tidak didapatkan pemegang saham biasa. Disebut juga sebagai preferred stock.&nbsp;<br>Saham ini memiliki cara kerja yang unik karena Anda bisa meraih pengembalian hasil penyetoran modal seperti mereka yang berinvestasi obligasi. Tidak mengherankan jika saham ini disebut seperti gabungan dari obligasi dan saham.<br>Disebut sebagai saham yang istimewa karena pemiliknya akan meraih hak istimewa seperti didahulukan dalam penerimaan dividen, pengaruhnya besar untuk memilih dewan direksi perusahaan, dan apabila perusahaan bangkrut akan meraih imbal hasil yang sesuai dengan nilai sahamnya.<br>Hanya saja saham preferen tidak memungkinkan pemilik saham untuk mempunyai hak suara di rapat umum pemegang saham.&nbsp;</li><li><strong>Saham atas nama<br></strong>Ada lagi saham yang dilihat dari cara peralihannya yang disebut dengan saham atas nama (registered stock). Saham ini kepemilikannya sangat jelas karena ada nama pemiliknya. Untuk pengalihan kepemilikan, ada prosedur khusus yang perlu diikuti.</li><li><strong>Saham atas unjuk&nbsp;<br></strong>Selain saham atas nama, ada juga saham atas unjuk yang juga dikenal dengan bearer stock. Jenis saham ini nama pemiliknya tidak ditulis, sehingga ketika ingin dipindahtangankan ke orang lain prosedurnya cukup mudah. Tidak serumit prosedur saham atas nama.</li><li><strong>Saham blue chip&nbsp;<br></strong>Jenis saham ini merupakan saham yang menjadi favorit karena punya kapitalisasi di atas Rp10 triliun. Dikatakan bahwa mereka yang punya saham jenis ini bisa meraih dividen yang stabil karena emiten yang masuk ke daftarnya rajin membagikan dividen.<br>Di Bursa Efek Indonesia, daftar saham yang masuk ke kategori blue chip lebih dikenal dengan sebutan LQ45. Ada 45 saham yang masuk ke daftar ini setiap 6 bulan sekali. Artinya, daftar tersebut akan selalu diperbarui oleh BEI tiap 6 bulan sekali.</li><li><strong>Saham income<br></strong>Sesuai dengan namanya, saham ini ada ketika emiten yang menerbitkannya berhasil meraih laba tinggi dari yang pernah diraihnya selama ini.&nbsp;<br>Emiten yang berhasil mendapat untung melebihi ekspektasi biasanya bersedia membagikan dividen yang nilainya lebih tinggi dari biasanya. Investor biasanya mengharapkan saham jenis ini.</li><li><strong>Saham growth<br></strong>Merupakan saham yang punya pendapatan tinggi dan berasal dari emiten yang menjadi pemimpin di sektor yang dijalankannya. Tidak mengherankan jika emiten yang menerbitkan saham ini adalah perusahaan yang reputasinya bagus. Disebut juga dengan saham well-known.</li><li><strong>Saham lesser-known<br></strong>Saham ini kebalikannya dari saham growth. Artinya, saham ini tidak begitu populer. Namun, tetap memiliki keistimewaannya sendiri, yaitu perusahaannya mempunyai kinerja yang bagus.</li><li><strong>Saham spekulatif<br></strong>Saham ini merupakan saham yang disebutkan berpotensi meraih keuntungan yang tinggi di masa nanti. Namun, perolehan pendapatan dan laba yang dimilikinya tidak selalu stabil, sehingga saham jenis ini cocok dipilih oleh para investor yang punya profil risiko high risk. Saham ini juga mudah Anda temukan di pasar modal.</li><li><strong>Saham counter cyclical<br></strong>Merupakan saham yang disukai juga oleh investor karena ini adalah jenis saham yang tetap mempunyai performa bagus, walaupun sedang dihantam resesi sekalipun. Jadi, selama masa resesi, emiten tersebut tetap mampu beroperasi secara baik sehingga pendapatan dan laba yang diterimanya pun stabil.</li></ol><div><br>Alhasil, dividen yang dibagikan untuk para pemegang saham besarannya pun tetap memuaskan.</div>',
                'published_at' => NULL,
                'created_at' => '2022-12-10 01:38:59',
                'updated_at' => '2022-12-10 01:38:59',
            ),
            2 => 
            array (
                'id' => 13,
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Cara Membayar dan Lapor Pajak Online',
                'slug' => 'cara-membayar-dan-lapor-pajak-online',
                'image_post' => 'post-images/oGUGeaEVWX1xJhxTwgGk4mibsdwPFDNIbykcmGdO.jpg',
                'excerpt' => 'Berkat kemajuan teknologi, kini membayar pajak dapat dilakukan secara daring melalui website DJP Online. Berikut merupakan tata cara pembayaran pajak secara online:Log in ke laman djponline.pajak.go.i...',
            'body' => '<div>Berkat kemajuan teknologi, kini membayar pajak dapat dilakukan secara daring melalui website DJP Online. Berikut merupakan tata cara pembayaran pajak secara online:</div><ol><li>Log in ke laman djponline.pajak.go.id.</li><li>Masukkan NPWP, password, dan kode keamanan untuk login ke akun Anda.</li><li>Selanjutnya pilih menu e-Billing System.</li><li>Pilih pada menu Isi SSE.</li><li>Kemudian Anda akan mendapat form Surat Setoran Elektronik (SSE) yang harus Anda isi.</li><li>Data pada formulir tersebut akan terisi otomatis. Yang perlu Anda ubah hanya pada kolom Jenis Pajak, Jenis Setoran, Masa Pajak, Tahun Pajak, Uraian Pajak yang dibayarkan, dan Jumlah Setoran.</li><li>Setelah merampungkan pengisian, klik Simpan.</li><li>Klik pada pilihan Kode Billing.</li><li>Klik Cetak Kode Billing.</li><li>Setelah mendapatkan Kode Billing, bayar pajak online lewat bank, kantor pos, atau ATM yang Anda gunakan. Bisa juga melalui internet banking jika Anda menggunakan fasilitas tersebut.</li></ol>',
                'published_at' => NULL,
                'created_at' => '2022-12-10 01:41:27',
                'updated_at' => '2022-12-10 01:41:27',
            ),
        ));
        
        
    }
}