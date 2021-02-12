#çıkmak için 'c' yazınız.

deger = None
seri = []
x = 0

while True:
    deger = input("Sayı Giriniz :")

    try:
        if deger == "c":
            break
        else:
            seri.append(int(deger))
    except:
        print('Sayı Giriniz!')


print(format(seri))

for i in seri :
    if i % 2==1 and i>=x :
        x=i

print('E1n Büyük Tek Sayı: ', x)