<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ],
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
<<<<<<< HEAD
                'controller' => 'Users',
                'action' => 'login',
                // 'plugin' => 'Users'
            ],
            'authorize' => 'Controller',
            'unauthorizedRedirect' => $this->referer(), // If unauthorized, return them to page they were just on
            'storage' => 'Session'
=======
                'controller' => 'users',
                'action' => 'login'
            ],
            'authorize' => 'Controller',
            'unauthorizedRedirect' => $this->referer() // If unauthorized, return them to page they were just on
>>>>>>> 260e7dd73e2361e5ecf269e6fce2b4481a17a5a6
        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function beforeFilter(Event $event)
    {
<<<<<<< HEAD
        $this->Auth->allow(['display', 'register']);
        // Do not allow access to these public actions when already logged in
        $allowed = ['Users' => ['login','lost_password', 'register']];

        // if (!$this->AuthUser->id()) {
        //     return null;
        // }
        // eval(breakpoint());

=======
        $this->Auth->allow(['display']);
        // Do not allow access to these public actions when already logged in
        $allowed = ['Users' => ['login', 'lost_password', 'register']];
        // if (!$this->AuthUser->id()) {
        //     return null;
        // }
>>>>>>> 260e7dd73e2361e5ecf269e6fce2b4481a17a5a6
        foreach ($allowed as $controller => $actions) {
            if ($this->name === $controller && in_array($this->request->action, $actions)) {
                $this->Flash->info('The page you tried to access is not relevant if you are already logged in. Redirected to main page.');
                return $this->redirect($this->Auth->config('loginRedirect'));
            }
        }
    }

    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

    // Bootstrap Frameworks
    public $helpers = [
        'Form' => [
            'className' => 'Bootstrap.Form'
        ],
        'Html' => [
            'className' => 'Bootstrap.Html'
        ],
        'Modal' => [
            'className' => 'Bootstrap.Modal'
        ],
        'Navbar' => [
            'className' => 'Bootstrap.Navbar'
        ],
        'Paginator' => [
            'className' => 'Bootstrap.Paginator'
        ],
        'Panel' => [
            'className' => 'Bootstrap.Panel'
        ]
    ];
}
