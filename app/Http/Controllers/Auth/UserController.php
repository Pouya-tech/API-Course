<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAction;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UserUpdate;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect()->route('user.login');
        }
        $user = Auth::user(); // کاربر لاگین شده
        return view('user.index' , compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(StoreUserRequest $request)
    {
        $ValidatedData = $request->validated();

        User::create([
            'name' => $ValidatedData['name'],
            'email' => $ValidatedData['email'],
            'password' => Hash::make($ValidatedData['password'])
        ]);

        return redirect()->route('user.login')->with('success', 'ثبت‌نام با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     */
    public function login()
    {
        return view('user.login');
    }

    /**
     *  اعتبار سنجی و فرستادن کاربر لاگین شده به صفحه ایندگس
     */
    public function loginaction(LoginAction $request)
    {
        $credentials = $request->only('login' , 'password');

        // پیدا کردن کاربر بر اساس ایمیل یا نام
        $fieldType = filter_var($credentials['login'] , FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        if (Auth::attempt([$fieldType=> $credentials['login'] ,
            'password' => $credentials['password']]))
                {
            $request->session()->regenerate();

            return redirect()->route('user.index');

        }

        return back()->withErrors([
           'login' => 'نام کاربری/ایمیل یا پسورد اشتباه است',
        ])->withInput();

        // Auth::login($user);

        // return redirect()->route('user.index');
    }
            // نمایش پست مربوط به یوزر
        public function userPosts(User $user)
    {

        $posts = $user->posts;

        return view('posts.index' , compact('posts' , 'user'));
    }
    //  عملیات خروج کاربر و منتقل کردنش به صفحه لاگین
   public function logout(Request $request, User $user)
    {
       Auth::logout();
       return redirect()->route('user.login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, User $user)
    {
        return view('user.edit', compact('user'));
    }


    public function update(UserUpdate $request, User $user)
    {
        $ValidatedData = $request->validated();
        //  چک کردن پسورد فعلی
        if (!Hash::check($ValidatedData['current_password'], $user->password) && !empty($ValidatedData['current_password'])) {
            return back()->withErrors([
                'current_password' => '⛔پسورد فعلی اشتباه است'
            ]);
        }
        // حذف فیلد های غیرضروری و اضافه کردن پسورد جدید
        if (!empty($ValidatedData['new_password'])) {
            $ValidatedData['password'] = Hash::make($ValidatedData['new_password']);
        }
        unset($ValidatedData['current_password']);
        unset($ValidatedData['new_password']);

        //    پاک کردن فیلد های خالی
        $ValidatedData = array_filter($ValidatedData, fn($value) => $value !== null && $value !== '');

        // اضافه کردن پسورد جدید


        $user->update($ValidatedData);

        return redirect()->route('user.index')->with('success', 'عملیات ویرایش اطلاعات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }


}
