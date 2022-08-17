<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Xác Nhận Đăng Ký')
                ->line('Ấn vào nút bên dưới để xác nhận đăng ký !')
                ->action('Xác Nhận Đăng Ký', $url)
                ->line('Nếu bạn chưa tạo tài khoản, bạn có thể bỏ qua Email này .');
        });

        // ResetPassword::createUrlUsing(function ($user, string $token) {
        //     return 'https://example.com/reset-password?token='.$token;
        // });
        // ResetPassword::createUrlUsing(function ($user, string $token) {
        //     return (new MailMessage)
        //         ->subject('Tạo lại mật khẩu')
        //         ->line('Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.')
        //         ->action('Tạo lại mật khẩu', route('password.reset',$this->token))
        //         ->line('Nếu bạn không yêu cầu đặt lại mật khẩu, bạn có thể bỏ qua email này');
        // });

       
    }
}
