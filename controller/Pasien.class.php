<?php
class Pasien extends Controller
{

   public function index()
   {
      // Load model
      $pasienModel = $this->loadModel('PasienModel');
      // Get data from the model
      $pasiens = $pasienModel->getAll();      // Load the view
      $this->loadView('pasiens', ['pasiens' => $pasiens]);
   }


   public function create_form()
   {
      $this->loadView('insert_post');
   }


   public function create_process()
   {
      $pasienModel = $this->loadModel('PasienModel');
      $nama = addslashes($_POST['nama']);
      $umur = addslashes($_POST['umur']);
      $jenis_kelamin = addslashes($_POST['jenis_kelamin']);
      $riwayat_penyakit = addslashes($_POST['riwayat_penyakit']);
      $alamat = addslashes($_POST['alamat']);
      $no_telpon = addslashes($_POST['no_telpon']);
      $pasienModel->insert($nama, $umur, $jenis_kelamin, $riwayat_penyakit, $alamat, $no_telpon);
      header('Location: ?c=Pasien');
      exit;
   }


   public function edit()
   {
      $id_pasien = $_GET['id_pasien'];

      if (!$id_pasien) header('Location: index.php?c=Pasien');

      $pasienModel = $this->loadModel('PasienModel');
      $pasien = $pasienModel->getById($id_pasien);

      if (!$pasien->num_rows) header('Location: index.php?c=Pasien');

      $this->loadView('edit', ['pasien' => $pasien->fetch_object()]);
   }


   public function update()
   {
      $pasienModel = $this->loadModel('PasienModel');

      $id_pasien = $_POST['id_pasien'];
      $nama = addslashes($_POST['nama']);
      $umur = addslashes($_POST['umur']);
      $jenis_kelamin = addslashes($_POST['jenis_kelamin']);
      $riwayat_penyakit = addslashes($_POST['riwayat_penyakit']);
      $alamat = addslashes($_POST['alamat']);
      $no_telpon = addslashes($_POST['no_telpon']); //agar karakter aneh2 bisa kebaca, menghindari sql injection
      // $title = $_POST['title'];
      // $content = $_POST['content'];

      $pasienModel->update($id_pasien, $nama, $umur, $jenis_kelamin, $riwayat_penyakit, $alamat, $no_telpon);
      header('Location: ?c=Pasien');
   }

   public function delete()
   {
      $id_pasien = $_POST['id_pasien'];

      $pasienModel = $this->loadModel('PasienModel');
      $pasienModel->delete($id_pasien);

      // redirect to post list after delete
      header('location:?c=Pasien');
   }
}
