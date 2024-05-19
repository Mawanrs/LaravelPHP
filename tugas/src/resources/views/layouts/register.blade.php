@extends('partials.mainlogin')

@section('isi_login')
<div class="form-container">

    <div class="srouce"><a title="PASTALIA" href="https://www.w3jar.com/beautiful-html-css-login-page-template/">PASTALIA</a></div>
        </div>
        <form action="" class="the-form" method="post">

            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

            <input type="submit" value="Register">
           
        </form>
    </div><!-- FORM BODY-->

</div><!-- FORM CONTAINER -->
@endsection
