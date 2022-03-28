<?php
namespace App\Plugin;
use App\System\Plugins as Plugin_Core;

class Pagination extends Plugin_Core {

	/**
	 * @var mixed
	 */
	private $db;
	/**
	 * @var mixed
	 */
	private $route;
	# Total records found
	/**
	 * @var mixed
	 */
	public $total;
	# URL segment used to track current page
	/**
	 * @var mixed
	 */
	public $url_segment;
	# Records per page to display; defaults to 10
	/**
	 * @var mixed
	 */
	public $per_page;
	# SQL query offset
	/**
	 * @var mixed
	 */
	public $startpoint;

	/**
	 * @param $c
	 */
	public function __construct($c) {
		$this->db    = $c['database'];
		$this->route = $c['router'];
	}

	/**
	 * @param $sql
	 * @param $url_segment
	 * @param NULL $per_page
	 */
	public function config($sql, $per_page = 20) {

		$this->per_page = $per_page;
		$this->total    = $sql->rowCount();
	}

	/**
	 * @param $adjacents
	 */
	public function paginate($adjacents = 5) {
		$page  = 1;
		$page  = $this->url_segment;
		$start = ($page - 1) * $this->per_page;

		$prev     = $page - 1;
		$next     = $page + 1;
		$lastpage = ceil($this->total / $this->per_page);
		$lpm1     = $lastpage - 1;

		$controller = $this->route->request[0] . '/';
		if ($this->route->request[1] == '') {
			$action = 'index';
		} else {
			$action = $this->route->request[1];
		}

		$action .= '/';
		$goto = BASE_URL . $controller . $action;

		if (strpos($goto, $controller . $action . $controller . $action)) {
			$goto = str_replace($controller . $action . $controller . $action, $controller . $action, $goto);
		}

		$pagination = "";
		if ($lastpage > 1) {
			$pagination .= "<ul class='pagination'>";

			if ($lastpage < 7 + ($adjacents * 2)) {
				for ($counter = 1; $counter <= $lastpage; $counter++) {
					if ($counter == $page) {
						$pagination .= "<li><a class='btn-default'>$counter</a></li>";
					} else {
						$pagination .= "<li><a href='{$goto}{$counter}'>$counter</a></li>";
					}

				}
			} elseif ($lastpage > 5 + ($adjacents * 2)) {
				if ($page < 1 + ($adjacents * 2)) {
					for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
						if ($counter == $page) {
							$pagination .= "<li><a class='btn-default'>$counter</a></li>";
						} else {
							if (strpos($goto, "{$controller}{$action}{$controller}{$action}")) {
								str_replace("{$controller}{$action}{$controller}{$action}", $controller . $action, $goto);
							}
							$pagination .= "<li><a href={$goto}{$counter}>$counter</a></li>";
						}

					}
					$pagination .= "<li class='dot'>...</li>";
					$pagination .= "<li><a href={$goto}$lpm1>$lpm1</a></li>";
					$pagination .= "<li><a href={$goto}$lastpage>$lastpage</a></li>";
				} elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
					$pagination .= "<li><a href='{$goto}1'>1</a></li>";
					$pagination .= "<li><a href='{$goto}2'>2</a></li>";
					$pagination .= "<li class='dot'>...</li>";
					for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
						if ($counter == $page) {
							$pagination .= "<li><a class='btn-default'>$counter</a></li>";
						} else {
							$pagination .= "<li><a href={$goto}{$counter}>$counter</a></li>";
						}

					}
					$pagination .= "<li class='dot'>..</li>";
					$pagination .= "<li><a href={$goto}$lpm1>$lpm1</a></li>";
					$pagination .= "<li><a href={$goto}$lastpage>$lastpage</a></li>";
				} else {
					$pagination .= "<li><a href='1'>1</a></li>";
					$pagination .= "<li><a href='2'>2</a></li>";
					for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
						if ($counter == $page) {
							$pagination .= "<li><a class='btn-default'>$counter</a></li>";
						} else {
							$pagination .= "<li><a href={$goto}{$counter}>$counter</a></li>";
						}

					}
				}
			}

			if ($page < $counter - 1) {
				$pagination .= "<li><a href={$goto}$next>Next</a></li>";
				$pagination .= "<li><a href={$goto}$lastpage>Last</a></li>";
			} else {
				# On last page
				$pagination .= "<li><a href=1>Back to First</a></li>";
			}

			$pagination .= "<li><a class='btn-default'>Page $page of $lastpage</a></li>";
			$pagination .= "</ul>";
		}

		return $pagination;
	}
}
