#!/usr/bin/env python2.7
# -*- coding: utf-8 -*-

"""
Author: rivir
Date: 2020/7/18
"""

from mongoengine import *

class User(Document):
    username = StringField(unique=True)
    password = StringField(required=True)
    email = StringField()

    meta = {
        "collection": "user"
    }

class UserService(object):
    def __init__(self):
        pass

    def exists(self):
        pass

    def count(self):
        pass

