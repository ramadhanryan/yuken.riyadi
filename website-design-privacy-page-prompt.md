# Prompt Implementasi Website — Privacy Policy Page

## Tujuan
Bangun halaman **Privacy Policy** yang mereplikasi tampilan referensi visual yang diberikan. Prioritaskan kemiripan layout, proporsi, warna, tipografi, jarak, ikon, dan perilaku navigasi. Halaman ini merupakan halaman kebijakan privasi untuk platform edukasi bernama **EduPlatform**.

Gunakan desain yang bersih, profesional, ringan, dan mudah dibaca. Jangan menambahkan elemen dekoratif yang tidak terlihat pada referensi.

## 1. Struktur halaman

Halaman terdiri dari dua area utama:

1. **Hero/header** penuh lebar di bagian paling atas.
2. **Area konten** berlatar abu-abu sangat muda, berisi sidebar Quick Navigation di sebelah kiri dan panel artikel Privacy Policy di sebelah kanan.

Urutan section artikel:
- Introduction
- Data Collection
- Use of Data
- Cookies and Tracking
- Third-party Services
- Your Rights
- Contact Us

Setiap section berada dalam satu panel artikel putih yang panjang. Beri pemisah horizontal tipis antar-section, kecuali bila tidak diperlukan di bagian paling akhir.

## 2. Hero / header

- Lebar: 100% viewport.
- Tinggi desktop: sekitar 408 px pada screenshot referensi.
- Latar: biru navy/indigo gelap, dapat menggunakan warna mendekati `#172477` atau gradasi sangat halus menuju `#1C1B78`.
- Semua elemen rata tengah secara horizontal.
- Susunan dari atas ke bawah:
  1. Ikon shield/keamanan berwarna putih di dalam lingkaran biru yang sedikit lebih terang/transparan.
  2. Judul `Privacy Policy`.
  3. Deskripsi singkat dua baris.
  4. Informasi tanggal pembaruan `Last updated: August 1, 2025`.
- Lingkaran ikon berdiameter sekitar 70 px, dengan ikon shield outline putih.
- Jarak antara ikon dan judul cukup lega.
- Judul berwarna putih, ukuran sekitar 40 px, bobot regular/medium.
- Deskripsi berwarna putih dengan sedikit transparansi, ukuran sekitar 18 px, line-height sekitar 1.55, lebar maksimum sekitar 700 px.
- Tanggal berukuran sekitar 13–14 px dan berwarna putih kebiruan.
- Copy deskripsi:
  `We're committed to protecting your privacy and ensuring transparency about how we collect, use, and safeguard your personal information on our educational platform.`

## 3. Area konten dan layout desktop

- Latar keseluruhan area konten: abu-abu kebiruan sangat muda, mendekati `#F4F7FA` atau `#F5F7FA`.
- Mulai tepat setelah hero.
- Gunakan layout dua kolom:
  - Sidebar kiri: lebar sekitar 224 px.
  - Jarak antar kolom: sekitar 42 px.
  - Konten utama: lebar fleksibel, sekitar 800 px pada viewport referensi.
- Container memiliki max-width sekitar 1035–1100 px dan berada di tengah viewport.
- Padding atas area konten sekitar 42 px.
- Panel artikel berwarna putih, border abu-abu tipis, radius sekitar 10–12 px, dan shadow sangat lembut.
- Berikan padding internal panel artikel sekitar 40 px.
- Teks utama menggunakan warna navy gelap, dengan line-height nyaman untuk dibaca.

## 4. Sidebar — Quick Navigation

Sidebar berupa kartu putih dengan:
- Border tipis abu-abu muda.
- Sudut membulat sekitar 12 px.
- Padding sekitar 21 px.
- Lebar sekitar 224 px.
- Pada desktop, sidebar sebaiknya `position: sticky` dengan jarak dari atas viewport sekitar 24–30 px agar navigasi tetap mudah dijangkau saat artikel digulir.

Judul sidebar:
- Teks: `Quick Navigation`
- Ukuran sekitar 14 px.
- Warna navy gelap.
- Bobot regular.

Daftar navigasi:
- Introduction
- Data Collection
- Use of Data
- Cookies
- Third-party Services
- Your Rights
- Contact Us

Setiap item memiliki ikon outline kecil di sebelah kiri dan label di sebelah kanan. Gunakan ikon yang sesuai:
- Introduction: file/text document
- Data Collection: database
- Use of Data: settings/gear
- Cookies: globe
- Third-party Services: shield
- Your Rights: user-check
- Contact Us: mail/envelope

Gaya item:
- Tinggi sekitar 34–36 px.
- Padding horizontal sekitar 10–12 px.
- Radius sekitar 7 px.
- Jarak vertikal antar-item sekitar 5–7 px.
- Item aktif menggunakan latar oranye terang (`#F39200` atau warna sejenis), teks dan ikon putih.
- Item nonaktif transparan/putih, teks navy keabu-abuan, ikon slate.
- Pada tampilan awal, `Introduction` menjadi item aktif.

Interaksi:
- Klik item navigasi menggulir halus ke section terkait (`scroll-behavior: smooth`).
- Item aktif berubah mengikuti section yang sedang terlihat (gunakan Intersection Observer atau mekanisme setara).
- Pastikan navigasi tidak menutupi judul section saat scroll; gunakan `scroll-margin-top`.

## 5. Panel artikel dan gaya section

Panel artikel utama:
- Latar putih.
- Border `1px solid` abu-abu muda.
- Radius 10–12 px.
- Shadow lembut.
- Padding desktop sekitar 40 px.
- Lebar fleksibel.
- Isi section disusun vertikal.

Setiap section:
- Heading menggunakan ukuran sekitar 18–20 px, bobot semibold.
- Ikon outline oranye di kiri heading, ukuran sekitar 18–20 px.
- Jarak ikon ke heading sekitar 12 px.
- Paragraf ukuran sekitar 14 px, line-height 1.6–1.75.
- Warna teks biru navy/abu-abu gelap.
- List menggunakan bullet standar, indentasi rapi, dan jarak antar-item sekitar 8–10 px.
- Istilah penting di dalam list menggunakan bold.
- Pemisah section berupa garis horizontal tipis (`#E1E5EA`) dengan margin vertikal sekitar 28–32 px.

Warna ikon section:
- Oranye terang yang sama dengan warna item navigasi aktif.
- Gunakan ikon outline, bukan ikon solid.

## 6. Konten section

Gunakan teks berikut sebagai konten contoh yang terlihat pada referensi. Untuk section yang isi lengkapnya tidak tampak pada screenshot, pertahankan judul dan buat struktur konten yang konsisten tanpa mengarang klaim hukum atau kebijakan spesifik yang tidak diberikan.

### Introduction
Teks:
`Welcome to EduPlatform. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our educational platform and use our services.`

Ikon: document/file-text.

### Data Collection
Sediakan section dengan judul `Data Collection` dan ikon database. Gunakan paragraf dan/atau daftar untuk menjelaskan kategori data yang dikumpulkan. Isi final dapat diganti dengan materi kebijakan resmi.

### Use of Data
Sediakan section dengan judul `Use of Data` dan ikon settings/gear. Gunakan paragraf dan/atau daftar untuk menjelaskan penggunaan data. Jangan menambahkan janji atau ketentuan hukum yang tidak disediakan.

### Cookies and Tracking
Judul yang tampil pada artikel: `Cookies and Tracking`.
Ikon: globe.
Teks:
`We use cookies and similar tracking technologies to enhance your experience on our platform. Cookies help us remember your preferences and provide personalized content.`

Kalimat pengantar daftar:
`Types of cookies we use:`

Daftar:
- **Essential Cookies:** Required for basic platform functionality
- **Performance Cookies:** Help us understand how you use our platform
- **Preference Cookies:** Remember your settings and preferences
- **Marketing Cookies:** Used to deliver relevant educational content

### Third-party Services
Ikon: shield.
Teks:
`We may use third-party services to enhance our educational platform. These services have their own privacy policies and may collect information about you.`

Kalimat pengantar daftar:
`Third-party services we use include:`

Daftar:
- Analytics services to understand platform usage
- Payment processors for course enrollments
- Email services for communications
- Cloud storage providers for content delivery
- Video hosting platforms for educational content

### Your Rights
Ikon navigasi: user-check.
Gunakan daftar hak dengan istilah penting dalam bold:
- **Access:** Request a copy of the personal information we hold about you
- **Correction:** Ask us to correct any inaccurate or incomplete information
- **Deletion:** Request deletion of your personal information
- **Portability:** Request a copy of your data in a structured format
- **Restriction:** Ask us to limit how we use your information
- **Objection:** Object to certain uses of your personal information

Teks penutup:
`To exercise any of these rights, please contact us using the information provided in the Contact Us section below.`

### Contact Us
Ikon: envelope/mail.
Teks:
`If you have any questions about this Privacy Policy or our privacy practices, please contact us:`

Buat kotak informasi kontak dengan latar abu-abu sangat muda (`#F7F8FA`), radius sekitar 10 px, dan padding sekitar 20 px. Isi:
- **Email:** privacy@eduplatform.com
- **Phone:** +1 (555) 123-4567
- **Address:** 123 Education Street, Learning City, LC 12345
- **Business Hours:** Monday - Friday, 9:00 AM - 6:00 PM EST

Teks setelah kotak:
`We will respond to your inquiry within 30 days of receiving your request.`

## 7. Tipografi

- Gunakan font sans-serif modern dan mudah dibaca.
- Prioritaskan font yang menyerupai Arial/Inter/system sans-serif.
- Judul hero: sekitar 40 px, regular/medium.
- Heading section: 18–20 px, semibold.
- Body: 14 px, regular.
- Sidebar: 13–14 px.
- Metadata tanggal: 13 px.
- Gunakan line-height yang nyaman dan konsisten.

## 8. Palet warna

Gunakan nilai berikut sebagai titik awal dan sesuaikan secara visual:

| Elemen | Warna |
|---|---|
| Hero background | `#172477` |
| Hero background alternatif | `#1C1B78` |
| Hero text | `#FFFFFF` |
| Page background | `#F4F7FA` |
| Article card | `#FFFFFF` |
| Main text | `#263653` |
| Secondary text | `#52627A` |
| Accent orange | `#F39200` |
| Border/divider | `#E1E5EA` |
| Contact info background | `#F7F8FA` |
| Active nav text/icon | `#FFFFFF` |

## 9. Responsive behavior

### Desktop (>= 1024 px)
- Hero tetap penuh lebar.
- Sidebar dan artikel tampil berdampingan.
- Sidebar sticky.
- Container berada di tengah dengan max-width.
- Artikel menggunakan padding sekitar 40 px.

### Tablet (768–1023 px)
- Kurangi jarak antar kolom dan padding panel.
- Sidebar dapat diperkecil lebarnya.
- Pastikan teks tidak terlalu sempit.
- Bila dua kolom tidak lagi nyaman, pindahkan navigasi menjadi bar navigasi horizontal/scrollable di atas artikel.

### Mobile (< 768 px)
- Hero lebih pendek, dengan padding vertikal sekitar 48–60 px.
- Judul hero sekitar 30–32 px.
- Deskripsi sekitar 15–16 px dan memenuhi lebar layar dengan margin samping.
- Ubah sidebar menjadi navigasi horizontal yang dapat digeser, atau daftar navigasi ringkas di atas artikel.
- Artikel memenuhi lebar layar dengan margin 14–16 px.
- Padding artikel sekitar 20–22 px.
- Heading dan paragraf tetap mudah dibaca.
- Daftar dan kotak kontak harus membungkus teks dengan baik.
- Hindari horizontal overflow.
- Jangan mempertahankan sidebar sticky dua kolom pada layar kecil.

## 10. Detail interaksi dan kualitas implementasi

- Semua item Quick Navigation harus menuju section yang benar.
- Terapkan smooth scrolling.
- Active state navigasi mengikuti section aktif.
- Gunakan semantic HTML: `header`, `nav`, `main`, `article`, `section`, `h1`, `h2`, `p`, dan `ul`.
- Berikan `id` unik untuk setiap section.
- Ikon harus konsisten menggunakan satu library ikon outline (misalnya Lucide).
- Pastikan kontras teks dan background memadai.
- Tambahkan hover state yang halus pada item navigasi nonaktif.
- Jangan menggunakan animasi berlebihan.
- Pastikan layout stabil, tidak ada elemen yang saling menimpa, dan tidak ada horizontal scrollbar.

## 11. Batasan visual

- Jangan mengubah konsep utama: hero navy, aksen oranye, latar konten abu-abu muda, kartu putih.
- Jangan menambahkan navbar website umum, logo perusahaan, banner promosi, atau footer besar karena elemen tersebut tidak tampak pada referensi yang diberikan.
- Jangan mengganti konten contoh yang telah ditentukan di atas.
- Jangan membuat desain terlalu ramai atau menggunakan banyak warna aksen.
- Fokus pada hasil yang bersih dan sedekat mungkin dengan screenshot referensi.

## 12. Kriteria hasil akhir

Hasil dianggap sesuai apabila:
1. Hero navy dengan ikon shield, judul, deskripsi, dan tanggal tampil di tengah.
2. Area konten memiliki sidebar Quick Navigation di kiri dan panel artikel di kanan pada desktop.
3. Item navigasi aktif berwarna oranye dengan ikon dan teks putih.
4. Artikel memiliki heading berikon oranye, paragraf, bullet list, dan divider tipis.
5. Bagian Contact Us memiliki kotak informasi berwarna abu-abu muda.
6. Sidebar mengikuti scroll pada desktop dan navigasi tetap mudah digunakan di mobile.
7. Seluruh halaman responsif dan mempertahankan karakter visual referensi.

**Instruksi akhir untuk AI coding:** implementasikan halaman ini pada struktur proyek yang sudah tersedia. Sebelum mengubah konfigurasi atau memasang dependency, periksa stack dan pola komponen yang sudah digunakan. Gunakan kembali framework, styling system, dan library ikon yang telah ada bila memungkinkan. Jangan merombak halaman lain di luar kebutuhan halaman Privacy Policy.
