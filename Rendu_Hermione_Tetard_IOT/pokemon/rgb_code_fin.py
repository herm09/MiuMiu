import network   #import des fonction lier au wifi
from machine import Pin, PWM # importe dans le code la lib qui permet de gerer les Pins de sortie
import urequests	#import des fonction lier au requetes http
import utime	#import des fonction lier au temps
import ujson	#import des fonction lier aà la convertion en Json

wlan = network.WLAN(network.STA_IF) # met la raspi en mode client wifi
wlan.active(True) # active le mode client wifi

ssid = 'IIM_Private'
password = 'Creatvive_Lab_2023'
wlan.connect(ssid, password) # connecte la raspi au réseau
url = "https://api-pokemon-fr.vercel.app/api/v1/pokemon/"

pins = [[0, 28], [0, 27], [0, 26]]
types = [['Plante',0, 255, 0], ['Acier',142, 162, 198], ['Combat',237, 127, 16], ['Dragon',96, 80, 220], ['Eau',0,0,255],
         ['Electrik',255, 255, 0], ['Fée',253, 108, 158], ['Feu',255, 0, 0], ['Glace',44, 117, 255], ['Insecte',121, 137, 51],
         ['Normal',186, 186, 186], ['Poison',128, 0, 128], ['Psy',219, 0, 115], ['Roche',225, 206, 154], ['Sol',159, 85, 30],
         ['Spectre',108, 2, 119], ['Ténèbres',47, 27, 12], ['Vol',169, 234, 254], ['Obscur',48, 48, 48],]

def rvb(classe):
    for x in range(len(classe)):
        led = Pin(classe[x][1], mode=Pin.OUT)
        ledpwm = PWM(led)
        value = classe[x][0]
        ledpwm.duty_u16(value * 100)

while not wlan.isconnected():
    print("pas co")
    utime.sleep(1)
    pass

while(True):
    for i in range(1, 100):
        try:
            print("GET")
            r = urequests.get(url + str(i)) # lance une requete sur l'url
            print("Ce pokémon est de type " + r.json()["types"][0]['name']) # traite sa reponse en Json
            typepok = r.json()["types"][0]['name']
            print("Il s'appelle " + r.json()['name']['fr'])
            for x in range(len(types)):
                if types[x][0] == typepok:
                    pins = [[types[x][1], 28], [types[x][2], 27], [types[x][3], 26]]
                    rvb(pins)
            r.close() # ferme la demande
            utime.sleep(3)
        except Exception as e:
            print(e)