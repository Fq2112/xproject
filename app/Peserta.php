<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Peserta extends Authenticatable
{
    use Notifiable;

    protected $table = 'peserta';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tempat_lahir',
        'perempuan',
        'instansi',
        'asal',
        'alamat_tinggal',
        'no_telp',
        'nama',
        'tgl_lahir'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function lomba()
    {
        return $this->belongsToMany(
            'App\\Lomba',
            'lomba_peserta',
            'id_peserta',
            'jenis_lomba'
        )->withPivot(
            'url_youtube',
            'url_project',
            'url_proposal',
            'terkonfirmasi',
            'username',
            'token'
        );
    }

}
