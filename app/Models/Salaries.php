<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'salaries';
    protected $primaryKey = 'emp_no';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['from_date', 'to_date', 'salary'];

    protected $dates = ['from_date', 'to_date'];

    public function departments()
    {
        return $this->belongsToMany(Departments::class, 'dept_emps', 'emp_no', 'dept_no')->withPivot('from_date', 'to_date');
    }
}
