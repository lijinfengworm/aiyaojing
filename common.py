#!/usr/bin/python
# coding=utf-8
import urllib2

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


