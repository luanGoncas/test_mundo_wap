<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property string|null $foreign_table
 * @property int|null $foreign_id
 * @property string $postal_code
 * @property string|null $state
 * @property string|null $city
 * @property string|null $sublocality
 * @property string|null $street
 * @property string $street_number
 * @property string|null $complement
 */
class Address extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'foreign_table' => true,
        'foreign_id' => true,
        'postal_code' => true,
        'state' => true,
        'city' => true,
        'sublocality' => true,
        'street' => true,
        'street_number' => true,
        'complement' => true,
    ];
}
