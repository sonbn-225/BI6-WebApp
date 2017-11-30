<?php
    class Home extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('common_helper');
            //$this->load->helper('name_helper');
        }
        function index(){
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;
            // lay danh sach san pham
            $this->load->model('product_model');
            $total_rows = $this->product_model->get_total();
            $this->data['total_rows'] = $total_rows;
            // load ra thu vien phan trang
            $this->load->library('pagination');
            $config = array();
            $config['total_rows'] = $total_rows;// tong so dong
            $config['base_url'] = base_url('home/index'); // link hien thi du lieu
            $config['per_page'] = 9; // so luong san pham hien thi tren 1 trang
            $config['uri__segment'] = 4; // phan doan hien thi ra so trang tren url. !
            $config['next_link'] = 'Trang kế tiếp';
            $config['prev_link'] = 'Trang trước';

            // khoi tao cac cau hinh cua phan trang
            $this->pagination->initialize($config);
            $segment = $this->uri->segment(3);
            $segment = intval($segment);

            // combo
            $input['limit'] = array(4,0);
            $input['where'] = array('id_catalog =' => 2);
            $product_combo = $this->product_model->get_list($input);
            $this->data['product_combo'] = $product_combo;

            // Cac mon ga
            $input['limit'] = array(4,0);
            $input['where'] = array('id_catalog =' => 1);
            $product_fried_chicken = $this->product_model->get_list($input);
            $this->data['product_fried_chicken'] = $product_fried_chicken;

            $input['limit'] = array(4,0);
            $input['where'] = array('id_catalog =' => 3);
            $product_burger_rice = $this->product_model->get_list($input);
            $this->data['product_burger_rice'] = $product_burger_rice;
            
            // load view
            $this->data['temp'] = 'site/home/index';
            $this->load->view('site/layout', $this->data);
        }
    }
?>