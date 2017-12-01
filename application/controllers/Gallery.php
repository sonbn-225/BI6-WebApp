<?php
    class Gallery extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('product_model');
            $this->load->helper('name_helper');
        }
        
        function index(){
            // lay danh sach san pham
            $this->load->model('product_model');
            $total_rows = $this->product_model->get_total();
            $this->data['total_rows'] = $total_rows;
            // load ra thu vien phan trang
            $this->load->library('pagination');
            $config = array();
            $config['total_rows'] = $total_rows;// tong so dong

            // $config['base_url'] = base_url('menu/'.seoname($catalog_info->name).'/'.$id_catalog); // link hien thi du lieu
            $config['per_page'] = 12; // so luong san pham hien thi tren 1 trang
            $config['uri__segment'] = 5; // phan doan hien thi ra so trang tren url. !

            // khoi tao cac cau hinh cua phan trang
            $this->pagination->initialize($config);
            $list = $this->product_model->get_list();
            //pre($this->db->last_query($list));
            $this->data['list'] = $list;
            $this->data['temp'] = 'site/gallery/gallery';
            $this->load->view('site/layout', $this->data);


        }
    }
?>