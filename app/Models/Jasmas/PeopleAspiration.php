<?php

namespace App\Models\Jasmas;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes,
};
use App\Models\Concerns\{
    HasUserTimestamps,
    HasUserDelete,
};

class PeopleAspiration extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function applicationLetter()
    {
        return $this->hasOne(ApplicationLetter::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proposalLetter()
    {
        return $this->hasOne(ProposalLetter::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function endorsement()
    {
        return $this->hasOne(Endorsement::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function domicile()
    {
        return $this->hasOne(Domicile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function residence()
    {
        return $this->hasOne(Residence::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aid()
    {
        return $this->hasOne(Aid::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grant()
    {
        return $this->hasOne(Grant::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function chairman()
    {
        return $this->hasOne(Chairman::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function secretary()
    {
        return $this->hasOne(Secretary::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function treasurer()
    {
        return $this->hasOne(Treasurer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->hasOne(Location::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function activity()
    {
        return $this->hasOne(Activity::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function budgetPlan()
    {
        return $this->hasOne(BudgetPlan::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bankAccount()
    {
        return $this->hasOne(BankAccount::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationAcceptedFiles()
    {
        return $this->hasMany(PeopleAspirationAcceptedFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationFirstReviewFiles()
    {
        return $this->hasMany(PeopleAspirationFirstReviewFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationSecondReviewFiles()
    {
        return $this->hasMany(PeopleAspirationSecondReviewFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationThirdReviewFiles()
    {
        return $this->hasMany(PeopleAspirationThirdReviewFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationFourthReviewFiles()
    {
        return $this->hasMany(PeopleAspirationFourthReviewFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationFifthReviewFiles()
    {
        return $this->hasMany(PeopleAspirationFifthReviewFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peopleAspirationDisbursement()
    {
        return $this->hasOne(PeopleAspirationDisbursement::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleAspirationCancellationFiles()
    {
        return $this->hasMany(PeopleAspirationCancellationFile::class);
    }
}
