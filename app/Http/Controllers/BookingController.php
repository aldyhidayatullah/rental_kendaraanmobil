<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Bookings;

class BookingController extends Controller
{
    public function index($id)
    {
        $data = Cars::find($id);

        $param = [
            "tittle" => "Booking Mobil",
            "active" => "booking_mobil",
            "datamobil" => $data
        ];
        return view('booking', $param);
    }

    public function savebooking(Request $request)
    {
        $data = [
            "car_id" => $request->input("car_id"),
            "nama_lengkap" => $request->input("nama_lengkap"),
            "alamat_lengkap" => $request->input("alamat_lengkap"),
            "nomor_handphone" => $request->input("nomor_wa")
        ];

        Bookings::create($data);
        return redirect(url('booking/daftarbooking'));
    }

    public function daftarbooking()
    {
        $param = [
            'listdaftarbooking' => Bookings::all()
        ];

        return view('daftarbooking', $param);
    }

    public function delete(Request $request) {
        Bookings::destroy($request->id);
        return redirect(url('booking/daftarbooking'))->with('success', 'Canceled Booking');
    }
}