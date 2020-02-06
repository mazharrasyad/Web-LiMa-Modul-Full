<?php

namespace Modules\Absen\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Lama
        // 'name', 'nim', 'password','semester','role','prodi_id','kelompok','pin'
        // Baru
        'name', 'nim', 'nidn', 'email', 'password', 'tlahir', 'tgllahir', 'role', 'gender', 'nohp', 'foto', 'prodi_id', 'finger_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function prodi()
    {
    return $this->hasOne('Modules\Absen\Entities\Prodi', 'id', 'prodi_id');
    }

    public function absenceLog()
    {
        return $this->hasMany('Modules\Absen\Entities\LogAbsence', 'id', 'user_id');
            
    }

    public function sprint()
    {
     return $this->belongsTo('Modules\Absen\Entities\Kelompok');
    }

    public function projects()
    {
        return $this->hasMany('Modules\Proyek\Entities\Project'::class, 'scrummaster_id', 'id');        
    }

    public function membertims()
    {
        return $this->hasMany('Modules\Proyek\Entities\Membertim'::class, 'mahasiswa_id', 'id');        
    }
}
