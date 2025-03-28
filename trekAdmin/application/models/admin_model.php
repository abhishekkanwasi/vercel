<?php

class Admin_model extends CI_Model {
	
	function __construct() {
		// Call the Model constructor
		parent::__construct();

		function objectToArray( $object ) {
			if( !is_object( $object ) && !is_array( $object ) ) { return $object; }
			if( is_object( $object ) ) { $object = get_object_vars( $object ); }
			return array_map( 'objectToArray', $object );
		}

		function randUniqId() {
			$uniqid = uniqid();
			$power = 16 - strlen($uniqid) - 1;
			$rand = rand( pow(10, $power) , pow(10, $power+1) - 1 );
			$randChoice = rand(1,2);
			if ( $randChoice == "1" ) { $randUniqIdNumber = $uniqid.$rand; }
				else { $randUniqIdNumber = $rand.$uniqid; }
			return $randUniqIdNumber;
		}

	}

	function loginModel() {

		$email = $_POST["email"];
		$password = $_POST["password"];
		$limit = 1;

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		
		$updateData = array();
		$updateData['access_token'] = md5(time());
		$updateQuery = $this->db->update('tb_admin', $updateData);

		$whereCondition = array(
			'email' => $email,
			'password' => md5($password)
		);
		$query = $this->db->get_where('tb_admin', $whereCondition, $limit);
		
		//echo "<pre>"; print_r($query); die();
		if($query->num_rows() > 0) {
			$response = objectToArray( $query->result() );
			$response[0]["password"] = "";		
			$response = '{
				"status":"1",
				"response":'.json_encode($response).'
			}';
			return $response;
		} else {
			$response = '{
				"status":"0",
				"response":"Invalid email ID or password."
			}';
			return $response;
		}
	}

	function addtrekModel() {

		$trek_name = $_POST["trek_name"];
		$trek_location = $_POST["trek_location"];
		$trek_price = $_POST["trek_price"];
		$trek_height = $_POST["trek_height"];
		$trek_duration = $_POST["trek_duration"];
		$trek_difficulty = $_POST["trek_difficulty"];
		$trek_slug = $_POST["trek_slug"];
		$trek_distance = $_POST["trek_distance"];
		$trek_meta_description = $_POST["trek_meta_description"];
		$trek_meta_keyword = $_POST["trek_meta_keyword"];
		$trek_featured_image = $_POST["trek_featured_image"];
		if ( isset( $_POST["trek_description"] ) ) { $trek_description = $_POST["trek_description"]; } else { $trek_description = ''; }

	    $image_parts = explode(";base64,", $trek_featured_image);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	    $image_base64 = base64_decode($image_parts[1]);
	    $filename = md5(time());
	    $file = "uploads/trek/".$filename.'.png';
	    file_put_contents($file, $image_base64);

	    $trek_id = md5(time());
	    $data = array(
            'tb_trek_id' => $trek_id,
            'tb_trek_name' => $trek_name,
            'tb_trek_location' => $trek_location,
            'tb_trek_price' => $trek_price,
            'tb_trek_featured_image' => $filename.'.png',
            'tb_trek_height' => $trek_height,
            'tb_trek_distance' => $trek_distance,
            'tb_trek_duration' => $trek_duration,
            'tb_trek_difficulty' => $trek_difficulty,
            'tb_trek_description' => $trek_description,
            'tb_trek_slug' => $trek_slug,
            'tb_trek_meta_description' => $trek_meta_description,
            'tb_trek_meta_keyword' => $trek_meta_keyword,
            'tb_trek_is_active' => 0,
            'created_on' => time()
        );
        $trek_query = $this->db->insert('tb_trek', $data);
        if ( $trek_query ) {
        	$response = '{
				"status":"1",
				"response": '.json_encode($trek_id).'
			}';
			return $response;
        } else {
            $response = '{
                "success":"0",
                "response":"Something went wrong."
            }';
            return $response;
        }
	}

	function updateTrekModel() {

		$trek_name = $_POST["trek_name"];
		$trek_location = $_POST["trek_location"];
		$trek_price = $_POST["trek_price"];
		$trek_height = $_POST["trek_height"];
		$trek_duration = $_POST["trek_duration"];
		$trek_difficulty = $_POST["trek_difficulty"];
		$trek_slug = $_POST["trek_slug"];
		$trek_distance = $_POST["trek_distance"];
		$trek_meta_description = $_POST["trek_meta_description"];
		$trek_meta_keyword = $_POST["trek_meta_keyword"];
		$trek_featured_image = $_POST["trek_featured_image"];
		if ( isset( $_POST["trek_description"] ) ) { $trek_description = $_POST["trek_description"]; } else { $trek_description = ''; }

	    $image_parts = explode(";base64,", $trek_featured_image);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	    $image_base64 = base64_decode($image_parts[1]);
	    $filename = md5(time());
	    $file = "uploads/trek/".$filename.'.png';
	    file_put_contents($file, $image_base64);

	    $trek_id = $_POST["tb_trek_id"];
	    $data = array(
            'tb_trek_name' => $trek_name,
            'tb_trek_location' => $trek_location,
            'tb_trek_price' => $trek_price,
            'tb_trek_featured_image' => $filename.'.png',
            'tb_trek_height' => $trek_height,
            'tb_trek_distance' => $trek_distance,
            'tb_trek_duration' => $trek_duration,
            'tb_trek_difficulty' => $trek_difficulty,
            'tb_trek_description' => $trek_description,
            'tb_trek_slug' => $trek_slug,
            'tb_trek_meta_description' => $trek_meta_description,
            'tb_trek_meta_keyword' => $trek_meta_keyword,
            'created_on' => time()
        );
        $this->db->where('tb_trek_id', $trek_id);
        $trek_query = $this->db->update('tb_trek', $data);
        if ( $trek_query ) {
        	$response = '{
				"status":"1",
				"response": '.json_encode($trek_id).'
			}';
			return $response;
        } else {
            $response = '{
                "success":"0",
                "response":"Something went wrong."
            }';
            return $response;
        }
	}

	function getTrekListDetailsModel() {
		$tb_trek_slug = $_POST["tb_trek_slug"];

		$query = $this->db->get('tb_trek');
		
		if($query->num_rows() > 0) {
			$response = objectToArray( $query->result() );
			$response = '{
				"status":"1",
				"response":'.json_encode($response).'
			}';
			return $response;
		} else {
			$response = '{
				"status":"0",
				"response":"No trek found."
			}';
			return $response;
		}
	}

	function getTrekDetailsModel() {
		$tb_trek_id = $_POST["tb_trek_id"];

		$this->db->where('tb_trek_id', $tb_trek_id);
		$query = $this->db->get_where('tb_trek');
		
		if($query->num_rows() > 0) {
			$response = objectToArray( $query->result() );
			$response = '{
				"status":"1",
				"response":'.json_encode($response).'
			}';
			return $response;
		} else {
			$response = '{
				"status":"0",
				"response":"No trek found."
			}';
			return $response;
		}
	}

	function uploadTrekImageModel() {
		$uploadURL = 'uploads/trek/';
        $config['upload_path'] = $uploadURL;
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '10240';
        $config['file_name'] = time();

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ( !$this->upload->do_upload('trek_image') ) {
            $response = '{
                "success":"0",
                "response":"'.$this->upload->display_errors('','').'"
            }';
            return $response;
        } else {
            $data = array('upload_data' => $this->upload->data());
            // echo "<pre>"; print_r($data); die();
            return $thumbnail = $data['upload_data']['file_name'];
        }
	}

	function updateTrek1Model() {

		if ( isset( $_POST["why_trek_description"] ) ) { $why_trek_description = $_POST["why_trek_description"]; } else { $why_trek_description = ''; }
		if ( isset( $_POST["ssecurity_trek_description"] ) ) { $ssecurity_trek_description = $_POST["ssecurity_trek_description"]; } else { $ssecurity_trek_description = ''; }
		if ( isset( $_POST["mroute_trek_description"] ) ) { $mroute_trek_description = $_POST["mroute_trek_description"]; } else { $mroute_trek_description = ''; }
		if ( isset( $_POST["fitness_trek_description"] ) ) { $fitness_trek_description = $_POST["fitness_trek_description"]; } else { $fitness_trek_description = ''; }
		if ( isset( $_POST["policy_trek_description"] ) ) { $policy_trek_description = $_POST["policy_trek_description"]; } else { $policy_trek_description = ''; }
		if ( isset( $_POST["trek_highlight_description"] ) ) { $trek_highlight_description = $_POST["trek_highlight_description"]; } else { $trek_highlight_description = ''; }
		if ( isset( $_POST["trek_inclusion_description"] ) ) { $trek_inclusion_description = $_POST["trek_inclusion_description"]; } else { $trek_inclusion_description = ''; }
		if ( isset( $_POST["trek_exclusion_description"] ) ) { $trek_exclusion_description = $_POST["trek_exclusion_description"]; } else { $trek_exclusion_description = ''; }

	    $data = array(
            'tb_why_trek_description' => $why_trek_description,
            'tb_security_trek_description' => $ssecurity_trek_description,
            'tb_map_trek_description' => $mroute_trek_description,
            'tb_fitness_trek_description' => $fitness_trek_description,
            'tb_policy_trek_description' => $policy_trek_description,
            'tb_highlight_trek_description' => $trek_highlight_description,
            'tb_inclusion_trek_description' => $trek_inclusion_description,
            'tb_exclusion_trek_description' => $trek_exclusion_description
        );
        $this->db->where('tb_trek_id', $_POST["tb_trek_id"]);
        $trek_query = $this->db->update('tb_trek', $data);
        if ( $trek_query ) {
        	$response = '{
				"status":"1",
				"response":"data saved succussfully"
			}';
			return $response;
        } else {
            $response = '{
                "success":"0",
                "response":"Something went wrong."
            }';
            return $response;
        }
	}
}
