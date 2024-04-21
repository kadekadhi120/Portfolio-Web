<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;
use DB;
class ProfileController extends Controller
{
    
    public function update(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'full_name' => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'github' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'facebook' => 'nullable|string|max:255',
        'deskripsi' => 'nullable|string|max:255',
        'birthday' => 'nullable|string|max:255',
        'age' => 'nullable|string|max:255',
        'gender' => 'nullable|string|max:255',
        'degree' => 'nullable|string|max:255',
        'religion' => 'nullable|string|max:255',

       
    ]);

    // Create a new Profile instance
    $profile = new Profile;
    $profile->full_name = $validatedData['full_name'];
    $profile->email = $validatedData['email'];
    $profile->phone = $validatedData['phone'];
    $profile->address = $validatedData['address'];
    $profile->github = $validatedData['github'];
    $profile->instagram = $validatedData['github'];
    $profile->facebook = $validatedData['facebook'];
    $profile->deskripsi = $validatedData['deskripsi'];
    $profile->birthday = $validatedData['birthday'];
    $profile->age = $validatedData['age'];
    $profile->gender = $validatedData['gender'];
    $profile->degree = $validatedData['degree'];
    $profile->religion = $validatedData['religion'];

    // Check if an image is uploaded
    if ($request->hasFile('image')) {
        // Get the uploaded image file
        $image = $request->file('image');

        // Generate a unique file name
        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Store the image in the public directory
        $image->move(public_path('images'), $imageName);

        // Set the image path in the profile
        $profile->image = 'images/'.$imageName;
    } else {
        // Set a default image path if no image is uploaded
        $profile->image = 'images/default.jpg';
    }

    // Save the profile to the database
    $profile->save();

    // Redirect back to the page with a success message
    return redirect('/home');
}
    public function showProfile()
    {
        // Assuming you have a Profile model
       $data = Profile::latest()->first(); // Fetch the profile data from the database
       //$data = Profile::first();
        // Pass the data to the view
        return view('about', ['data' => $data]);
        
    }

    public function showDeleteForm()
    {
        // Fetch all profiles from the database
        $profiles = Profile::all();

        // Pass the profiles data to the view
        return view('delete', compact('profiles'));
    }


    public function deleteProfile(Request $request)
    {
        // Validasi data form
        $request->validate([
            'full_name' => 'required|string|max:255',
        ]);

        // Cari profil berdasarkan full name
        $profile = Profile::where('full_name', $request->input('full_name'))->first();

        // Periksa apakah profil ditemukan
        if ($profile) {
            // Hapus profil
            $profile->delete();

            // Redirect dengan pesan sukses
            return redirect('/home')->with('success', 'Profile successfully deleted.');
        } else {
            // Redirect dengan pesan error jika profil tidak ditemukan
            return redirect('/home')->with('error', 'Profile not found.');
        }
    }



    public function showhome()
    {
        // Assuming you have a Profile model
       $data = Profile::latest()->first(); // Fetch the profile data from the database
       //$data = Profile::first();
        // Pass the data to the view
        return view('home', ['data' => $data]);
        
    }
}
