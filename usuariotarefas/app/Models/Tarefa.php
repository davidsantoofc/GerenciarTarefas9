<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'prazo', 'prioridade', 'concluida'];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
