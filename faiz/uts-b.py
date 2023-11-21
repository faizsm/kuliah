# Soal B – UTS PCS
# <faiz sahrul muharam> - <11220027>
teks = "buah apel jatuh tidak jauh dari pohon apel"
vokal = 0
nonvokal = 0

for x in teks:
    if x in ['a', 'i', 'u', 'e', 'o']:
        vokal += 1
    else:
        nonvokal += 1

print("Menghitung jumlah huruf vokal dan nonvokal")
print("==========================================")
print("Jumlah huruf vokal : %d" % vokal)
print("Jumlah huruf non-vokal : %d" % nonvokal)
