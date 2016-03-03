#!/usr/bin/python
import urllib
import re
import os
from bs4 import BeautifulSoup

dir = '/home/li/Pictures/gather'

def mk_dir(dir):
    if not os.path.isdir(dir):
        os.makedirs(dir)


def get_html(urls):
    page = urllib.urlopen(urls)
    htmls = page.read()
    return htmls


def get_image_list(html, dir):
    reg = r'src="(.*?\.(jpg, gif))"'
    img_reg = re.compile(reg)
    img_list = re.findall(img_reg, html)
    x = 0

    for imgUrl in img_list:
        print('%s/%s.jpg' %(dir, x))
        urllib.urlretrieve(imgUrl, '%s/%s.jpg' %(dir, x))
        x += 1

def detail_url_list(html) :
    soup = BeautifulSoup(html)
    urlList = []
    list_url = soup.find_all(href=re.compile("^gallery(.*).html?"))
    for val in list_url :
        urlList.append(url+val.get("href"))

    return urlList


def get_image_address(url):
    image = get_html("http://www.animu.ru/gallery/1-love-9/wallpaper-1-love-9.html")
    soup_image = BeautifulSoup(image)
    address = []
    img = soup_image.findAll("a", {'target':'_blank'})
    if len(img) :
        for val in img:
            address.append(val.get("href"))
        print(address)

def image_address(urlList):
    for val in urlList :
        html_image = get_image_address(val)



url = 'http://www.animu.ru/'

html = get_html(url)

urlList = detail_url_list(html)

image_address(urlList)



get_image_list(html, dir)
