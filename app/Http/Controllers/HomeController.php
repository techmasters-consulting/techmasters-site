<?php

namespace App\Http\Controllers;


use App\Services;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;
use Juanparati\Sendinblue\Client as Blue;
use Juanparati\Sendinblue\Facades\Template as MailTemplate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function marker_info()
    {
        return view('become-a-marker');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

        public function faq(){
            $articles = $this->getArticleMenu();
            $services = $this->getServiceMenu();

            return view('faq', array('services'=>$services, 'articles'=>$articles));
        }
    public function contact(){
        $articles = $this->getArticleMenu();
        $services = $this->getServiceMenu();

        return view('contact', array('services'=>$services, 'articles'=>$articles));
    }



  public function emailservice(Request $request){
//dd($request->all());
     $apiClient = app()->make(Blue::class);
        $contactsApi = $apiClient->getApi('ContactsApi');

        // Use CreateContact model
        $contact = $apiClient->getModel('CreateContact', ['email' => $request->email, 'listIds' => [7]]);

        try {
            MailTemplate::to("findus@housemasters.mu");
             MailTemplate::cc('housemasters.mu@gmail.com');
            MailTemplate::attribute('NAME', $request->name);
            MailTemplate::attribute('MSG', $request->msg);
            MailTemplate::attribute('EMAIL', $request->email);
            MailTemplate::send(9);
            $contactsApi->createContact($contact);
        }
        catch(\Exception $e){
            dd($e->getMessage());
        }

    }
}
