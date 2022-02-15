<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        session_start();
        $products = Product::paginate();
        if (!isset($_SESSION['enCesta'])) {
            $_SESSION['enCesta'] = [];
            $_SESSION['total'] = 0;
            $_SESSION['cantidad'] = 0;
        }
        return view("index", compact("products"));
    }

    public function cesta()
    {
        $products = [];
        session_start();
        if (!isset($_SESSION['enCesta'])) {
            return redirect()->route("inicio");
        } else {
            foreach ($_SESSION['enCesta'] as $id => $cantidad) {
                $products[] = Product::find($id);
            }
            return view("cesta", compact("products"));
        }
    }

    public function detalle($productID)
    {
        $product = Product::find($productID);
        return view("detalle", compact("product"));
    }

    public function meteCarro($productID)
    {
        $product = Product::find($productID);

        session_start();
        if (array_key_exists($productID, $_SESSION['enCesta'])) {
            $_SESSION['enCesta'][$productID]++;
        } else {
            $_SESSION['enCesta'][$productID] = 1;
        }

        $_SESSION['cantidad']++;
        $_SESSION['total'] += $product->price;
        return redirect()->route("inicio");
    }

    public function quitaCarro($productID)
    {
        $product = Product::find($productID);

        session_start();

        $_SESSION['enCesta'][$productID]--;
        if ($_SESSION['enCesta'][$productID] == 0) {
            unset($_SESSION['enCesta'][$productID]);
        }
        $_SESSION['cantidad']--;
        $_SESSION['total'] -= $product->price;
        return redirect()->route("cesta");
    }
}
