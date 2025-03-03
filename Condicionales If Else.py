a=2
if a ==2:
    print('a vale 2')
else:
    print('a es diferente de 2')

#Concatenar condiciones 

Nombre = 'Santiago'
Edad = 23
Pais='Colombia'

if Nombre =='Santiago' and Edad == 23 and Pais =='Colombia':
    print('Su nombre es', Nombre,'tiene',Edad,'y es de',Pais) 
elif Nombre == 'Santiago'and not Edad==23:
    print('Su nombre es Santiago y no tiene 23 años')
elif Nombre != 'Santiago'and Edad == 23:
    print('Su nombre no es Santiago y tiene 23 años')
else:
    print('No se llama Santiago ni tiene 23 años')         