import mariadb

db = mariadb.connect(host="localhost", user="root", passwd="", database="db11220027")
cursor = db.cursor()

sql = "SELECT * FROM tblteman"
cursor.execute(sql)
results = cursor.fetchall()

if cursor.rowcount < 0:
    print("Tidak ada data")
else:
    for row in results:
        print(f'Nomor ID: {row[0]}\n'
              f'Nama   : {row[1]}\n'
              f'Alamat : {row[2]}\n'
              f'Nomer HP: {row[3]}\n')

