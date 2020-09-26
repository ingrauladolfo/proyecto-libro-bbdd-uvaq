import mysql.connector

dbConnect = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'prueba'
}
conexion = mysql.connector.connect(**dbConnect)
cursor = conexion.cursor()
sql = "SELECT * FROM libro"
cursor.execute(sql)
resultados = cursor.fetchall()
print(resultados)
