<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fields Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $Teams
 *
 * @method \App\Model\Entity\Field get($primaryKey, $options = [])
 * @method \App\Model\Entity\Field newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Field[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Field|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Field patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Field[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Field findOrCreate($search, callable $callback = null, $options = [])
 */
class FieldsTable extends Table
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

        $this->setTable('fields');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'field_id'
        ]);
        $this->hasMany('Teams', [
            'foreignKey' => 'field_id'
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
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('altitude')
            ->requirePresence('altitude', 'create')
            ->notEmpty('altitude');

        $validator
            ->requirePresence('photo_url', 'create')
            ->notEmpty('photo_url');

        $validator
            ->decimal('limit_1_lat')
            ->requirePresence('limit_1_lat', 'create')
            ->notEmpty('limit_1_lat');

        $validator
            ->decimal('limit_1_lon')
            ->requirePresence('limit_1_lon', 'create')
            ->notEmpty('limit_1_lon');

        $validator
            ->decimal('limit_2_lat')
            ->requirePresence('limit_2_lat', 'create')
            ->notEmpty('limit_2_lat');

        $validator
            ->decimal('limit_2_lon')
            ->requirePresence('limit_2_lon', 'create')
            ->notEmpty('limit_2_lon');

        $validator
            ->decimal('limit_3_lat')
            ->requirePresence('limit_3_lat', 'create')
            ->notEmpty('limit_3_lat');

        $validator
            ->decimal('limit_3_lon')
            ->requirePresence('limit_3_lon', 'create')
            ->notEmpty('limit_3_lon');

        $validator
            ->decimal('limit_4_lat')
            ->requirePresence('limit_4_lat', 'create')
            ->notEmpty('limit_4_lat');

        $validator
            ->decimal('limit_4_lon')
            ->requirePresence('limit_4_lon', 'create')
            ->notEmpty('limit_4_lon');

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
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));

        return $rules;
    }
}
