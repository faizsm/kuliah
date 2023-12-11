import sqlite3

#koneksi ke sqlite
koneksi = sqlite3.connect('db11990007.db')
cursor = koneksi.cursor()

while(True):
    nim = input('NIM Mahasiswa : ')
    nama = input('Nama Mahasiswa : ')
    prodi = input('Program Studi (IS/IF): ').upper()

    user = (nim, nama, prodi)
    cursor.execute("INSERT INTO tblMahasiswa VALUES(null, ?, ?, ?);",user)
    koneksi.commit()

    ulang = input('\nUlangi input data? (y/t): ').lower()
    if(ulang == 't'):
        break

koneksi.close()
    