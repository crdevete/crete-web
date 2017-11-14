<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learningController extends Controller
{
    //web
   public function getWebBackend()
   {
    return view('learning-paths/Web-Development/BackEnd');
   }
   public function getWebFrontend()
   {
    return view('learning-paths/Web-Development/Frontend');
   }
   public function getWebFullstack()
   {
    return view('learning-paths/Web-Development/Fullstack');
   }

   //mobile
   public function getAndroid()
   {
    return view('learning-paths/mobile-devlopment/android');
   }
   public function getIos()
   {
    return view('learning-paths/mobile-devlopment/ios');
   }

    //business-marketing
    public function getBusiness()
    {
     return view('learning-paths/business-marketing/business');
    }
    public function getMarketing()
    {
     return view('learning-paths/business-marketing/marketing');
    }


    //Design
    public function getLogo()
    {
     return view('learning-paths/Design/Logo');
    }
    public function getUi()
    {
     return view('learning-paths/Design/Web-Mobile-UI-UX');
    }

    //Art and Animation
    public function getArt()
    {
     return view('learning-paths/Art-Animations/Art');
    }
    public function getAnimation()
    {
     return view('learning-paths/Art-Animations/Animations');
    }

        
    //Arch-Civil-Mechanical
        public function getArchitecture()
        {
         return view('learning-paths/Arch-Civil-Mechanical/Architecture');
        }
        public function getCivil()
        {
         return view('learning-paths/Arch-Civil-Mechanical/Civil');
        }
         public function getMechanical()
        {
         return view('learning-paths/Arch-Civil-Mechanical/Mechanical');
        }
}
