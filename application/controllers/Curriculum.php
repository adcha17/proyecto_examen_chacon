<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Curriculum extends CI_Controller {

    private $controller;

    /**
     * __construct: Initialize Construct
     *
     */
    public function __construct() {

        parent::__construct();

        $this->controller = strtolower(get_class());

        $this->load->model("Curriculum_model");
        $this->load->model("Exp_lab_model");
    }

    /**
     * store: Add Curriculum
     *
     * @return View
     */
    public function store() {


        $_post = $this->validate_post();

        $_a_curriculum['nombre'] = $_post['nombre'];
        $_a_curriculum['apellidos'] = $_post['apellidos'];
        $_a_curriculum['dni'] = $_post['dni'];
        $_a_curriculum['fecha_nac'] = $_post['fecha_nac'];
        $_a_curriculum['distrito'] = $_post['distrito'];
        $_a_curriculum['direccion'] = $_post['direccion'];

        $_a_exp_lab['empresa'] = $_post['empresa'];
        $_a_exp_lab['telefono'] = $_post['telefono'];
        $_a_exp_lab['year_ini'] = $_post['year_ini'];
        $_a_exp_lab['year_fin'] = $_post['year_fin'];

        $_result = $this->Curriculum_model->add($_a_curriculum);
        $_insert_id = $insert_id = $this->db->insert_id();
        $_a_exp_lab['id'] = $_insert_id;

        $_result_exp = $this->Exp_lab_model->add($_a_exp_lab);



        if ($_result){
            _build_json(TRUE, 'Curriculum Add Ok',$url);
        }else{
            _build_json();
        }
    }

    private function validate_post() {

        $_nombre = $this->input->post('nombre', TRUE);
        if (empty($_nombre))
            _build_json(FALSE, 'Por favor, ingresar Nombre');
        $data['nombre'] = $_nombre;

        $_apellidos = $this->input->post('apellidos', TRUE);
        if (empty($_apellidos))
            _build_json(FALSE, 'Por favor, ingresar Apellidos');
        $data['apellidos'] = $_apellidos;

        $_dni = $this->input->post('dni', TRUE);
        if (empty($_dni))
            _build_json(FALSE, 'Por favor, ingresar DNI');
        $data['dni'] = $_dni;

        $_fecha_nac = $this->input->post('fecha_nac', TRUE);
        if (empty($_fecha_nac))
            _build_json(FALSE, 'Por favor, ingresar Fecha de Nacimiento');
        $data['fecha_nac'] = $_fecha_nac;

        $_distrito = $this->input->post('distrito', TRUE);
        if (empty($_distrito))
            _build_json(FALSE, 'Por favor, ingresar Distrito');
        $data['distrito'] = $_distrito;

        $_direccion = $this->input->post('direccion', TRUE);
        if (empty($_direccion))
            _build_json(FALSE, 'Por favor, ingresar Direccion');
        $data['direccion'] = $_direccion;

        $_empresa = $this->input->post('empresa', TRUE);
        if (empty($_empresa))
            _build_json(FALSE, 'Por favor, ingresar Empresa');
        $data['empresa'] = $_empresa;

        $_telefono = $this->input->post('telefono', TRUE);
        if (empty($_telefono))
            _build_json(FALSE, 'Por favor, ingresar Telefono');
        $data['telefono'] = $_telefono;

        $_year_ini = $this->input->post('year_ini', TRUE);
        if (empty($_year_ini))
            _build_json(FALSE, 'Por favor, ingresar Año de Inicio');
        $data['year_ini'] = $_year_ini;

        $_year_fin = $this->input->post('year_fin', TRUE);
        if (empty($_year_fin))
            _build_json(FALSE, 'Por favor, ingresar Año de Fin');
        $data['year_fin'] = $_year_fin;

        return $data;
    }

    /**
     * show: Load List Curriculum
     *
     * @return View
     */
    public function show() {

        $data["controller"] = $this->controller;

        $data['items'] = $this->Curriculum_model->get();

        $data["view"] = 'master/' . $this->controller . '/load_list';

        $this->load->view('dashboard/layout_index', $data);
    }

    /**
     * create: Load Form Add Curriculum
     *
     * @return View
     */
    public function create() {
        $data["controller"] = $this->controller;

        $data["view"] = 'master/' . $this->controller . '/load_add';

        $this->load->view('dashboard/layout_index', $data);
    }

    /**
     * edit: Load Form Edit Curriculum
     *
     * @return View
     */
    public function edit($id) {

        if (!is_numeric($id))
            redirect($this->controller . '/show', 'refresh');

        if (!$this->Curriculum_model->get_by_id($id))
            exit(json_encode(array('status' => FALSE, 'message' => 'id no registrado')));

        $data['item'] = $this->Curriculum_model->get_by_id($id);
        $data['item2'] = $this->Exp_lab_model->get_by_id($id);

        $data["controller"] = $this->controller;

        $data["id"] = $id;

        $data["view"] = 'master/' . $this->controller . '/load_edit';
        /*
          var_dump($data);
          die("sa");
         */
        $this->load->view('dashboard/layout_index', $data);
    }

    /**
     * update: Update Curriculum
     *
     * @return Json
     */
    public function update() {

        $id = $this->input->post('id', TRUE);

        $_post = $this->validate_post();

        $_a_curriculum['nombre'] = $_post['nombre'];
        $_a_curriculum['apellidos'] = $_post['apellidos'];
        $_a_curriculum['dni'] = $_post['dni'];
        $_a_curriculum['fecha_nac'] = $_post['fecha_nac'];
        $_a_curriculum['distrito'] = $_post['distrito'];
        $_a_curriculum['direccion'] = $_post['direccion'];

        $_a_exp_lab['empresa'] = $_post['empresa'];
        $_a_exp_lab['telefono'] = $_post['telefono'];
        $_a_exp_lab['year_ini'] = $_post['year_ini'];
        $_a_exp_lab['year_fin'] = $_post['year_fin'];

        /*
          var_dump($_post);
          die("sa");
         */
        $_result = $this->Curriculum_model->update($_a_curriculum, $id);
        $_result_exp = $this->Exp_lab_model->update($_a_exp_lab, $id);

        if ($_result){
            
            _build_json(TRUE, 'Curriculum Update Ok');
        }else{
            _build_json();
        }

    }

    /**
     * destroy: Delete Curriculum
     *
     * @return json_decode(json)
     */
    public function destroy($id) {

        if (!is_numeric($id))
            exit(json_encode(array('status' => FALSE, 'message' => 'id no valido')));

        if (!$this->Curriculum_model->get_by_id($id))
            exit(json_encode(array('status' => FALSE, 'message' => 'id no registrado')));


        $data['estado'] = 99;

        $_result = $this->Curriculum_model->delete($data, $id);
        $_result_exp = $this->Exp_lab_model->delete($data, $id);

        if ($_result){
           
            _build_json(TRUE, 'Curriculum Delete Ok');
        }else{
            _build_json();
        }
    }

    public function load_modal($id) {
        if (!is_numeric($id))
            exit(json_encode(array('status' => FALSE, 'message' => 'id no valido')));

        if (!$this->Exp_lab_model->get_by_id($id))
            exit(json_encode(array('status' => FALSE, 'message' => 'id no registrado')));

        $data['item'] = $this->Exp_lab_model->get_by_id($id);

        $html = $this->load->view('master/curriculum/content-modal', $data, TRUE);


        exit(json_encode(['html' => $html]));
    }

}
