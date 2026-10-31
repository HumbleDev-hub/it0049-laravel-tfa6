<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        // Insert 5 sample customers
        Customer::insert([
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09123456789'],
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09187654321'],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09112233445'],
            ['full_name' => 'Ana Aquino', 'email' => 'ana@example.com', 'phone' => '09223344556'],
            ['full_name' => 'Jose Rizal', 'email' => 'jose@example.com', 'phone' => '09334455667'],
        ]);

        // Insert 5 sample users
        User::insert([
            ['username' => 'admin_user', 'full_name' => 'Administrator Account'],
            ['username' => 'cashier_one', 'full_name' => 'Cashier One'],
            ['username' => 'manager_test', 'full_name' => 'Manager Test'],
            ['username' => 'staff_member', 'full_name' => 'Staff Member'],
            ['username' => 'auditor_user', 'full_name' => 'Auditor User'],
        ]);
    }
}