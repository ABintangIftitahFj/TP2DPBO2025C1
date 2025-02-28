from Aksesoris import Aksesoris

class Baju(Aksesoris):

    def __init__(self, id, nama_produk, harga_produk, stok_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris, size, merk):
        super().__init__(id, nama_produk, harga_produk, stok_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris)
        self.size = size
        self.merk = merk

    #konstruktor
    def __str__(self):
        return super().__str__() + " " + str(self.size) + " " + self.merk

    #getter and setter
    def getSize(self):
        return self.size
    def setSize(self, size):
        self.size = size
    def getMerk(self):
        return self.merk
    def setMerk(self, merk):
        self.merk = merk

    #destructor
    def __del__(self):
        pass