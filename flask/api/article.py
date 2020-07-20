#!/usr/bin/env python2.7
# -*- coding: utf-8 -*-

"""
Author: rivir
Date: 2020/7/18
"""

from flask import Blueprint

article_bp = Blueprint('article', __name__, url_prefix='/article')