<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'dept_no';
    public $incrementing = false;
    public $timestamps = false;
    public $keyType = 'string';

    protected $fillable = ['dept_no', 'dept_name'];

    protected $guarded = ['created_at', 'updated_at'];

    public function employees()
    {
        return $this->belongsToMany(Employees::class, 'dept_emps', 'dept_no', 'emp_no')->withPivot('from_date', 'to_date');
    }

    public function salaries()
    {
        return $this->hasMany(Salaries::class, 'dept_no', 'dept_no');
    }

    public function dept_emp()
    {
        return $this->hasMany(Dept_emp::class, 'dept_no', 'dept_no');
    }

    public function dept_manager()
    {
        return $this->hasMany(Dept_manager::class, 'dept_no', 'dept_no');
    }

    
}
    
