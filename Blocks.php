<?php

class Blocks
{
    public $block = "";

    public function __construct(){

        $this->block = "none";

    }

    public function header()
    {
        $this->block = '<a href="index.php"><h1>Tahiti Coutellerie</h1></a><hr/><br>';
        echo($this->block);
    }

    public function footer()
    {

    }

    public function login_form()
    {
        $this->block = "
        <form id='connexion_box' method='post' action='exchange_interface.php?mode=login'>
        <h2>Connexion</h2>
        <input type='text' name='uid' id='uid' placeholder='user name or mail'>
        <br>
        <input type='password' name='password' id='password' placeholder='password'>
        <br>
        <span>pas encore de compte ?</span>
        <a href='create_user.php'><u>Je m'inscris</u></a>
        <br>
        <button class='button1' type='submit'>se connecter</button>
        <br>
    </form>";
        echo($this->block);
    }

    public function inscription_form()
    {

    }

    public function admin_remove_form()
    {

    }



}