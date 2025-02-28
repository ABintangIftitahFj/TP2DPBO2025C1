#include <iostream>
#include <string>
using namespace std;
#include "Aksesoris.cpp"

class Baju : public Aksesoris
{
private:
    int size;
    string merk;

public:
    Baju() {}

    Baju(int size, string merk)
    {
        this->size = size;
        this->merk = merk;
    }
    int get_size()
    {
        return this->size;
    }
    void set_size(int size)
    {
        this->size = size;
    }
    string get_merk()
    {
        return this->merk;
    }
    void set_merk(string merk)
    {
        this->merk = merk;
    }

    ~Baju() {}


};