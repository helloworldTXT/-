<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{

    public function home()
    {
//        $article = Article::first();
//        require dirname(__FILE__).'/../views/home.php';

        $this->view = View::make('home')->with('article',Article::first())

            ->withTitle('MFFC :-D')

            ->withFuckMe('OK!');

//        $this->mail = Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])
//
//            ->from('MotherFucker <ooxx@163.com>')
//
//            ->title('Fuck Me!')
//
//            ->content('Hello');

        Redis2::set('key','value',5,'s');

        echo Redis2::get('key');
    }
}