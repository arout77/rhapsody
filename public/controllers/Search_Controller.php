<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Search_Controller extends Base_Controller {
	public $type;

	public function index() {
		$this->template->assign('content', 'search/index.tpl');
	}

	public function results() {
		# Search request submitted by user
		$search_query = $_POST['search_query'];
		$response = 'success';

		if (strlen($search_query) < 4) {
			$response = 'query_too_short';
		}

		$results = $this->model('Search')->select_from_pages_results($search_query);
		//var_dump($results);exit;
		$this->template->assign('search_term', $search_query);
		$this->template->assign('response', $response);
		$this->template->assign('results', $results);
		$this->template->assign('content', 'search/results.tpl');
		$this->template->display('template/body.tpl');
	}

}