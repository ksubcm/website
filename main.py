from bottle import Bottle, route, run, template, jinja2_view, TEMPLATE_PATH
from dao.pageDAO import page
import functools

#creates reference to Bottle entity.
app = Bottle()
#makes it easy to define a template for a 
view = functools.partial(jinja2_view, template_lookup=['templates'])

@app.route('/')
@view('home.html')
def index():
	#this passes a dict to the jinja template
	#it will grab the home.html and replace {{title}} for the value below
	return {'title':'welcome to bcm home page'}

@app.get('/login') # or @route('/login')
def login_form():
    return '''<form method="POST" action="/login">
                <input name="name"     type="text" />
                <input name="password" type="password" />
                <input type="submit" />
              </form>'''

@app.post('/login') # or @route('/login', method='POST')
def login_submit():
    name     = request.forms.get('name')
    password = request.forms.get('password')
    if check_login(name, password):
        return "<p>Your login was correct</p>"
    else:
        return "<p>Login failed</p>"


run(app, host='localhost', port=8080)