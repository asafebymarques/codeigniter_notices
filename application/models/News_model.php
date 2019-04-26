<?php
class News_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_news($uri = false){

        if($uri ===false){
            $query = $this->db->get('news');
            return $query->result_array();
        }else{
            $query = $this->db->get_where('news',array(
                'uri' =>$uri
            ));
            return $query->row_array();
        }

    }

    public function set_news(){
        $this->load->helper('url');

        $uri = url_title($this->input->post('title'), 'dash', TRUE);

        $uri = $this->tirarAcentos($uri);

        $data = array(
            'title' => $this->input->post('title'),
            'uri' => $uri,
            'text' => $this->input->post('text')
        );

        $this->db->insert('news',$data);

    }

    public function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }

}