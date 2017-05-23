<?php

class JsonView implements View {
    public function show(array $data) {
        header("Content-Type: application/json");

        if(isset($data["evenement"])) {
            $evenement = $data["evenement"];

            echo json_decode($evenement);
        } else {
            echo "Data not found";
        }
    }
}