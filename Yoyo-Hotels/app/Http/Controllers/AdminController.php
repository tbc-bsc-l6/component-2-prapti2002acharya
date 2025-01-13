<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\contact;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Models\Offers;
use App\Models\reviews;


class AdminController extends Controller
{
    

    public function index()
    { 
        
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            
            if($usertype == 'user')
            {
              
                $reviews = reviews::take(2)->get();
                $room = Room::take(4)->get();
                return view('home.index', compact('room','reviews'));
            }
            else if($usertype == 'admin')
            {
                $total_room = Room::all()->count();
                $total_user = User::all()->count();
                $total_booking = Booking::all()->count();
                $total_offer = Offers::all()->count();
                return view('admin.index', compact('total_room','total_user','total_booking','total_offer'));
               
            }
            else
            {
                
                return redirect()->back();
            }
        }
        

}



public function home()
        {
            $reviews = reviews::take(2)->get();
            $room = Room::take(4)->get();
            return view('home.index', compact('room','reviews'));
        }


        public function main(){
            $reviews = reviews::take(2)->get();
            $room = Room::take(4)->get();
            return view('home.index', compact('room','reviews'));
        }

        public function rooms(){
            $room = Room::all();
            return view('home.rooms',compact('room'));
        }

        public function about_us(){
            return view('home.about_us');
        }
        

        public function contact(){
            return view('home.contact');
        }

        public function create_room()
        {
            return view('admin.create_room');
        }


        /* add room data to the database */
        
        public function add_room(Request $request){
            $data = new Room;

            $data->room_title = $request->title;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->room_type = $request->roomType;
            $data->size = $request->size;
            $data->capacity = $request->capacity;
            $data->services = $request->services;

            $image = $request->image;

            if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('room',$imagename);

                $data->image=$imagename;
            }

            $data->save();
            return redirect()->back();
        }


        // public function dashboard(){
        //     return view('admin.index');
        // }

        public function view_room(){

            $data = Room::all();
            return view('admin.view_room', compact('data'));
        }

        //delete rooms
        public function room_delete($id){
            $data = Room::find($id);
            $data->delete();
            return redirect()->back();

        }

         //update room
        public function room_update($id){
        $data = Room::find($id);
        return view('admin.update_room', compact('data'));

        }

        public function edit_room(Request $request, $id){
            $data = Room::find($id);

            $data->room_title = $request->title;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->size = $request->size;
            $data->capacity = $request->capacity;
            $data->services = $request->services;
            $data->room_type = $request->roomType;

            $image = $request->image;

            if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('room',$imagename);

                $data->image=$imagename;
            }


            $data->save();
            return redirect()->back();
            
            
        }

        public function booking(){
            $data=Booking::all();
            return view('admin.booking',compact('data'));
        }

        //delete booking
        public function delete_booking($id){
            $data = Booking::find($id);
            $data->delete();
            return redirect()->back();
        }

        //approve booking
        public function approve_book($id){
            $booking= Booking::find($id);
            $booking->status='Approved';
            $booking->save();
            return redirect()->back();
        }

        //reject booking
          public function reject_book($id){
            $booking= Booking::find($id);
            $booking->status='Rejected';
            $booking->save();
            return redirect()->back();
        }

        //show all messages
        public function messages(){
            
            $data = contact::all();
            return view('admin.messages', compact('data'));
        }


        //get email message
        public function send_mail($id){
            $data= contact::find($id);
            return view('admin.send_mail',compact('data'));
        }


        //send email notification
        public function mail(Request $request, $id){
            $data= contact::find($id);

            $details = [

                'greeting' => $request->greeting,
                'body' => $request->body,
                'action_text' => $request->action_text,
                'action_url' => $request->action_url,
                'end' => $request->end,
                
            ];

            Notification::send($data, new SendEmailNotification($details));
            return redirect()->back();
        }

        //view_offers
        public function offers(){

            $offer = Offers::all();
            return view('admin.offers_image', compact('offer'));
        }

        public function add_offers(Request $request){
            $data = new Offers;
            $image = $request->image;

            if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('offers',$imagename);

                $data->image=$imagename;

                $data->save();

                return redirect()->back();
            }
        }

        //delete offer images
        public function delete_image($id){
            $data = Offers::find($id);
            $data->delete();
            return redirect()->back();
        }

         //view offers in user page
     public function view_offers(){

        $data = Offers::all();
        return view('home.offers_details', compact('data'));
      }

      public function reviews(){
        $data = reviews::all();
        return view('admin.reviews', compact('data'));
      }

      public function add_review(Request $request, $id){

        $data= new reviews;
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->review = $request->review;

        $data->save();
        return redirect()->back();
      }

      public function mail_delete($id)
      {
          $data = contact::find($id);
  
          if ($data) {
              $data->delete();
              return redirect()->back()->with('success', 'Contact deleted successfully.');
          } else {
              return redirect()->back()->with('error', 'Contact not found.');
          }
      }

      public function review_delete($id){
        $data = reviews::find($id);
        $data->delete();
        return redirect()->back();
    }        
}
