<?php

 return Array
	(
	'columns'=>Array
		(
		'user'=>Array
			(
			0=>'id',
			1=>'email',
			2=>'password',
			3=>'create_time',
			4=>'token',
			5=>'expired_time',
			6=>'is_auth',
			7=>'level',
			8=>'reg_ip',
			9=>'download_time'
			)
		),
	'repositories'=>Array
		(
		'UserRepository'=>Array
			(
			'model'=> 'App\\Models\\simple',
			'repository'=>'App\\Repositories\\UserRepository'
			)
		)
	);
