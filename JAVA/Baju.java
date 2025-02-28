class Baju extends Aksesoris {
    private int size;
    private String merk;

    // Konstruktor default
    public Baju() {}

    // Konstruktor dengan parameter
    public Baju(int id, String nama_produk, int harga_produk, int stok_produk, String jenis_aksesoris, String bahan_aksesoris, String warna_aksesoris, int size, String merk) {
        super(id, nama_produk, harga_produk, stok_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris);
        this.size = size;
        this.merk = merk;
    }

    public int getSize() {
        return this.size;
    }

    public void setSize(int size) {
        this.size = size;
    }

    public String getMerk() {
        return this.merk;
    }

    public void setMerk(String merk) {
        this.merk = merk;
    }
}