def control(str):
  i = 0
  for ch in str:
    if ch == '@':
      i = i + 1
 
  if i == 1:
    return True
  else:
    return False
 
mailadress=input('Lütfen mail adresinizi giriniz: ')
if(control(mailadress)==True):
      print('Doğru girdiniz.')
else:
      print('Yanlış girdiniz.')