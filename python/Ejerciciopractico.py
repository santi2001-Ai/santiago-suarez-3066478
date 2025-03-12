# 1. Creación de la "base de datos" llamada "escuela"
escuela = {}

# 2. Creación de la "colección" llamada "estudiantes"
escuela['estudiantes'] = []

# 3. Inserción de 5 "documentos" en la "colección" "estudiantes"
estudiantes_data = [
    {'nombre': 'Juan', 'edad': 20, 'curso': 'Matemáticas', 'nota': 8.5},
    {'nombre': 'Ana', 'edad': 21, 'curso': 'Ciencias', 'nota': 9.2},
    {'nombre': 'Carlos', 'edad': 19, 'curso': 'Historia', 'nota': 7.8},
    {'nombre': 'Sofía', 'edad': 22, 'curso': 'Matemáticas', 'nota': 9.0},
    {'nombre': 'Pedro', 'edad': 20, 'curso': 'Ciencias', 'nota': 6.5}
]
escuela['estudiantes'].extend(estudiantes_data)

# 4. Encontrar todos los estudiantes con nota mayor a 8
estudiantes_aprobados = [estudiante for estudiante in escuela['estudiantes'] if estudiante['nota'] > 8]
print("Estudiantes con nota mayor a 8:")
for estudiante in estudiantes_aprobados:
    print(estudiante)

# 5. Encontrar los estudiantes que tienen 20 años
estudiantes_20_anios = [estudiante for estudiante in escuela['estudiantes'] if estudiante['edad'] == 20]
print("\nEstudiantes con 20 años:")
for estudiante in estudiantes_20_anios:
    print(estudiante)

# 6. Actualizar la nota de "Ana" a 9.5
for estudiante in escuela['estudiantes']:
    if estudiante['nombre'] == 'Ana':
        estudiante['nota'] = 9.5
        break
print("\nNota de Ana actualizada.")

# 7. Incrementar la edad de todos los estudiantes en 1 año
for estudiante in escuela['estudiantes']:
    estudiante['edad'] += 1
print("\nEdad de todos los estudiantes incrementada en 1 año.")

# 8. Encontrar estudiantes con nota entre 7 y 9 y menos de 22 años
estudiantes_filtrados = [
    estudiante for estudiante in escuela['estudiantes']
    if 7 <= estudiante['nota'] <= 9 and estudiante['edad'] < 22
]
print("\nEstudiantes con nota entre 7 y 9 y menos de 22 años:")
for estudiante in estudiantes_filtrados:
    print(estudiante)

# 9. Calcular el promedio de las notas de todos los estudiantes
total_notas = sum(estudiante['nota'] for estudiante in escuela['estudiantes'])
promedio_general = total_notas / len(escuela['estudiantes']) if escuela['estudiantes'] else 0
print(f"\nPromedio de notas de todos los estudiantes: {promedio_general}")

# 10. Agrupar los estudiantes por curso y calcular la nota promedio por curso
cursos = {}
for estudiante in escuela['estudiantes']:
    curso = estudiante['curso']
    if curso not in cursos:
        cursos[curso] = {'notas': [], 'estudiantes': []}
    cursos[curso]['notas'].append(estudiante['nota'])
    cursos[curso]['estudiantes'].append(estudiante['nombre'])

print("\nPromedio de notas por curso:")
for curso, datos in cursos.items():
    promedio_curso = sum(datos['notas']) / len(datos['notas']) if datos['notas'] else 0
    print(f"Curso: {curso}, Promedio: {promedio_curso}")

# 11. Simulación de un índice (no se puede crear un índice real sin una base de datos)
print("\nSimulación de un índice en el campo 'curso'.")
print("En una base de datos real, un índice mejoraría el rendimiento de las consultas. Aquí solo estamos demostrando la idea.")

# 12. Realizar una consulta que utilice el "índice" simulado
estudiantes_matematicas = [
    estudiante for estudiante in escuela['estudiantes'] if estudiante['curso'] == 'Matemáticas'
]
print("\nEstudiantes en el curso de Matemáticas:")
for estudiante in estudiantes_matematicas:
    print(estudiante)

# 13. Eliminar todos los estudiantes con una nota menor a 6
escuela['estudiantes'] = [estudiante for estudiante in escuela['estudiantes'] if estudiante['nota'] >= 6]
print("\nEstudiantes con nota menor a 6 eliminados.")

# 14. Crear una "colección" "cursos" donde cada "documento" contenga un arreglo de estudiantes inscritos
escuela['cursos'] = []
cursos_data = [
    {'nombre': 'Matemáticas', 'estudiantes': cursos.get('Matemáticas', {}).get('estudiantes', [])},
    {'nombre': 'Ciencias', 'estudiantes': cursos.get('Ciencias', {}).get('estudiantes', [])},
    {'nombre': 'Historia', 'estudiantes': cursos.get('Historia', {}).get('estudiantes', [])}
]
escuela['cursos'].extend(cursos_data)
print("\n'Colección' 'cursos' creada.")

# 15. Encontrar todos los cursos en los que está inscrito un estudiante específico (ejemplo: Juan)
cursos_juan = [
    curso for curso in escuela['cursos'] if 'Juan' in curso['estudiantes']
]
print("\nCursos en los que está inscrito Juan:")
for curso in cursos_juan:
    print(curso)
