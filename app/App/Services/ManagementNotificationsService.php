<?php
namespace App\Services;
// use ManagementNotifications;
	/**
	* 
	*/
	final class ManagementNotificationsService
	{
		
		function __construct(\ManagementNotification $model)
		{
			$this->model = $model;
		}

		public function addAnnoucement($input)
		{
			\User::create([
				'email' => $input['email'],
				'password' => \Hash::make($input['password'])
			]);
		}

		public function create($value='')
		{
			return $this->model->create($value);
		}

		public function getAllAnnouncements()
		{
			return $this->model->orderBy('created_at', 'ASC')->get();
		}
	}