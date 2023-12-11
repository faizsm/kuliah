import sqlite3

#koneksi ke sqlite
koneksi = sqlite3.connect('db11990007.db')
cursor = koneksi.cursor()
cursor.execute('SELECT * FROM tblMahasiswa')

#mengambil satu record
satu = cursor.fetchone()
print(f'Cetak satu record: {satu}\n')

#mengambil dua record
banyak =cursor.fetchmany(2)
print(f'Cetak dua record: {banyak}\n')

#cetak semua record
cursor.execute('SELECT * FROM tblMahasiswa')
print('Cetak semua record')
for row in cursor:
    if row[3] == 'IF':
        namaprodi = 'Informatika'
    else:
        namaprodi = 'Sistem Informasi'

    print(f"ID                 :{row[0]}\n" \
          f"NIM                :{row[1]}\n" \
          f"Nama Mahasiswa     :{row[2]}\n" \
          f"Kode Prodi         :{row[3]}\n" \
          f"Nama Prodi         :{namaprodi}\n" )
    
koneksi.close()