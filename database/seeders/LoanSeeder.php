<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = Book::first();
        if ($book != null  && $book->available_copies > 0) {
            Loan::create([
                'book_id' => $book->id,
                'borrower_name' => 'Hűvösvölgyi Ronáldó Attila',
            ]);
            $book->decrement('available_copies');
        }
        Loan::factory()->count(5)->create();
    }
}
