from bottle import Bottle, route, run, template, jinja2_view
from dao.pageDAO import page
import functools

app = Bottle()
view = functools.partial(jinja2_view, template_lookup=['templates'])


@app.route('/')
@view('home.html')
def index():
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