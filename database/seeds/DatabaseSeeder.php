<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(\App\User::class, 50)->create();


         $this->call(ClinicSeeder::class);
         $this->call(SectionSeeder::class);

         $this->call(DoctorSeeder::class);
         $this->call(PatientSeeder::class);
         $this->call(EmployeeSeeder::class);
         $this->call(VisitSeeder::class);
         $this->call(MedicineSeeder::class);
         $this->call(SalarySeeder::class);

         // section and doctors
        for ($i = 0 ; $i < 20; $i++) {
            \Illuminate\Support\Facades\DB::table('doctor_section')->insert(
                [
                    'doctor_id'=>rand(1, 20),
                    'section_id'=>rand(1, 20)
                ]
            );
        }
    }
}
