<?php
    class Catalog_model extends MY_Model{
        var $table = 'catalog';
        var $key = 'id_catalog';
    }

    function getname($id_catalog){
        return 'SELECT * FROM catalog WHERE ID = ' .  $id_catalog;
    }
?>