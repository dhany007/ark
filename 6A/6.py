import sqlite3


conn = sqlite3.connect('Arkademy.sqlite')
cursor = conn.cursor()

query = """
            SELECT Name.name, Work.name, Kategori.salary
            FROM ((Name
            INNER JOIN Work ON Name.id_work = Work.id)
            INNER JOIN Kategori ON Name.id_salary = Kategori.id)
        """

print("{0:20} {1:20} {2:20}".format("name","work","salary"))
for row in cursor.execute(query):
    print("{0:20} {1:20} {2:20}".format(row[0],row[1],row[2]))

conn.commit()
conn.close()

