<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

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
        $data = [
            'id' => 1,
            'username' => 'rrd@hhh.com',
            'password' => 'secret@123',
            'role' => 'Admin',
            'created' => 1494383114,
            'modified' => 1494383114
        ];

        $this->post('/user/add/', $data);
        $this->assertResponseSuccess();

        $users = TableRegistry::get('Users');
        $query = $users->find()->where(['username' => $data['username']]);
        $this->assertEquals(1,$query->count());

        // $result = $query->toArray();
        // $poststags = TableRegistry::get('PostsTags');
        // $query = $poststags->find()->where(['post_id' => $result[0]->id]);
        // $result = $query->toArray();
        // $this->assertEquals(1, $result[0]->tag_id);
        // $this->assertEquals(2, $result[1]->tag_id);
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

        $this->post('/users/login', ['username' => 'rrd@hhh.com', 'password' => 'secret@123']);
        $expected = ['id' => 1, 'username' => 'rrd@hhh.com'];

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

        $this->post('/users/login', [
            'username' => 'wrong-username@hhh.com',
            'password' => 'wrong-password'
        ]);

        $this->assertNull($this->_requestSession->read('Auth.User'));

        $this->assertNoRedirect();

        $expected = __d('cockpit', 'Invalid username or password, try again');
        $this->assertResponseContains($expected);
    }
}
