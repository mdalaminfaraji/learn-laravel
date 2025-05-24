<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class libraryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|string',
            'isbn' => 'required|string|max:13',
            'publisher' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'pages' => 'required|string',
            'language' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'cover' => 'required|string',
            'stock' => 'nullable|numeric',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Name is required',
    //         'author.required' => 'Author is required',
    //         'price.required' => 'Price is required',
    //         'isbn.required' => 'ISBN is required',
    //         'publisher.required' => 'Publisher is required',
    //         'year.required' => 'Year is required',
    //         'pages.required' => 'Pages is required',
    //         'language.required' => 'Language is required',
    //         'genre.required' => 'Genre is required',
    //         'cover.required' => 'Cover is required',
    //         'stock.numeric' => 'Stock must be a number',
    //     ];
    // }
    public function attributes()
    {
        return [
            'name' => 'Book Name',
            'author' => 'Author Name',
            'price' => 'Book Price',
            'isbn' => 'Book ISBN',
            'publisher' => 'Book Publisher',
            'year' => 'Book Year',
            'pages' => 'Book Pages',
            'language' => 'Book Language',
            'genre' => 'Book Genre',
            'cover' => 'Book Cover',
            'stock' => 'Book Stock',
        ];
    }
    
    // protected $stopOnFirstFailure = true;
}
