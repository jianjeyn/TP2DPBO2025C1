// Subclass Aksesoris yang mewarisi dari Petshop
public class Aksesoris extends Petshop {
    private String jenis;
    private String bahan;
    private String warna;

    // Constructor Default
    public Aksesoris() {
        super(); // Memanggil constructor dari Petshop
        this.jenis = "";
        this.bahan = "";
        this.warna = "";
    }

    // Constructor dengan parameter
    public Aksesoris(String id, String nama, int stok, double harga, String jenis, String bahan, String warna) {
        super(id, nama, stok, harga); // Memanggil constructor dari Petshop
        this.jenis = jenis;
        this.bahan = bahan;
        this.warna = warna;
    }

    // Getter dan Setter
    public String getJenis() {
        return jenis;
    }

    public void setJenis(String jenis) {
        this.jenis = jenis;
    }

    public String getBahan() {
        return bahan;
    }

    public void setBahan(String bahan) {
        this.bahan = bahan;
    }

    public String getWarna() {
        return warna;
    }

    public void setWarna(String warna) {
        this.warna = warna;
    }

    // Method untuk menampilkan data
    public void displayInfo() {
        System.out.println("ID: " + getId());
        System.out.println("Nama Produk: " + getNama());
        System.out.println("Harga: " + getHarga());
        System.out.println("Stok: " + getStok());
        System.out.println("Jenis: " + jenis);
        System.out.println("Bahan: " + bahan);
        System.out.println("Warna: " + warna);
    }
}
