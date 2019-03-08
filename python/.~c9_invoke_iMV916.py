print("starting...")

import sqlite3
from sqlite3 import Error


def create(db_file):
    try:
        con = sqlite3.connect(db_file)
        print("created")
    except:
        print("failed")
        con = None
    return con

def create_table(connection, table_name):
    cur = connection.cursor()
    cur.execute("CREATE TABLE "\
                + table_name +\
                " (id integer PRIMARY KEY, name text, "\
                + "department text, title text, hireDate text)")

def insert_row(connection, table_name):
    cur = connection.cursor()
    cur.execute("INSERT INTO " + table_name + " VALUES(1, 'Bonnie Zhang', 'BIT', 'Instructor', '2014-08-11');")
    connection.commit()

def update_table(connection, table_name):
    cur = connection.cursor()
    cur.execute("UPDATE " + table_name + \
                " SET department = 'New Department'")
    connection.commit()

def list_one_all(connection, query):
    cur = connection.cursor()
    cur.execute(query)
    one_row = cur.fetchone()
    print("got one" + str(one_row))
    all_rows = cur.fetchall()
    print("got all remaining" + str(all_rows))


databaseName = "HUMAN_RESOURCES_DATABASE.sqlite3"
tableName = "Employees"

connection = create(databaseName)

create_table(connection, tableName)
insert_row(connection, tableName)
update_table(connection, tableName)

print("DONE.")