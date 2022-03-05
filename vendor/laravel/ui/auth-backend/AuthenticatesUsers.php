<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;

trait AuthenticatesUsers
{
    use RedirectsUsers, ThrottlesLogins;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        SEOMeta::setTitle('OguSes IT Solutions | College School Management System Login');
        SEOMeta::setDescription('Ogua College CRM is one of the leading ERP solutions for educational institutions across the world. It is a fully customizable solution with major features such as SMS, Admissions Management, Results Management, Online Exam, Course Registration and Management, etc. This application can also be integrated with various extensions including Students Management System, Finance and Accounting Package, Human Resources module, and other Utilities. Ogua College CRM has adopted and customized by over 1,300 schools scattered all over the world.');
        SEOMeta::setCanonical(route('login'));
        SEOMeta::setKeywords('Oguses IT Solutions, OguSesITSolutions, Ogua, oguses, sesali kaisu, ogua ahmed, ogua, ogua lamere, ogua lamar, ogua software, ogua crm, School management System, Website Design, Mobile phone, web development, software, contactus, Ogua crm, ogua, basic school management system, college school management system, all school management system, IT solutions, Oguses, ogusesitsolutions, ogusesit, oguses solutions, website, records management system, records system, sms alert, sms schedule, sms messages, registry system, registry, mobile applications, SEO, Auditing, stock management system, stock systems, church, church website, church systems, church management system, School system in Ghana, Ghana latest software, Ghana software companies, college management system in Ghana, Ghana software companies, Ghana school software company');

        OpenGraph::setDescription('Ogua College CRM is one of the leading ERP solutions for educational institutions across the world. It is a fully customizable solution with major features such as SMS, Admissions Management, Results Management, Online Exam, Course Registration and Management, etc. This application can also be integrated with various extensions including Students Management System, Finance and Accounting Package, Human Resources module, and other Utilities. Ogua College CRM has adopted and customized by over 1,300 schools scattered all over the world.');
        OpenGraph::setTitle('OguSes IT Solutions | College School Management System Login');
        OpenGraph::setUrl(route('login'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(URL::to('images/bg2.jpg'));

        TwitterCard::setTitle('OguSes IT Solutions | College School Management System Login');
        TwitterCard::setSite('@ogua.ahmed18');
        TwitterCard::setImage(URL::to('images/bg2.jpg'));
        TwitterCard::setDescription('Ogua College CRM is one of the leading ERP solutions for educational institutions across the world. It is a fully customizable solution with major features such as SMS, Admissions Management, Results Management, Online Exam, Course Registration and Management, etc. This application can also be integrated with various extensions including Students Management System, Finance and Accounting Package, Human Resources module, and other Utilities. Ogua College CRM has adopted and customized by over 1,300 schools scattered all over the world.');

        JsonLd::setTitle('OguSes IT Solutions | College School Management System Login');
        JsonLd::setDescription('Ogua College CRM is one of the leading ERP solutions for educational institutions across the world. It is a fully customizable solution with major features such as SMS, Admissions Management, Results Management, Online Exam, Course Registration and Management, etc. This application can also be integrated with various extensions including Students Management System, Finance and Accounting Package, Human Resources module, and other Utilities. Ogua College CRM has adopted and customized by over 1,300 schools scattered all over the world.');
        JsonLd::addImage(URL::to('images/bg2.jpg'));
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
