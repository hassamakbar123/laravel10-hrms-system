<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayRoll extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'payrolls'
    // ];
    protected $fillable = [
        'employee_id',
        'number_of_day_work',
        'bonus',
        'overtime',
        'gross_salary',
        'cash_advance',
        'late_hours',
        'abscent_days',
        'ss_contribution',
        'phill_health',
        'total_deduction',
        'net_pay',
        'payroll_monthly',
    ];


    // PayRoll.php

// PayRoll.php

public function employee()
{
    return $this->belongsTo(User::class, 'employee_id', 'id')->select('id', 'first_name', 'last_name');
}


}
