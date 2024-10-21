<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        $contacts = Contact::all(); // Mengambil semua data kontak
        return view('contacts.index', compact('contacts')); // Mengembalikan tampilan
    }

    // Menampilkan form untuk menambah kontak
    public function create()
    {
        return view('contacts.create'); // Mengembalikan tampilan form
    }

    // Menyimpan kontak baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Contact::create($request->all()); // Menyimpan data kontak baru
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.'); // Mengarahkan kembali ke daftar
    }

    // Menampilkan form untuk mengedit kontak
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact')); // Mengembalikan tampilan form edit
    }

    // Memperbarui kontak
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact->update($request->all()); // Memperbarui data kontak
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.'); // Mengarahkan kembali ke daftar
    }

    // Menghapus kontak
    public function destroy(Contact $contact)
    {
        $contact->delete(); // Menghapus data kontak
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.'); // Mengarahkan kembali ke daftar
    }
}
