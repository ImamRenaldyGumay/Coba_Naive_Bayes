<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

    public function getData() {
        // Mengatur header untuk output JSON
        headers('Content-Type: application/json');
        
        // Mengisi data sesuai dengan format yang diinginkan
        $response = array(
            "Status" => 200,
            "data" => array(
                "id" => "1",
                "title" => "Headline",
                "content" => "qweoiqoweioqiw",
                "author" => "Maspren",
                "image" => "ksksks",
                "tags" => "Big Data",
                "date" => "2020200",
                "related_content" => array(
                    array(
                        "id" => 1,
                        "title" => "headline",
                        "image" => "skksks",
                        "tags" => "big data",
                        "sinopsis" => "skskks",
                        "links" => "ksks"
                    ),
                    array(
                        "id" => 2,
                        "title" => "headline",
                        "image" => "skksks",
                        "tags" => "big data",
                        "sinopsis" => "skskks",
                        "links" => "ksks"
                    ),
                    array(
                        "id" => 3,
                        "title" => "headline",
                        "image" => "skksks",
                        "tags" => "big data",
                        "sinopsis" => "skskks",
                        "links" => "ksks"
                    )
                )
            )
        );

        // Mengirimkan response JSON
        echo json_encode($response);
    }
}
