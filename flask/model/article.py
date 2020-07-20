#!/usr/bin/env python2.7
# -*- coding: utf-8 -*-

"""
Author: rivir
Date: 2020/7/18
"""

from  mongoengine import *

class Article(Document):
    title = StringField()
    publish = StringField()
    tag = StringField()
    hits = IntField()
    category = StringField()
    content = StringField()

    meta = {
        "collection": "article"
    }