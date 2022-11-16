<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

/**
 * CountryModel
 *
 * @mixin Eloquent
 * @mixin Builder
 * @property int $id
 * @property string $iso
 * @property string $name
 * @property string $dname
 * @property string $iso3
 * @property int $position
 * @property int $numcode
 * @property int $phonecode
 * @property int $created
 * @property int $register_by
 * @property int $modified
 * @property int $modified_by
 * @property int $record_deleted
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereDname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereIso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereIso3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereModifiedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereNumcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel wherePhonecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereRecordDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryModel whereRegisterBy($value)
 */

class CountryModel extends Model
{
    protected $table = "_z_country";
    public $timestamps = false;

    protected $fillable = [
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
    ];
}
