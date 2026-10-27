import random
import datetime

# Pedimos los datos del visitante por teclado
edad = int(input("Edad del visitante: "))
tipo_dia = input("Tipo de día (laboral / fin de semana): ")
grupo = input("Tipo de grupo (familiar / colegio / individual): ")
residencia = input("Residencia (madrid / otra provincia): ")
altura = float(input("Altura en metros (ej: 1.55): "))


# Lista con los días de la semana, el orden coincide con el número que devuelve weekday()
dias = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"]
# weekday() devuelve 0 para lunes, 1 para martes... hasta 6 para domingo
numero_dia = datetime.datetime.now().weekday()
dia_semana = dias[numero_dia]


# Simulamos si el visitante es socio: 80% de probabilidad de que sí lo sea
if random.random() < 0.8:
    socio = "si"
else:
    socio = "no"

# Mostramos el día actual y si es socio o no
print("Día de hoy:", dia_semana)
print("Socio:", socio)


# Precio de la entrada sin ningún descuento
precio_base = 45.00

# Vamos comprobando las condiciones en orden, se aplica la primera que se cumpla
# Socios mayores de 65 años: entrada gratis
if socio == "si" and edad > 65:
    precio = 0.0
# Socios que viven en Madrid: 50% del precio
elif socio == "si" and residencia == "madrid":
    precio = precio_base * 0.50
# Niños pequeños (menos de 1.20 m o menos de 4 años): 55% del precio
elif altura < 1.20 or edad < 4:
    precio = precio_base * 0.55
# Grupos de colegio en lunes o viernes: 65% del precio
elif grupo == "colegio" and (dia_semana == "lunes" or dia_semana == "viernes"):
    precio = precio_base * 0.65
# Jueves laborales: 70% del precio
elif dia_semana == "jueves" and tipo_dia == "laboral":
    precio = precio_base * 0.70
# Menores de edad en día laboral: 75% del precio
elif edad < 18 and tipo_dia == "laboral":
    precio = precio_base * 0.75
# Grupos familiares de otra provincia: 80% del precio
elif grupo == "familiar" and residencia == "otra provincia":
    precio = precio_base * 0.80
# Jóvenes de 18 a 25 años que no son socios: 90% del precio
elif edad >= 18 and edad <= 25 and socio == "no":
    precio = precio_base * 0.90
# Grupos familiares en sábado o domingo: recargo del 5%
elif (dia_semana == "sabado" or dia_semana == "domingo") and grupo == "familiar":
    precio = precio_base * 1.05
# Miércoles para gente que no es de Madrid: recargo del 10%
elif dia_semana == "miercoles" and residencia != "madrid":
    precio = precio_base * 1.10
# Visitantes individuales de otra provincia en fin de semana: 8 € extra
elif tipo_dia == "fin de semana" and grupo == "individual" and residencia == "otra provincia":
    precio = precio_base + 8
# Si no se cumple ninguna condición, se paga el precio normal
else:
    precio = precio_base

# Muestra el precio final calculado
print("Precio final:", precio, "€")


# Diccionario con cada número ((me  lo ha hecho la ia )
numeros = {
    "0": [" .d8888b.", "d88P  Y88b", "888    888", "888    888", "888    888", "888    888", "Y88b  d88P", ' "Y8888P"'],
    "1": [" d888", "d8888", "  888", "  888", "  888", "  888", "  888", "8888888"],
    "2": [" .d8888b.", "d88P  Y88b", "       888", "     .d88P", ' .od888P"', 'd88P"', '888"', "888888888"],
    "3": [" .d8888b.", "d88P  Y88b", "     .d88P", '    8888"', '     "Y8b.', "888    888", "Y88b  d88P", ' "Y8888P"'],
    "4": ["    d8888", "   d8P888", "  d8P 888", " d8P  888", "d88   888", "8888888888", "      888", "      888"],
    "5": ["888888888", "888", "888", "8888888b.", '     "Y88b', "       888", "Y88b  d88P", ' "Y8888P"'],
    "6": [" .d8888b.", "d88P  Y88b", "888", "888d888b.", '888P "Y88b', "888    888", "Y88b  d88P", ' "Y8888P"'],
    "7": ["8888888888", "      d88P", "     d88P", "    d88P", " 88888888", "  d88P", " d88P", "d88P"],
    "8": [" .d8888b.", "d88P  Y88b", "Y88b. d88P", ' "Y88888"', '.d8P""Y8b.', "888    888", "Y88b  d88P", ' "Y8888P"'],
    "9": [" .d8888b.", "d88P  Y88b", "888    888", "Y88b. d888", ' "Y888P888', "       888", "Y88b  d88P", ' "Y8888P"'],
    ".": ["", "", "", "", "", "888", "888", "888"],
}


texto = str(round(precio, 2))   
for linea in range(8): 
    fila = ""  
    for caracter in texto:     
        fila = fila + numeros[caracter][linea].ljust(12) 
    print(fila)