<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Form verilerini al ve işle
        $name = $request->input('name');
        $email = $request->input('email');

        // Burada form verilerini kullanarak istediğiniz işlemleri yapabilirsiniz
        // Örneğin, e-posta gönderme, veritabanına kaydetme gibi

        // Başarılı bir şekilde işlem yapıldıktan sonra bir yönlendirme veya mesaj döndürebilirsiniz
        return redirect()->back()->with('success', 'Abone oldunuz! Teşekkür ederiz.');
    }

    public function contact(){
        return view('pages.contact-us');
    }
}
