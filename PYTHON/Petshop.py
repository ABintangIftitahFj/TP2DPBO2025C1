import string

class Petshop:
    def __init__(self, id="", nama_produk="", harga_produk=0, stok_produk=0):
        self.id = id
        self.nama_produk = nama_produk
        self.harga_produk = harga_produk
        self.stok_produk = stok_produk

    def __str__(self):
        return self.id + " " + self.nama_produk + " " + str(self.harga_produk) + " " + str(self.stok_produk)
    
    #getter and setter
    def getId(self):
        return self.id
    def setId(self, id):
        self.id = id
    def getNamaProduk(self):
        return self.nama_produk
    def setNamaProduk(self, nama_produk):
        self.nama_produk = nama_produk
    def getHargaProduk(self):
        return self.harga_produk
    def setHargaProduk(self, harga_produk):
        self.harga_produk = harga_produk
    def getStokProduk(self):
        return self.stok_produk
    def setStokProduk(self, stok_produk):
        self.stok_produk = stok_produk
    

    #destructor
    def __del__(self):
        pass