<?php

class Roles
{
    public function actor($role = ROLE_GUEST)
    {
        $this->session->set_userdata('userrole', $role);
        redirect($_SERVER['HTTP_REFERER']);
    }
}