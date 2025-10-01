<?php
echo "Olá, Mundo!";
?>

import mysql.connector

# Connect to the MySQL server
conn = mysql.connector.connect(
    host="localhost",
    user="yourusername",
    password="yourpassword",
    database="yourdatabase"
)
cursor = conn.cursor()

# Run a query
cursor.execute("SELECT * FROM tbl_fornecedor")

# Fetch and print results
for row in cursor.fetchall():
    print(row)

# Close connection
conn.close()