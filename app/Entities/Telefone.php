<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 02/12/2015
 * Time: 12:16
 */

namespace LumenAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descrição',
        'codpaís',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}