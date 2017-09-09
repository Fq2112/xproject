<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'string|min:3',
            'message' => 'required'
        ]);
        $data = array(
            'nama' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('anggapim215@gmail.com');
            $message->subject($data['subject']);
        });
        Session::flash('contact', 'Pesan anda berhasil dikirim. Terimakasih telah membantu kami menjadi lebih baik :)');
        return redirect('xproject');
    }

    public function postSubscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255'
        ]);
        $data = array(
            'email' => $request->email
        );
        Mail::send('emails.subscribe', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('xprojectinf@xproject.id');
            $message->subject('New Subscriber');
        });
        Session::flash('subscribe', 'Terimakasih telah subscribe. Anda akan mendapatkan informasi terbaru seputar X-Project langsung di email yang anda masukkan sebelumnya.');
        return redirect('xproject');
    }
}
