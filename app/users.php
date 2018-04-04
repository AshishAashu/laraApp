<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use Notifiable;
    //
    protected $fillable = ['firstname'];
}
