<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model
{

    /**
     * UsersModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    #region Profile Information
    /***
     * @param $Username
     * @return mixed
     */
    // Kullanıcı Profil Bilgileri
    public function getUserProfile($Username)
    {
        $User = $this->db->select('id,Username,Avatar,RegisterDate')->where('Username', $Username)->get('users')->result();
        if ($User)
            return $User[0];
        else
            return false;
    }

    #endregion

    /***
     * @param array $Data
     * @return bool
     */
    public function doRegister($Data = Array())
    {
        //Eğer kullanıcı adı sistemde kayıtlı değilse işleme al.
        if (!$this->getUserProfile($Data['Username'])) {
            $Add = $this->AddUser(array(
                'Username' => $Data['Username'],
                'Mail' => $Data['Mail'],
                'Password' => password_hash($Data['Password'], PASSWORD_DEFAULT)
                //'Avatar' => ' '
            ));
            if ($Add) { return true; } else { return false; }
        }
    }

    public function doLogin($Data = Array())
    {
        //Eğer kullanıcı adı sistemde kayıtlıysa işleme al
        if ($this->getUserProfile($Data['Username'])) {

            $User = $this->db->select('Username,Password')->where('Username', trim($Data['Username']))->get('users')->result();
            if($User)
            if (password_verify($Data['Password'], trim($User[0]->Password))) { return true; } else{ return false; }
            else return false;
        }
    }

        public
        function AddUser($Data = Array())
        {
            return $this->db->insert('users', $Data);
        }


    }
