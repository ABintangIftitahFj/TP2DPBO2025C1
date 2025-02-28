from Petshop import Petshop

class Aksesoris(Petshop):

    def __init__(self, id, nama_produk, harga_produk, stok_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris):
        super().__init__(id, nama_produk,harga_produk,stok_produk)
        self.jenis_aksesoris = jenis_aksesoris
        self.bahan_aksesoris = bahan_aksesoris
        self.warna_aksesoris = warna_aksesoris
	

    #konstruktor 
    def __str__(self):
        return super().__str__() + " " + self.jenis_aksesoris + " " + self.bahan_aksesoris + " " + self.warna_aksesoris
    
    #getter and setter
    def getJenisAksesoris(self):
        return self.jenis_aksesoris
    def setJenisAksesoris(self, jenis_aksesoris):
        self.jenis_aksesoris = jenis_aksesoris
    def getBahanAksesoris(self):
        return self.bahan_aksesoris
    def setBahanAksesoris(self, bahan_aksesoris):
        self.bahan_aksesoris = bahan_aksesoris
    def getWarnaAksesoris(self):
        return self.warna_aksesoris
    def setWarnaAksesoris(self, warna_aksesoris):
        self.warna_aksesoris = warna_aksesoris


    #destructor
    def __del__(self):
        pass