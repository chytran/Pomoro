<?php

class Dashboard extends Controller
{
    function index()
    {
        $account = $this->loadModel("account");
        $accountTime = new Account;
        $result = $accountTime->get_all();
        
        $data['title_page'] = 'Pomoro - Account';
        $data['dashboard'] = $result;
        
        $this->view("accountDashboard", $data);
    }
}
