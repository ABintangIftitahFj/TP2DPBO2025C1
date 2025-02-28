from Baju import Baju

def add_data(list_baju):
    n = int(input())
    for _ in range(n):
        id = int(input())
        nama_produk = input()
        harga_produk = int(input())
        stok_produk = int(input())
        jenis_aksesoris = input()
        bahan_aksesoris = input()
        warna_aksesoris = input()
        size = int(input())
        merk = input()


        baju = Baju(id, nama_produk, harga_produk, stok_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris, size, merk)
        list_baju.append(baju)
    print("\nData berhasil ditambahkan.")


def show_data(list_baju):
    if not list_baju:
        print("Tidak ada data yang tersedia.")
        return

    header = ["ID", "Nama Produk", "Harga Produk", "Stok Produk", "Jenis Aksesoris", "Bahan Aksesoris", "Warna Aksesoris", "Size", "Merk"]
    widths = [len(h) for h in header]

    for baju in list_baju:
        widths[0] = max(widths[0], len(str(baju.id)))
        widths[1] = max(widths[1], len(baju.nama_produk))
        widths[2] = max(widths[2], len(str(baju.harga_produk)))
        widths[3] = max(widths[3], len(str(baju.stok_produk)))
        widths[4] = max(widths[4], len(baju.jenis_aksesoris))
        widths[5] = max(widths[5], len(baju.bahan_aksesoris))
        widths[6] = max(widths[6], len(baju.warna_aksesoris))
        widths[7] = max(widths[7], len(str(baju.size)))
        widths[8] = max(widths[8], len(baju.merk))

    garis = "+" + "+".join("-" * (w + 2) for w in widths) + "+"

    print(garis)
    print("| " + " | ".join(h.ljust(w) for h, w in zip(header, widths)) + " |")
    print(garis)

    for baju in list_baju:
        row = [
            str(baju.id), baju.nama_produk, str(baju.harga_produk), str(baju.stok_produk),
            baju.jenis_aksesoris, baju.bahan_aksesoris, baju.warna_aksesoris,
            str(baju.size), baju.merk
        ]
        print("| " + " | ".join(d.ljust(w) for d, w in zip(row, widths)) + " |")

    print(garis)


def main():
    list_baju = [
        Baju(1, "Kemeja Putih", 150000, 10, "Kancing", "Plastik", "Putih", 40, "Zara"),
        Baju(2, "Kaos Hitam", 100000, 15, "Sablon", "Katun", "Hitam", 42, "H&M"),
        Baju(3, "Jaket Denim", 300000, 5, "Resleting", "Logam", "Silver", 44, "Levi's"),
        Baju(4, "Sweater Abu", 250000, 8, "Bordir", "Benang", "Abu-abu", 46, "Uniqlo"),
        Baju(5, "Blazer Navy", 500000, 3, "Kancing", "Logam", "Hitam", 48, "Zara")
    ]

    pilihan = 0
    while pilihan != 3:
        print("\nMenu Pilihan:")
        print("1. Tambahkan data")
        print("2. Tampilkan data")
        print("3. Keluar")
        pilihan = int(input("Pilih menu (1-3): "))

        if pilihan == 1:
            add_data(list_baju)
        elif pilihan == 2:
            show_data(list_baju)
        elif pilihan == 3:
            print("Terima kasih telah menggunakan program ini.")
        else:
            print("Pilihan tidak tersedia, silakan coba lagi.")


if __name__ == "__main__":
    main()





# def add_data(list_baju):
#     n = int(input("Masukkan jumlah data yang ingin ditambahkan: "))
#     for _ in range(n):
#         id = int(input("Masukkan ID: "))
#         nama_produk = input("Masukkan Nama Produk: ")
#         harga_produk = int(input("Masukkan Harga Produk: "))
#         stok_produk = int(input("Masukkan Stok Produk: "))
#         jenis_aksesoris = input("Masukkan Jenis Aksesoris: ")
#         bahan_aksesoris = input("Masukkan Bahan Aksesoris: ")
#         warna_aksesoris = input("Masukkan Warna Aksesoris: ")
#         size = int(input("Masukkan Size: "))
#         merk = input("Masukkan Merk: ")

#         baju = Baju(id, nama_produk, harga_produk, stok_produk, jenis_aksesoris, bahan_aksesoris, warna_aksesoris, size, merk)
#         list_baju.append(baju)
#     print("\nData berhasil ditambahkan.")