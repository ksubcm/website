import pymongo

class PageDAO(object):
	"""docstring for page"""
	def __init__(self, db):
		self.db = db
		self.users = self.db.users
		