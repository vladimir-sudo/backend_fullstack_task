<?php

namespace Model;
use App;
use CI_Model;
use CriticalException;

class Login_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

    }

    public static function logout()
    {
        App::get_ci()->session->unset_userdata('id');
    }

    public static function start_session(User_model $user)
    {
        // если перенедан пользователь
        $user->is_loaded(TRUE);

        App::get_ci()->session->set_userdata('id', $user->get_id());
    }


}
