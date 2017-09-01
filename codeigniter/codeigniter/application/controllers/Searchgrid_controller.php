<?php
class Searchgrid_controller extends CI_Controller {

  public function __construct()
         {
                 parent::__construct();

				$this->load->helper('form');
				$this->load->helper('url');
                $this->load->model('gridmodel');
                 // Your own constructor code
         }
        public function index()
        {
               // echo 'Hello World!';

                $q['data'] = $this->gridmodel->display_list();

                $this->load->view('gridview',$q);
        }
		public function searchgrid()
		{
      $name = $_REQUEST['name'];
      $phone = $_REQUEST['phone'];
      $phone = $_REQUEST['age'];

      if($name=='' and $phone=='')
      {
          echo "<script>alert('please enter data in name or phone fields');
              window.location.href='http://localhost/codeigniter/index.php/Searchgrid_controller';
              </script>";
        //  redirect('Searchgrid_controller');
      }
      else {
        # code...

			 $this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'name', 'alpha');
			$this->form_validation->set_rules('phone', 'phone', 'min_length[10]|max_length[15]');

                if ($this->form_validation->run() == FALSE)
                {
					//echo "error";
          $q['data'] = $this->gridmodel->display_list();

          $this->load->view('gridview',$q);
                      //  $this->load->view('gridview');
                      //  redirect('Searchgrid_controller');
                }
                else
                {

                $q['data'] =  $this->gridmodel->search_method($name,$phone);
              ///  var_dump($result);
                 //= $this->gridmodel->display_list();

                $this->load->view('gridview',$q);

                }
              }
		}


}
