class Petshop 
{
    private int id;
    private String nama_produk;
    private int harga_produk;
    private int stok_produk;

    // Konstruktor default
    public Petshop() {}

    // Konstruktor dengan parameter
    public Petshop(int id, String nama_produk, int harga_produk, int stok_produk) {
        this.id = id;
        this.nama_produk = nama_produk;
        this.harga_produk = harga_produk;
        this.stok_produk = stok_produk;
    }

    public int getId() {
        return this.id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNamaProduk() {
        return this.nama_produk;
    }

    public void setNamaProduk(String nama_produk) {
        this.nama_produk = nama_produk;
    }

    public int getHargaProduk() {
        return this.harga_produk;
    }

    public void setHargaProduk(int harga_produk) {
        this.harga_produk = harga_produk;
    }

    public int getStokProduk() {
        return this.stok_produk;
    }

    public void setStokProduk(int stok_produk) {
        this.stok_produk = stok_produk;
    }
    
}