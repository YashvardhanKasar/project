<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VehicleModel; // Import the correct model class

class Vehicle extends BaseController
{
    public function show()
    {
        $vehicleModel = new Vehicle(); // Instantiate the correct model
        $data['vehicle'] = $vehicleModel->findAll();

        return view('vehicle_view', $data);
    }

    public function create()
    {
        return view('add_vehicle');
    }

    public function store()
    {
        $vehicleModel = new VehicleModel(); // Instantiate the correct model
        $data = [
            'title' => $this->request->getVar('title'),
            'model' => $this->request->getVar('model'),
            'price' => $this->request->getVar('price'),
        ];

        $vehicleModel->insert($data);
        return redirect()->to('/dashboard');
    }

    // delete vehicle
    public function delete($id = null)
    {
        $vehicleModel = new Vehicle(); // Instantiate the correct model
        $vehicleModel->delete($id);
        return redirect()->to('/dashboard');
    }

    // show single vehicle
    public function edit($id = null)
    {
        $vehicleModel = new Vehicle(); // Instantiate the correct model
        $data['user_obj'] = $vehicleModel->find($id);
        return view('edit_vehicle', $data);
    }

    // update vehicle data
    public function update()
    {
        $vehicleModel = new Vehicle(); // Instantiate the correct model
        $vid = $this->request->getVar('vid');
        $data = [
            'title' => $this->request->getVar('title'),
            'model' => $this->request->getVar('model'),
            'price' => $this->request->getVar('price'),
        ];

        $vehicleModel->update($vid, $data);
        return redirect()->to('/dashboard');
    }
}
