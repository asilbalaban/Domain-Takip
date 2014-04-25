<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class domain extends Public_Controller {

	private $_needLogin = array('index', 'create', 'store', 'edit', 'update', 'destroy');
	private $_needAdmin = array('index', 'create', 'store', 'edit', 'update', 'destroy');


	public function __construct()
	{
		parent::__construct();
		$this->load->model('domain_model');

		if (in_array($this->method, $this->_needLogin)) {
			if ($this->isLogin() !== true) {
				redirect(base_url('domain/login'));
			}
		}

		if (in_array($this->method, $this->_needAdmin)) {
			if ($this->isAdmin() !== true) {
				exit(lang('Auth002'));
			}
		}
	}


	// list domains
	public function index()
	{
		$data['domains'] = $this->domain_model->all();
		$this->blade->render('backend/domain/index', $data);
	}

	// load create domain view
	public function create()
	{
		$this->blade->render('backend/domain/create');
	}

	// save new domain to db
	public function store()
	{
		$data = $_POST;
		$data['endDate'] = date('Y-m-d', strtotime($data['endDate']));

		$save = $this->db->insert('domains', $data);
		redirect(base_url('admin/domain'));
	}

	// load edit domain view
	public function edit($id)
	{
		$data['domain'] = $this->domain_model->get_by_id($id);
		$this->blade->render('backend/domain/edit', $data);
	}

	// save edited domain to db
	public function update($id)
	{
		$data = $_POST;
		$data['endDate'] = date('Y-m-d', strtotime($data['endDate']));

		$this->db->where('id', $id);
		$save = $this->db->update('domains', $data);
		redirect(base_url('admin/domain'));
	}

	// save edited domain to db
	public function destroy($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('domains');
		redirect(base_url('admin/domain'));
	}



}

/* End of file domain.php */
/* Location: ./application/controllers/domain.php */