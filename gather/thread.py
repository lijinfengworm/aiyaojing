#!/usr/bin/python
# -*- coding: utf-8 -*-
# encoding=utf-8
# Filename:robot.py

import threading, Queue, sys, urllib2, re, os
from get_url_from_animu import returnUrlAddress
from database import DB
#
# 变量设置
#
THREAD_LIMIT = 3  # 设置线程数
jobs = Queue.Queue(5)  # 设置队列长度
singlelock = threading.Lock()  # 设置一个线程锁,避免重复调用

urls = returnUrlAddress()



def workerbee(inputlist):
    for x in xrange(THREAD_LIMIT):
        print 'Thead {0} started.'.format(x)
        t = spider()
        t.start()
    for i in inputlist:
        try:
            jobs.put(i, block=True, timeout=5)
        except:
            singlelock.acquire()
            print "The queue is full !"
            singlelock.release()

    # Wait for the threads to finish
    singlelock.acquire()  # Acquire the lock so we can print
    print "Waiting for threads to finish."
    singlelock.release()  # 释放锁
    jobs.join()  #等待线程结束

#插入数据库
def insertDB(fileName):
    try:
        db = DB("test",None);
        sqlString = "INSERT INTO collecting_data(`source`, `file_name`) VALUES('%s', '%s')" % ('animu', fileName)
        print(sqlString)
        db.insert(sqlString);
    except Exception:
        print("insert error")
        return


#检查数据库是否存在
def checkIsExist(fileName):
    db = DB("test", None)
    sqlString = "SELECT * FROM collecting_data WHERE source = 'animu' AND file_name = '%s'" %fileName;
    return  db.query(sqlString);


def downjpg(filepath):
    try:
        web = urllib2.urlopen(filepath, timeout=10)
        fileName = filepath.split('/')

        result = checkIsExist(fileName[-1])
        if(len(result) < 1 ):
            insertDB(fileName[-1])

        DstDir="/Users/worm/Public/Picture/"
        if os.path.exists(DstDir+fileName[-1]):
            return
        print("保存文件"+DstDir+fileName[-1]+"\n")

        try:
            File = open(DstDir+fileName[-1], "wb")
            jpg = web.read()
            web.close()
            File.write(jpg)
            File.close()
            print('success!!')
            return
        except IOError:
            print("aaaa-error\n")
            return
    except Exception:
        print("bbb-error\n")
        return


def getTitle(url, time=10):
    response = urllib2.urlopen(url, timeout=time)
    html = response.read()
    response.close()
    reg = r'<title>(.*?)</title>'
    title = re.compile(reg).findall(html)
    title = title[0].decode('gb2312', 'replace').encode('utf-8')
    return title


class spider(threading.Thread):
    def run(self):
        while 1:
            try:
                job = jobs.get(True, 1)
                singlelock.acquire()
                downjpg(job)
                print 'This {0}'.format(job)
                singlelock.release()
                jobs.task_done()
            except:
                print('123-----')
                break;


if __name__ == '__main__':
    workerbee(urls)
