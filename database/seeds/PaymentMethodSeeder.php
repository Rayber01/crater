<?php

use Illuminate\Database\Seeder;
use Crater\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create(['name' => 'Efectivo', 'company_id' => 1]);
        PaymentMethod::create(['name' => 'Pago movil', 'company_id' => 1]);
        PaymentMethod::create(['name' => 'Tarjeta de debito/credito', 'company_id' => 1]);
        PaymentMethod::create(['name' => 'Transferencia bancaria', 'company_id' => 1]);
    }
}
