<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $date
 * @property \Cake\I18n\Time $time
 * @property int $event_type_id
 * @property int $weather_id
 * @property int $temperature
 * @property int $field_id
 * @property int $rival_id
 * @property \Cake\I18n\Time $start_fh
 * @property \Cake\I18n\Time $end_fh
 * @property \Cake\I18n\Time $start_sh
 * @property \Cake\I18n\Time $end_sh
 *
 * @property \App\Model\Entity\EventType $event_type
 * @property \App\Model\Entity\Weather $weather
 * @property \App\Model\Entity\Field $field
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Track[] $tracks
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
