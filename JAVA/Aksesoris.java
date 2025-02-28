class Aksesoris extends Petshop {
    private String jenis_aksesoris;
    private String bahan_aksesoris;
    private String warna_aksesoris;

    // Konstruktor default
    public Aksesoris() {} 

    // Konstruktor dengan parameter
    public Aksesoris(String jenis_aksesoris, String bahan_aksesoris, String warna_aksesoris) {
        this.jenis_aksesoris = jenis_aksesoris;
        this.bahan_aksesoris = bahan_aksesoris;
        this.warna_aksesoris = warna_aksesoris;
    }

    // Konstruktor dengan parameter untuk semua atribut
    public Aksesoris(int id, String nama_produk, int harga_produk, int stok_produk, String jenis_aksesoris, String bahan_aksesoris, String warna_aksesoris) {
        super(id, nama_produk, harga_produk, stok_produk);
        this.jenis_aksesoris = jenis_aksesoris;
        this.bahan_aksesoris = bahan_aksesoris;
        this.warna_aksesoris = warna_aksesoris;
    }

    public String getJenisAksesoris() {
        return this.jenis_aksesoris;
    }

    public void setJenisAksesoris(String jenis_aksesoris) {
        this.jenis_aksesoris = jenis_aksesoris;
    }

    public String getBahanAksesoris() {
        return this.bahan_aksesoris;
    }

    public void setBahanAksesoris(String bahan_aksesoris) {
        this.bahan_aksesoris = bahan_aksesoris;
    }

    public String getWarnaAksesoris() {
        return this.warna_aksesoris;
    }

    public void setWarnaAksesoris(String warna_aksesoris) {
        this.warna_aksesoris = warna_aksesoris;
    }
}