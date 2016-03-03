#!/usr/bin/python
# coding=utf-8
import re
from bs4 import BeautifulSoup
from common import get_html
import threading
domain = 'http://www.animu.ru/'
imagesAddress = []
def detail_url_list( html):
    soup = BeautifulSoup(html)
    urlList = []
    list_url = soup.find_all(href=re.compile("^gallery(.*).html?"))
    for val in list_url :
        urlList.append(domain+val.get("href"))

    return urlList


#截取字符串
def url_to_string(url):
    urlSplit = url.split('/')
    newString = 'http://www.animu.ru/'+urlSplit[3]+'/'+urlSplit[4]+'/'
    return newString


def get_image_address(url):
    newString = url_to_string(url)

    image = get_html(url)
    soup_image = BeautifulSoup(image)
    address = []

    img = soup_image.findAll("a", {'target':'_blank'})
    if len(img) :
        for val in img:
            address.append(val.get("href"))
        for val in address:
            imagesAddress.append(newString+val)


def image_address(urlList):
    imageThreads=[] #存储线程
    threadCount=1
    for val in urlList :
        t = threading.Thread( target=get_image_address, args=(val,) )
        threadCount = threadCount + 1
        imageThreads.append(t)
    print("父线程开始")
    for t in imageThreads:
        t.start()
    for t in imageThreads:
        t.join()
    print("线程结束")


def returnUrlAddress():
    html = get_html(domain)
    urlList = detail_url_list(html)
    image_address(urlList)
    return imagesAddress


