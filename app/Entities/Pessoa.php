<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 02/12/2015
 * Time: 12:13
 */

namespace LumenAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {

    }
}