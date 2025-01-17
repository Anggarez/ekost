<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            outline: none;
        }

        body {
            width: 100vw;
            height: 100vh;
            background: linear-gradient(to right, #DD58D6, #9336B4);
        }

        .login {
            min-height: 500px;
            width: 60%;
            height: 70vh;
            position: absolute;
            left: 50%;
            top: 50%;
            display: flex;
            border-radius: 5px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            ;
            background-color: #55be9b;
        }

        .main-login {
            width: 60%;
            height: 100%;
            text-align: center;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            background-color: aliceblue;
        }

        @media only screen and (max-width: 1000px) {
            .main-login {
                width: 100%;
                border-radius: 5px;
            }

            .banner {
                display: none;
            }

            .main-login h1 {
                font-size: 25px;
            }

            .facebook {
                font-size: 13px;
            }
        }

        @media only screen and (max-width: 600px) {
            .login {
                width: 100%;
                height: 100%;
                margin-top: 25px;
            }

            .main-login {
                width: 100%;
                border-radius: 5px;
            }

            .banner {
                display: none;
            }

            .main-login h1 {
                font-size: 25px;
            }

            .facebook {
                font-size: 13px;
            }
        }

        .main-login h1 {
            color: #55be9b;
        }

        .put {
            max-width: 300px;
            width: 60%;
            height: 40px;
            color: #c0c0c0;
            background-color: rgb(234, 234, 234);
            outline: none;
            border-radius: 3px;
            margin: 0 auto;
            margin: 10px;
            padding-left: 10px;
            border: 2px solid transparent;
            transition: .4s;
        }

        .put:not(:placeholder-shown)>.sub {
            background-color: #55be9b;
            color: rgb(234, 234, 234);
        }

        .sub:hover {
            background-color: #55be9b;
            color: rgb(234, 234, 234);
        }

        .main-login .put:not(:placeholder-shown) {
            border-bottom: 2px solid #9336B4;
        }

        .sub {
            max-width: 310px;
            width: 62%;
            height: 40px;
            color: #c0c0c0;
            background-color: rgb(234, 234, 234);
            outline: none;
            border-radius: 3px;
            margin: 0 auto;
            margin: 10px;
            border: 2px solid transparent;
            transition: .4s;
            cursor: pointer;
        }

        .main-login input::placeholder {
            color: #55be9b8f;
        }

        .pass {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
            font-size: 15px;
            color: #9336B4;
            text-decoration: none;
            display: flex;
            width: fit-content;
            margin-left: 20%;
        }

        .shw {
            position: absolute;
            border-radius: 5px;
            z-index: 2;
            border: none;
            cursor: pointer;
            color: #c0c0c0;
            background-color: transparent;
            transform: translateX(-55px) translateY(22px);
        }

        .banner {
            width: 40%;
            height: 100%;
            text-align: center;
            color: aliceblue;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px;
            background-color: #DD58D6;
            /* background-color: rgb(255, 189, 127); */
        }

        .banner h4 {
            width: 80%;
            z-index: 100 !important;
            margin: 0 auto;
            font-family: 'Roboto', sans-serif;
        }

        .p-b {
            color: #e5e5e5;
            margin-bottom: 3px;
            font-family: 'Roboto', sans-serif;
        }

        .lines {
            margin-top: 20px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
        }

        .line {
            width: 50px;
            height: 1px;
            margin: 5px;
            background-color: #e5e5e5;
        }

        .pp {
            margin-top: 10px;
        }

        .contain {
            z-index: 100 !important;
            position: absolute;
        }

        .google {
            display: flex;
            margin: 0 auto;
            margin-top: 20px;
            justify-content: center;
            align-items: center;
        }

        .facebook {
            display: flex;
            margin: 0 auto;
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: #1778F2;
        }

        .logo2 {
            width: 40px;
            height: 100%;
            background-image: url("https://github.com/ixl-math/imgs/blob/main/facebook-7-512%20(2).png?raw=true");
            background-size: 18px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .logo {
            width: 40px;
            height: 100%;
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png");
            background-size: 18px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .main-btn {
            width: 130px;
            padding: 10px;
            margin-top: 15px;
            color: aliceblue;
            cursor: pointer;
            border-radius: 50px;
            border: 2px solid aliceblue;
            background-color: transparent;
            transition: .4s;
        }

        .main-btn:hover {
            background-color: #9336B4;
        }

        .top {
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
        }

        .top button {
            margin: 5px;
            padding: 5px;
            cursor: pointer;
            transition: .6s;
            color: #55be9b;
            background-color: transparent;
            border: 3px solid transparent;
            outline: none;
        }

        .top button:hover {
            border-bottom: 3px solid #9336B4;
        }

        .blob:nth-child(1) {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 200px;
            height: 200px;
            z-index: 1;
            border-top-left-radius: 100%;
            background-color: #9336B4;
        }

        .blob:nth-child(2) {
            top: 0;
            left: 0;
            width: 100px;
            height: 100px;
            z-index: 1;
            border-bottom-right-radius: 100%;
            background-color: #9336B4;
        }
    </style>
</head>

<body>
    <main class="login">
        <div class="main-login">

            <form>
                <h1>Login Page</h1>
                <input class="usr put" placeholder="Username" type="text">
                <br>
                <input id="pass" class="pss put" placeholder="Password" type="password"><button id="bhde" onclick="show()" class="shw" type="button">show</button>
                <a class="pass" href="">Forgot Password</a>
                <input value="Sign In" id="btn" class="sub" type="submit">
                <div class="lines">
                    <div style="background-color: #a5a5a5;" class="line"></div>
                    <p style="color: #a5a5a5;" class="p-b">or</p>
                    <div style="background-color: #a5a5a5;" class="line"></div>
                </div>
                <button style="border: 2px solid;" id="btn" class="sub pic facebook" type="submit">
                    <div class="logo2"></div>Sign in with Facebook
                </button>
                <button style="border: 2px solid;" id="btn" class="sub pic google" type="submit">
                    <div class="logo"></div>Sign in with Google
                </button>
        </div>
        </form>
        <div class="banner">
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="contain">
                <h1>Selamat Datang Sobat Euphoria!</h1>
                <h4>We are happy to have you back, please sign back in to continue</h4>
                <div class="lines">
                    <div class="line"></div>
                    <p class="p-b">or</p>
                    <div class="line"></div>
                </div>
                <p class="pp">Dont have an account don't worry</p>
                <button class="main-btn">Sign Up today</button>
            </div>
        </div>
    </main>

    <script>
        function show() {
            var x = document.getElementById("pass");
            var y = document.getElementById("bhde");
            if (x.type === "password") {
                x.type = "text";
                y.innerText = "Hide";
            } else {
                x.type = "password";
                y.innerText = "Show";
            }
        }
    </script>
</body>

</html>