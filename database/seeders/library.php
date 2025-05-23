<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class library extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table first
        DB::table('library')->truncate();
        
        // Books data
        $books = [
            [
                'name' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'isbn' => '978-0061120084',
                'publisher' => 'HarperCollins',
                'year' => '1960',
                'pages' => '336',
                'language' => 'English',
                'genre' => 'Fiction',
                'cover' => 'Hardcover',
                'price' => '15.99',
                'stock' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '1984',
                'author' => 'George Orwell',
                'isbn' => '978-0451524935',
                'publisher' => 'Signet Classic',
                'year' => '1949',
                'pages' => '328',
                'language' => 'English',
                'genre' => 'Dystopian',
                'cover' => 'Paperback',
                'price' => '12.99',
                'stock' => '18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'isbn' => '978-0743273565',
                'publisher' => 'Scribner',
                'year' => '1925',
                'pages' => '180',
                'language' => 'English',
                'genre' => 'Classic',
                'cover' => 'Paperback',
                'price' => '14.50',
                'stock' => '22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'isbn' => '978-0547928227',
                'publisher' => 'Houghton Mifflin',
                'year' => '1937',
                'pages' => '300',
                'language' => 'English',
                'genre' => 'Fantasy',
                'cover' => 'Hardcover',
                'price' => '19.99',
                'stock' => '15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'isbn' => '978-0141439518',
                'publisher' => 'Penguin Classics',
                'year' => '1813',
                'pages' => '432',
                'language' => 'English',
                'genre' => 'Romance',
                'cover' => 'Paperback',
                'price' => '9.99',
                'stock' => '30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'isbn' => '978-0316769488',
                'publisher' => 'Little, Brown and Company',
                'year' => '1951',
                'pages' => '224',
                'language' => 'English',
                'genre' => 'Coming-of-age',
                'cover' => 'Paperback',
                'price' => '11.99',
                'stock' => '12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'One Hundred Years of Solitude',
                'author' => 'Gabriel García Márquez',
                'isbn' => '978-0060883287',
                'publisher' => 'Harper Perennial',
                'year' => '1967',
                'pages' => '417',
                'language' => 'English',
                'genre' => 'Magical Realism',
                'cover' => 'Paperback',
                'price' => '16.99',
                'stock' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'isbn' => '978-0618640157',
                'publisher' => 'Mariner Books',
                'year' => '1954',
                'pages' => '1178',
                'language' => 'English',
                'genre' => 'Fantasy',
                'cover' => 'Boxed Set',
                'price' => '35.99',
                'stock' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'isbn' => '978-0060850524',
                'publisher' => 'Harper Perennial',
                'year' => '1932',
                'pages' => '288',
                'language' => 'English',
                'genre' => 'Dystopian',
                'cover' => 'Paperback',
                'price' => '13.99',
                'stock' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'isbn' => '978-0062315007',
                'publisher' => 'HarperOne',
                'year' => '1988',
                'pages' => '208',
                'language' => 'English',
                'genre' => 'Fiction',
                'cover' => 'Paperback',
                'price' => '10.99',
                'stock' => '27',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        // Insert all books
        foreach ($books as $book) {
            DB::table('library')->insert($book);
        }
    }
}
