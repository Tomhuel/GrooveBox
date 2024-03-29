<div x-placement="center">

# Entidad - Relación

Aquí podrás el diagrama Entidad-Relación y además la documentación de sus Entidades y Relaciones

## Índice
- [Diagrama Entidad-Relación](#diagrama)
- [Documentación](#documentación-del-diagrama)
    - [Entidades](#entidades)
    - [Relaciones](#relaciones)
    - [Tablas](#tablas)

## Diagrama

![Diagrama Entidad Relacion](../../assets/img/Diagrama%20Entidad%20Relación%20GrooveBox.png)

## Documentación del Diagrama

### Entidades

| Entidad     | Artist                                                                                                   |
|-------------|----------------------------------------------------------------------------------------------------------|
| Descripción | Perfil de artista del usuario.                                                                           |
| Relaciones  | Un **Artista** pertenece solo a un único **Usuario**. Un Artista puede tener producidas 0 o más mezclas. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                                                    |
| Fecha       | 25/03/2023                                                                                               |

| Entidad     | User                                                                                                                |
|-------------|---------------------------------------------------------------------------------------------------------------------|
| Descripción | Usuario de la plataforma.                                                                                           |
| Relaciones  | Un **Usuario** tiene un sólo perfil de **Artista**, tiene 0 o más **Tracklists**. Le pueden gustar 0 o más mezclas. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                                                               |
| Fecha       | 10/03/2023                                                                                                          |

| Entidad     | Tracklist                                                                                                                 |
|-------------|---------------------------------------------------------------------------------------------------------------------------|
| Descripción | Listado personalizado para almacenar Mezclas.                                                                             |
| Relaciones  | Una **Tracklist**  pertenece sólo a un único **Usuario** y una **Tracklist** puede tener 0 o más **Mezclas** almacenadas. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                                                                     |
| Fecha       | 10/03/2023                                                                                                                |

| Entidad     | Mezcla                                                                                                                                    |
|-------------|-------------------------------------------------------------------------------------------------------------------------------------------|
| Descripción | Mezcla es el audio que se usa para _mezclar_ con otro audio y con ello generar otra mezcla.                                               |
| Relaciones  | Una **Mezcla** puede estar en 0 o más **Tracklists**. Una Mezcla puede ser gustada por 0 o más usuarios y producida por un solo artista   |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                                                                                     |
| Fecha       | 10/03/2023                                                                                                                                |

### Relaciones

| Entidad 1 | Relación | Entidad 2 | Descripción                                                                                              |
|-----------|----------|-----------|----------------------------------------------------------------------------------------------------------|
| Usuario   | Tiene    | Artista   | Un Usuario tiene un solo perfil de Artista y un perfil de Artista solo pertenece a un único Usuario      |
| Usuario   | Tiene    | Tracklist | Un Usuario puede tener 0 o más Tracklists, y una Tracklist solo puede pertenecer a un Usuario            |
| Usuario   | Tiene    | Mezcla    | Un Usuario le pueden gustar 0 o más mezclas, y una mezcla puede ser gustada por 0 o más Usuarios         |
| Tracklist | Tiene    | Mezcla    | Una Tracklist puede tener 0 o más Mezclas, mientras que una Mezcla puede pertenecer a 0 o más Tracklists |
| Artista   | Tiene    | Mezcla    | Un artista puede producir 0 o más Mezclas, y las Mezclas solo pertenecen a un único Artista.             |


### Tablas

#### Usuario

| Campo           | Tipo de Dato                   | Dato a almacenar                        |
|-----------------|--------------------------------|-----------------------------------------|
| ID              | INT AUTO_INCREMENT PRIMARY KEY | ID del Usuario                          |
| name            | CHAR(30) NOT NULL              | Nombre del Usuario                      |
| lastname_first  | CHAR(30) NOT NULL              | Primer apellido del Usuario             |
| lastname_second | CHAR(30) NOT NULL              | Segundo apellido del Usuario            |
| username        | CHAR(30) NOT NULL              | Apodo del Usuario                       |
| email           | CHAR(50) NOT NULL              | Correo electrónico del Usuario          |
| password        | CHAR(50) NOT NULL              | Contraseña del Usuario                  |
| image           | CHAR(90)                       | Imagen del Usuario                      |
| created_at      | Date                           | Fecha en la que se crea el usuario      |
| updated_at      | Date                           | Fecha en la que se actualiza el usuario |

#### Artist

| Campo       | Tipo de Dato                   | Dato a almacenar                        |
|-------------|--------------------------------|-----------------------------------------|
| ID          | INT AUTO_INCREMENT PRIMARY KEY | ID del Artista                          |
| artist_name | CHAR(30) NOT NULL              | Nombre del artista                      |
| image       | CHAR(30)                       | Imagen del artista                      |
| user_id     | FOREIGN KEY Usuarios NOT NULL  | ID del usuario                          |
| created_at  | Date                           | Fecha en la que se crea el Artista      |
| updated_at  | Date                           | Fecha en la que se actualiza el Artista |



#### Tracklist

| Campo       | Tipo de Dato                   | Dato a almacenar                          |
|-------------|--------------------------------|-------------------------------------------|
| ID          | INT AUTO_INCREMENT PRIMARY KEY | ID de la Tracklist                        |
| name        | CHAR(30) NOT NULL              | Nombre de la Tracklist                    |
| description | VARCHAR(5000) NOT NULL         | Descripción de la Tracklist               |
| privacy     | BOOLEAN                        | Privacidad de la Tracklist                |
| image       | CHAR(90) NOT NULL              | Imagen de la Tracklist                    |
| userID      | FOREIGN KEY Usuarios           | Dueño de la Tracklist                     |
| created_at  | Date                           | Fecha en la que se crea la Tracklist      |
| updated_at  | Date                           | Fecha en la que se actualiza la Tracklist |



#### Mezcla

| Campo       | Tipo de Dato                   | Dato a almacenar                       |
|-------------|--------------------------------|----------------------------------------|
| ID          | INT AUTO_INCREMENT PRIMARY KEY | ID de la Mezcla                        |
| name        | CHAR(30) NOT NULL              | Nombre de la Mezcla                    |
| description | VARCHAR(5000) NOT NULL         | Descripción de la Mezcla               |
| image       | VARCHAR(90) NOT NULL           | Imagen de la Mezcla                    |
| audio       | VARCHAR(90) NOT NULL           | Audio de la Mezcla                     |
| author      | FOREIGN KEY Artist             | Autor de la Mezcla                     |
| privacy     | BOOLEAN                        | Privacidad de la Mezcla                |
| created_at  | Date                           | Fecha en la que se crea la Mezcla      |
| updated_at  | Date                           | Fecha en la que se actualiza la Mezcla |

</div>
