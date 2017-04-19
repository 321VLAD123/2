<?php
Class Controller_Pages extends Controller_Abstract
{
    public function error($text="")
    {
        $View = $this->loadView('index');
        $View->view('Pages/error');
		$View->set('text',$text); 
        $View->render("404");
    }
    public function index()
    {
        $View = $this->loadView('index');// _layout
        $View->view('Pages/index'); // Pages
        $View->render("Главная"); // title
    }
   
	public function articles($params=0) 
	{ 
	$View = $this->loadView('index'); 
	$View->view('Pages/articles'); // Pages 
	$View->set('num_art',$params); 
	$View->render("Статьи"); // title 
	}
	
	public function regisrtation()
    {
        $View = $this->loadView('index');
        $View->view('Pages/regisrtation'); // Pages
        $View->render("регистрация"); // title
    }
	
	public function vxod()
    {
        $View = $this->loadView('index');
        $View->view('Pages/vxod'); // Pages
		$View->set('styleC','styleC');
        $View->render("Авторизация"); // title
    }
	
	public function shezar()
    {
        $View = $this->loadView('index');
        $View->view('Pages/shezar'); // Pages
		$View->set('styleC','styleC');
        $View->render("шифр цезаря"); // title
    }
	public function a1z26()
    {
        $View = $this->loadView('index');
        $View->view('Pages/a1z26'); // Pages
		$View->set('styleC','styleC');
        $View->render("шифр a1z26"); // title
    }
	public function atbash()
    {
        $View = $this->loadView('index');
        $View->view('Pages/atbash'); // Pages
		$View->set('styleC','styleC');
        $View->render("шифр Атбаш"); // title
    }
	public function vishener()
    {
        $View = $this->loadView('index');
        $View->view('Pages/vishener'); // Pages
		$View->set('styleC','styleC');
        $View->render("шифр Виженера"); // title
    }
	public function xilla()
    {
        $View = $this->loadView('index');
        $View->view('Pages/xilla'); // Pages
		$View->set('styleC','styleC');
        $View->render("шифр Хилла"); // title
    }
	public function cvaz()
    {
        $View = $this->loadView('index');
        $View->view('Pages/cvaz'); // Pages
        $View->render("Обратная связь"); // title
    }
	
}