<?php
    class DataPasien extends Controller
    {
        public function index()
        {
            $data['judul'] = 'Data Pasien';
            $data['pasien'] = $this->model('DataPasien_model')->getAllPasien();
            $this->view('template_admin/header', $data);
            $this->view('dokter/dataPasien/index', $data);
            $this->view('template_admin/footer');
        }
    }
?>