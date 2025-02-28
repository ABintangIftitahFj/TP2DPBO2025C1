import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {
    private static int len_id = 2;
    private static int len_nama_produk = 11;
    private static int len_harga_produk = 12;
    private static int len_stok_produk = 11;
    private static int len_jenis_aksesoris = 16;
    private static int len_bahan_aksesoris = 16;
    private static int len_warna_aksesoris = 16;
    private static int len_size = 4;
    private static int len_merk = 5;

    public static void main(String[] args) {
        List<Baju> listBaju = new ArrayList<>();

        // Menambahkan 5 data default
        Baju baju1 = new Baju(1, "Kemeja Putih", 150000, 10, "Kancing", "Plastik", "Putih", 40, "Zara");
        Baju baju2 = new Baju(2, "Kaos Hitam", 100000, 15, "Sablon", "Katun", "Hitam", 42, "H&M");
        Baju baju3 = new Baju(3, "Jaket Denim", 300000, 5, "Resleting", "Logam", "Silver", 44, "Levi's");
        Baju baju4 = new Baju(4, "Sweater Abu", 250000, 8, "Bordir", "Benang", "Abu-abu", 46, "Uniqlo");
        Baju baju5 = new Baju(5, "Blazer Navy", 500000, 3, "Kancing", "Logam", "Hitam", 48, "Zara");

        listBaju.add(baju1);
        listBaju.add(baju2);
        listBaju.add(baju3);
        listBaju.add(baju4);
        listBaju.add(baju5);

        Scanner scanner = new Scanner(System.in);
        int pilihan = 0;

        while (pilihan != 3) {
            System.out.println("\nMenu Pilihan:");
            System.out.println("1. Tambahkan data");
            System.out.println("2. Tampilkan data");
            System.out.println("3. Keluar");
            System.out.print("Pilih menu (1-3): ");
            pilihan = scanner.nextInt();
            scanner.nextLine(); // Consume newline

            switch (pilihan) {
                case 1:
                    addData(listBaju, scanner);
                    break;
                case 2:
                    System.out.println("\nHere your Data Sir:");
                    showData(listBaju);
                    break;
                case 3:
                    System.out.println("Terima kasih telah menggunakan program ini.");
                    break;
                default:
                    System.out.println("Pilihan tidak tersedia, silakan coba lagi.");
                    break;
            }
        }

        scanner.close();
    }

    private static void addData(List<Baju> listBaju, Scanner scanner) {
        System.out.print("Masukkan jumlah data yang ingin ditambahkan: ");
        int n = scanner.nextInt();
        scanner.nextLine(); // Consume newline

        for (int i = 0; i < n; i++) {
            System.out.print("Masukkan ID: ");
            int id = scanner.nextInt();
            scanner.nextLine(); // Consume newline

            System.out.print("Masukkan Nama Produk: ");
            String namaProduk = scanner.nextLine();

            System.out.print("Masukkan Harga Produk: ");
            int hargaProduk = scanner.nextInt();

            System.out.print("Masukkan Stok Produk: ");
            int stokProduk = scanner.nextInt();
            scanner.nextLine(); // Consume newline

            System.out.print("Masukkan Jenis Aksesoris: ");
            String jenisAksesoris = scanner.nextLine();

            System.out.print("Masukkan Bahan Aksesoris: ");
            String bahanAksesoris = scanner.nextLine();

            System.out.print("Masukkan Warna Aksesoris: ");
            String warnaAksesoris = scanner.nextLine();

            System.out.print("Masukkan Size: ");
            int size = scanner.nextInt();
            scanner.nextLine(); // Consume newline

            System.out.print("Masukkan Merk: ");
            String merk = scanner.nextLine();

            Baju baju = new Baju(id, namaProduk, hargaProduk, stokProduk, jenisAksesoris, bahanAksesoris, warnaAksesoris, size, merk);
            listBaju.add(baju);
        }

        System.out.println("\nData berhasil ditambahkan.");
    }

    private static void showData(List<Baju> listBaju) {
        // Update max lengths before displaying
        updateMaxLengths(listBaju);

        // Calculate total width
        int garis_atas = len_id + len_nama_produk + len_harga_produk + len_stok_produk +
                         len_jenis_aksesoris + len_bahan_aksesoris + len_warna_aksesoris +
                         len_size + len_merk + 19; // +19 for the separators and padding

        // Print table header
        System.out.print("+");
        for (int i = 0; i < garis_atas; i++) {
            System.out.print("-");
        }
        System.out.println("+");

        // Print column headers
        System.out.print("| ID");
        for (int i = 0; i < len_id - 2; i++) System.out.print(" ");

        System.out.print("| Nama Produk");
        for (int i = 0; i < len_nama_produk - 11; i++) System.out.print(" ");

        System.out.print("| Harga Produk");
        for (int i = 0; i < len_harga_produk - 12; i++) System.out.print(" ");

        System.out.print("| Stok Produk");
        for (int i = 0; i < len_stok_produk - 11; i++) System.out.print(" ");

        System.out.print("| Jenis Aksesoris");
        for (int i = 0; i < len_jenis_aksesoris - 15; i++) System.out.print(" ");

        System.out.print("| Bahan Aksesoris");
        for (int i = 0; i < len_bahan_aksesoris - 15; i++) System.out.print(" ");

        System.out.print("| Warna Aksesoris");
        for (int i = 0; i < len_warna_aksesoris - 15; i++) System.out.print(" ");

        System.out.print("| Size");
        for (int i = 0; i < len_size - 4; i++) System.out.print(" ");

        System.out.print("| Merk");
        for (int i = 0; i < len_merk - 2; i++) System.out.print(" ");

        System.out.println("|");

        // Print divider
        System.out.print("+");
        for (int i = 0; i < garis_atas; i++) {
            System.out.print("-");
        }
        System.out.println("+");

        // Print data rows
        for (Baju baju : listBaju) {
            System.out.print("| " + baju.getId());
            for (int i = 0; i < len_id - String.valueOf(baju.getId()).length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getNamaProduk());
            for (int i = 0; i < len_nama_produk - baju.getNamaProduk().length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getHargaProduk());
            for (int i = 0; i < len_harga_produk - String.valueOf(baju.getHargaProduk()).length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getStokProduk());
            for (int i = 0; i < len_stok_produk - String.valueOf(baju.getStokProduk()).length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getJenisAksesoris());
            for (int i = 0; i < len_jenis_aksesoris - baju.getJenisAksesoris().length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getBahanAksesoris());
            for (int i = 0; i < len_bahan_aksesoris - baju.getBahanAksesoris().length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getWarnaAksesoris());
            for (int i = 0; i < len_warna_aksesoris - baju.getWarnaAksesoris().length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getSize());
            for (int i = 0; i < len_size - String.valueOf(baju.getSize()).length(); i++) System.out.print(" ");

            System.out.print("| " + baju.getMerk());
            for (int i = 0; i < len_merk - baju.getMerk().length() + 2; i++) System.out.print(" ");

            System.out.println("|");
        }

        // Print bottom border
        System.out.print("+");
        for (int i = 0; i < garis_atas; i++) {
            System.out.print("-");
        }
        System.out.println("+");
    }

    private static void updateMaxLengths(List<Baju> listBaju) {
        for (Baju baju : listBaju) {
            len_id = Math.max(len_id, String.valueOf(baju.getId()).length());
            len_harga_produk = Math.max(len_harga_produk, String.valueOf(baju.getHargaProduk()).length());
            len_stok_produk = Math.max(len_stok_produk, String.valueOf(baju.getStokProduk()).length());
            len_size = Math.max(len_size, String.valueOf(baju.getSize()).length());

            len_nama_produk = Math.max(len_nama_produk, baju.getNamaProduk().length());
            len_jenis_aksesoris = Math.max(len_jenis_aksesoris, baju.getJenisAksesoris().length());
            len_bahan_aksesoris = Math.max(len_bahan_aksesoris, baju.getBahanAksesoris().length());
            len_warna_aksesoris = Math.max(len_warna_aksesoris, baju.getWarnaAksesoris().length());
            len_merk = Math.max(len_merk, baju.getMerk().length());
        }
    }
}