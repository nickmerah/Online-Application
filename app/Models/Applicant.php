<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Applicant
 *
 * @property int $std_id
 * @property int $std_logid
 * @property string $app_no
 * @property string $jambno
 * @property string $surname
 * @property string $firstname
 * @property string $othernames
 * @property string $gender
 * @property string $marital_status
 * @property string $birthdate
 * @property string $local_gov
 * @property string $state_of_origin
 * @property string $contact_address
 * @property string $student_email
 * @property string $student_homeaddress
 * @property string $student_mobiletel
 * @property string $next_of_kin
 * @property string $nok_address
 * @property string $nok_email
 * @property string $nok_tel
 * @property int $stdprogramme_id
 * @property string $stdcourse
 * @property int $std_programmetype
 * @property int $biodata biodata
 * @property string $std_photo
 * @property int $std_custome5 schoolattended
 * @property int $std_custome6 olevels
 * @property int $std_custome7 jamb_result
 * @property int $std_custome8 declaration
 * @property int $std_custome9 appsubmit
 * @property string $appsubmitdate
 * @property int $adm_status
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant applicants()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereAdmStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereAppNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereAppsubmitdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereBiodata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereContactAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereJambno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereLocalGov($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereNextOfKin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereNokAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereNokEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereNokTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereOthernames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStateOfOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdCustome5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdCustome6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdCustome7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdCustome8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdCustome9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdLogid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdProgrammetype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdcourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStdprogrammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStudentEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStudentHomeaddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereStudentMobiletel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereSurname($value)
 * @mixin \Eloquent
 */
class Applicant extends Model
{
    use HasFactory;
      protected $table = 'application_profile';
      protected $primaryKey = 'std_id';
      public $timestamps = false;
      protected $guarded = [];

  public function scopeApplicants($query){
    return $query->where('std_custome9',1);

  }
}
