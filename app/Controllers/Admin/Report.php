<?php

namespace App\Controllers\Admin;

use koolreport\processes\JsonSpread;

require  APPPATH . "../vendor/koolreport/core/autoload.php";
class Report extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
    function settings()
    {
        return array(
            "assets" => array(
                "path" => "../public/template/assets",
                "url" => '/template/assets'
            ),
            "dataSources" => array(
                "pawppy" => array(
                    "connectionString" => "mysql:host=127.0.0.1;dbname=pawppy",
                    "username" => "root",
                    "password" => "",
                    "charset" => "utf8"
                )
            )
        );
    }
    function setup()
    {
        // $this->src("pawppy")
        //     ->query("select * from diagnosis")
        //     ->pipe($this->dataStore("diagnosis"));
        $this->src("pawppy")
            ->query("SELECT 
             d.id_diagnosis as ID,
              d.created_at as Tanggal, 
              u.id as ID_user, 
              u.username as Username,
              p.nama as Penyakit
            FROM diagnosis d 
            JOIN users u ON d.id_user = u.id 
            JOIN penyakit p ON d.id_hasil = p.id_penyakit")
            ->pipe(
                $this->dataStore("diagnosis")
            );
    }
}