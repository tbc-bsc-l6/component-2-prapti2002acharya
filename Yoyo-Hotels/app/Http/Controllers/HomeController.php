<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Booking;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use App\Models\reviews;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function room_details($id){
        $room = Room::find($id);

        // Fetch reviews for the specified room
        $reviews = reviews::where('room_id', $id)->get();
        return view('home.room_details', compact('room','reviews'));

    }

    //add booking data into databse
    public function add_booking(Request $request, $id, ){
        $room = Room::find($id);
    if (!$room) {
        return response()->json(['error' => 'Room not found'], 404);
    }

     // Validate the request data
     $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'total_price' => 'required|numeric',
    ], [
        'end_date.after_or_equal' => 'The check-out date must be a date after or equal to the check-in date.',
    ]);


    // Create a new booking instance
    $data = new Booking;
    $data->room_id = $id;
    $data->user_id = Auth::id();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->total_price = $request->total_price;
    $data->room_title = $room->room_title; 

       


        $startDate = $request->start_date;
        $endDate = $request->end_date;


        
        

    // Check for existing bookings within the date range
    $startDate = $validatedData['start_date'];
    $endDate = $validatedData['end_date'];

        //check previous booking date 
        $isBooked = Booking::where('room_id', $id)
        ->where('start_date', '<=', $endDate)
        ->where('end_date', '>=', $startDate)
        ->exists();

        if ($isBooked) {
        $bookedDates = Booking::where('room_id', $id)
        ->where('start_date', '<=', $endDate)
        ->where('end_date', '>=', $startDate)
        ->first();
        $bookedStartDate = $bookedDates->start_date;
        $bookedEndDate = $bookedDates->end_date;

        $message = 'Room is already booked for the following dates: ' . 
         $bookedStartDate . ' - ' . $bookedEndDate;

        return redirect()->back()->with('messages', $message);
        } else {
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
    
        $data->save();
        return redirect()->back()->with('message', 'Room Booked Successfully');
}




       
    }
    //contact form
    public function contact(Request $request){
        $contact = new contact;
        $contact ->name = $request->name;
        $contact ->email = $request->email;
        $contact ->message = $request->message;

        $contact->save();
        return redirect()->back()->with('message','Message Send Successfully!!');


    }

   

        public function available_room(Request $request)
        {
            $doubleRooms = Room::where('room_title', 'Double Room')->get();
        
            // Pass the available rooms data to the view and return it
            return view('home.available_room', compact('doubleRooms'));
        }


        //view my bookings
        public function my_bookings(){
            if(Auth::id()){

                $userid=Auth::User()->id;
                $book=Booking::where('user_id',$userid)->get();
                return view('home.my_bookings',compact('book'));
            }
            else{
                return redirect()->back();
            }

       
        }

        //user delete the boking
        public function cancel_booking($id){
            $data = Booking::find($id);
            $data->delete();
            return redirect()->back();
        }
    

    
    
   

   
}
