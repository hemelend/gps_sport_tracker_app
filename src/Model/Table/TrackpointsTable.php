<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trackpoints Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Fixes
 * @property \Cake\ORM\Association\BelongsTo $Tracks
 *
 * @method \App\Model\Entity\Trackpoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trackpoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trackpoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trackpoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trackpoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trackpoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trackpoint findOrCreate($search, callable $callback = null, $options = [])
 */
class TrackpointsTable extends Table
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

        $this->setTable('trackpoints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Fixes', [
            'foreignKey' => 'fix_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tracks', [
            'foreignKey' => 'track_id',
            'joinType' => 'INNER'
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
            ->decimal('latitude')
            ->requirePresence('latitude', 'create')
            ->notEmpty('latitude');

        $validator
            ->decimal('longitude')
            ->requirePresence('longitude', 'create')
            ->notEmpty('longitude');

        $validator
            ->time('timestamp')
            ->requirePresence('timestamp', 'create')
            ->notEmpty('timestamp');

        $validator
            ->decimal('miliseconds')
            ->requirePresence('miliseconds', 'create')
            ->notEmpty('miliseconds');

        $validator
            ->integer('satellites')
            ->requirePresence('satellites', 'create')
            ->notEmpty('satellites');

        $validator
            ->decimal('hdop')
            ->requirePresence('hdop', 'create')
            ->notEmpty('hdop');

        $validator
            ->decimal('vdop')
            ->requirePresence('vdop', 'create')
            ->notEmpty('vdop');

        $validator
            ->decimal('pdop')
            ->requirePresence('pdop', 'create')
            ->notEmpty('pdop');

        $validator
            ->integer('ageofgpsdata')
            ->requirePresence('ageofgpsdata', 'create')
            ->notEmpty('ageofgpsdata');

        $validator
            ->numeric('speed')
            ->requirePresence('speed', 'create')
            ->notEmpty('speed');

        $validator
            ->numeric('heading')
            ->requirePresence('heading', 'create')
            ->notEmpty('heading');

        $validator
            ->integer('satellites_in_view')
            ->requirePresence('satellites_in_view', 'create')
            ->notEmpty('satellites_in_view');

        $validator
            ->numeric('distance')
            ->requirePresence('distance', 'create')
            ->notEmpty('distance');

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
        $rules->add($rules->existsIn(['fix_id'], 'Fixes'));
        $rules->add($rules->existsIn(['track_id'], 'Tracks'));

        return $rules;
    }
}
