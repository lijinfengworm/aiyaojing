#encoding:utf-8
#name:mod_db.py

import MySQLdb
DB_NAME = "mg_main_db3"
DB_HOST = "192.168.78.5"
DB_USER = "root"
DB_PWD = "testpapa123"
DB_CHARSET = "utf8"
DB_PORT = "3306"

class DB():
    def __init__(self, dbname=None, dbhost=None):
        if dbname is None:
            self._dbname = DB_NAME
        else:
            self._dbname = dbname
        if dbhost is None:
            self._dbhost = DB_HOST
        else:
            self._dbhost = dbhost

        self._dbuser = DB_USER
        self._dbpassword = DB_PWD
        self._dbcharset = DB_CHARSET
        self._dbport = int(DB_PORT)


        self.conn = self.getConnection()

    def getConnection(self):
        return MySQLdb.Connect(
                           host=self._dbhost, #设置MYSQL地址
                           port=self._dbport, #设置端口号
                           user=self._dbuser, #设置用户名
                           passwd=self._dbpassword, #设置密码
                           db=self._dbname, #数据库名
                           charset=self._dbcharset #设置编码
                           )

    def query(self, sqlString):
        cursor=self.conn.cursor()
        cursor.execute(sqlString)
        returnData=cursor.fetchall()
        cursor.close()
        self.conn.close()
        return returnData

    def update(self, sqlString):
        cursor=self.conn.cursor()
        cursor.execute(sqlString)
        self.conn.commit()
        cursor.close()
        self.conn.close()


    def insert(self, sqlString):
        cursor=self.conn.cursor()
        cursor.execute(sqlString)
        self.conn.commit()
        cursor.close()
        self.conn.close()


