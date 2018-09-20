<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('counter');
        // $this->counter->add_visitor($this->input->ip_address());
    }

    public function index()
    {
        // $latest = $this->crud->gwlo('blogs', array('publikasi' => 'Publish'), 6, 0, 'iat DESC');
        // $features = $this->crud->gwo('features', array('status' => 'Publish'), 'iat DESC');
        // $testimonial = $this->crud->gwo('testimonial', array('status' => 'Publish'), 'iat DESC');
        // $screenshoot = $this->crud->gwo('screenshoot', array('status' => 'Publish'), 'iat DESC');
        $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                        // 'latest'        => $latest,
                        // 'screenshoot'        => $screenshoot,
                        // 'testimonial'        => $testimonial,
                        // 'features'        => $features,
                        'isi'       => 'homepage/home');
        $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function profilFakultas()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/profil_fakultas');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function akademik()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/akademik');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function sasaran()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/sasaran');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function tenaga_pendidik()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/tenaga_pendidik');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function tenaga_kependidikan()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/tenaga_kependidikan');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function fasilitas()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/fasilitas');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function penelitian()
    {
      $data = array(  'title'     => 'Website Fakultas Universitas Hasanuddin',
                      // 'latest'        => $latest,
                      // 'screenshoot'        => $screenshoot,
                      // 'testimonial'        => $testimonial,
                      // 'features'        => $features,
                      'isi'       => 'homepage/penelitian');
      $this->load->view('homepage/_layout/wrapper', $data);
    }
}
