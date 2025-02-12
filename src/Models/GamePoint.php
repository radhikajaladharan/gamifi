<?php

namespace Gamifi\Gamifi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as EloquentMongoDB; // For MongoDB support

class GamePoint extends Model
{
    use HasFactory;

    protected $table = 'game_point'; 
    protected $primaryKey = 'id'; // Default for SQL, ignored for MongoDB

    protected $fillable = [
        'user_id', 'start_date', 'end_date', 'remark', 'points', 'last_point', 'status'
    ];

    public function __construct(array $attributes = [])
    {
        // Change model type based on database connection
        if (config('database.default') === 'mongodb') {
            $this->connection = 'mongodb';
            $this->primaryKey = '_id';
            $this->incrementing = false;
        }

        parent::__construct($attributes);
    }
}