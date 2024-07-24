<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $data_requirement = Requirement::where('name', 'like', '%' . $query . '%')
                ->orWhere('email', 'like', '%' . $query . '%')
                ->orWhere('phone_number', 'like', '%' . $query . '%')
                ->orWhere('message', 'like', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->paginate(5);
        } else {
            $data_requirement = Requirement::orderBy('id', 'desc')->paginate(5);
        }

        $no = ($data_requirement->currentPage() - 1) * $data_requirement->perPage();

        return view('dashboard.requirement.index', compact('data_requirement', 'no', 'query'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:requirements',
            'phone_number' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'phone_number.required' => 'Nomor telepon harus diisi',
            'message.required' => 'Pesan harus diisi',
        ]);

        Requirement::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);

        return redirect()->route('requirement.index')->with('success', 'Data requirement berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $requirement = Requirement::find($id);
        $requirement->delete();
        return redirect()->route('requirement.index')->with('success', 'Data requirement berhasil dihapus');
    }

    public function edit($id)
    {
        $requirement = Requirement::find($id);
        if (!$requirement) {
            return redirect()->route('requirement.index')->with('error', 'Requirement tidak ditemukan');
        }
        return view('dashboard.requirement.edit', compact('requirement'));
    }

    public function update(Request $request, $id)
    {
        $requirement = Requirement::find($id);
        if ($requirement) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:requirements,email,' . $requirement->id,
                'phone_number' => 'required',
                'message' => 'required',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah digunakan',
                'phone_number.required' => 'Nomor telepon harus diisi',
                'message.required' => 'Pesan harus diisi',
            ]);

            $requirement->name = $request->name;
            $requirement->email = $request->email;
            $requirement->phone_number = $request->phone_number;
            $requirement->message = $request->message;
            $requirement->save();

            return redirect()->route('requirement.index')->with('success', 'Requirement berhasil diperbarui');
        } else {
            return redirect()->route('requirement.index')->with('error', 'Requirement tidak ditemukan');
        }
    }
}
