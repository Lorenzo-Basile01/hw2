<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use App\Models\User;
use Session;

class CreateController extends Controller
{


    public function fetch_cane(){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,
        "https://dog.ceo/api/breeds/image/random"
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        return $result;
    }

}
