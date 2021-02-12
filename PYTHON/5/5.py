class Okul():
    tip = "egitimyeri"

    def __init__(self, adi, turu, ogretmen_sayisi, ögrenci_sayisi, sinif_sayisi):
        self.adi = adi
        self.turu = turu
        self.ogretmen_sayisi = ogretmen_sayisi
        self.ögrenci_sayisi = ögrenci_sayisi
        self.sinif_sayisi = sinif_sayisi

O1 = Okul("Mehmet Akif Ersoy", "İlkÖğretim Okulu", 10, 250, 12)
O2 = Okul("Mehmet Akif Ersoy", "İmam Hatip Lisesi", 30, 500, 30)
O3 = Okul("Mehmet Akif Ersoy", "Üniversitesi", 40, 1500, 50)

Okullar = [O1, O2, O3]

for okul in Okullar:
    print(okul.adi, okul.turu, okul.ogretmen_sayisi, okul.ögrenci_sayisi, okul.sinif_sayisi)