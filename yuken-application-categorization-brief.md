# Brief: Kategorisasi Produk Yuken berdasarkan Application + Migrasi HTML ke Database

Dokumen ini adalah instruksi kerja untuk code agent. Kerjakan **berurutan per fase**, dan **berhenti untuk konfirmasi** di titik yang ditandai `⏸ CHECKPOINT`.

---

## 0. Tujuan

Pengunjung website Yuken bisa menelusuri produk **berdasarkan application** (bidang penggunaan), selain berdasarkan kategori produk. Saat ini situs masih berupa file HTML statis. Targetnya:

1. Menentukan, dari **deskripsi tiap produk**, produk itu masuk kategori produk apa dan dipakai di application apa saja.
2. Membuat database untuk menyimpan semuanya.
3. Mengubah halaman HTML supaya data diambil dari database.

## 1. Asumsi Stack

- Laravel 11, PHP 8.2+, MySQL/MariaDB (hosting cPanel).
- Halaman saat ini: HTML statis. **Periksa dulu struktur proyek** sebelum mengubah apa pun. Jika stack ternyata berbeda dari asumsi di atas, laporkan dulu dan jangan menebak.

## 2. Aturan Umum

- **Jangan hapus atau timpa file HTML asli.** Pindahkan salinannya ke `legacy/` atau buat branch baru.
- Jangan mengarang spesifikasi atau isi deskripsi produk. Pakai teks yang sudah ada di HTML.
- Jika klasifikasi tidak yakin, tandai `needs_review: true` dan jelaskan alasannya. Jangan memaksa menebak.
- Semua `slug` huruf kecil, dipisah tanda hubung, unik.
- Jaga URL lama agar tidak 404: buat redirect 301 dari URL HTML lama ke route baru.
- Bahasa UI mengikuti situs yang ada.

---

## 3. Data Referensi

### 3.1 Kategori Produk (7)

| slug | name |
|---|---|
| linear-servo-valves | Linear Servo Valves |
| hydraulic-cylinders | Hydraulic Cylinders |
| flow-controls | Flow Controls |
| modules | Modules |
| pressure-control-valves | Pressure Control Valves |
| pumps | Pumps |
| solenoid-valves | Solenoid Valves |

### 3.2 Application (8)

| slug | name |
|---|---|
| automotive-transportation | Automotive Transportation |
| construction-earth-moving-equipment | Construction & Earth-moving Equipment |
| industrial-robots | Industrial Robots |
| machine-tools | Machine Tools |
| manufacturing-machinery | Manufacturing Machinery |
| plastic-processing-forming-machinery | Plastic Processing and Forming Machinery |
| power-generation | Power Generation |
| steel-plant-equipment | Steel Plant Equipment |

### 3.3 Pemetaan Awal (tingkat kategori produk, sebagai titik awal saja)

`●` = primary, `○` = secondary. **Ini hipotesis umum, bukan data resmi.** Pemetaan final harus per produk dan berdasarkan deskripsinya (lihat Fase 1).

| Application | Linear Servo Valves | Hydraulic Cylinders | Flow Controls | Modules | Pressure Control Valves | Pumps | Solenoid Valves |
|---|---|---|---|---|---|---|---|
| Automotive Transportation | ○ | ● | ○ | ○ | ● | ● | ● |
| Construction & Earth-moving | | ● | ● | ● | ● | ● | ● |
| Industrial Robots | ● | ○ | ○ | ○ | ○ | ○ | ● |
| Machine Tools | ● | ○ | ● | ● | ● | ● | ● |
| Manufacturing Machinery | ○ | ● | ● | ● | ● | ● | ● |
| Plastic Processing & Forming | ● | ● | ● | ● | ● | ● | ● |
| Power Generation | ● | ○ | ○ | | ● | ○ | ● |
| Steel Plant Equipment | ● | ● | ● | ○ | ● | ● | ● |

---

## 4. FASE 1: Audit HTML dan Klasifikasi Produk

### 4.1 Inventarisasi

1. Cari semua halaman produk di proyek (HTML/PHP/partial) dan daftar path-nya.
2. Untuk tiap produk, ekstrak: nama, kode seri/model (jika ada), deskripsi pendek, deskripsi panjang, spesifikasi (tabel/list), gambar, link katalog PDF.
3. Simpan hasil ekstraksi ke `database/seeders/data/products_raw.json`.

### 4.2 Klasifikasi

Untuk setiap produk, tentukan:

- `category_slug`: tepat satu dari 3.1. Dasarnya fungsi produk (pompa, katup tekanan, silinder, dan seterusnya), bukan sekadar nama file.
- `applications`: nol atau lebih dari 3.2, masing-masing dengan `relevance` (`primary` atau `secondary`).

Panduan sinyal dari teks deskripsi (bukan aturan kaku, deskripsi produk yang jadi acuan utama):

| Application | Sinyal di deskripsi |
|---|---|
| Automotive Transportation | automotive, vehicle, truck, transport, car body, test bench, dump, lift |
| Construction & Earth-moving | excavator, crane, loader, bulldozer, mobile machinery, heavy equipment |
| Industrial Robots | robot, manipulator, high-response positioning, servo control |
| Machine Tools | machine tool, lathe, machining center, milling, grinding, clamping, chuck, tool changer |
| Manufacturing Machinery | press, general industrial machinery, packaging, assembly, production line |
| Plastic Processing & Forming | injection molding, blow molding, extrusion, clamping unit, forming |
| Power Generation | turbine, governor, power plant, generator, hydro |
| Steel Plant Equipment | rolling mill, steel, continuous casting, strip, furnace, heavy-duty |

Aturan keputusan:

- Deskripsi menyebut application secara **eksplisit** → `primary`.
- Hanya cocok secara **fungsi umum**, tidak disebut eksplisit → `secondary`, atau tinggalkan jika ragu.
- Deskripsi tidak memberi petunjuk sama sekali → pakai pemetaan 3.3 sebagai fallback **dan** set `needs_review: true`.

### 4.3 Output

Tulis ke `database/seeders/data/products.json` dengan format:

```json
[
  {
    "slug": "contoh-produk",
    "name": "Contoh Produk",
    "series_code": "ABC-01",
    "category_slug": "pumps",
    "short_description": "...",
    "description": "...",
    "specs": { "key": "value" },
    "image": "path/relatif.jpg",
    "catalog_pdf": null,
    "applications": [
      { "slug": "machine-tools", "relevance": "primary", "note": null },
      { "slug": "plastic-processing-forming-machinery", "relevance": "secondary", "note": null }
    ],
    "needs_review": false,
    "reason": "Deskripsi menyebut 'machine tool hydraulic unit'."
  }
]
```

Buat juga ringkasan `docs/classification-report.md` berisi:

- tabel produk × application hasil klasifikasi,
- daftar produk `needs_review: true` beserta alasannya,
- jumlah produk per kategori dan per application.

### ⏸ CHECKPOINT 1
Tampilkan `classification-report.md` ke saya dan **tunggu persetujuan** sebelum lanjut ke Fase 2.

---

## 5. FASE 2: Database

Gunakan migration Laravel 11 (urutan sesuai dependensi).

```php
// create_product_categories_table
Schema::create('product_categories', function (Blueprint $table) {
    $table->id();
    $table->string('name', 150);
    $table->string('slug', 160)->unique();
    $table->text('description')->nullable();
    $table->string('image')->nullable();
    $table->unsignedInteger('sort_order')->default(0);
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});

// create_applications_table
Schema::create('applications', function (Blueprint $table) {
    $table->id();
    $table->string('name', 150);
    $table->string('slug', 160)->unique();
    $table->text('description')->nullable();
    $table->string('image')->nullable();
    $table->unsignedInteger('sort_order')->default(0);
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});

// create_products_table
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->foreignId('product_category_id')->constrained()->restrictOnDelete();
    $table->string('name', 200);
    $table->string('series_code', 100)->nullable();
    $table->string('slug', 220)->unique();
    $table->string('short_description', 300)->nullable();
    $table->text('description')->nullable();
    $table->json('specs')->nullable();
    $table->string('image')->nullable();
    $table->string('catalog_pdf')->nullable();
    $table->boolean('needs_review')->default(false);
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});

// create_product_application_table (pivot many-to-many)
Schema::create('product_application', function (Blueprint $table) {
    $table->foreignId('product_id')->constrained()->cascadeOnDelete();
    $table->foreignId('application_id')->constrained()->cascadeOnDelete();
    $table->enum('relevance', ['primary', 'secondary'])->default('primary');
    $table->string('note')->nullable();
    $table->unsignedInteger('sort_order')->default(0);
    $table->primary(['product_id', 'application_id']);
    $table->index(['application_id', 'relevance']);
});
```

### Models

```php
// Application
public function products() {
    return $this->belongsToMany(Product::class, 'product_application')
        ->withPivot('relevance', 'note', 'sort_order');
}
public function scopeActive($q) { return $q->where('is_active', true); }

// Product
protected $casts = ['specs' => 'array', 'is_active' => 'boolean', 'needs_review' => 'boolean'];
public function category() { return $this->belongsTo(ProductCategory::class, 'product_category_id'); }
public function applications() {
    return $this->belongsToMany(Application::class, 'product_application')
        ->withPivot('relevance', 'note', 'sort_order');
}

// ProductCategory
public function products() { return $this->hasMany(Product::class); }
```

Nama tabel pivot `product_application` tidak mengikuti konvensi Laravel, jadi **wajib** disebut eksplisit di `belongsToMany` seperti di atas.

### Seeders

1. `ProductCategorySeeder`: isi dari tabel 3.1, `sort_order` mengikuti urutan tabel.
2. `ApplicationSeeder`: isi dari tabel 3.2, `sort_order` mengikuti urutan tabel.
3. `ProductSeeder`: baca `products.json` (yang sudah disetujui), gunakan `updateOrCreate` berdasarkan `slug` agar aman dijalankan ulang, lalu `sync` relasi `applications` dengan data pivot (`relevance`, `note`).

### ⏸ CHECKPOINT 2
Jalankan `php artisan migrate:fresh --seed` di environment lokal. Laporkan jumlah baris per tabel dan bukti relasi bekerja (contoh: daftar produk di application `machine-tools`).

---

## 6. FASE 3: Ubah HTML menjadi Berbasis Database

### 6.1 Route

```php
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/category/{slug}', [ProductController::class, 'byCategory'])->name('products.category');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');
Route::get('/applications/{slug}', [ApplicationController::class, 'show'])->name('applications.show');
```

Sesuaikan prefix dengan struktur URL situs yang sudah ada. Tambahkan redirect 301 dari URL HTML lama ke route baru.

### 6.2 Query inti (halaman application)

```php
$application = Application::active()->where('slug', $slug)->firstOrFail();

$products = $application->products()
    ->where('products.is_active', true)
    ->with('category')
    ->orderByRaw("FIELD(product_application.relevance, 'primary', 'secondary')")
    ->orderBy('product_application.sort_order')
    ->get();

$grouped = $products->groupBy(fn ($p) => $p->category->name);
```

### 6.3 Konversi HTML ke Blade

1. Ekstrak bagian yang berulang (header, footer, navbar) ke `resources/views/layouts/app.blade.php`.
2. **Pertahankan markup dan CSS yang ada**. Tampilan harus tampak sama. Yang berubah hanya sumber datanya (hardcoded → variabel Blade).
3. Halaman yang perlu dibuat atau diubah:
   - **Daftar kategori produk**: loop dari `product_categories`.
   - **Daftar produk per kategori**: loop produk dari relasi `category`.
   - **Detail produk**: tampilkan spesifikasi dari `specs` dan badge **"Digunakan di: …"** dari relasi `applications`, tiap badge menaut ke halaman application.
   - **Daftar application**: grid 8 application (gambar, nama, deskripsi singkat).
   - **Halaman application**: produk dikelompokkan per kategori produk, `primary` tampil lebih dulu dengan label "Recommended".
4. Tambahkan menu navigasi **"Applications"** di navbar.
5. Opsional: filter di halaman produk (`?application=machine-tools`) memakai `whereHas('applications', ...)`.

### 6.4 Gambar dan aset

- Pertahankan path gambar yang sudah ada, atau pindahkan ke `public/` dan perbarui path di database. Jangan ada gambar yang rusak.

---

## 7. Kriteria Selesai (Acceptance Criteria)

- [ ] `classification-report.md` sudah disetujui dan semua produk `needs_review` sudah ditinjau.
- [ ] `migrate:fresh --seed` berjalan tanpa error dan bisa diulang.
- [ ] Setiap produk punya tepat satu kategori produk dan minimal satu application (atau dijelaskan alasannya jika tidak).
- [ ] 8 halaman application menampilkan produk yang benar, dikelompokkan per kategori.
- [ ] Halaman detail produk menampilkan badge application yang menaut dengan benar.
- [ ] Tampilan setara dengan HTML lama (tidak ada layout yang rusak, tidak ada gambar yang hilang).
- [ ] URL lama di-redirect 301, tidak ada 404 untuk halaman yang sebelumnya ada.
- [ ] File HTML asli masih tersimpan (di `legacy/` atau branch terpisah).
- [ ] Ringkasan perubahan: daftar file yang dibuat dan diubah, serta perintah untuk menjalankan ulang seeder.
