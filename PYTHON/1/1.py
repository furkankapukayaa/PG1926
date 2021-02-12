
baslangic=int(input("İlk sayıyı Giriniz:"))
bitis=int(input("Sonuncu Sayıyı Giriniz:"))

for baslangic in range(bitis):
    if baslangic % 3 == 0 and baslangic %5 == 0:
        print("fizzbuzz:")
    elif baslangic % 5 == 0:
        print("buzz:")
    elif baslangic % 3 == 0:
        print("fizz:")
    else:
        print(baslangic)