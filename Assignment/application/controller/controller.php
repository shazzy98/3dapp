<?php
// Create controller class for MVC design pattern
class Controller {

    // Declare public variables for controller class
    public $load;
    public $model;

    // Create functions for controller class
    function __construct($pageURI = null) // constructor of class
    {
        // echo $pageURI
        $this->load = new Load();
        $this->model = new Model();
        // Determine what page you are on
        $this->$pageURI();
    }
	
    // home page function
    function home() 
    {
        $this->apiCreateTables();
        $this->apiInsertData();
        $data = $this->model->getDBResult();
        $this->load->view('viewCocaCola', $data);
    }


    //Create database tables function
    function apiCreateTables() 
    {
        $this->model->dbCreateTables();
    }


	
	//Insert data function
    function apiInsertData() 
    {
        $this->model->dbInsertData();
    }
}
?>