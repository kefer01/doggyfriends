Doggy Friends

Pasos para iniciar el proyecto por primera vez

Requisitos:
	1. NodeJS preferiblemente la version LTS ( v. actual 18.14.2 LTS)
	2. NPM manejador de paquetes de Node (Viene instalado junto a NodeJs)
	3. Composer Manejador de paqueres de PHP
	4. PHP minimo version 8.0
	5. MySQL o la version MariaDB
	6. HeidiSQL o cualquier otro gestor de BD como PHPMyAdmin, Workbench etc.

Para evitar instalar cada uno por separado aconsejo instalar LARAGON que ya trae todo incluido.

Por defecto, la ejecución de scripts está restringida así que, la manera de resolverlo que he encontrado es la siguiente:

En primer lugar abro Windows PowerShell con privilegios de administración, para saber si este es el problema principal al que nos enfrentamos, podemos ejecutar el siguiente comando en PowerShell. Y pueden ver que está restringido.

Get-ExecutionPolicy



Aparece restringita la ejecucion de scripts entonces para habilitarla ponemos el siguiente comando:

Set-EcecutionPolicy Unrestricted

Y en el mensaje que nos sale ponemos S y luego Enter
Si volvemos a consultar Get-ExecutionPolicy ya nos aparece sin restricciones



Actualizar variables de entorno

Para que todo funcione correctemante vamos a agregar PHP, NodeJs, Composer a las variables de entorno de windows. Para eso escribimos Variables de Entorno en el buscardor





Seleccionan Path y luego en Editar


Ya estando allí le dan a Nuevo y tienen que agregar todas las rutas donde estan los programas. Cuando esten agregadas le dan Aceptar



Y hacen lo mismo para las Variables del Sistema 





Para comprobar que todo esta bien pueden ejecutar los siguientes comandos en una nueva ventana de Poweshell




Probar el proyecto 

Iniciar todos los servicios en Laragon



Abrir el proyecto en Visual Studio Code y abrir una nueva terminal dentro del mismo



Ejecutar los siguientes comandos en la terminal

Composer update

npm install --global gulp-cli

gulp

Si no les da ningun error ya pueden ejecutar el proyecto 

cd .\public\

php -S localhost:3000

Ahí ya tendría que aparecerles el proyecto en el navegador en localhost:3000
