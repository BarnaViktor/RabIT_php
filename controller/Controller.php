<?php
    require 'model/usersService.php';
    require 'model/advertisementsService.php';
    require_once 'databaseConfig.php';
class Controller
{
    public function __construct(){
        $this->objectConfig= new databaseConfig();
        $this->objectUserService= new UsersService($this->objectConfig);
        $this->objectAdvertisementService = new AdvertisementsService($this->objectConfig);
    }
    //display the page depending on the param
    public function viewHandler(){
        $param = isset($_GET['param']) ? $_GET['param'] : NULL;
        switch($param){
            case 'users':
                $this->listUsers();
                break;
            case 'advertisements':
                $this->listAdvertisements();
                break;
            default:
                $this->mainPage();
        }
    }
    public function mainPage(){
        include "view/index.php";
    }
    //pass the result from the database to the usersList
    public function listUsers(){
        $result=$this->objectUserService->getUsers();
        include "view/usersList.php";
    }
    //pass the result from the database to the advertisementsList
    public function listAdvertisements(){
        $result=$this->objectAdvertisementService->getAdvertisements();
        include "view/advertisementsList.php";
    }
}
?>