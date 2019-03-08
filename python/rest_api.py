#This example makes calls to a REST API to retrieve information about Pokemon
#
#To run this example through the command line:
#python rest_api.py

import requests

baseUrl = "https://pokeapi.co/api/v2/pokemon/"

listOfPokemon = requests.get(baseUrl).json()#make a request to the API and get the results in json format

for pokemon in listOfPokemon['results']:                #iterate over results and print out name and type(s) of each pokemon
    print("Name: " + pokemon['name'])                   #print the name of each pokemon
    pokemonInfo = requests.get(pokemon['url']).json()   #use the url key returned from previous call to get information about each pokemon
    for types in pokemonInfo['types']:                  #pokemon can have multiple types, so we iterate over the types and print each type out
        print("Type: " + types['type']['name'])         #print out the type
    print()                                             #blank line between each pokemon
