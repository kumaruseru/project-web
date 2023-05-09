<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bag;

class BagController extends Controller
{
    public function addOrRemoveProduct(Request $request)
    {
        $productId = $request->input('product_id');
        $action = $request->input('action');

        // Lấy thông tin người dùng hiện tại (đảm bảo bạn đã đăng nhập)
        $user = auth()->user();

        // Tìm sản phẩm dựa trên ID sản phẩm
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }

        if ($action == 'add') {
            // Thêm sản phẩm vào túi (giỏ hàng) tại đây
            // ...

            return response()->json(['message' => 'Sản phẩm đã được thêm vào túi thành công'], 200);
        } elseif ($action == 'remove') {
            // Xóa sản phẩm khỏi túi của người dùng
            $bag = Bag::where('user_id', $user->id)->where('product_id', $productId)->first();

            if (!$bag) {
                return response()->json(['message' => 'Sản phẩm không có trong túi'], 404);
            }

            $bag->delete();

            return response()->json(['message' => 'Sản phẩm đã được xóa khỏi túi thành công'], 200);
        } else {
            return response()->json(['message' => 'Hành động không hợp lệ'], 400);
        }
    }
}
