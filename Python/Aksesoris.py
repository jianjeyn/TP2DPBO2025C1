from Petshop import Petshop 

class Aksesoris(Petshop):
    def __init__(self, id="", nama="", stok=0, harga=0.0, jenis="", bahan="", warna=""):
        super().__init__(id, nama, stok, harga)  # Memanggil constructor dari Petshop
        self.__jenis = jenis
        self.__bahan = bahan
        self.__warna = warna

    # Getter dan Setter
    def getJenis(self):
        return self.__jenis
    
    def setJenis(self, jenis):
        self.__jenis = jenis

    def getBahan(self):
        return self.__bahan
    
    def setBahan(self, bahan):
        self.__bahan = bahan

    def getWarna(self):
        return self.__warna
    
    def setWarna(self, warna):
        self.__warna = warna
