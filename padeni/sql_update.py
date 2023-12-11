import sqlite3

#koneksi ke sqlite
koneksi = sqlite3.connect('db11990007.db')
cursor = koneksi.cursor()

nim = input('NIM Mahasiswa : ')
q = "SELECT * FROM tblMahasiswa WHERE nim=?"
cursor.execute(q,(nim,))
rec = cursor.fetchall()

if len(rec)>0:
    for row in rec:
        if row[3] == 'IF':
            namaprodi = 'Informatika'
        else:
            namaprodi = 'Sistem Informasi'

    print(f"ID                 :{row[0]}\n" \
          f"NIM                :{row[1]}\n" \
          f"Nama Mahasiswa     :{row[2]}\n" \
          f"Kode Prodi         :{row[3]}\n" \
          f"Nama Prodi         :{namaprodi}\n" )
    
    jawab = input("Ubah data? (y/t) ").lower()
    if (jawab=='y'):
        nama = input('Nama Mahasiswa: ')
        prodi = input('Program Studi (IS/IF): ').upper()

        nm_hms = nama
        kd_prodi = prodi
        nim_mhs = nim

        q = "UPDATE tblMahasiswa SET NamaMahasiswa=?,KodeProdi=? WHERE nim=?"
        cursor.execute(q,(nm_hms,kd_prodi,nim_mhs))
        koneksi.commit()

else:
    print("\nRecord tidak ditemukan...!")   

koneksi.close()