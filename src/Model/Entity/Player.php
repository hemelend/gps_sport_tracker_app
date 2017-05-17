<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\Time $birth_date
 * @property float $height
 * @property int $strong_leg_id
 * @property int $position_id
 * @property string $photo_url
 *
 * @property \App\Model\Entity\Leg $leg
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Track[] $tracks
 */
class Player extends Entity
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
