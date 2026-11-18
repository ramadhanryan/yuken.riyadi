# Laporan Audit dan Klasifikasi Produk Yuken

## Cakupan uji awal

Katalog awal memakai dua keluarga Linear Servo Valves dari daftar model yang diberikan dan workbook `LSVG_Valve_Specifications.xlsx`. Skema menyimpan keluarga produk, model/varian, spesifikasi JSON, kategori, application, serta relasi produk–application.

Workbook juga memuat seri lain, tetapi belum diimpor pada uji awal ini. Data uji saat ini terdiri dari 2 keluarga produk, 10 model, 7 kategori, 8 application, dan 14 relasi produk–application.

## Produk dan validasi sumber

| Keluarga | Model | Status sumber |
|---|---|---|
| LSVG Series | LSVG-03-4, -10, -20, -40, -60 | Spesifikasi berasal dari sheet LSVG. |
| LSVG EH Series | LSVG-01EH-4, -10, -20, -40, -60 | Workbook memakai suffix opsi untuk model 4/10/20; model 40/60 tertulis LSVG-03EH, berbeda dari daftar yang diberikan. Model 40/60 tidak diberi spesifikasi hingga prefix dikonfirmasi. |

Model tersimpan sebagai record varian tersendiri. Ini memudahkan pencarian kode model dan menautkan spesifikasi yang berbeda, sambil menjaga seri sebagai satu keluarga produk.

## Relasi application sementara

Workbook spesifikasi tidak menjelaskan application spesifik tiap keluarga. Untuk menguji alur halaman, relasi sementara 7 application mengikuti matriks fallback kategori pada brief, dengan catatan konfirmasi dan penanda review. Relasi ini **bukan klasifikasi final** dan perlu diganti dengan bukti katalog/dokumentasi produk.

Construction & Earth-moving Equipment tetap menjadi data referensi application, tetapi tidak masuk matriks fallback Linear Servo Valves pada brief. Karena itu belum ada relasi untuk application tersebut.

## Status implementasi

- Database dibuat lewat migrasi Laravel non-destruktif; tabel awal users/cache/jobs dipertahankan.
- Seeder dapat dijalankan ulang dengan `updateOrCreate` dan sinkronisasi relasi.
- Halaman `/product`, detail keluarga `/product/{slug}`, `/applications`, dan detail application `/applications/{slug}` memakai data database.
- Detail produk menampilkan spesifikasi model dan label review untuk data yang belum terkonfirmasi.
- Sumber data awal tersimpan di `database/seeders/data/products.json`; inventaris kategori lama tetap ada di `database/seeders/data/products_raw.json`.

## Yang perlu dikonfirmasi

1. Apakah model 40 dan 60 untuk EH benar `LSVG-01EH` atau `LSVG-03EH` seperti pada workbook.
2. Suffix opsi lengkap bagi model EH 4, 10, dan 20.
3. Application yang benar untuk tiap keluarga produk berdasarkan katalog atau sumber resmi.
