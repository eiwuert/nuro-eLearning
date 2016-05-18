<?php

/**
 *
 */
class Nurodigital extends CI_Model
{

  public function getPage($data='') {
    if ($data['st']=="home") {
      $this->load->view('home/index', $data, FALSE);
    }
  }

  public function actLogin($username, $password) {
    $que = $this->db->get_where('nurodigital_siswa', array('username' => $username, 'password' => $password));
    $n_row = $que->num_rows();
    $r = $que->row();

    if ($n_row === 1) {
      if ($r->status == "Aktif") {
        $this->sessionData($r);
      } else {
        $this->session->set_flashdata(md5('notification'), "Akun Anda tidak aktif, silahkan hubungi bidang kesiswaan");
        redirect('/url/login');
      }
    } else {
      $this->session->set_flashdata(md5('notification'), "Username dan Password tidak terdaftar");
      redirect('/url/login');
    }

    // if ($n_row === 1) {
    //     // $this->createSession($r);
    //     $this->sessionData($r);
    //   } else {
    //     // $this->session->set_flashdata(md5('notification'), "Maaf username dan password tidak terdaftar");
    //     echo "Username atau password salah";
    // }
  }

  public function sessionData($r='') {
    $data['id']     = $r->id_siswa;
    $data['nama']   = $r->nama;
    $data['siswa_valid'] = TRUE;

    $this->session->set_userdata($data);
    // $this->session->set_flashdata(md5('notification'), "Berhasil Login");
    echo "Sukses Login";
    redirect();
  }

  public function prosesInsert($data) {
    // $id = 'UUID()';
    // $this->db->set('id_siswa', str_replace('-','',$id), FALSE);
    return $this->db->insert('nurodigital_siswa', $data);
  }

  // function sendMail($to_email) {
  //       $this->load->library('email');
  //       $from_email = 'ahmad.uji08@gmail.com'; //change this to yours
  //       $subject = 'Verify Your Email Address';
  //       $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.mydomain.com/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team';
  //
  //       //configure email settings
  //       $config['protocol'] = 'smtp';
  //       $config['smtp_host'] = 'smtp.gmail.com'; //smtp host name
  //       $config['smtp_port'] = '465'; //smtp port number
  //       $config['smtp_user'] = $from_email;
  //       $config['smtp_pass'] = '081318260540'; //$from_email password
  //       $config['mailtype'] = 'html';
  //       $config['charset'] = 'iso-8859-1';
  //       $config['wordwrap'] = TRUE;
  //       // $config['newline'] = "\r\n"; //use double quotes
  //       $this->email->initialize($config);
  //
  //       //send mail
  //       $this->load->library('email', $config);
  //       $this->email->set_newline("\r\n");
  //       $this->email->from($from_email, 'Ahmad Fauzi');
  //       $this->email->to($to_email);
  //       $this->email->subject($subject);
  //       $this->email->message($message);
  //       return $this->email->send();
  // }

  public function send($email,$nama) {
    $from_email = 'ahmad.uji08@gmail.com'; //change this to yours
    $subject = 'Verify Your Email Address';
    $message = 'Dear '. $nama .',<br /><br />
                Please click on the below activation link to verify your email address.<br /><br />
                http://localhost/ci/nuroe-learning/action/verify/' . md5($email) . '<br /><br /><br />
                Thanks<br />
                Ahmad Fauzi';


    //configure email settings
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
    $config['smtp_timeout'] = '7';
    $config['smtp_port'] = '465'; //smtp port number
    $config['smtp_user'] = $from_email;
    $config['smtp_pass'] = '081318260540'; //$from_email password
    // $config['charset']    = 'utf-8';
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n";
    $config['crlf'] = "\r\n";
    // $config['newline'] = "\r\n"; //use double quotes
    $this->email->initialize($config);

    //send mail
    $this->email->from($from_email, 'Ahmad Fauzi');
    $this->email->to($email);
    $this->email->subject($subject);
    $this->email->message($message);
    $this->email->send();
  }

  function verifyEmail($key) {
    $data = array('status' => "Aktif");
    $this->db->where('md5(email)', $key);
    return $this->db->update('nurodigital_siswa', $data);
  }
}
