#!/usr/bin/env python2.7
# -*- coding: utf-8 -*-

"""
Author: rivir
Date: 2020/7/18
"""
from functools import wraps
from model.user import User
from werkzeug.security import generate_password_hash, check_password_hash
from flask import Blueprint, session, redirect, url_for, request, \
    render_template, jsonify

auth_bp = Blueprint('auth', __name__, url_prefix='/auth')


def login_required(view):
    """登录认证装饰器"""

    @wraps(view)
    def wrapper(*args, **kwargs):
        if "username" not in session:
            return redirect(url_for('auth.login', next=request.url))
        return view(*args, **kwargs)

    return wrapper


@auth_bp.route('/login', methods=["GET", "POST"])
def login():
    if request.method == "POST":
        username = request.form.get("username")
        password = request.form.get("password")
        if User.objects(username=username).first():
            if check_password_hash(User.objects(username=username).first().password, password):
                session['username'] = username
                return success("登录成功", url_for('auth.home'))
        else:
            return error("登录失败")

    return render_template('Auth/login.html')


@auth_bp.route('register', methods=["GET", "POST"])
def register():
    if request.method == "POST":
        try:
            username = request.form.get("username")
            password = request.form.get("password")
            user = User(username=username, password=generate_password_hash(password))
            user.save()
            return success("注册成功", url_for('auth.login'))
        except Exception as e:
            print(e)
            return error("注册失败")
    return render_template('Auth/register.html')


@auth_bp.route('home')
@login_required
def home():
    return 'Hello %s' % session['username']


def success(msg, location="#"):
    return jsonify({
        "code": 1,
        "msg": msg,
        "url": location
    })


def error(msg, location="#"):
    return jsonify({
        "code": 0,
        "msg": msg,
        "url": location
    })
