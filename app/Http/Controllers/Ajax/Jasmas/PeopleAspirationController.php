<?php

namespace App\Http\Controllers\Ajax\Jasmas;

use App\Foundation\Http\Controller;
use App\Http\Requests\Ajax\Jasmas\PeopleAspiration\StoreRequest;
use App\Models\Jasmas\{
    PeopleAspiration,
    ApplicationLetter,
    ApplicationLetterFile,
    ProposalLetter,
    ProposalLetterFile,
    Endorsement,
    EndorsementFile,
    Domicile,
    DomicileFile,
    Organization,
    OrganizationFile,
    Residence,
    ResidenceFile,
    Aid,
    AidFile,
    Grant,
    GrantFile,
    Chairman,
    Secretary,
    Treasurer,
    Member,
    Location,
    LocationFile,
    Activity,
    ActivityFile,
    BudgetPlan,
    BudgetPlanFile,
    BankAccount,
};

class PeopleAspirationController extends Controller
{
    public function store(StoreRequest $request)
    {
        \DB::transaction(function () use ($request) {
            $peopleAspiration = new PeopleAspiration;
            $peopleAspiration->activity_type = $request->input('activity_type', '');
            $peopleAspiration->note = $request->input('note', '');
            $peopleAspiration->disposition = $request->input('disposition', '');
            $peopleAspiration->description = $request->input('description', '');
            $peopleAspiration->save();

            $applicationLetter = new ApplicationLetter;
            $applicationLetter->people_aspiration_id = $peopleAspiration->id;
            $applicationLetter->number = $request->input('application_letter.number', '');
            $applicationLetter->date = date('Y-m-d', strtotime($request->input('application_letter.date')));
            $applicationLetter->description = '';
            $applicationLetter->save();

            $applicationLetterFile = new ApplicationLetterFile;
            $applicationLetterFile->application_letter_id = $applicationLetter->id;
            $applicationLetterFile->file_id = $request->input('application_letter.file_id', null);
            $applicationLetterFile->description = '';
            $applicationLetterFile->save();

            $proposalLetter = new ProposalLetter;
            $proposalLetter->people_aspiration_id = $peopleAspiration->id;
            $proposalLetter->affiliation = $request->input('proposal_letter.affiliation', '');
            $proposalLetter->description = '';
            $proposalLetter->save();

            $proposalLetterFile = new ProposalLetterFile;
            $proposalLetterFile->proposal_letter_id = $proposalLetter->id;
            $proposalLetterFile->file_id = $request->input('proposal_letter.file_id', null);
            $proposalLetterFile->description = '';
            $proposalLetterFile->save();

            $endorsement = new Endorsement;
            $endorsement->people_aspiration_id = $peopleAspiration->id;
            $endorsement->description = '';
            $endorsement->save();

            $endorsementFile = new EndorsementFile;
            $endorsementFile->endorsement_id = $endorsement->id;
            $endorsementFile->file_id = $request->input('endorsement.file_id', null);
            $endorsementFile->description = '';
            $endorsementFile->save();

            $domicile = new Domicile;
            $domicile->people_aspiration_id = $peopleAspiration->id;
            $domicile->address = $request->input('domicile.address', '');
            $domicile->subdistrict_id = $request->input('domicile.subdistrict_id', null);
            $domicile->description = '';
            $domicile->save();

            $domicileFile = new DomicileFile;
            $domicileFile->domicile_id = $domicile->id;
            $domicileFile->file_id = $request->input('domicile.file_id', null);
            $domicileFile->description = '';
            $domicileFile->save();

            $organization = new Organization;
            $organization->people_aspiration_id = $peopleAspiration->id;
            $organization->name = $request->input('organization.name', '');
            $organization->description = '';
            $organization->save();

            $organizationFile = new OrganizationFile;
            $organizationFile->organization_id = $organization->id;
            $organizationFile->file_id = $request->input('organization.file_id', null);
            $organizationFile->description = '';
            $organizationFile->save();

            $residence = new Residence;
            $residence->people_aspiration_id = $peopleAspiration->id;
            $residence->description = '';
            $residence->save();

            $residenceFile = new ResidenceFile;
            $residenceFile->residence_id = $residence->id;
            $residenceFile->file_id = $request->input('residence.file_id', null);
            $residenceFile->description = '';
            $residenceFile->save();

            $aid = new Aid;
            $aid->people_aspiration_id = $peopleAspiration->id;
            $aid->description = '';
            $aid->save();

            $aidFile = new AidFile;
            $aidFile->aid_id = $aid->id;
            $aidFile->file_id = $request->input('aid.file_id', null);
            $aidFile->description = '';
            $aidFile->save();

            $grant = new Grant;
            $grant->people_aspiration_id = $peopleAspiration->id;
            $grant->description = '';
            $grant->save();

            $grantFile = new GrantFile;
            $grantFile->grant_id = $grant->id;
            $grantFile->file_id = $request->input('grant.file_id', null);
            $grantFile->description = '';
            $grantFile->save();

            $chairman = new Chairman;
            $chairman->nik = '';
            $chairman->name = $request->input('chairman.name', '');
            $chairman->phone = $request->input('chairman.phone', '');
            $chairman->file_id = $request->input('chairman.file_id', null);
            $chairman->description = '';
            $chairman->save();

            $secretary = new Secretary;
            $secretary->nik = '';
            $secretary->name = $request->input('secretary.name', '');
            $secretary->phone = $request->input('secretary.phone', '');
            $secretary->file_id = $request->input('secretary.file_id', null);
            $secretary->description = '';
            $secretary->save();

            $treasurer = new Treasurer;
            $treasurer->nik = '';
            $treasurer->name = $request->input('treasurer.name', '');
            $treasurer->phone = $request->input('treasurer.phone', '');
            $treasurer->file_id = $request->input('treasurer.file_id', null);
            $treasurer->description = '';
            $treasurer->save();

            $member = new Member;
            $member->nik = '';
            $member->name = '';
            $member->phone = '';
            $member->file_id = $request->input('member.file_id', null);
            $member->description = '';
            $member->save();

            $location = new Location;
            $location->people_aspiration_id = $peopleAspiration->id;
            $location->description = '';
            $location->save();

            $locationFile = new LocationFile;
            $locationFile->location_id = $location->id;
            $locationFile->file_id = $request->input('location.file_id', null);
            $locationFile->description = '';
            $locationFile->save();

            $activity = new Activity;
            $activity->people_aspiration_id = $peopleAspiration->id;
            $activity->description = '';
            $activity->save();

            $activityFile = new ActivityFile;
            $activityFile->activity_id = $activity->id;
            $activityFile->file_id = $request->input('activity.file_id', null);
            $activityFile->description = '';
            $activityFile->save();

            $budgetPlan = new BudgetPlan;
            $budgetPlan->people_aspiration_id = $peopleAspiration->id;
            $budgetPlan->value = $request->input('budget_plan.value', 0);
            $budgetPlan->description = '';
            $budgetPlan->save();

            $budgetPlanFile = new BudgetPlanFile;
            $budgetPlanFile->budget_plan_id = $budgetPlan->id;
            $budgetPlanFile->file_id = $request->input('budget_plan.file_id', null);
            $budgetPlanFile->description = '';
            $budgetPlanFile->save();

            $bankAccount = new BankAccount;
            $bankAccount->bank_id = $request->input('bank_account.bank_id', null);
            $bankAccount->number = $request->input('bank_account.number', '');
            $bankAccount->name = $request->input('bank_account.name', '');
            $bankAccount->description = '';
            $bankAccount->save();
        });
    }
}
