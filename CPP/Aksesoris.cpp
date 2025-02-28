#include <iostream>
#include <string>
#include "Petshop.cpp"

using namespace std;

class Aksesoris : public Petshop
{

private:
    string jenis_aksesoris;
    string bahan_aksesoris;
    string warna_aksesoris;

public:
    Aksesoris()
    {
    }
    Aksesoris(string jenis_aksesoris, string bahan_aksesoris, string warna_aksesoris)
    {
        this->jenis_aksesoris = jenis_aksesoris;
        this->bahan_aksesoris = bahan_aksesoris;
        this->warna_aksesoris = warna_aksesoris;
    }
    string get_jenis_aksesoris()
    {
        return this->jenis_aksesoris;
    }
    void set_jenis_aksesoris(string jenis_aksesoris)
    {
        this->jenis_aksesoris = jenis_aksesoris;
    }
    string get_bahan_aksesoris()
    {
        return this->bahan_aksesoris;
    }
    void set_bahan_aksesoris(string bahan_aksesoris)
    {
        this->bahan_aksesoris = bahan_aksesoris;
    }
    string get_warna_aksesoris()
    {
        return this->warna_aksesoris;
    }
    void set_warna_aksesoris(string warna_aksesoris)
    {
        this->warna_aksesoris = warna_aksesoris;
    }

    ~Aksesoris()
    {
    }
};