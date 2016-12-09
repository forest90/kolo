<?php

use App\Services\ManagementNotificationsService;


class ManagementController extends \BaseController {

	public $post;
	public $managementNotificationsService;

	public function __construct(ManagementNotificationsService $managementNotificationsService, Post $post)
	{
		$this->managementNotificationsService = $managementNotificationsService;
	}

	public function postAnnouncement()
	{
		$this->managementNotificationsService->create(
			array_only(\Input::all(), ['content', 'title']) + 
			[
				'user_id' =>  Auth::id()
			]
		);
		return Redirect::to('/home');
	}

	public function getAnnouncements()
	{
		$aside = false;
		$canAdd = Auth::getUser()->user_type == User::TYPE_ADMINISTRATION;
		$announcements = $this->managementNotificationsService->getAllAnnouncements();
		return \View::make('layouts.notifications')->with(compact('announcements', 'aside', 'canAdd'));
	}


}