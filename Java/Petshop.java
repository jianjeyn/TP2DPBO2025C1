public class Petshop {
    private String id;
    private String nama;
    private double harga;
    private int stok;

    // Constructor default
    public Petshop() {
        this.id = "";
        this.nama = "";
        this.harga = 0;
        this.stok = 0;
    }

    // Constructor dengan parameter
    public Petshop(String id, String nama, int stok, double harga) {
        this.id = id;
        this.nama = nama;
        this.harga = harga;
        this.stok = stok;
    }

    // Getter dan Setter
    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public int getStok() {
        return stok;
    }

    public void setStok(int stok) {
        this.stok = stok;
    }

    public double getHarga() {
        return harga;
    }

    public void setHarga(double harga) {
        this.harga = harga;
    }
}
