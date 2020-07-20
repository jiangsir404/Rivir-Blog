#!/usr/bin/env python2.7
# -*- coding: utf-8 -*-

"""
Author: rivir
Date: 2020/7/18
"""

import sqlite3
import os
import click

from flask import current_app, g
from flask.cli import with_appcontext
from model.user import User

def get_db():
    if 'db' not in g:
        g.db = sqlite3.connect(
            current_app.config['DATABASE'],
            detect_types=sqlite3.PARSE_DECLTYPES
        )
        g.db.row_factory = sqlite3.Row

    return g.db


def close_db(e=None):
    db = g.pop('db', None)

    if db is not None:
        db.close()


def init_db():
    db = get_db()
    current_dir = os.path.dirname(__file__)
    with current_app.open_resource(os.path.join(current_dir, "schema.sql")) as f:
        db.executescript(f.read().decode("utf-8"))

def init_mongo_db():
    user = User(username='admin', password='admin', email='admin@admin.com')
    user.save()

@click.command("init-db")
@with_appcontext
def init_db_command():
    """Clear existing data and create new tables."""
    init_db()
    click.echo("Initialized the database.")


def init_app(app):
    """Register database functions with the Flask app. This is called by
    the application factory.
    """
    app.teardown_appcontext(close_db)
    with app.app_context():
        init_db()
    # app.teardown_appcontext(close_db)
    # app.cli.add_command(init_db_command)