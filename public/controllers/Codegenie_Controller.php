<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Codegenie_Controller extends Base_Controller {
	/**
	 * @var mixed
	 */
	private $controller_dir;
	/**
	 * @var mixed
	 */
	private $model_dir;
	/**
	 * @var mixed
	 */
	private $view_dir;
	/**
	 * @var mixed
	 */
	private $controller_create_url;
	/**
	 * @var mixed
	 */
	private $model_create_url;
	/**
	 * @var mixed
	 */
	private $view_create_url;
	/**
	 * @var mixed
	 */
	public $new_url;
	/**
	 * @var array
	 */
	public $errors = [];
	/**
	 * @var array
	 */
	public $files_created = [];

	/**
	 * @param $app
	 */
	public function __construct($app) {
		parent::__construct($app);
		
		// Make sure whoever is using the code genie is among the 
		// whitelisted IP addresses. Add your IP to the `admin_ip`
		// option in the .env file to access the code genie.
		// $this->whitelisted_ips = $this->plugin('whitelist')->admin_ip();
		// $visitor_ip = $this->plugin('geoip')->ip();
		// if(!in_array($visitor_ip, $this->whitelisted_ips))
		// {
		// 	$this->redirect('error/_404');
		// }

		$this->controller_dir = CONTROLLERS_PATH;
		$this->model_dir      = MODELS_PATH;
		$this->view_dir       = VIEWS_PATH . '/';

		$this->controller_create_url = $app['config']->setting('site_url') . 'codegenie/submit_controller';
		$this->model_create_url      = $app['config']->setting('site_url') . 'codegenie/submit_model';
		$this->view_create_url       = $app['config']->setting('site_url') . 'codegenie/submit_view';

		$this->template->assign('submit_controller', $this->controller_create_url);
		$this->template->assign('submit_model', $this->model_create_url);
		$this->template->assign('submit_view', $this->view_create_url);
	}

	public function __toString() {
		return "Codegenie_Controller";
	}

	public function index() {
		$this->template->assign('content', 'codegenie/index.tpl');
		$this->template->display('template/body.tpl');
	}

	public function create_controller() {
		$this->template->assign('content', 'codegenie/controller.tpl');
		$this->template->display('template/body.tpl');
	}

	# Process form submission to create new files
	public function submit_controller() {
		$data       = $_POST;
		$controller = $data['controller_name'] ?? '';
		$controller = ucwords($controller);

		# Do validation check for special chars, spaces, numbers, etc first
		$check_if_valid = $this->plugin('validate')->form($data, [
			'create_controller' => 'required|max_len,75|min_len,1|alpha',
		]);

		if ($check_if_valid === FALSE) {
			// Did not pass validation -- Show errors
			$this->template->assign('errors', $check_if_valid);
			$this->errors = $check_if_valid;
			$this->redirect('codegenie/create_controller/error/controller');
			exit;
		}

		$this->new_url                     = $this->config->setting('site_url') . strtolower($controller);
		$this->files_created['controller'] = "{$this->controller_dir}{$controller}_Controller.php";
		$file                              = new \SplFileObject("{$this->controller_dir}{$controller}_Controller.php", "w");
		$temp_assign                       = '';
		if ($data['create_view'] == 'on') {
			$temp_assign = '$this->template->assign("content", "' . strtolower($controller) . '/index.tpl");';
			$temp_display = '$this->template->display("' . strtolower($controller) . '/body.tpl");';
		}
		$contents = <<<EOT
<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class {$controller}_Controller extends Base_Controller
{
	public function __construct(\$app)
	{
		parent::__construct(\$app);
	}

	public function index()
	{
		{$temp_assign}
		{$temp_display}
	}

}

EOT;

		// chmod($this->controller_dir . $controller . '_Controller.php', octdec(0644));
		$written = $file->fwrite($contents);
		// echo "Wrote $written bytes to file";

		if ($data['create_model'] == 'on') {
			// Create model checkbox was selected; create a model
			$this->files_created['model'] = "{$this->model_dir}{$controller}Model.php";
			$model_file                   = new \SplFileObject("{$this->model_dir}{$controller}Model.php", "w");
			$model_contents               = <<<EOT
<?php
namespace Web\Model;

class {$controller}Model extends \App\Model\System_Model
{

}

EOT;

			// chmod($this->controller_dir . $controller . '_Controller.php', octdec(0644));
			$model_written = $model_file->fwrite($model_contents);
			// echo "Wrote $model_written bytes to file";
		}

		if ($data['create_view'] == 'on') {
			$controller = strtolower($controller);
			// Create view checkbox was selected; create a view
			if (!is_dir($this->view_dir . $controller)) {
				mkdir($this->view_dir . $controller);
			}
			$this->files_created['view'] = "{$this->view_dir}{$controller}/index.tpl";
			$view_file                   = new \SplFileObject("{$this->view_dir}{$controller}/index.tpl", "w");
			$view_contents               = '';
			// chmod($this->controller_dir . $controller . '_Controller.php', octdec(0644));
			$view_written = $view_file->fwrite($view_contents);
			// echo "Wrote $model_written bytes to file";
		}

		$this->template->assign('data', $data);
		$this->template->assign('url', $this->new_url);
		$this->template->assign('controller', $this->files_created['controller']);
		$this->template->assign('model', $this->files_created['model']);
		$this->template->assign('view', $this->files_created['view']);
		$this->template->display('template/head.tpl');
		$this->template->display('template/body.tpl');
		$this->template->display('codegenie/submit_controller.tpl');
		$this->template->display('template/footer.tpl');
	}

	# Process form submission to create new files
	public function submit_model() {
		$this->template->display('template/head.tpl');
		$this->template->display('template/body.tpl');
		$this->template->display('content', 'codegenie/submit_model.tpl');
		$this->template->display('template/footer.tpl');
	}

	# Process form submission to create new files
	public function submit_view() {
		$this->template->display('template/head.tpl');
		$this->template->display('template/body.tpl');
		$this->template->display('content', 'codegenie/submit_view.tpl');
		$this->template->display('template/footer.tpl');
	}
}
