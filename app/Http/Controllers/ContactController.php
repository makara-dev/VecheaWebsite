<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('websites.contacts.index');
    }

    /**
     * Send the messange by gmail
     * @param Request $request
     * @return alert success if Mail has been send unsuccess if Mail was error
     */
    public function store(Request $request){
        $outPut = $this->recaptchaGoogle($request);

        if(strpos($outPut, '"success": true') !== FALSE) {
            $mytime = Carbon::now()->format('l jS Y');
            $details = array (
                'fname' => $request->fname,
                'lname' => $request->lname,
                'phone' => $request->phone,
                'messange' => $request->messange,
                'email' => $request->email,
                'date' => $mytime
            );
            Mail::send('websites.emails.sendmail', $details, function($messange) use ($details){
                $messange->from($details['email']);
                $messange->to('solutionvichea371@gmail.com');
                $messange->subject('New Messange');
            });
            return redirect()
                ->to ('/contact')
                ->with ('success', 'Mail Sent Successfully');
        } else {
            return redirect()
                ->to ('/contact')
                ->with ('error', 'Mail Sent Unsuccessfully');
        }
    }

    /**
     * validateion of google recaptcha
     * @param Request $request
     * @return Google JSON $output
     */
    public static function recaptchaGoogle(Request $request){
        $ch = curl_init();
        curl_setopt_array($ch,[
            CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'secret' => "6LeAwHYaAAAAAKUt9WjLuvicSFZg6OqFmg69WYs6",
                'response' => $request->input('token'),
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ],
            CURLOPT_RETURNTRANSFER => true
        ]);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
