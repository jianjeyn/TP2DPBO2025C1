// Subclass Baju yang mewarisi dari Aksesoris
public class Baju extends Aksesoris {
    private String untuk;
    private String size;
    private String merk;

    // Constructor Default
    public Baju() {
        super();
        this.untuk = "";
        this.size = "";
        this.merk = "";
    }

    // Constructor dengan parameter
    public Baju(String id, String nama, int stok, double harga, String jenis, String bahan, String warna, String untuk, String size, String merk) {
        super(id, nama, stok, harga, jenis, bahan, warna);
        this.untuk = untuk;
        this.size = size;
        this.merk = merk;
    }

    // Getter dan Setter
    public String getUntuk() {
        return untuk;
    }

    public void setUntuk(String untuk) {
        this.untuk = untuk;
    }

    public String getSize() {
        return size;
    }

    public void setSize(String size) {
        this.size = size;
    }

    public String getMerk() {
        return merk;
    }

    public void setMerk(String merk) {
        this.merk = merk;
    }

    // Method untuk menampilkan data
    public void displayInfo() {
        super.displayInfo(); // Memanggil method dari Aksesoris
        System.out.println("Untuk: " + untuk);
        System.out.println("Size: " + size);
        System.out.println("Merk: " + merk);
    }
}
