import mariadb

db = mariadb.connect(host="localhost", user="root", passwd="", database="db_tugas_11220027")
cursor = db.cursor()

while True:
    query = "INSERT INTO karyawan VALUES (null, %s, %s, %s)"
    nm_teman = input('Nama       : ')
    al_teman = input('Alamat     : ')
    no_teman = input('Nomer Hp   : ')
    val = (nm_teman, al_teman, no_teman)

    cursor.execute(query, val)
    db.commit()

    ulang = input('Ulangi input data? (y/t) ').lower()
    if ulang == 't':
        break

jawab = input('Tampilkan data? (y/t)').lower()
if jawab == 'y':
    query = "SELECT * FROM tblteman"
    cursor.execute(query)
    results = cursor.fetchall()
    for row in results:
        print(f'Nomor ID: {row[0]}\n'
              f'Nama    : {row[1]}\n'
              f'Alamat  : {row[2]}\n'
              f'Nomer HP: {row[3]}\n')

db.close()

