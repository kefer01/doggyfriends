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

![image](https://user-images.githubusercontent.com/62972995/221750674-e4c218f7-61dd-46e3-b5eb-753e0e576571.png)


Aparece restringita la ejecucion de scripts entonces para habilitarla ponemos el siguiente comando:

Set-EcecutionPolicy Unrestricted

Y en el mensaje que nos sale ponemos S y luego Enter
Si volvemos a consultar Get-ExecutionPolicy ya nos aparece sin restricciones

![image](https://user-images.githubusercontent.com/62972995/221750696-13d8296f-d017-4e86-9879-7275cd3e02b4.png)


Actualizar variables de entorno

Para que todo funcione correctemante vamos a agregar PHP, NodeJs, Composer a las variables de entorno de windows. Para eso escribimos Variables de Entorno en el buscardor

![image](https://user-images.githubusercontent.com/62972995/221750719-db952037-b6c8-4fa2-b9d7-65d464f64031.png)

![image](https://user-images.githubusercontent.com/62972995/221750752-7117b4d2-efc4-4f4a-88a4-0a01e8cdaf77.png)


Seleccionan Path y luego en Editar

![image](https://user-images.githubusercontent.com/62972995/221750771-3a5ee0e5-3922-4100-8dc5-31f4aacba80e.png)

Ya estando allí le dan a Nuevo y tienen que agregar todas las rutas donde estan los programas. Cuando esten agregadas le dan Aceptar

![image](https://user-images.githubusercontent.com/62972995/221750794-a1c40351-fb0d-4be9-bf78-8a78b730ba11.png)


Y hacen lo mismo para las Variables del Sistema 

![image](https://user-images.githubusercontent.com/62972995/221750811-3ce258c9-ffac-4b32-83bd-4727f1c470e1.png)

![image](https://user-images.githubusercontent.com/62972995/221750823-0bb13c0d-82d3-466d-b956-bd16e25d7c82.png)


Para comprobar que todo esta bien pueden ejecutar los siguientes comandos en una nueva ventana de Poweshell

![image](https://user-images.githubusercontent.com/62972995/221750844-4d495e58-fd35-40b3-b640-944f891c79d6.png)


Probar el proyecto 

Iniciar todos los servicios en Laragon

![image](https://user-images.githubusercontent.com/62972995/221750860-e7fb1ebf-11fe-4a91-a125-ef1b630aa81c.png)

Abrir el proyecto en Visual Studio Code y abrir una nueva terminal dentro del mismo

![image](https://user-images.githubusercontent.com/62972995/221750870-b693471f-d1d2-407a-96e7-6c28832ab81b.png)

Ejecutar los siguientes comandos en la terminal

Composer update

npm install --global gulp-cli

gulp

Si no les da ningun error ya pueden ejecutar el proyecto 

cd .\public\

php -S localhost:3000

Ahí ya tendría que aparecerles el proyecto en el navegador en localhost:3000
