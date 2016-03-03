#!/usr/bin/python
# coding=utf-8
import urllib2
import re
import os

import threading
from time import sleep,ctime
from bs4 import BeautifulSoup

dir = '/Users/worm/Public/Picture/'

def mk_dir(dir):
    if not os.path.isdir(dir):
        os.makedirs(dir)


def get_html(urls):
    try:
        page = urllib2.urlopen(urls)
        htmls = page.read()
        return htmls
    except urllib2.URLError,e:
        if hasattr(e,"reason"):
            print "Failed to reach the server"
            print "The reason:",e.reason
        elif hasattr(e,"code"):
            print "The server couldn't fulfill the request"
            print "Error code:",e.code
            print "Return content:",e.read()
    else:
        pass  #其他异常的处理


def detail_url_list(html):
    soup = BeautifulSoup(html)
    urlList = []
    list_url = soup.find_all(href=re.compile("^gallery(.*).html?"))
    for val in list_url :
        urlList.append(url+val.get("href"))

    return urlList


#截取字符串
def url_to_string(url):
    urlSplit = url.split('/')
    newString = 'http://www.animu.ru/'+urlSplit[3]+'/'+urlSplit[4]+'/'
    return newString


#下载图片
def downjpg( filepath,FileName ="default.jpg" ):
    try:
        web = urllib2.urlopen(filepath)
        print("访问网络文件"+filepath+"\n")
        jpg = web.read()
        DstDir="/Users/worm/Public/Picture/"
        print("保存文件"+DstDir+FileName+"\n")
        try:
            File = open( DstDir+FileName,"wb" )
            File.write( jpg)
            File.close()
            return
        except IOError:
            print("error\n")
            return
    except Exception:
        print("error\n")
        return

#多线程
def downjpgmutithread( filepathlist ):
    print("共有%d个文件需要下载"%len(filepathlist))
    for file in filepathlist:
        print( file )

    print("开始多线程下载")
    task_threads=[] #存储线程
    count=1
    for file in filepathlist:
        fileNameList = file.split('/')
        t= threading.Thread( target=downjpg,args=(file,fileNameList[-1]) )
        count=count+1
        task_threads.append(t)
    for task in task_threads:
        task.start()
    for task in task_threads:
        task.join() #等待所有线程结束
    print("线程结束")


def get_image_address(url):
    newString = url_to_string(url)

    image = get_html(url)
    soup_image = BeautifulSoup(image)
    address = []
    imagesAddress = []
    img = soup_image.findAll("a", {'target':'_blank'})
    if len(img) :
        for val in img:
            address.append(val.get("href"))
        for val in address:
            imagesAddress.append(newString+val)

    if len(imagesAddress):
        downjpgmutithread(imagesAddress)


def image_address(urlList):
    imageThreads=[] #存储线程
    threadCount=1
    for val in urlList :
        t = threading.Thread( target=get_image_address, args=(val,) )
        threadCount = threadCount + 1
        imageThreads.append(t)
    print("父进程开始")
    for t in imageThreads:
        t.start()
    for t in imageThreads:
        t.join()





url = 'http://www.animu.ru/'

html = get_html(url)

urlList = detail_url_list(html)

image_address(urlList)


