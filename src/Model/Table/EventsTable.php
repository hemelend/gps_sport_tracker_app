<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \Cake\ORM\Association\BelongsTo $EventTypes
 * @property \Cake\ORM\Association\BelongsTo $Weathers
 * @property \Cake\ORM\Association\BelongsTo $Fields
 * @property \Cake\ORM\Association\BelongsTo $Teams
 * @property \Cake\ORM\Association\HasMany $Tracks
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('EventTypes', [
            'foreignKey' => 'event_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Weathers', [
            'foreignKey' => 'weather_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fields', [
            'foreignKey' => 'field_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Teams', [
            'foreignKey' => 'rival_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Tracks', [
            'foreignKey' => 'event_id'
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->time('time')
            ->requirePresence('time', 'create')
            ->notEmpty('time');

        $validator
            ->integer('temperature')
            ->requirePresence('temperature', 'create')
            ->notEmpty('temperature');

        $validator
            ->time('start_fh')
            ->requirePresence('start_fh', 'create')
            ->notEmpty('start_fh');

        $validator
            ->time('end_fh')
            ->requirePresence('end_fh', 'create')
            ->notEmpty('end_fh');

        $validator
            ->time('start_sh')
            ->requirePresence('start_sh', 'create')
            ->notEmpty('start_sh');

        $validator
            ->time('end_sh')
            ->requirePresence('end_sh', 'create')
            ->notEmpty('end_sh');

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
        $rules->add($rules->existsIn(['event_type_id'], 'EventTypes'));
        $rules->add($rules->existsIn(['weather_id'], 'Weathers'));
        $rules->add($rules->existsIn(['field_id'], 'Fields'));
        $rules->add($rules->existsIn(['rival_id'], 'Teams'));

        return $rules;
    }
}
