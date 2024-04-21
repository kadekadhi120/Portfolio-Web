<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use DB;
class PortfolioController extends Controller
{


/*    
    public function edit($id)
    {
        // Fetch the portfolio data from the database
        $portfolio = Portfolio::findOrFail($id);

        // Pass the portfolio data to the view
        return view('portfolioform1', compact('portfolio'));

    }
  */
  public function edit($id, $formNumber)
{
    // Fetch the portfolio data from the database
    $portfolio = Portfolio::findOrFail($id);

    // Determine the view based on the formNumber parameter
    $viewName = 'portfolioform1'; // Default view name

    // Set the view name based on the formNumber parameter
    switch ($formNumber) {
        case 1:
            $viewName = 'portfolioform1';
            break;
        case 2:
            $viewName = 'portfolioform2';
            break;
        case 3:
            $viewName = 'portfolioform3';
            break;
        case 4:
            $viewName = 'portfolioform4';
            break;
        default:
            // If an invalid formNumber is provided, return an error or fallback view
            return response()->view('error', [], 404); // Example: return a 404 error view
    }

    // Pass the portfolio data to the determined view
    return view($viewName, compact('portfolio'));
}
  




    
   public function index()
{
    // Ambil semua data portofolio
    $portfolios = Portfolio::all();
    
    // Kemudian kembalikan data portofolio untuk ditampilkan di halaman yang sesuai
    return view('portfolio', compact('portfolios'));
}

    
    public function update(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'tanggal' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi untuk gambar
        ]);
    
        // Ambil data portofolio berdasarkan ID
        $portfolio = Portfolio::findOrFail($id);
    
        // Simpan data yang diperbarui dari request
        $portfolio->title = $request->input('title');
        $portfolio->detail = $request->input('detail');
        $portfolio->tanggal = $request->input('tanggal');
    
        if ($request->hasFile('image')) {
            // Proses upload gambar jika ada
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $portfolio->image = 'images/'.$imageName;
        }
    
        // Simpan perubahan
        $portfolio->save();
    
        // Redirect ke halaman portfolio atau halaman lain jika perlu
        return redirect('/portfolio')->with('success', 'Portfolio updated successfully');
    }
}    