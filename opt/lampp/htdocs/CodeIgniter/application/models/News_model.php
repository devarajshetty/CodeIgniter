<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News_model
 *
 * @author deva
 */
class News_model extends CI_Model{
    //put your code here
    public function __construct()
            {
                 $this->load->database();       
            }
}
