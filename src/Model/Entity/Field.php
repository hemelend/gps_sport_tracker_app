<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Field Entity
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property int $altitude
 * @property string $photo_url
 * @property float $limit_1_lat
 * @property float $limit_1_lon
 * @property float $limit_2_lat
 * @property float $limit_2_lon
 * @property float $limit_3_lat
 * @property float $limit_3_lon
 * @property float $limit_4_lat
 * @property float $limit_4_lon
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Team[] $teams
 */
class Field extends Entity
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
