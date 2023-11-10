<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RaihanPengeluaranpribadi Entity
 *
 * @property string $id_pengeluaran
 * @property \Cake\I18n\FrozenDate|null $tanggal
 * @property string|null $deskripsi
 * @property string $kategori
 * @property int|null $jumlah_pengeluaran
 * @property string|null $metode_pembayaran
 * @property \Cake\I18n\FrozenTime $tanggal_input
 */
class RaihanPengeluaranpribadi extends Entity
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
        'tanggal' => true,
        'deskripsi' => true,
        'kategori' => true,
        'jumlah_pengeluaran' => true,
        'metode_pembayaran' => true,
        'tanggal_input' => true,
    ];
}
