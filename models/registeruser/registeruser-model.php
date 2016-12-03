<?php 
class RegisteruserModel
{

	
	public $form_data;

	public $form_msg;

	public $db;

	public function __construct( $db = false ) {
		$this->db = $db;
	}

	public function validate_register_form () {
	
		
		$this->form_data = array();
		
		
		if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty ( $_POST ) ) {
		
			
			foreach ( $_POST as $key => $value ) {
			
				
				$this->form_data[$key] = $value;
				
				
				if ( empty( $value ) ) {
					
					
					$this->form_msg = '<p class="form_error">There are empty fields. Data has not been sent.</p>';
					
					
					return;
					
				}			
			
			}
		
		} else {
		
			
			return;
			
		}
		
		
		if( empty( $this->form_data ) ) {
			return;
		}
		
		
		$db_check_user = $this->db->query (
			'SELECT * FROM `Users` WHERE `user_email` = ?', 
			array( 
				chk_array( $this->form_data, 'user_email')		
			) 
		);
		
		
		if ( ! $db_check_user ) {
			$this->form_msg = '<p class="form_error">Internal error.</p>';
			return;
		}
		
		
		$fetch_user = $db_check_user->fetch();
		
		
		$user_id = $fetch_user['user_id'];
		
		
		
		$password_hash = new PasswordHash(8, FALSE);
		
		
		$password = $password_hash->HashPassword( $this->form_data['user_password'] );
		
		
		
		if ( preg_match( '/[^0-9A-Za-z\,\.\-\_\s ]/is', $this->form_data['user_permissions'] ) ) {
			$this->form_msg = '<p class="form_error">Use just letters, numbers and a comma for permissions.</p>';
			return;
		}		
		
		
		$permissions = array_map('trim', explode(',', $this->form_data['user_permissions']));
		
		
		$permissions = array_unique( $permissions );
		
		
		$permissions = array_filter( $permissions );
		
		
		$permissions = serialize( $permissions );
		
		
		
		if ( ! empty( $user_id ) ) {

			$query = $this->db->update('Users', 'user_id', $user_id, array(
				'user_password' => $password, 
				'user_name' => chk_array( $this->form_data, 'user_name'), 
				'user_session_id' => md5(time()), 
				'user_permissions' => $permissions, 
			));
			
			
			if ( ! $query ) {
				$this->form_msg = '<p class="form_error">Internal error. Data has not been sent.</p>';
				
				
				return;
			} else {
				$this->form_msg = '<p class="form_success">User successfully updated.</p>';
				
				
				return;
			}
		
		} else {
		
			
			$query = $this->db->insert('Users', array(
				'user_email' => chk_array( $this->form_data, 'user_email'), 
				'user_password' => $password, 
				'user_name' => chk_array( $this->form_data, 'user_name'), 
				'user_session_id' => md5(time()), 
				'user_permissions' => $permissions, 
			));
			
			
			if ( ! $query ) {
				$this->form_msg = '<p class="form_error">Internal error. Data has not been sent.</p>';
				
				
				return;
			} else {
				$this->form_msg = '<p class="form_success">User successfully registered.</p>';
				
				
				return;
			}
		}
	} 
	
	public function get_register_form ( $user_id = false ) {
	
		
		$s_user_id = false;
		
		
		if ( ! empty( $user_id ) ) {
			$s_user_id = (int)$user_id;
		}
		
		
		if ( empty( $s_user_id ) ) {
			return;
		}
		
		
		$query = $this->db->query('SELECT * FROM `Users` WHERE `user_id` = ?', array( $s_user_id ));
		
		
		if ( ! $query ) {
			$this->form_msg = '<p class="form_error">Usuário não existe.</p>';
			return;
		}
		
		
		$fetch_userdata = $query->fetch();
		
		
		if ( empty( $fetch_userdata ) ) {
			$this->form_msg = '<p class="form_error">User do not exists.</p>';
			return;
		}
		
		
		foreach ( $fetch_userdata as $key => $value ) {
			$this->form_data[$key] = $value;
		}
		
		
		$this->form_data['user_password'] = null;
		
		
		$this->form_data['user_permissions'] = unserialize($this->form_data['user_permissions']);
		
		
		$this->form_data['user_permissions'] = implode(',', $this->form_data['user_permissions']);
	} 

	public function del_user ( $parametros = array() ) {

		
		$user_id = null;
		
		
		if ( chk_array( $parametros, 0 ) == 'del' ) {

			
			echo '<p class="alert">Tem certeza que deseja apagar este valor?</p>';
			echo '<p><a href="'. $_SERVER['REQUEST_URI'] . '/confirma">Sim</a> | 
			<a href="' . HOME_URI . '/admin/registeruser">Não</a> </p>';
			
			
			if ( 
				is_numeric( chk_array( $parametros, 1 ) )
				&& chk_array( $parametros, 2 ) == 'confirma' 
			) {
				
				$user_id = chk_array( $parametros, 1 );
			}
		}
		
		
		if ( !empty( $user_id ) ) {
		
			
			$user_id = (int)$user_id;
			
			
			$query = $this->db->delete('Users', 'user_id', $user_id);
			
			
			echo '<meta http-equiv="Refresh" content="0; url=' . HOME_URI . '/admin/registeruser/">';
			echo '<script type="text/javascript">window.location.href = "' . HOME_URI . '/admin/registeruser/";</script>';
			return;
		}
	} 

	public function get_user_list() {
	
		
		$query = $this->db->query('SELECT * FROM `Users` ORDER BY user_id DESC');
		
		
		if ( ! $query ) {
			return array();
		}
		
		return $query->fetchAll();
	} 
}