# ENLDWESProyectoTema3 - Programación PHP con Código Embebido

## Descripción del Proyecto

Proyecto educativo de Desarrollo Web en Entorno Servidor centrado en programación PHP embebida en HTML. Este repositorio contiene una colección completa de ejercicios progresivos que abarcan desde conceptos básicos de PHP hasta el desarrollo de formularios web complejos con validación avanzada.

El proyecto implementa prácticas sobre variables, estructuras de control, funciones, arrays multidimensionales, formularios web, validación de datos y generación de documentación técnica. Incluye ejercicios desde manipulación básica de fechas hasta plantillas reutilizables para desarrollo ágil de formularios.

**Tecnologías principales:** PHP 8.3, HTML5, CSS3, Apache

## Requisitos Técnicos

- **Servidor Web:** Apache 2.4+
- **PHP:** 8.3 o superior
- **Entorno:** LAMP (Linux, Apache, MySQL, PHP)
- **Extensiones PHP requeridas:**
  - DateTime
  - PDO (para ejercicios avanzados)
  - Funciones de arrays y strings

## Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/EnriqueNieto90/ENLDWESProyectoTema3.git
```

### 2. Configurar en servidor local
Copiar el proyecto al directorio de publicación de Apache:
```bash
cp -r ENLDWESProyectoTema3 /var/www/html/httpdocs/
```

### 3. Configurar permisos
```bash
chmod -R 755 /var/www/html/httpdocs/ENLDWESProyectoTema3
```

### 4. Acceder a la aplicación
Abrir navegador web y acceder a:
```
http://localhost/httpdocs/ENLDWESProyectoTema3/indexProyectoTema3.php
```

## Estructura del Proyecto
```
ENLDWESProyectoTema3/
├── indexProyectoTema3.php      # Punto de entrada principal
├── .htaccess                   # Configuración Apache
├── /codigoPHP/                 # Ejercicios PHP (00-24)
│   ├── ejercicio00.php         # Hola mundo y phpinfo()
│   ├── ejercicio01.php         # Variables y tipos de datos
│   ├── ejercicio15.php         # Arrays y bucles
│   ├── ejercicio21.php         # Formularios básicos
│   ├── ejercicio24.php         # Formulario avanzado con validación
│   └── ...
├── /mostrarcodigo/             # Visualización de código fuente
│   ├── muestraEjercicio00.php
│   ├── muestraEjercicio01.php
│   └── ...
├── /core/                      # Librerías y clases PHP
│   └── ValidacionFormularios.php
├── /doc/                       # Documentación técnica
├── /error/                     # Páginas de error personalizadas
├── /webroot/                   # Recursos estáticos
│   └── /css/                   # Hojas de estilo
└── /tmp/                       # Archivos temporales
```

## Ejercicios Implementados

### Ejercicios Básicos (00-14)
- Inicialización de variables y tipos de datos
- Manipulación de fechas con DateTime
- Variables superglobales
- Arrays unidimensionales y multidimensionales
- Funciones de recorrido de arrays

### Ejercicios de Validación (15-20)
- Librería de validación de formularios
- Clase ValidacionFormularios.php
- Validación de campos obligatorios y opcionales

### Ejercicios de Formularios (21-24)
- **Ejercicio 21:** Formulario con página de tratamiento separada
- **Ejercicio 22:** Formulario con procesamiento en misma página
- **Ejercicio 23:** Formulario con validación y mensajes de error
- **Ejercicio 24:** Formulario avanzado con persistencia de datos y validación completa

### Plantilla de Desarrollo
- PlantillaFormulario.php: Sistema reutilizable para creación rápida de formularios
- Validación de múltiples tipos de entrada: texto, email, números, fechas, booleanos, listas

## URLs de Acceso

### Página Principal
```
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema3/indexProyectoTema3.php
```

### Ejercicios Individuales
```
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema3/codigoPHP/ejercicio00.php
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema3/codigoPHP/ejercicio24.php
```

### Visualización de Código
```
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema3/mostrarcodigo/muestraEjercicio00.php
```

## Características Destacadas

- **Validación robusta:** Clase personalizada con métodos para validar texto, números, emails, URLs, DNI
- **Formularios persistentes:** Los datos correctos se mantienen al reenviar formularios con errores
- **Plantilla reutilizable:** Sistema modular para desarrollo ágil de formularios
- **Documentación PHPDoc:** Código documentado siguiendo estándares profesionales
- **Diseño responsive:** Interfaz adaptable a diferentes dispositivos
- **Mensajes contextuales:** Sistema de ayuda y validación en tiempo real

## Autor

**Enrique Nieto Lorenzo**

Estudiante de DAW2 (Desarrollo de Aplicaciones Web)  
IES Los Sauces - Curso 2025/2026  
Módulo: DWES (Desarrollo Web en Entorno Servidor)

GitHub: EnriqueNieto90  
Repositorio: ENLDWESProyectoTema3
```
