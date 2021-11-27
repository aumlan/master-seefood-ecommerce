<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/filemanager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/errors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getErrors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/jsonitems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getItems',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/move' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.move',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/domove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.domove',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/newfolder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getAddfolder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getFolders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/crop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getCrop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/cropimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getCropimage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/cropnewimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getCropnewimage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getRename',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/resize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getResize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/doresize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.performResize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getDownload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.getDelete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filemanager/demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unisharp.lfm.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::duObZRoDV03SLKSV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::etdvYREpy5sSN3aw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reboot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gkYYxfkCOTfOtpmc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FIOsRYH1AI3hsalk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbUX9u3hPcwhWOaW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jtq6qeK14oJqy8wR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f0WuNMLonHo2uArY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopping/cart/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.cart.count',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopping/cart/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.cart.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopping/cart/empty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_cart.empty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopping/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_cart.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopping/placeOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search/mobile-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.search.mobile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms.conditions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/refund-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'refund',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search.filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages/search-results-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.search.enter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/software-activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'software.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/errors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getErrors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/jsonitems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getItems',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/move' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.move',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/domove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.domove',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/newfolder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getAddfolder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getFolders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/crop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getCrop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/cropimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getCropimage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/cropnewimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getNewCropimage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getRename',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/resize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getResize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/doresize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.performResize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getDownload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.getDelete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-filemanager/demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mafftor.lfm.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ecommerce/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ecommerce/login/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ecommerce/logout/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.subcategory.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/subcategory/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.subcategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/barand/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brandModel/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModel.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brandModel/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModel.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brandModelYear/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModelYear.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brandModelYear/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModelYear.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manufactures/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manufactures.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manufactures/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manufactures.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/attribute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/attribute/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend-settings/social-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend-settings.social-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend-settings/social-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend-settings.social-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coupon/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency/currency_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.currency_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/software' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.software.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/software/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.software.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/software-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.softwareProduct.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/software-product/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.softwareProduct.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|assword/reset/([^/]++)(*:34)|roduct/(?|([^/]++)(?:/([^/]++))?(*:73)|add/to/cart/(?|([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:130)|direct/([^/]++)/([^/]++)/([^/]++)(*:171))|remove/cart/([^/]++)(*:200)|decrease/to/cart/([^/]++)/([^/]++)/([^/]++)(*:251)))|/order\\-details/([^/]++)(*:285)|/s(?|earch/model/product/title/([^/]++)(*:332)|oftware\\-activation/([^/]++)/([^/]++)(*:377))|/redeem\\-coupon/([^/]++)(*:410)|/c(?|urrency/selected_(?|currency_update/([^/]++)(*:467)|language_update/([^/]++)(*:499))|ategory/([^/]++)/([^/]++)(*:533))|/brands/([^/]++)/([^/]++)(*:567)|/get/brand/submodel(?|/([^/]++)(*:606)|year/([^/]++)(*:627))|/manufacturers/([^/]++)/([^/]++)(*:668)|/admin/(?|c(?|ategory/(?|delete/([^/]++)(*:716)|subcategory/delete/([^/]++)(*:751))|o(?|nfigure/attribute/delete/([^/]++)(*:797)|upon/(?|delete/([^/]++)(*:828)|coupon_update/([^/]++)(*:858)|edit/([^/]++)(*:879)))|urrency/(?|delete/([^/]++)(*:915)|edit/([^/]++)(*:936)|selected_(?|currency_update/([^/]++)(*:980)|language_update/([^/]++)(*:1012))))|b(?|rand(?|/(?|delete/([^/]++)(*:1054)|brand_update/([^/]++)(*:1084)|edit/([^/]++)(*:1106))|Model(?|/(?|delete/([^/]++)(*:1143)|brandModel_update/([^/]++)(*:1178)|edit/([^/]++)(*:1200))|Year/(?|delete/([^/]++)(*:1233)|brandModelYear_update/([^/]++)(*:1272)|edit/([^/]++)(*:1294))))|anner/(?|edit/([^/]++)(*:1328)|update/([^/]++)(*:1352)|delete/([^/]++)(*:1376)))|get/(?|brand/submodel(?|/([^/]++)(*:1420)|year/([^/]++)(*:1442))|product/subcategory/([^/]++)(*:1480))|manufactures/(?|delete/([^/]++)(*:1521)|update/([^/]++)(*:1545)|edit/([^/]++)(*:1567))|s(?|lider/(?|update/([^/]++)(*:1605)|delete/([^/]++)(*:1629))|oftware/delete/([^/]++)(*:1662))|pro(?|duct/(?|update/([^/]++)(*:1701)|delete/(?|([^/]++)(*:1728)|image/([^/]++)(*:1751))|edit/([^/]++)(*:1774)|view/([^/]++)(*:1796)|category/([^/]++)(*:1822)|attribute/configure/(?|([^/]++)(*:1862)|store/([^/]++)(*:1885)|1(*:1895)|2(*:1905)))|file/update/([^/]++)(*:1936))|attribute/delete/([^/]++)(*:1971)|order/(?|edit/([^/]++)(*:2002)|view/([^/]++)(*:2024)|delete/([^/]++)(*:2048)|updateOrderStatus/([^/]++)(*:2083))|user/delete/([^/]++)(*:2113)))/?$}sDu',
    ),
    3 => 
    array (
      34 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.details',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.add.to.cart',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'qty',
            2 => 'size',
            3 => 'color',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.add.to.cart.direct',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'qty',
            2 => 'rowID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.remove.to.cart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.decrease.to.cart',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'qty',
            2 => 'rowId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.order.details',
          ),
          1 => 
          array (
            0 => 'orderID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.search',
          ),
          1 => 
          array (
            0 => 'inputText',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'software.product.list',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.redeem_coupon',
          ),
          1 => 
          array (
            0 => 'coupon_value',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.selected_currency_update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.selected_language_update',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.products',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.products',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.get.submodel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.get.submodelyear',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manufacturers.products',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.distroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.subcategory.distroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.configure.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.coupon_update',
          ),
          1 => 
          array (
            0 => 'coupon_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.selected_currency_update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.selected_language_update',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.distroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.brand_update',
          ),
          1 => 
          array (
            0 => 'brand_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModel.distroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModel.brandModel_update',
          ),
          1 => 
          array (
            0 => 'brand_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModel.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModelYear.distroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModelYear.brandModelYear_update',
          ),
          1 => 
          array (
            0 => 'brand_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brandModelYear.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.get.submodel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.get.submodelyear',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.get.subcategory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manufactures.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manufactures.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manufactures.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.software.distroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.update',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.delete',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.image.delete',
          ),
          1 => 
          array (
            0 => 'image_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.edit',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.view',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.category',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.configure',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.configure.store',
          ),
          1 => 
          array (
            0 => 'attributeId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.configure.size',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.configure.color',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => 
          array (
            0 => 'admin_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.attribute.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.edit',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.view',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.delete',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.statusChange',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'unisharp.lfm.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\LfmController@show',
        'as' => 'unisharp.lfm.show',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\LfmController@show',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getErrors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/errors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\LfmController@getErrors',
        'as' => 'unisharp.lfm.getErrors',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\LfmController@getErrors',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.upload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'filemanager/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\UploadController@upload',
        'as' => 'unisharp.lfm.upload',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\UploadController@upload',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getItems' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/jsonitems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\ItemsController@getItems',
        'as' => 'unisharp.lfm.getItems',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\ItemsController@getItems',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.move' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/move',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\ItemsController@move',
        'as' => 'unisharp.lfm.move',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\ItemsController@move',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.domove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/domove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\ItemsController@domove',
        'as' => 'unisharp.lfm.domove',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\ItemsController@domove',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getAddfolder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/newfolder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\FolderController@getAddfolder',
        'as' => 'unisharp.lfm.getAddfolder',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\FolderController@getAddfolder',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getFolders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/folders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\FolderController@getFolders',
        'as' => 'unisharp.lfm.getFolders',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\FolderController@getFolders',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getCrop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/crop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\CropController@getCrop',
        'as' => 'unisharp.lfm.getCrop',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\CropController@getCrop',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getCropimage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/cropimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\CropController@getCropimage',
        'as' => 'unisharp.lfm.getCropimage',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\CropController@getCropimage',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getCropnewimage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/cropnewimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\CropController@getNewCropimage',
        'as' => 'unisharp.lfm.getCropnewimage',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\CropController@getNewCropimage',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getRename' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\RenameController@getRename',
        'as' => 'unisharp.lfm.getRename',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\RenameController@getRename',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getResize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/resize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\ResizeController@getResize',
        'as' => 'unisharp.lfm.getResize',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\ResizeController@getResize',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.performResize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/doresize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\ResizeController@performResize',
        'as' => 'unisharp.lfm.performResize',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\ResizeController@performResize',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getDownload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\DownloadController@getDownload',
        'as' => 'unisharp.lfm.getDownload',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\DownloadController@getDownload',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.getDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\DeleteController@getDelete',
        'as' => 'unisharp.lfm.getDelete',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\DeleteController@getDelete',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unisharp.lfm.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filemanager/demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'UniSharp\\LaravelFilemanager\\Middlewares\\CreateDefaultFolder',
          3 => 'UniSharp\\LaravelFilemanager\\Middlewares\\MultiUser',
        ),
        'uses' => 'UniSharp\\LaravelFilemanager\\Controllers\\DemoController@index',
        'controller' => 'UniSharp\\LaravelFilemanager\\Controllers\\DemoController@index',
        'as' => 'unisharp.lfm.',
        'namespace' => 'UniSharp\\LaravelFilemanager\\Controllers',
        'prefix' => 'filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::duObZRoDV03SLKSV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ca1493c000000007e3f05ff";}";s:4:"hash";s:44:"CHF/p+6f5Cfv3sbNu0IQmJm9MjnJohfs+gW8TrUc9mk=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::duObZRoDV03SLKSV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::etdvYREpy5sSN3aw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:350:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:131:"function() {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'optimize\');
    return \'<center><h1>System Optimized!</h1></center>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ca1493e000000007e3f05ff";}";s:4:"hash";s:44:"Jr6wnXTsHf5kJsX81HuKzqjJHh0ErtDTddAjwkFGiNA=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::etdvYREpy5sSN3aw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gkYYxfkCOTfOtpmc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reboot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:601:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:382:"function() {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'view:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'key:generate\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
    return \'<center><h1>System Rebooted!</h1></center>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ca14938000000007e3f05ff";}";s:4:"hash";s:44:"i8+PcleJQNQZkPB8/9aQ1Puu75kLEaf/NPpXB4iQooo=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gkYYxfkCOTfOtpmc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FIOsRYH1AI3hsalk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FIOsRYH1AI3hsalk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jtq6qeK14oJqy8wR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Jtq6qeK14oJqy8wR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f0WuNMLonHo2uArY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f0WuNMLonHo2uArY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'welcome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@productDetails',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@productDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.add.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/add/to/cart/{id}/{qty}/{size}/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@AddToCart',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@AddToCart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.add.to.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.add.to.cart.direct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/add/to/cart/direct/{id}/{qty}/{rowID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@AddToCartDirect',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@AddToCartDirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.add.to.cart.direct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.remove.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/remove/cart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@RemoveToCart',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@RemoveToCart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.remove.to.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.decrease.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/decrease/to/cart/{id}/{qty}/{rowId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@decreaseToCart',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@decreaseToCart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.decrease.to.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.cart.count' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shopping/cart/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@count',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@count',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.cart.count',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.cart.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shopping/cart/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@list',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.cart.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_cart.empty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shopping/cart/empty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@cart_empty',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@cart_empty',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_cart.empty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_cart.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shopping/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@checkout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_cart.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shopping/placeOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartController@placeOrder',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartController@placeOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'place_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fbUX9u3hPcwhWOaW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fbUX9u3hPcwhWOaW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.order.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-details/{orderID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@order_details',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@order_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.order.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search/model/product/title/{inputText}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.search.mobile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search/mobile-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@search_mobile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@search_mobile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.search.mobile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.redeem_coupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'redeem-coupon/{coupon_value}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@redeem_coupon',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@redeem_coupon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.redeem_coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms.conditions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@terms_conditions',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@terms_conditions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms.conditions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@about',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@faqs',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@faqs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'refund' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refund-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@refund',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@refund',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'refund',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@contact',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.selected_currency_update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency/selected_currency_update/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedCurrency',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedCurrency',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'currency.selected_currency_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.selected_language_update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency/selected_language_update/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedLanguage',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'currency.selected_language_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brands/{id}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@brand_products',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@brand_products',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brand.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.get.submodel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get/brand/submodel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@getSubModel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@getSubModel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brand.get.submodel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.get.submodelyear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get/brand/submodelyear/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@getSubModelYear',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@getSubModelYear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brand.get.submodelyear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search.filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search-filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@search_filter',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@search_filter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search.filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{id}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@category_products',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@category_products',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manufacturers.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manufacturers/{id}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@manufacturers_products',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@manufacturers_products',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'manufacturers.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.search.enter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages/search-results-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@search_enter',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@search_enter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.search.enter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'software.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'software-activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@software_list',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@software_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'software.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'software.product.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'software-activation/{id}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserController@software_product_list',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserController@software_product_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'software.product.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\LfmController@show',
        'as' => 'mafftor.lfm.show',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\LfmController@show',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getErrors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/errors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\LfmController@getErrors',
        'as' => 'mafftor.lfm.getErrors',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\LfmController@getErrors',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.upload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'laravel-filemanager/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\UploadController@upload',
        'as' => 'mafftor.lfm.upload',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\UploadController@upload',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getItems' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/jsonitems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\ItemsController@getItems',
        'as' => 'mafftor.lfm.getItems',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\ItemsController@getItems',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.move' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/move',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\ItemsController@move',
        'as' => 'mafftor.lfm.move',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\ItemsController@move',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.domove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/domove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\ItemsController@domove',
        'as' => 'mafftor.lfm.domove',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\ItemsController@domove',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getAddfolder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/newfolder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\FolderController@getAddfolder',
        'as' => 'mafftor.lfm.getAddfolder',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\FolderController@getAddfolder',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getFolders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/folders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\FolderController@getFolders',
        'as' => 'mafftor.lfm.getFolders',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\FolderController@getFolders',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getCrop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/crop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\CropController@getCrop',
        'as' => 'mafftor.lfm.getCrop',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\CropController@getCrop',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getCropimage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/cropimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\CropController@getCropimage',
        'as' => 'mafftor.lfm.getCropimage',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\CropController@getCropimage',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getNewCropimage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/cropnewimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\CropController@getNewCropimage',
        'as' => 'mafftor.lfm.getNewCropimage',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\CropController@getNewCropimage',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getRename' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\RenameController@getRename',
        'as' => 'mafftor.lfm.getRename',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\RenameController@getRename',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getResize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/resize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\ResizeController@getResize',
        'as' => 'mafftor.lfm.getResize',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\ResizeController@getResize',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.performResize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/doresize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\ResizeController@performResize',
        'as' => 'mafftor.lfm.performResize',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\ResizeController@performResize',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getDownload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\DownloadController@getDownload',
        'as' => 'mafftor.lfm.getDownload',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\DownloadController@getDownload',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.getDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\DeleteController@getDelete',
        'as' => 'mafftor.lfm.getDelete',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\DeleteController@getDelete',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mafftor.lfm.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-filemanager/demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'admin',
          3 => 'Mafftor\\LaravelFileManager\\Middlewares\\CreateDefaultFolder',
          4 => 'Mafftor\\LaravelFileManager\\Middlewares\\MultiUser',
        ),
        'uses' => 'Mafftor\\LaravelFileManager\\Controllers\\DemoController@index',
        'controller' => 'Mafftor\\LaravelFileManager\\Controllers\\DemoController@index',
        'as' => 'mafftor.lfm.',
        'namespace' => 'Mafftor\\LaravelFileManager\\Controllers',
        'prefix' => '/laravel-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ecommerce/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Backend\\Auth\\LoginController@showLoginForm',
        'as' => 'admin.login',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ecommerce/login/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Backend\\Auth\\LoginController@login',
        'as' => 'admin.login.submit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ecommerce/logout/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Backend\\Auth\\LoginController@logout',
        'as' => 'admin.logout.submit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\DashboardContrller@dashboard',
        'controller' => 'App\\Http\\Controllers\\Backend\\DashboardContrller@dashboard',
        'as' => 'admin.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@index',
        'as' => 'admin.categories.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@store',
        'as' => 'admin.categories.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.distroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@distroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@distroy',
        'as' => 'admin.categories.distroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.subcategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@subCategoryIndex',
        'controller' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@subCategoryIndex',
        'as' => 'admin.categories.subcategory.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.subcategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/subcategory/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@subCategoryStore',
        'controller' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@subCategoryStore',
        'as' => 'admin.categories.subcategory.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.subcategory.distroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/subcategory/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@subCategorydistroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Category\\CategoryController@subCategorydistroy',
        'as' => 'admin.categories.subcategory.distroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/barand/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@index',
        'as' => 'admin.brand.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@store',
        'as' => 'admin.brand.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.distroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@distroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@distroy',
        'as' => 'admin.brand.distroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.brand_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/brand_update/{brand_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@updateBrand',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@updateBrand',
        'as' => 'admin.brand.brand_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@edit',
        'as' => 'admin.brand.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModel.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandModel/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_index',
        'as' => 'admin.brandModel.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModel.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brandModel/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_store',
        'as' => 'admin.brandModel.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModel.distroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandModel/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_distroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_distroy',
        'as' => 'admin.brandModel.distroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModel.brandModel_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brandModel/brandModel_update/{brand_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_update',
        'as' => 'admin.brandModel.brandModel_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModel.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandModel/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModel_edit',
        'as' => 'admin.brandModel.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.get.submodel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get/brand/submodel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@getSubModel',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@getSubModel',
        'as' => 'admin.brand.get.submodel',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModelYear.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandModelYear/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_index',
        'as' => 'admin.brandModelYear.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModelYear.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brandModelYear/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_store',
        'as' => 'admin.brandModelYear.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModelYear.distroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandModelYear/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_distroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_distroy',
        'as' => 'admin.brandModelYear.distroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModelYear.brandModelYear_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brandModelYear/brandModelYear_update/{brand_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_update',
        'as' => 'admin.brandModelYear.brandModelYear_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brandModelYear.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandModelYear/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@brandModelYear_edit',
        'as' => 'admin.brandModelYear.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.get.submodelyear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get/brand/submodelyear/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@getSubModelYear',
        'controller' => 'App\\Http\\Controllers\\Backend\\Brand\\BrandController@getSubModelYear',
        'as' => 'admin.brand.get.submodelyear',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manufactures.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manufactures/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@index',
        'as' => 'admin.manufactures.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manufactures.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manufactures/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@store',
        'as' => 'admin.manufactures.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manufactures.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manufactures/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@destroy',
        'as' => 'admin.manufactures.destroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manufactures.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manufactures/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@UpdateManufacture',
        'controller' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@UpdateManufacture',
        'as' => 'admin.manufactures.update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manufactures.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manufactures/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\ManufacturesController@edit',
        'as' => 'admin.manufactures.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@index',
        'as' => 'admin.slider.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@store',
        'as' => 'admin.slider.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@update',
        'as' => 'admin.slider.update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Slider\\SliderController@destroy',
        'as' => 'admin.slider.destroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@index',
        'as' => 'admin.banner.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@store',
        'as' => 'admin.banner.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@edit',
        'as' => 'admin.banner.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@update',
        'as' => 'admin.banner.update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Banner\\BannerController@destroy',
        'as' => 'admin.banner.destroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@index',
        'as' => 'admin.product.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@list',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@list',
        'as' => 'admin.product.list',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.get.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get/product/subcategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@getSubCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@getSubCategory',
        'as' => 'admin.categories.get.subcategory',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@store',
        'as' => 'admin.product.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/update/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@update',
        'as' => 'admin.product.update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@destroy',
        'as' => 'admin.product.delete',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.image.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete/image/{image_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@imageDelete',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@imageDelete',
        'as' => 'admin.product.image.delete',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@edit',
        'as' => 'admin.product.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/view/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@show',
        'as' => 'admin.product.view',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/category/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@filterByCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@filterByCategory',
        'as' => 'admin.product.category',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/attribute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@index',
        'as' => 'admin.product.attribute',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/attribute/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@store',
        'as' => 'admin.product.attribute.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/attribute/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@deleteAttribute',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@deleteAttribute',
        'as' => 'admin.product.attribute.delete',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.configure' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/attribute/configure/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@configure',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@configure',
        'as' => 'admin.product.attribute.configure',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.configure.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/attribute/configure/store/{attributeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@configureStore',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@configureStore',
        'as' => 'admin.product.attribute.configure.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.configure.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/configure/attribute/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@configureDelete',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@configureDelete',
        'as' => 'admin.product.attribute.configure.delete',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.configure.size' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/attribute/configure/1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@size',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@size',
        'as' => 'admin.product.attribute.configure.size',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.attribute.configure.color' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/attribute/configure/2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@color',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\AttributeController@color',
        'as' => 'admin.product.attribute.configure.color',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend-settings.social-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/frontend-settings/social-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Settings\\SocialSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Settings\\SocialSettingsController@index',
        'as' => 'admin.settings.frontend-settings.social-settings',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend-settings.social-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend-settings/social-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Settings\\SocialSettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Settings\\SocialSettingsController@update',
        'as' => 'admin.settings.frontend-settings.social-update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Profile\\AdminProfileController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Profile\\AdminProfileController@index',
        'as' => 'admin.profile',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile/update/{admin_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Profile\\AdminProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Profile\\AdminProfileController@update',
        'as' => 'admin.profile.update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@index',
        'as' => 'admin.coupon.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coupon/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@store',
        'as' => 'admin.coupon.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@destroy',
        'as' => 'admin.coupon.destroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.coupon_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coupon/coupon_update/{coupon_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateCoupon',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateCoupon',
        'as' => 'admin.coupon.coupon_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@edit',
        'as' => 'admin.coupon.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@currencyIndex',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@currencyIndex',
        'as' => 'admin.currency.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currency/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@store',
        'as' => 'admin.currency.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@destroy',
        'as' => 'admin.currency.destroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.currency_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currency/currency_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateCurrency',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateCurrency',
        'as' => 'admin.currency.currency_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@edit',
        'as' => 'admin.currency.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.selected_currency_update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/selected_currency_update/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedCurrency',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedCurrency',
        'as' => 'admin.currency.selected_currency_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.selected_language_update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/selected_language_update/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedLanguage',
        'controller' => 'App\\Http\\Controllers\\Backend\\Coupon\\CouponController@updateSelectedLanguage',
        'as' => 'admin.currency.selected_language_update',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@index',
        'as' => 'admin.order.list',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/edit/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@edit',
        'as' => 'admin.order.edit',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/view/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@show',
        'as' => 'admin.order.view',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/delete/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@destroy',
        'as' => 'admin.order.delete',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.statusChange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/updateOrderStatus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@statusChange',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrderController@statusChange',
        'as' => 'admin.order.statusChange',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\User\\UserController@index',
        'as' => 'admin.user.list',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\User\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\User\\UserController@destroy',
        'as' => 'admin.user.destroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.software.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/software',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@index',
        'as' => 'admin.software.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.software.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/software/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@store',
        'as' => 'admin.software.store',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.software.distroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/software/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@distroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@distroy',
        'as' => 'admin.software.distroy',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.softwareProduct.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/software-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@software_product_index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@software_product_index',
        'as' => 'admin.softwareProduct.index',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.softwareProduct.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/software-product/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@list',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\SoftwareProductController@list',
        'as' => 'admin.softwareProduct.list',
        'namespace' => 'App\\Http\\Controllers\\Backend',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
