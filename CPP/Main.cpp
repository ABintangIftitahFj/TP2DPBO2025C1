#include <iostream>
#include <string>
#include <list>
#include "Baju.cpp"
#include <limits>

using namespace std;

int main()
{
    list<Baju> list_baju;

    // Menambahkan 5 data default
    Baju baju1, baju2, baju3, baju4, baju5;

    int len_id = 2;
    int len_nama_produk = 11;
    int len_harga_produk = 12;
    int len_stok_produk = 11;
    int len_jenis_aksesoris = 16;
    int len_bahan_aksesoris = 16;
    int len_warna_aksesoris = 16;
    int len_size = 4;
    int len_merk = 5;

    // Initialize default data
    baju1.set_id(1);
    baju1.set_nama_produk("Kemeja Putih");
    baju1.set_harga_produk(150000);
    baju1.set_stok_produk(10);
    baju1.set_jenis_aksesoris("Kancing");
    baju1.set_bahan_aksesoris("Plastik");
    baju1.set_warna_aksesoris("Putih");
    baju1.set_size(40);
    baju1.set_merk("Zara");

    baju2.set_id(2);
    baju2.set_nama_produk("Kaos Hitam");
    baju2.set_harga_produk(100000);
    baju2.set_stok_produk(15);
    baju2.set_jenis_aksesoris("Sablon");
    baju2.set_bahan_aksesoris("Katun");
    baju2.set_warna_aksesoris("Hitam");
    baju2.set_size(42);
    baju2.set_merk("H&M");

    baju3.set_id(3);
    baju3.set_nama_produk("Jaket Denim");
    baju3.set_harga_produk(300000);
    baju3.set_stok_produk(5);
    baju3.set_jenis_aksesoris("Resleting");
    baju3.set_bahan_aksesoris("Logam");
    baju3.set_warna_aksesoris("Silver");
    baju3.set_size(44);
    baju3.set_merk("Levi's");

    baju4.set_id(4);
    baju4.set_nama_produk("Sweater Abu");
    baju4.set_harga_produk(250000);
    baju4.set_stok_produk(8);
    baju4.set_jenis_aksesoris("Bordir");
    baju4.set_bahan_aksesoris("Benang");
    baju4.set_warna_aksesoris("Abu-abu");
    baju4.set_size(46);
    baju4.set_merk("Uniqlo");

    baju5.set_id(5);
    baju5.set_nama_produk("Blazer Navy");
    baju5.set_harga_produk(500000);
    baju5.set_stok_produk(3);
    baju5.set_jenis_aksesoris("Kancing");
    baju5.set_bahan_aksesoris("Logam");
    baju5.set_warna_aksesoris("Hitam");
    baju5.set_size(48);
    baju5.set_merk("Zara");

    list_baju.push_back(baju1);
    list_baju.push_back(baju2);
    list_baju.push_back(baju3);
    list_baju.push_back(baju4);
    list_baju.push_back(baju5);

    // Function to calculate maximum field lengths for formatting
    auto updateMaxLengths = [&]()
    {
        for (Baju baju : list_baju)
        {
            len_id = max(len_id, (int)to_string(baju.get_id()).length());
            len_harga_produk = max(len_harga_produk, (int)to_string(baju.get_harga_produk()).length());
            len_stok_produk = max(len_stok_produk, (int)to_string(baju.get_stok_produk()).length());
            len_size = max(len_size, (int)to_string(baju.get_size()).length());

            len_nama_produk = max(len_nama_produk, (int)baju.get_nama_produk().length());
            len_jenis_aksesoris = max(len_jenis_aksesoris, (int)baju.get_jenis_aksesoris().length());
            len_bahan_aksesoris = max(len_bahan_aksesoris, (int)baju.get_bahan_aksesoris().length());
            len_warna_aksesoris = max(len_warna_aksesoris, (int)baju.get_warna_aksesoris().length());
            len_merk = max(len_merk, (int)baju.get_merk().length());
        }
    };

    // Function to display all data
    auto showData = [&]()
    {
        // Update max lengths before displaying
        updateMaxLengths();

        // Calculate total width
        int garis_atas = len_id + len_nama_produk + len_harga_produk + len_stok_produk +
                         len_jenis_aksesoris + len_bahan_aksesoris + len_warna_aksesoris +
                         len_size + len_merk + 19; // +19 for the separators and padding

        // Print table header
        cout << "+";
        for (int i = 0; i < garis_atas; i++)
        {
            cout << "-";
        }
        cout << "+" << endl;

        // Print column headers
        cout << "| ID";
        for (int i = 0; i < len_id - 2; i++)
            cout << " ";

        cout << "| Nama Produk";
        for (int i = 0; i < len_nama_produk - 11; i++)
            cout << " ";

        cout << "| Harga Produk";
        for (int i = 0; i < len_harga_produk - 12; i++)
            cout << " ";

        cout << "| Stok Produk";
        for (int i = 0; i < len_stok_produk - 11; i++)
            cout << " ";

        cout << "| Jenis Aksesoris";
        for (int i = 0; i < len_jenis_aksesoris - 15; i++)
            cout << " ";

        cout << "| Bahan Aksesoris";
        for (int i = 0; i < len_bahan_aksesoris - 15; i++)
            cout << " ";

        cout << "| Warna Aksesoris";
        for (int i = 0; i < len_warna_aksesoris - 15; i++)
            cout << " ";

        cout << "| Size";
        for (int i = 0; i < len_size - 4; i++)
            cout << " ";

        cout << "| Merk";
        for (int i = 0; i < len_merk - 2; i++)
            cout << " ";

        cout << "|" << endl;

        // Print divider
        cout << "+";
        for (int i = 0; i < garis_atas; i++)
        {
            cout << "-";
        }
        cout << "+" << endl;

        // Print data rows
        for (Baju baju : list_baju)
        {
            cout << "| " << baju.get_id();
            for (int i = 0; i < len_id - to_string(baju.get_id()).length(); i++)
                cout << " ";

            cout << "| " << baju.get_nama_produk();
            for (int i = 0; i < len_nama_produk - baju.get_nama_produk().length(); i++)
                cout << " ";

            cout << "| " << baju.get_harga_produk();
            for (int i = 0; i < len_harga_produk - to_string(baju.get_harga_produk()).length(); i++)
                cout << " ";

            cout << "| " << baju.get_stok_produk();
            for (int i = 0; i < len_stok_produk - to_string(baju.get_stok_produk()).length(); i++)
                cout << " ";

            cout << "| " << baju.get_jenis_aksesoris();
            for (int i = 0; i < len_jenis_aksesoris - baju.get_jenis_aksesoris().length(); i++)
                cout << " ";

            cout << "| " << baju.get_bahan_aksesoris();
            for (int i = 0; i < len_bahan_aksesoris - baju.get_bahan_aksesoris().length(); i++)
                cout << " ";

            cout << "| " << baju.get_warna_aksesoris();
            for (int i = 0; i < len_warna_aksesoris - baju.get_warna_aksesoris().length(); i++)
                cout << " ";

            cout << "| " << baju.get_size();
            for (int i = 0; i < len_size - to_string(baju.get_size()).length(); i++)
                cout << " ";

            cout << "| " << baju.get_merk();
            for (int i = 0; i < len_merk - baju.get_merk().length() + 2; i++)
                cout << " ";

            cout << "|" << endl;
        }

        // Print bottom border
        cout << "+";
        for (int i = 0; i < garis_atas; i++)
        {
            cout << "-";
        }
        cout << "+" << endl;
    };

    // Function to add new data
    auto addData = [&]()
    {
        int n;
        cin >> n;
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // Bersihkan buffer

        for (int i = 0; i < n; i++)
        {
            Baju kBaju;
            int id, harga_produk, stok_produk, size;
            string nama_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris, merk;

            cin >> id;
            cin.ignore(numeric_limits<streamsize>::max(), '\n'); // Bersihkan buffer
            getline(cin, nama_produk);
            cin >> harga_produk;
            cin >> stok_produk;
            cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');
            getline(cin, jenis_aksesoris);
            getline(cin, bahan_aksesoris);
            getline(cin, warna_aksesoris);
            cin >> size;
            cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');
            getline(cin, merk);

            kBaju.set_id(id);
            kBaju.set_nama_produk(nama_produk);
            kBaju.set_harga_produk(harga_produk);
            kBaju.set_stok_produk(stok_produk);
            kBaju.set_jenis_aksesoris(jenis_aksesoris);
            kBaju.set_bahan_aksesoris(bahan_aksesoris);
            kBaju.set_warna_aksesoris(warna_aksesoris);
            kBaju.set_size(size);
            kBaju.set_merk(merk);

            list_baju.push_back(kBaju);
        }
        cout << "\n";
        cout << "\033[32mData berhasil ditambahkan.\033[0m" << endl;
    };

    // Main menu loop
    cout << "Selamat datang di program penjualan baju Chavalli Petshop" << endl;

    int pilihan = 0;
    while (pilihan != 3)
    {
        cout << "\nMenu Pilihan:" << endl;
        cout << "1. Tambahkan data" << endl;
        cout << "2. Tampilkan data" << endl;
        cout << "3. Keluar" << endl;
        cout << "Pilih menu (1-3): ";
        cin >> pilihan;

        switch (pilihan)
        {
        case 1:
            addData();
            break;
        case 2:
            cout << "\n\033[32mHere your Data Sir:\033[0m" << endl;
            showData();
            break;
        case 3:
            cout << "Terima kasih telah menggunakan program ini." << endl;
            break;
        default:
            cout << "Pilihan tidak tersedia, silakan coba lagi." << endl;
            break;
        }
    }

    return 0;
}