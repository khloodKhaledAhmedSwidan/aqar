<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advertisement;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //


    public function index(){
        $message  = Message::count();
        $question = Question::count();
        $advCount  = Advertisement::count();
        $contacts = Contact::count();
        $client  = Client::where('type',0)->count();
        $company  = Client::where('type',1)->count();
        return view('admin.index',compact('advCount','message','question','contacts','client','company'));
    }
}
