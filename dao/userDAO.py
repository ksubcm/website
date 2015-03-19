import pymongo
import random
import string
import hashlib

class UserDAO(object):
	def __init__(self, db):
		self.db = db
		self.users = self.db.users

	#salts for passwords
	def make_salt(self):

	def get_user(self, username, password):

	def create_user(self, username, password, email):
		user = {}


class User(object):
	"""docstring for User"""
	def __init__(self):
		self.username = ''
		self.password = ''
		self.password_salt = ''
		self.email = ''

	def to_dict(self):
		return self.__dict__
		