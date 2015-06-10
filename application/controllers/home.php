<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// construct 
	public function __construct()
	{
		parent::__construct();
		// autoload database from auto file in config
		$this->load->library(array('upload', 'image_lib')); //load upload, iamge-lib
		$this->load->helper(array('url', 'file', 'form')); //helper url, file, form
		$this->load->model('image_model'); // image model
		$this->load->model('image_setting_model'); // image setting model
	}


	public function index()
	{
		$data['img_set'] = $this->image_setting_model->get(1); //image setting get
		$data['images'] = $this->image_model->get(); //uploaded image get
		$this->load->view('index', $data);
	}

	// upload images function
	public function upload_images()
	{
			// upload and delete path
			$upload_path_url =  site_url().'uploads/';
			$upload_delete_path = site_url().'home/delete/';
			$info = new StdClass();
			// upload config set
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['encrypt_name'] = TRUE;
			$config['max_size'] = '30000';
			// upload properties initialize here
			$this->upload->initialize($config);


			// upload config initialize set
			if ($this->upload->do_upload()) {

				$data = $this->upload->data();

				
				$sourcePath = $data['full_path']; //image full path uploaded
				$newPath = $data['file_path'].'thumbs/';  //image file path  uplaoded

				// Image resize function 
				$this->resize_image($sourcePath, $newPath);
				

				$fileName = $data['file_name']; //image file name after encrypt

				// Store In databse start
				$options = array(
					'image' => $fileName,
					'created_at' => date('Y-m-d h:i:s')
				);
				$inserted_id = $this->image_model->save($options);
				// Store In databse end 


				// after upload show
				$info->name = $fileName;
				$info->size = $data['file_size'];
				$info->type = $data['file_type'];
				$info->url = $upload_path_url.$fileName;
				$info->thumbnailUrl = $upload_path_url.$fileName;
				// I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']

				$info->deleteUrl = $upload_delete_path.$inserted_id;
				$info->deleteType = 'DELETE';
				$info->error = null;
				// $info->property_id = $this->input->post('property_id');
				$files[] = $info;
				// after upload end
				if ($this->input->is_ajax_request()) {
					echo json_encode(array("files" => $files));
				}
			} else {
				$info->error = $this->upload->display_errors('', '');
				$files[] = $info;
				 print_r($this->upload->display_errors());
				echo json_encode(array("files" => $files));
			}
		
	}

	//  image delete function
	public function delete($id)
	{

		$info = new stdClass();

		$row = $this->image_model->get($id, TRUE); // get image data 
		$image = $row->image; // image name from database
		$file = site_url().'uploads/'.$image; // image path link
		$info->success = unlink('./uploads/'.$image); //unlink image from database
		if ($info->success) {
			$affected = $this->image_model->delete($id);
			if ($affected) {
				echo 1;
			}
		}
		if ($this->input->is_ajax_request()) {
			echo json_encode(array($info)); 
		}
	
	}


	// Resize function -- Create Image Sizes thumbnail - medium - large
	public function resize_image($sourcePath, $newPath)
	{
			// get image setting
			$img_set = $this->image_setting_model->get(1, TRUE);
			

			// image resize thumbnail size  
			$img_array_thumbnail['image_library'] = 'gd2';
			$img_array_thumbnail['source_image']	= $sourcePath;
			$img_array_thumbnail['new_image'] = $newPath;
			$img_array_thumbnail['create_thumb'] = TRUE;
			$img_array_thumbnail['maintain_ratio'] = 'FALSE';
			$img_array_thumbnail['thumb_marker'] = '_thumb';
			$img_array_thumbnail['width']	= $img_set->thumbnail;
			$img_array_thumbnail['height']	= $img_set->thumbnail;			
			$this->image_lib->initialize($img_array_thumbnail);
			$this->image_lib->resize();

			// image resize medium size  
			$img_array_medium['image_library'] = 'gd2';
			$img_array_medium['source_image']	= $sourcePath;
			$img_array_medium['new_image'] = $newPath;
			$img_array_medium['create_thumb'] = TRUE;
			$img_array_medium['maintain_ratio'] = 'FALSE';
			$img_array_medium['thumb_marker'] = '_md';
			$img_array_medium['width']	= $img_set->medium;
			$img_array_medium['height']	= $img_set->medium;			
			$this->image_lib->initialize($img_array_medium);
			$this->image_lib->resize();

			// image resize large size  
			$img_array_large['image_library'] = 'gd2';
			$img_array_large['source_image']	= $sourcePath;
			$img_array_large['new_image'] = $newPath;
			$img_array_large['create_thumb'] = TRUE;
			$img_array_large['maintain_ratio'] = 'FALSE';
			$img_array_large['thumb_marker'] = '_lg'; 
			$img_array_large['width']	= $img_set->large;
			$img_array_large['height']	= $img_set->large;			
			$this->image_lib->initialize($img_array_large);
			$this->image_lib->resize();
		
	}

	// image setting update here
	public function update_image_resizing()
	{
		// x-editable use here
		$name = $this->input->post('name'); //input field name
		$value = $this->input->post('value'); //input field value
		$new = array($name => $value);	
		$this->image_setting_model->save($new, $this->input->post('pk')); //update image setting
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */