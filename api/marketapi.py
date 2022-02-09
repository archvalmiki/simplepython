# Market Demo api app to be used in Docker demos
# A simple hardcoded api that returns a list 
# of names of publicly traded companies in the US

# The accompanying requirements.txt file will
# prompt pip to get the Flask dependencies 
# and install them

from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
market_api = Api(app)

class Company(Resource):
    def get(self):
        return {
            'company': ['Apple',
                        'Microsoft',
                        'IBM',
                        'Tesla',
                        'Docker']
        }

market_api.add_resource(Company,'/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8080, debug=True)