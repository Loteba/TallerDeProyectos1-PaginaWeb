# 🚀 Bolsa de empleo en PHP
Mi sistema de Bolsa de Empleo es una herramienta completa de gestión de empleo con numerosas funcionalidades para candidatos y empresas. Los candidatos pueden crear un perfil detallado que incluye su experiencia laboral, formación académica, habilidades, referencias laborales y curriculum vitae, además de descargar su perfil en formato PDF y enviarlo a su correo electrónico. También pueden acceder a un panel administrativo para ver las ofertas de trabajo a las que han aplicado, visualizar información sobre las empresas que ofrecen los trabajos y postularse a las ofertas de trabajo que cumplan con sus requisitos. Una característica destacada del panel administrativo de candidatos es la posibilidad de comunicarse con los reclutadores a través del chat, lo que les permite mantenerse al tanto del proceso de selección y recibir actualizaciones sobre las oportunidades laborales disponibles.
<br><br>
Para las empresas, se ofrece un periodo de prueba de 15 días para crear un perfil en la plataforma. Después de eso, la empresa debe solicitar el servicio y realizar la petición a través de la plataforma. Una vez que se ha creado el perfil, el sistema permite la visualización de candidatos y la publicación de ofertas de trabajo solo en el país en el que la empresa se encuentra registrada. Si la empresa desea visualizar candidatos o publicar ofertas de trabajo en otros países, deberá realizar una petición a través de la plataforma para que se habilite esa opción.
<br><br>
La plataforma ofrece numerosas opciones para las empresas, como subir el logo de la empresa, crear ofertas de trabajo, hacer seguimiento de los candidatos, visualizar perfiles de candidatos, chatear con ellos, generar reportes y personalizar filtros. También es posible ver los candidatos que han aplicado a cada oferta de trabajo. La plataforma permite buscar candidatos mediante filtros personalizados, como educación académica, experiencia laboral, habilidades o cargos, para encontrar al candidato ideal para el puesto vacante.
<br><br>
<b>Es importante destacar que la plataforma aún no está terminada y requiere mantenimiento en ciertos módulos.</b>

### Dependencias/Requisitos previos
Para instalar el sistema, es necesario contar con PHP 8, y se puede utilizar XAMPP para ello.

## Instalación / Primeros pasos
1 - Abrir la terminal de Git Bash y clonar el repositorio con el siguiente comando:
```shell
git clone git clone https://github.com/dmarquezsv/Sistema-de-bolsa-de-empleo.git
cd Sistema-de-bolsa-de-empleo/
code .
```
2 - Crear una base de datos llamada bdmundo, con codificación utf8mb4_general_ci.
<br><br>
3- Si estás utilizando XAMPP, es recomendable importar la base de datos desde la terminal en lugar de utilizar phpMyAdmin, ya que la base de datos puede ser muy pesada y el script de importación no importará todas las tablas correctamente. Para hacer esto, abre XAMPP y busca la opción de Shell. Luego, ejecuta el comando en la terminal.

```shell
mysql -u root -p
```
 Si no tienes una contraseña configurada, simplemente presiona Enter. A continuación, selecciona la base de datos que creaste en phpMyAdmin utilizando el comando

```shell
use bdmundo
```
![image](https://user-images.githubusercontent.com/94775277/229244769-00f43fbc-df84-46b0-9b3d-e5041612e32e.png)

4- Por último, importa la base de datos desde la ubicación donde la tienes alojada en tu disco local (por ejemplo, F:/BDMUNDOEMPLEOSCA.sql) utilizando el comando "source". Después de completar estos pasos, todas las tablas correspondientes deberían estar disponibles en la base de datos.

```shell
MariaDB [bdmundo]> source F:/BDMUNDOEMPLEOSCA.sql
```
5 - Finalmente, ejecutar el proyecto con XAMPP.

```shell
https://localhost/Sistema-de-bolsa-de-empleo/
```
![image](https://user-images.githubusercontent.com/94775277/229245328-4377bb70-686d-4d22-aa35-58b24b4829d5.png)

6- Para iniciar sesión, deberá crear un usuario, ya sea de tipo empresa o candidato, para realizar la prueba. Luego, deberá activarlo a través del correo electrónico que recibirá. Si no puede activar el usuario mediante el correo electrónico, podrá buscar en la base de datos la tabla "usuarios_cuentas" y cambiar el estado a "Activo".

![image](https://user-images.githubusercontent.com/94775277/229245477-af85b803-35c3-482c-973b-e1053317916f.png)


"# TallerDeProyectos1-PaginaWeb"  
