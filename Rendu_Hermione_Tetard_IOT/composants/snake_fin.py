import max7219
from machine import Pin, ADC, SPI
from time import sleep
spi = SPI(0, baudrate=10000000, polarity=1, phase=0, sck=Pin(2), mosi=Pin(3))
ss = Pin(5, Pin.OUT)

display = max7219.Matrix8x8(spi, ss, 4)
display.brightness(1)   # adjust brightness 1 to 15
display.fill(0)
display.show()
sleep(0.5)

xAxis = ADC(Pin(27))
yAxis = ADC(Pin(26))
button = Pin(17,Pin.IN, Pin.PULL_UP)

xStatus = "middle"
yStatus = "middle"

Maxx = 28
Maxy = 2

Minx = 20
Miny = -6

Centrex = 24
Centrey = 0

while True:
    
    #joystick
    
    xValue = xAxis.read_u16()
    yValue = yAxis.read_u16()
    buttonValue = button.value()
    buttonStatus = "not pressed"
    
    if buttonValue == 0:
        buttonStatus = "pressed"
        led_middle.value(0)
        
    #deplacement du personage
        
    if Centrex >= Maxx - 1:
        Centrex = Centrex - 1
        
    if Centrex <= Minx + 1:
        Centrex = Centrex + 1
        
    if Centrey >= Maxy - 1:
        Centrey = Centrey - 1
        
    if Centrey <= Miny + 1:
        Centrey = Centrey + 1
        
    if xStatus == "right":
        Centrey = Centrey - 1
    if xStatus == "left":
        Centrey = Centrey + 1
        
    if yStatus == "up":
        Centrex = Centrex + 1
    if yStatus == "down":
        Centrex = Centrex - 1  
        
    if xValue <= 600:
        xStatus = "left"
    elif xValue >= 60000:
        xStatus = "right"
    else:
        xStatus = "middle"
        
    if yValue <= 600:
        yStatus = "up"
    elif yValue >= 60000:
        yStatus = "down"
    else:
        yStatus = "middle"
    
    
    
    #Matrice de leds
    
    display.text("." ,Centrex,Centrey)
    display.show()
    sleep(0.05)
    display.fill(0)
