kondisi_langit = input("Masukkan kondisi langit : ")
kondisi_langit = kondisi_langit.lower()
suhu_terkini = int(input("Masukkan suhu terkini : "))
if kondisi_langit == "Gelap":
    if suhu_terkini <= 34:
        cuaca = 'Badai'
        print("Perkiraan cuaca : "+ cuaca)
    elif suhu_terkini <= 25:
        cuaca = 'Extrim'
        print("Perkiraan cuaca : "+ cuaca)
    else
        cuaca = 'Aman'
        print("Perkiraan cuaca : "+ cuaca)
elif kondisi_langit == "Terang" :
     if suhu_terkini <= 34:
        cuaca = 'Aman'
        print("Perkiraan cuaca : "+ cuaca)
    elif suhu_terkini <= 25:
        cuaca = 'Lah kok'
        print("Perkiraan cuaca : "+ cuaca)
    else
        cuaca = 'Musim panas'
        print("Perkiraan cuaca : "+ cuaca)
else:
    print('Sepertinya aman')
