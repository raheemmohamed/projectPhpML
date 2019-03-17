<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Single Linear Result
This is for single Linear result. the controller HomeController and navigate and modify function HomeController->single_Linear(), as the same get your Result. sample code snippets.

#### Example - {your URI}/single - Use this route and get Single Linear result
 
    public function single_Linear(){
       
        $samples = [[60], [61], [62], [63], [65]];
        $targets = [3.1, 3.6, 3.8, 4, 4.1];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);

        /* ****** DEFINE YOUR PREDICT VALUE HERE -START *******/
        
        $result = $regression->predict([64]);
        
        /* ****** DEFINE YOUR PREDICT VALUE HERE - END *******/

        /* Add to New Array */
        $result_array = array(
            'regression_Result' => number_format($result, 2)
        );
        /*return to View page*/
        return view('home/index',  $result_array);
    }
    
  <img src="https://images2.imgbox.com/de/84/JwhqrYvA_o.png" alt="Single Linear result"/>
    
## Multiple Linear Result
This is for Multiple Linear result. the controller HomeController and navigate and modify function HomeController->multiple_Linear(), as the same get your Result. sample code snippets.

#### Example - {your URI}/multiple - Use this route and get Multiple Linear result

 public function multiple_Linear(){
        
        $samples = [

            [73676, 1996],
            [77006, 1998],
            [10565, 2000],
            [146088, 1995],
            [15000, 2001],
            [65940, 2000],
            [9300, 2000],
            [93739, 1996],
            [153260, 1994],
            [17764, 2002],
            [57000, 1998],
            [15000, 2000]

        ];
        $targets = [

            2000,
            2750,
            15500,
            960,
            4400,
            8800,
            7100,
            2550,
            1025,
            5900,
            4600,
            4400
        ];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);

        /* ****** DEFINE YOUR PREDICT VALUE HERE -START *******/
        
        $result = $regression->predict([1500,1998]);
        /* ****** DEFINE YOUR PREDICT VALUE HERE - END *******/

        /* Add to New Array */
        
        $result_array = array(
            'regression_Result' => number_format($result, 2)
        );
        
        /*return to View page*/
        return view('home/index',  $result_array);
    }

<img src="https://images2.imgbox.com/75/95/qXblSuXu_o.png" alt="image host"/>
    
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost you and your team's skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
