#!C:\xampp\python\python.exeimport MySQLdb	#http://mysql-python.sourceforge.net/MySQLdb.html#mysqldbprint "Content-type: text/html\n\n"#Data members/Variables#For security, do not hardcode the values needed to connect and log into the database in your main script. Python has the convention of a config.py module, where you can keep such values separate from the rest of your code.db_host = "127.0.0.1"db_user = "root"db_pass = ""db_database = "automate_test"db_table = "hw_import"file_path = "'/xampp/htdocs/automate/import/csv/"  #Directory for CSV, will need to be modified for server installfile_name = "hw_import.csv'"       					#Not sure how to get this yet as it will be generated by the PHP script#file = "/xampp/htdocs/automate/import/csv/hw_import.csv" db = MySQLdb.connect(db_host,db_user, db_pass, db_database)cursor = db.cursor()sql  = "LOAD DATA INFILE " + file_path + file_name + " INTO TABLE " + db_table + " FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 LINES";#sql  = "LOAD DATA INFILE '/xampp/htdocs/automate/import/csv/hw_import.csv' INTO TABLE hw_import FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 LINES;"#http://stackoverflow.com/questions/15211703/import-csv-file-into-mysql-database-using-pythoncursor.execute(sql)db.commit()cursor.close()