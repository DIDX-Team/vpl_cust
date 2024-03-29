<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserCreditCard;
use App\Models\UserPreference;
use App\Models\UserDocument;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'Erdum',
            'last_name' => 'Adnan',
            'email' => 'erdumadnan@gmail.com',
            'password' => Hash::make('erdum123'),
            'balance' => 500,
        ]);

        $address = new UserAddress([
            'address' => 'Plot #L-2716 ground floor, metrovile third block II, gulzar-e-hijri',
            'country' => 'Pakistan',
            'city' => 'Karachi',
            'state' => 'Sindh',
            'postal_code' => '75850'
        ]);
        $user->address()->save($address);

        $preference = new UserPreference([
            'low_talktime_alert' => false,
            'low_talktime_threshold' => 10,
            'monthly_invoices_email' => true,
            'record_calls' => true,
            'monthly_call_records_email' => false,
            'missed_calls_alert_email' => false,
            'missed_calls_alert_sms' => false,
            'prorated_billing' => false,
            'newsletter_email' => false
        ]);
        $user->preference()->save($preference);



        $document = new UserDocument([
            'url' => '/asdfasdfasd.pdf',
        ]);
        $user->documents()->save($document);

        $numbers = \App\Models\Number::all();

        foreach ($numbers as $number) {
            $purchase_history = new \App\Models\NumberHistory([
                'number_id' => $number->id,
                'user_id' => $user->id,
                'is_purchased' => true,
                'is_released' => false,
                'is_reserved' => false,
                'setup_charges' => $number->setup_charges,
                'monthly_charges' => $number->monthly_charges,
                'per_mintue_charges' => $number->per_mintue_charges,
                'per_sms_charges' => $number->per_sms_charges,
                'prorated_billing' => true
            ]);
            $user->numbers_history()->save($purchase_history);
            $number->user_id = $user->id;
            $number->save();
        }
    }
}
