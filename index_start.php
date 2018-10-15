<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//api.bitrix24.com/api/v1/"></script>

<script type="text/javascript">

window.onload = function() {
    
	BX24.init(function(){
	});
  };


function uninstall_activity() {

		var params = {
	   code: 'export_excel'
	};

	BX24.callMethod(
	   'bizproc.activity.delete',
	   params,
	   function(result)
	   {
		  if(result.error())
			 alert('Ошибка: ' + result.error());
		  else
			 alert("Действие успешно установлено: " + result.data());
	   }
	);
}


function install_activity() {
var params = {
	   'CODE': 'export_excel', 
	   'HANDLER': 'https://mysite.xyz/export_excel.php',
	   'AUTH_USER_ID': 23,
	   'USE_SUBSCRIPTION': 'N', 
							 
							
	   'NAME': {
		  'ru': 'Выгрузка в excel' 	
	   },
	   'DESCRIPTION': {
		  'ru': 'Действие выгружает данные из формы заявки на закупку оргтехники в excel файл'  
	   }/*,
	   'PROPERTIES': {
		  
		  'task_id': {
			 'Name': {
				'ru': 'ID заявки'
			 },
			 'Description': {
				'ru': 'ID задачи битрикса'
			 },
			 'Type': 'int',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  'create_date': {
			 'Name': {
				'ru': 'Дата создания'
			 },
			 'Description': {
				'ru': 'Дата создания заявки'
			 },
			 'Type': 'date',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  'create_date': {
			 'Name': {
				'ru': 'ФИО'
			 },
			 'Description': {
				'ru': 'ФИО инициатора'
			 },
			 'Type': 'user',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  
		  
		  'email': {
			 'Name': {
				'ru': 'E-mail'
			 },
			 'Description': {
				'ru': 'E-mail инициатора'
			 },
			 'Type': 'string',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  'nomenclature': {
			 'Name': {
				'ru': 'Номенклатура'
			 },
			 'Description': {
				'ru': 'Номенклатура'
			 },
			 'Type': 'string',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  'article': {
			 'Name': {
				'ru': 'Артикул'
			 },
			 'Description': {
				'ru': 'Артикул'
			 },
			 'Type': 'string',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  'number': {
			 'Name': {
				'ru': 'Количество'
			 },
			 'Description': {
				'ru': 'Количество товара'
			 },
			 'Type': 'string',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  },
		  
		  'note': {
			 'Name': {
				'ru': 'Примечание'
			 },
			 'Description': {
				'ru': 'Пложелания инциатора'
			 },
			 'Type': 'string',
			 'Required': 'Y',
			 'Multiple': 'N',
			 'Default': '',
		  }
		  
	   }*/
	};
	
	BX24.callMethod(
		'bizproc.activity.add',
		params,
		function(result)
		{
			if(result.error())
				alert("Error: " + result.error());
			else
				{
				alert("Дейстиве успешно установлено");
				
				BX24.installFinish();
				}
		}
	);
	


}

</script>
</head>
<body>

	<button onclick="install_activity()"  >
	Установить действие
	</button>
	
	<button onclick="uninstall_activity()"  >
	Удалить действие
	</button>
	
</body>
</html>