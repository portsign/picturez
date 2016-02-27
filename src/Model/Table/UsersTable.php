<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\Marshaller;
use Cake\Validation\Validator;
use Cake\ORM\Entity;
use Cake\Mailer\Email;
use Cake\Datasource\EntityInterface;
/**
 * Users Model
 *
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

	    $this->addBehavior('Josegonzalez/Upload.Upload', [
		   'picture' => []
	    ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        // $validator
        //     ->integer('id')
        //     ->allowEmpty('id', 'create');
		//
        // $validator
        //     ->email('email')
        //     ->allowEmpty('email');
		//
        // $validator
        //     ->allowEmpty('password');
		//
        // $validator
        //     ->allowEmpty('status');
		//
        // $validator
        //     ->allowEmpty('role');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
	public function beforeFind() {
	}
	public function afterSave() {
	}
	public function beforeSave(Event $event, EntityInterface $entity)
    {

		if ($entity->id==null) {
			$token = base64_encode($entity->email.$entity->username.$entity->password);
			if ($entity->facebook_id==null) {

				$entity->status = 'not_verified';
				$entity->picture = '/files/Users/picture/default_avatar.jpg';
				$entity->token = $token;
				$mail_link = $_SERVER['SERVER_NAME'].'/users?tk='.$token;

				$msg = '<a href="'.$mail_link.'">'.$mail_link.'</a>';

				$email = new Email('default');
				$email->emailFormat('html');
				$email->from(['nafiansyah.aqi@gmail.com' => 'Picturez'])
					->to($entity->email)
					->subject('Contact Message')
					->send($msg);

			} else {
				$entity->status = 'verified';
				$entity->picture = 'https://graph.facebook.com/'.$entity->facebook_id.'/picture?redirect=true&type=large';
			}
		} else {
			// debug($entity);exit;
			$entpic = str_replace('/files/Users/picture/', '', $entity->picture);
			$entity->picture = '/files/Users/picture/'.$entpic;
		}
    }
}
