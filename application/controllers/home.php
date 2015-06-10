<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('image_model');
		$this->load->model('image_setting_model');
	}
	public function index()
	{
		$data['img_set'] = $this->image_setting_model->get(1, TRUE);
		$data['images'] = $this->image_model->get();
		$data['title'] = 'Gallery';
		$this->load->view('index', $data, FALSE);
	}
	public function upload_gallery()
	{
		
			$upload_path_url =  site_url().'uploads/gallery/';
			$upload_delete_path = site_url().'home/delete/';
			$info = new StdClass();
			// upload config set
			$config['upload_path'] = './uploads/gallery/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['encrypt_name'] = TRUE;
			$config['max_size'] = '30000';

			$this->upload->initialize($config);


			// upload config initialize set
			if ($this->upload->do_upload()) {

				$data = $this->upload->data();

				// Image Resize Function Start
				$sourcePath = $data['full_path'];
				$newPath = $data['file_path'].'thumbs/';
				$this->resize_image($sourcePath, $newPath);


				// Image Resize Function End
				$fileName = $data['file_name'];
				// Store In databse start
				$options = array(
					'title' => '',
					'image' => $fileName,
					'order_by' => 0,
					'default_thumb' => 0,
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

	public function delete($id)
	{

		$info = new stdClass();
		$row = $this->image_model->get($id, TRUE);
		$image = $row->image;
		$file = site_url().'uploads/gallery/'.$image;
		$info->success = unlink('./uploads/gallery/'.$image);
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
	// Create 3 Image Sizes thumbnail - medium - large
	public function resize_image($sourcePath, $newPath)
	{
			$img_set = $this->image_setting_model->get(1, TRUE);
			
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

	public function update_image_resizing()
	{
		$name = $this->input->post('name');
		$value = $this->input->post('value');
		$new = array($name => $value);	
		$this->image_setting_model->save($new, $this->input->post('pk'));
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */