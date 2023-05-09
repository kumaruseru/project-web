<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the provider's authentication page.
     *
     * @param  string  $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the provider.
     *
     * @param  string  $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        // Kiểm tra xem người dùng đã tồn tại chưa
        $user = User::where('email', $socialUser->getEmail())->first();

        if (!$user) {
            // Nếu chưa tồn tại, tạo người dùng mới
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'provider_id' => $socialUser->getId(),
                'provider' => $provider,
            ]);
        } else {
            // Cập nhật thông tin người dùng nếu đã tồn tại
            $user->update([
                'name' => $socialUser->getName(),
                'provider_id' => $socialUser->getId(),
                'provider' => $provider,
            ]);
        }

        // Đăng nhập người dùng
        Auth::login($user, true);

        // Chuyển hướng người dùng về trang chủ
        return redirect('/');
    }
}
