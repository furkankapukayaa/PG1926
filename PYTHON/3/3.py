#çıkmak için 'c' yazınız.

deger = None
dizi = []

while True:
    deger = input("Sayı giriniz:")

    try:
        if deger == "c":
            break
        elif deger == "0":
            dizi.insert(0, int(deger))
        else:
            dizi.append(int(deger))
    except:
        print("Lütfen bir sayı yazın!")

print("Dizi: ", dizi)