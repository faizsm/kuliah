import random

# Membangkitkan bilangan acak sebanyak 20 item dari 1 hingga 100
random_numbers = [random.randint(1, 100) for _ in range(20)]

# Membuat list kosong untuk bilangan genap dan ganjil
list_genap = []
list_ganjil = []

# Memisahkan bilangan genap dan ganjil ke dalam list_genap dan list_ganjil
for number in random_numbers:
    if number % 2 == 0:
        list_genap.append(number)
    else:
        list_ganjil.append(number)

# Mencari elemen terbesar dan posisinya di setiap list
if list_genap:
    max_genap = max(list_genap)
    posisi_max_genap = list_genap.index(max_genap)
else:
    max_genap = None
    posisi_max_genap = None

if list_ganjil:
    max_ganjil = max(list_ganjil)
    posisi_max_ganjil = list_ganjil.index(max_ganjil)
else:
    max_ganjil = None
    posisi_max_ganjil = None

# Menghitung jumlah elemen untuk setiap list
jumlah_genap = len(list_genap)
jumlah_ganjil = len(list_ganjil)

# Menjumlahkan setiap elemen di setiap list
total_genap = sum(list_genap)
total_ganjil = sum(list_ganjil)

# Menampilkan hasil
print("Bilangan Acak:", random_numbers)
print("List Genap:", list_genap)
print("List Ganjil:", list_ganjil)
print("Elemen Terbesar dan Posisi (index) setiap list:")
print("Genap: Elemen Terbesar =", max_genap, "di posisi (index)", posisi_max_genap)
print("Ganjil: Elemen Terbesar =", max_ganjil, "di posisi (index)", posisi_max_ganjil)
print("Jumlah Elemen:")
print("Genap:", jumlah_genap)
print("Ganjil:", jumlah_ganjil)
print("Jumlah Elemen untuk Setiap List:")
print("Genap:", total_genap)
print("Ganjil:", total_ganjil)
