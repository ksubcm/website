##############################
# KSU-SPSU BCM website V2
##############################
This is the git repository for the bcm website

TODO
====
Verison 2.0 of the website

* /templates contain jinja2 templates for bottle to use
* /doa contain data access objects, these are self contained entities that contain acces to the database, and simple methods for that object(get,set,get_all,...)
* /data should be replaced with /media
									/img
									/css
									/scripts
									/...

Dependencies
====
Install Bottle:
```
$ sudo pip install bottle              # recommended
$ sudo easy_install bottle             # alternative without pip
$ sudo apt-get install python-bottle   # works for debian, ubuntu, ...
```

Installl Jinja2:
```
easy_install Jinja2
pip install Jinja2
```

Install Pymongo:
```
$ pip install pymongo
$ easy_install pymongo
```

Structure
====
The new structure for the site should be as follows:
```
website
|--main.py
|--dao
|  |--data access objects here, examples already inside
|--media
|  |--css
|  |--imgs
|  |--scripts
|  |--fonts
|--templates
|  |--all templates are contained here
|  |--shared	//nav, footer, head, ...
```

