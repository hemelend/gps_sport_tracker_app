<?php
namespace App\Test\TestCase\Controller;


use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];

    public function setUp() {
        parent::setUp();
    }

    public function tearDown() {
        parent::tearDown();
        TableRegistry::clear();
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * @return void
     */
    public function testLogin() {
        $this->get(['controller' => 'users', 'action' => 'login']);
        $this->assertResponseCode(200);
        $this->assertNoRedirect();
    }

    /**
     * @return void
     */
    public function testLoginLoggedIn() {
        $data = [
            'Auth' => ['User' => ['id' => 1, 'role' => 'admin']]
        ];
        $this->session($data);
        eval(breakpoint());
        $this->get(['controller' => 'users', 'action' => 'login']);
        $this->assertResponseCode(302);
        $this->assertRedirect('/dashboard');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        // $this->markTestIncomplete('Not implemented yet.');
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $data = [
            // 'id' => '9999999',
            'username' => 'tester@test.com',
            'password' => 'secret@123',
            'role' => 'admin',
            'created' => 1494383114,
            'modified' => 1494383114
        ];
        $this->post('/register', $data);
        $this->assertResponseSuccess();

        $users = TableRegistry::get('Users');
        $query = $users->find()->where(['username' => $data['username']]);
        $this->assertEquals(1, $query->count());
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    // test login ok
    public function testLoginOK()
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        // eval(breakpoint());
        $result = $this->post('/login', ['username' => 'home@homecr.com', 'password' => 'secret@123']);
        // eval(breakpoint());
        $expected = ['username' => 'home@homecr.com'];
        debug($result);
        $this->assertSession($expected, 'Auth.User');

        // $expected = [
        //     'controller' => 'Dashboard',
        //     'action' => 'index'
        // ];
        // $this->assertRedirect($expected);
    }

    // test login failure
    public function testLoginFailure()
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $this->post('/login', [
            'username' => 'wrong-username@hhh.com',
            'password' => 'wrong-password'
        ]);

        $this->assertNull($this->_requestSession->read('Auth.User'));

        $this->assertNoRedirect();

        $expected = __d('cockpit', 'Invalid username or password, try again');
        $this->assertResponseContains($expected);
    }
}
