#include <iostream>
#include <string>

using namespace std;

class Petshop
{
private:
    int id;
    string nama_produk;
    int harga_produk;
    int stok_produk;

public:
    Petshop()
    {
    }
    Petshop(int id, string nama_produk, int harga_produk, int stok_produk)
    {
        this->id = id;
        this->nama_produk = nama_produk;
        this->harga_produk = harga_produk;
        this->stok_produk = stok_produk;
    }

    void set_id(int id)
    {
        this->id = id;
    }
    int get_id()
    {
        return this->id;
    }
    void set_nama_produk(string nama_produk)
    {
        this->nama_produk = nama_produk;
    }
    string get_nama_produk()
    {
        return this->nama_produk;
    }

    void set_harga_produk(int harga_produk)
    {
        this->harga_produk = harga_produk;
    }
    int get_harga_produk()
    {
        return this->harga_produk;
    }

    void set_stok_produk(int stok_produk)
    {
        this->stok_produk = stok_produk;
    }
    int get_stok_produk()
    {
        return this->stok_produk;
    }

    ~Petshop()
    {
        // cout << "Destructor called" << endl;
    }
};