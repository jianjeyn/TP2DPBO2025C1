from Aksesoris import Aksesoris  # Mengimport superclass dari aksesoris.py

class Baju(Aksesoris):
    def __init__(self, id="", nama="", stok=0, harga=0.0, jenis="", bahan="", warna="", untuk="", size="", merk=""):
        super().__init__(id, nama, stok, harga, jenis, bahan, warna)  # Memanggil constructor parent
        self.__untuk = untuk
        self.__size = size
        self.__merk = merk

    def getUntuk(self):
        return self.__untuk

    def setUntuk(self, untuk):
        self.__untuk = untuk

    def getSize(self):
        return self.__size

    def setSize(self, size):
        self.__size = size

    def getMerk(self):
        return self.__merk

    def setMerk(self, merk):
        self.__merk = merk

    # Method untuk menampilkan semua informasi dalam satu tempat
    def displayInfo(self):
        print("======================================================================")
        print(f"ID      : {self.getId()}")
        print(f"Nama    : {self.getNama()}")
        print(f"Stok    : {self.getStok()}")
        print(f"Harga   : {self.getHarga()}")
        print(f"Jenis   : {self.getJenis()}")
        print(f"Bahan   : {self.getBahan()}")
        print(f"Warna   : {self.getWarna()}")
        print(f"Untuk   : {self.__untuk}")
        print(f"Size    : {self.__size}")
        print(f"Merk    : {self.__merk}")
        print("======================================================================")
