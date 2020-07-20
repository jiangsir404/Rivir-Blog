#!/usr/bin/env python		
# coding:utf-8

from flask import Flask
from db import init_db
from flask_mongoengine import MongoEngine
from api.article import article_bp
from api.auth import auth_bp
from api.index import index_bp

DEFAULT_CONFIG = {
    "MONGODB_SETTINGS": {
        "db": "myblog",
        "host": "mongodb://localhost:27017/myblog"
    },
    "DEBUG": True,
    "SECRET_KEY": "123456"
}


def create_app(CONFIG=None):
    """app factory"""
    app = Flask(__name__)
    app.config.update(DEFAULT_CONFIG)
    register_blueprint(app)
    db = MongoEngine(app)
    return app


def register_blueprint(app):
    """注册蓝图"""
    app.register_blueprint(auth_bp)
    app.register_blueprint(index_bp)
    app.register_blueprint(article_bp)


if __name__ == '__main__':
    app = create_app()
    print(app.config)
    app.run(host="0.0.0.0", port=5011)
