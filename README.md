# ticket-reservations
 Funcionamiento: Clonar respositorio front y instalar despendencias https://github.com/JoseCode-CO/front-tickets.git, luego clonar respositorio back https://github.com/JoseCode-CO/ticket-reservations.git, configurar .env, guardar el proyecto (Back) en la carpeta de su servidor, luego ejecutar migraciones y seeder: 
php artisan migrate:fresh --seed

IMPORTANTE *Cuando se ejecute el proyecto del front ir a esta ruta http://localhost:3000/home*

Rutas cliente:
Los clientes en esta aplicacion vendrian siendo los usuarios los cuales se le asignará un tickets 

1.1 Esta ruta devuelve todos los clientes creados http://127.0.0.1:8000/api/v1/clients 
  Method: GET
  Response:  {
	"data": [
		{
			"id": 10,
			"name": "Mrs. Myrtice Jast PhD",
			"lastname": "Farrell",
			"telephone": "+4302538858916",
			"direction": "Delectus iure ut voluptatem harum. Harum qui et voluptate consequatur sunt sed enim itaque.",
			"identy_document": "04336419",
			"email": "myrna62@gmail.com",
			"created_at": "2022-12-14T22:19:09.000000Z",
			"updated_at": "2022-12-14T22:19:09.000000Z"
		},
		{
			"id": 11,
			"name": "Franco Lesch",
			"lastname": "Donnelly",
			"telephone": "+57020913913589",
			"direction": "Dolore ab vero quia saepe amet ipsam. Dolores fuga officia maxime ullam",
			"identy_document": "8029327662",
			"email": "corene.pdae3dberg@gerlach.com",
			"created_at": "2022-12-14T22:48:49.000000Z",
			"updated_at": "2022-12-14T22:48:49.000000Z"
		}
	],
	"info": {
		"Autor": "Jose Diaz"
	}
}

1.2 Esta ruta devuelve un usuario segun el id que se pasa por parametro: http://127.0.0.1:8000/api/v1/clients/10
Method: GET
 Response: {
	"data": {
		"name": "Mrs. Myrtice Jast PhD",
		"lastname": "Farrell",
		"email": "myrna62@gmail.com",
		"telephone": "+4302538858916",
		"direction": "Delectus iure ut voluptatem harum. Harum qui et voluptate consequatur sunt sed enim itaque.",
		"identy_document": "04336419"
	}
}

1.3 Para crear un cliente
 Method: POST
 Body: {
		"name": "Mrs. Myrtice Jast PhD",
		"lastname": "Farrell",
		"email": "myrn22a62@gmail.com",
		"telephone": "32022538858916",
		"direction": "Delectus iure ut voluptatem harum. Harum qui et voluptate consequatur sunt sed enim itaque.",
		"identy_document": "043336419"
    }
Response: Guardado exitosamente

1.4. Esta ruta es util para eliminar un cliente solo se le debe pasar el id http://127.0.0.1:8000/api/v1/clients/13
 Method: delete
 Response: Eliminado exitosamente

Rutas events:Los eventos son los espacios el cual disponen de una serie de tickets que a medida que un usuario se le asigné un tickets estos iran
disminuyendo.


2.1 Esta ruta devuelve todos los eventos creados http://127.0.0.1:8000/api/v1/events
  Method: GET
  Response:
{
	"data": [
		{
			"id": 9,
			"name_event": "Ted Langosh IV",
			"description": "Nulla odit et sunt labore est minus. Et vero quibusdam expedita sit nemo. Nesciunt voluptatem fuga similique provident mollitia",
			"category": "amet",
			"unit_price": 924,
			"number_tickets": 258,
			"number_tickets_availables": null,
			"number_tickets_unavailable": null,
			"created_at": "2022-12-14T22:19:09.000000Z",
			"updated_at": "2022-12-14T22:19:09.000000Z"
		},
		{
			"id": 10,
			"name_event": "Ottis Bode",
			"description": "Aut eius nihil nemo dolorem reprehenderit nulla autem. Sed aut vitae eum vel. Aliquid saepe in deserunt culpa sunt est voluptates",
			"category": "recusandae",
			"unit_price": 659,
			"number_tickets": 5781,
			"number_tickets_availables": null,
			"number_tickets_unavailable": null,
			"created_at": "2022-12-14T22:19:09.000000Z",
			"updated_at": "2022-12-14T22:19:09.000000Z"
		}
	],
	"info": {
		"Autor": "Jose Diaz"
	}
}

2.2 Devuelve un evento por id http://127.0.0.1:8000/api/v1/events/10
Method: GET
response:

{
	"data": {
		"name_event": "Ottis Bode",
		"description": "Aut eius nihil nemo dolorem reprehenderit nulla autem. Sed aut vitae eum vel. Aliquid saepe in deserunt culpa sunt est voluptates. Quia adipisci a iste enim. Sit nobis sed facilis laudantium.",
		"category": "recusandae",
		"unit_price": 659,
		"number_tickets": 5781,
		"number_tickets_availables": null,
		"number_tickets_unavailable": null
	}
}

2.3 Para crear un evento
 Method: POST
 body: 
	 {
		"name_event": "Ottis Bode",
		"description": "Aut eius nihil nemo dolorem reprehenderit nulla autem. Sed aut vitae eum.",
		"category": "recusandae",
		"unit_price": 659,
		"number_tickets": 5781,
		"number_tickets_availables": null,
		"number_tickets_unavailable": null
}

response: Guardado exitosamente

2.4: Para eliminar un evento, solo basta con pasar el id del evento http://127.0.0.1:8000/api/v1/events/10
Method: Delete
response: Eliminado exitosamente


3.1 Asignaciom, luego de tener un cliente creado y un evento creado ya se puede saignar el tickets, la ruta para esto es : http://127.0.0.1:8000/api/v1/tickets
Method: Post
body: {
	"idEvent": 11,
	"name_user": "Jose diaz"
}

Response: Guardado exitosamente


Link explicacion : https://drive.google.com/file/d/1AT5Lfx0WSHgw6GpZ_5ujWfzull4mtirP/view?usp=sharing 
