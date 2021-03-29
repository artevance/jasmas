<?php

namespace App\Macro;

class Kernel
{
    /**
     * @var array
     */
    public static array $schema = [
        'blueprints' => [
            // Booleans
            'active' => Schema\Blueprint\Booleans\ActiveBlueprint::class,
            'hidden' => Schema\Blueprint\Booleans\HiddenBlueprint::class,
            'locked' => Schema\Blueprint\Booleans\LockedBlueprint::class,
            // Date
            'standardDate' => Schema\Blueprint\Date\StandardDateBlueprint::class,
            // Decimal
            'value' => Schema\Blueprint\Decimal\ValueBlueprint::class,
            // Foreigns
            'action' => Schema\Blueprint\Foreigns\ActionBlueprint::class,
            'activity' => Schema\Blueprint\Foreigns\ActivityBlueprint::class,
            'aid' => Schema\Blueprint\Foreigns\AidBlueprint::class,
            'applicationLetter' => Schema\Blueprint\Foreigns\ApplicationLetterBlueprint::class,
            'bank' => Schema\Blueprint\Foreigns\BankBlueprint::class,
            'budgetPlan' => Schema\Blueprint\Foreigns\BudgetPlanBlueprint::class,
            'city' => Schema\Blueprint\Foreigns\CityBlueprint::class,
            'district' => Schema\Blueprint\Foreigns\DistrictBlueprint::class,
            'domicile' => Schema\Blueprint\Foreigns\DomicileBlueprint::class,
            'endorsement' => Schema\Blueprint\Foreigns\EndorsementBlueprint::class,
            'feature' => Schema\Blueprint\Foreigns\FeatureBlueprint::class,
            'file' => Schema\Blueprint\Foreigns\FileBlueprint::class,
            'grant' => Schema\Blueprint\Foreigns\GrantBlueprint::class,
            'location' => Schema\Blueprint\Foreigns\LocationBlueprint::class,
            'module' => Schema\Blueprint\Foreigns\ModuleBlueprint::class,
            'organization' => Schema\Blueprint\Foreigns\OrganizationBlueprint::class,
            'package' => Schema\Blueprint\Foreigns\PackageBlueprint::class,
            'peopleAspiration' => Schema\Blueprint\Foreigns\PeopleAspirationBlueprint::class,
            'peopleAspirationDisbursement' => Schema\Blueprint\Foreigns\PeopleAspirationDisbursementBlueprint::class,
            'proposalLetter' => Schema\Blueprint\Foreigns\ProposalLetterBlueprint::class,
            'province' => Schema\Blueprint\Foreigns\ProvinceBlueprint::class,
            'report' => Schema\Blueprint\Foreigns\ReportBlueprint::class,
            'reportType' => Schema\Blueprint\Foreigns\ReportTypeBlueprint::class,
            'residence' => Schema\Blueprint\Foreigns\ResidenceBlueprint::class,
            'role' => Schema\Blueprint\Foreigns\RoleBlueprint::class,
            'subdistrict' => Schema\Blueprint\Foreigns\SubdistrictBlueprint::class,
            'user' => Schema\Blueprint\Foreigns\UserBlueprint::class,
            'userAccept' => Schema\Blueprint\Foreigns\UserAcceptBlueprint::class,
            'userCreate' => Schema\Blueprint\Foreigns\UserCreateBlueprint::class,
            'userCancel' => Schema\Blueprint\Foreigns\UserCancelBlueprint::class,
            'userDelete' => Schema\Blueprint\Foreigns\UserDeleteBlueprint::class,
            'userDisburse' => Schema\Blueprint\Foreigns\UserDisburseBlueprint::class,
            'userFifthReview' => Schema\Blueprint\Foreigns\UserFifthReviewBlueprint::class,
            'userFirstReview' => Schema\Blueprint\Foreigns\UserFirstReviewBlueprint::class,
            'userFourthReview' => Schema\Blueprint\Foreigns\UserFourthReviewBlueprint::class,
            'userSecondReview' => Schema\Blueprint\Foreigns\UserSecondReviewBlueprint::class,
            'userThirdReview' => Schema\Blueprint\Foreigns\UserThirdReviewBlueprint::class,
            'userTimestamps' => Schema\Blueprint\Foreigns\UserTimestampsBlueprint::class,
            'userUpdate' => Schema\Blueprint\Foreigns\UserUpdateBlueprint::class,
            'widget' => Schema\Blueprint\Foreigns\WidgetBlueprint::class,
            'widgetType' => Schema\Blueprint\Foreigns\WidgetTypeBlueprint::class,
            // Strings
            'address' => Schema\Blueprint\Strings\AddressBlueprint::class,
            'code' => Schema\Blueprint\Strings\CodeBlueprint::class,
            'description' => Schema\Blueprint\Strings\DescriptionBlueprint::class,
            'fullName' => Schema\Blueprint\Strings\FullNameBlueprint::class,
            'name' => Schema\Blueprint\Strings\NameBlueprint::class,
            'nik' => Schema\Blueprint\Strings\NikBlueprint::class,
            'note' => Schema\Blueprint\Strings\NoteBlueprint::class,
            'number' => Schema\Blueprint\Strings\NumberBlueprint::class,
            'password' => Schema\Blueprint\Strings\PasswordBlueprint::class,
            'phone' => Schema\Blueprint\Strings\PhoneBlueprint::class,
            'ref' => Schema\Blueprint\Strings\RefBlueprint::class,
            'username' => Schema\Blueprint\Strings\UsernameBlueprint::class,
            // Text
            'fileName' => Schema\Blueprint\Text\FileNameBlueprint::class,
            'storageDir' => Schema\Blueprint\Text\StorageDirBlueprint::class,
            // Timestamps
            'acceptedAt' => Schema\Blueprint\Timestamps\AcceptedAtBlueprint::class,
            'cancelledAt' => Schema\Blueprint\Timestamps\CancelledAtBlueprint::class,
            'disbursedAt' => Schema\Blueprint\Timestamps\DisbursedAtBlueprint::class,
            'fifthReviewedAt' => Schema\Blueprint\Timestamps\FifthReviewedAtBlueprint::class,
            'firstReviewedAt' => Schema\Blueprint\Timestamps\FirstReviewedAtBlueprint::class,
            'fourthReviewedAt' => Schema\Blueprint\Timestamps\FourthReviewedAtBlueprint::class,
            'secondReviewedAt' => Schema\Blueprint\Timestamps\SecondReviewedAtBlueprint::class,
            'thirdReviewedAt' => Schema\Blueprint\Timestamps\ThirdReviewedAtBlueprint::class,
        ],
    ];
}
