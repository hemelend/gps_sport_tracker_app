<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trackpoint Entity
 *
 * @property int $id
 * @property float $latitude
 * @property float $longitude
 * @property \Cake\I18n\Time $timestamp
 * @property float $miliseconds
 * @property int $fix_id
 * @property int $satellites
 * @property float $hdop
 * @property float $vdop
 * @property float $pdop
 * @property int $ageofgpsdata
 * @property float $speed
 * @property float $heading
 * @property int $satellites_in_view
 * @property float $distance
 * @property int $track_id
 *
 * @property \App\Model\Entity\Fix $fix
 * @property \App\Model\Entity\Track $track
 */
class Trackpoint extends Entity
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
