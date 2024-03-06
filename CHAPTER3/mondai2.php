
//withメソッドを使用する場合
<?php
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with('products', $products);
    }
}

        ?>
