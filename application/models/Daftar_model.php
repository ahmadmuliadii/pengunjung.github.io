<?php  

	class Daftar_model extends CI_Model
	{
		private $_table = "user";
	const SESSION_KEY = 'user_id';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username or Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($username, $password)
	{
		$this->db->where('email', $username)->or_where('username', $username);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		$this->_update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}
	    
	    // Function model  hanya bisa digunakan untuk menginputkan data 
	
	    public function tambah_daftar()
	    {
	    	$data = [	


	    				"hari_tanggal" => $this->input->post('hari-tanggal', true),
	    				"nama" => $this->input->post('nama-daftar', true),		
						"dari_instansi" => $this->input->post('dari-instansi', true),
						"tujuan" => $this->input->post('tujuan-daftar', true),
			
						
						"nohp" => $this->input->post('no-hp', true),
					
						// nama dibagian awal merupakan field dari database 
						// untuk nama yang setelah post merupakan nama dari bagian from
	    	];

	    	// untuk menginputkan data, agar lebih efektif diubah menjadi arraay

	    	$this->db->insert('daftar', $data);
	    }

	    
	    // =================================
	    public function delete_daftar($id)
	    {
	    													
	    	$this->db->delete('daftar', ['id' => $id]); // $id datangnya dari isi function delete_game($id)
	    }	

	    public function edit_daftar()
	    {
	    	$data = [

						"hari_tanggal" => $this->input->post('hari-tanggal', true),
	    				"nama" => $this->input->post('nama-daftar', true),		
						"dari_instansi" => $this->input->post('dari-instansi', true),
						"tujuan" => $this->input->post('tujuan-daftar', true),
			
						
						"nohp" => $this->input->post('no-hp', true),
					
	    	];

	    	$this->db->where('id', $this->input->post('id'));
	    	$this->db->update('daftar', $data);
	    }

	

	}















?>