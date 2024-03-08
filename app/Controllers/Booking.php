<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Booking as BookingModel;

class Booking extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function show()
    {
        $userModel = new BookingModel();
        $data['booking'] = $userModel->findAll();

        return view('booking_view', $data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }


    public function logout()
    {
        return view('welcome_message');
    }

    public function create()
    {
        return view('add_booking');
    }

    public function store()
    {
        $userModel = new BookingModel();
        $data = [
            'from_date' => $this->request->getVar('from_date'),
            'to_date' => $this->request->getVar('to_date'),
            'message' => $this->request->getVar('message'),
        ];

        $userModel->insert($data);
        return redirect()->to('/dashboard');
    }

    // delete booking
    public function delete($id = null)
    {
        $userModel = new BookingModel();
        $userModel->delete($id);
        return redirect()->to('/booking_view');
    }

    // show single booking
    public function edit($id = null)
    {
        $userModel = new BookingModel();
        $data['user_obj'] = $userModel->find($id);
        return view('edit_booking', $data);
    }

    // update booking data
    public function update()
    {
        $userModel = new BookingModel();
        $bid = $this->request->getVar('bid');
        $data = [
            'from_date' => $this->request->getVar('from_date'),
            'to_date' => $this->request->getVar('to_date'),
            'message' => $this->request->getVar('message'),
        ];

        $userModel->update($bid, $data);
        return redirect()->to('/dashboard');
    }
}
