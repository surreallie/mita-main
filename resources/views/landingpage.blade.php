<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/LoveLobbyy.png" type="image/x-icon">
        <title>LoveLobby</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css" />


        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>

        <!-- Bootstrap JavaScript and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Add an event listener for tab change
            const tab1 = document.getElementById('tab1');
            const tab2 = document.getElementById('tab2');

            document.getElementById('tab1-tab').addEventListener('click', function () {
                tab1.style.display = 'block';
                tab2.style.display = 'none';
            });

            document.getElementById('tab2-tab').addEventListener('click', function () {
                tab1.style.display = 'none';
                tab2.style.display = 'block';
            });
        });
    </script>


    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom-2">
    <div class="container-fluid">
        <img src="/img/Lovelobbyy.png" alt="img" class="lovelobby-img mx-3">
        <h2 class="lovelobby-text mt-2">Love<span class="lobby">Lobby</span></h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
            <div class="nav-item">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4 mt-2">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homepage">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="aboutus">About Us</a>
                </li>
                </ul>
            </div>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile-pic">
                    <img src="/img/notnot.jpg" alt="Profile Picture">
                </div>
            <!-- You can also use icon as follows: -->
            <!--  <i class="fas fa-user"></i> -->
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="userprofile"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                <li><a class="dropdown-item" href="account"><i class="fa fa-cog fa-fw"></i> Account</a></li>
                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-bell fa-fw"></i> Notification</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="LoveLobby"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- <div class="screen-overlay" id="credentialsContainer">
            <div class="login-credentials-container">
                <span id="close">X</span>
                <h2>Login Credentials</h2>
                <label>Copy credentials</label>
                <p><b>Username: </b>admin</p>
                <p><b>Password: </b>password</p>
            </div>
    </div> -->


    <div class="container-fluid p-0">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card m-0">

                    <!-- Row start -->
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="users-container">

                                
                                
                                <div class="container">
                                    
                                <div class="best-match input-group-btn pb-3">
                                    <a href="#">
                                        <button type="button" class="button-best-match gradient-custom-2 w-100" data-toggle="modal" data-target="#matchingModal">
                                            <h2 class="start-button-matching">Start matching</h2>
                                        </button>
                                    </a>
                                </div>

                                    
                                    <ul class="nav nav-tabs" id="myTabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1">Lobby</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2">Messages</a>
                                        </li>
                                    </ul>

                                <div class="tab-content mt-2">
                                    <div class="tab-pane fade show active" id="tab1">
                                    <ul class="users">
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time" style="color: green;">Active Now </span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person active-user" data-chat="person2">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Emily Russell</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person3">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Jessica Larson</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person4">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Lisa Guerrero</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        
                                        <ul class="users">
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time" style="color: green;">Active Now </span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person active-user" data-chat="person2">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Emily Russell</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person3">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Jessica Larson</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person4">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Lisa Guerrero</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status online"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time" style="color: green;">Active Now</span>
                                        </p>
                                    </li>
                                    
                                </ul>
                                    </div>
                                </div>
                            </div>
                                
                                
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                            <div class="selected-user">
                                <span>To: <span class="name"><a href="others" style="text-decoration: none;">Emily Russell</a></span></span>
                            </div>
                            <div class="chat-container">
                                <ul class="chat-box chatContainerScroll">
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <a href="others"><img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin"></a>
                                            <div class="chat-name">Russell</div>
                                        </div>
                                        <div class="chat-text">Hello, I'm Russell.
                                            <br>How can I help you today?</div>
                                        <div class="chat-hour">08:55 <span class="fa fa-check-circle mx-2"></span></div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour"><span class="fa fa-check-circle mx-2"></span>08:56 </div>
                                        <div class="chat-text">Hi, Russell
                                            <br> I need more information about Developer Plan.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name">Sam</div>
                                        </div>
                                    </li>
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name">Russell</div>
                                        </div>
                                        <div class="chat-text">Are we meeting today?
                                            <br>Project has been already finished and I have results to show you.</div>
                                        <div class="chat-hour">08:57 <span class="fa fa-check-circle mx-2"></span></div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour"><span class="fa fa-check-circle mx-2"></span>08:59 </div>
                                        <div class="chat-text">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <div class="chat-name">Joyse</div>
                                        </div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour"><span class="fa fa-check-circle mx-2"></span>08:59 </div>
                                        <div class="chat-text">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <div class="chat-name">Joyse</div>
                                        </div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour"><span class="fa fa-check-circle mx-2"></span>08:59 </div>
                                        <div class="chat-text">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <div class="chat-name">Joyse</div>
                                        </div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour"><span class="fa fa-check-circle mx-2"></span>08:59</div>
                                        <div class="chat-text">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <div class="chat-name">Joyse</div>
                                        </div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour"><span class="fa fa-check-circle mx-2"></span>08:59 </div>
                                        <div class="chat-text">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <div class="chat-name">Joyse</div>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="form-group mt-2 mb-2">
                                    <textarea class="typingBox form-control" rows="3" placeholder="Type your message here..."></textarea>
                                </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

        <!-- Modal Notification -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class= "startmatching-gradient">
                <h5 class="modal-title" id="exampleModalLabel" >Notifications</h5>
            </div>
            <div class="col-lg-1 g-0">
                <div class="modal-body">
                    Notif1
                </div>
                <div class="modal-body">
                    Notif2
                </div>
                <div class="modal-body">
                    Notif3
                </div>
                <div class="modal-body">
                    Notif4
                </div>
            </div>
            
            
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Mark as Read</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Matching -->

        <div class="modal fade" id="matchingModal" tabindex="-1" role="dialog" aria-labelledby="matchingodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class= "startmatching-gradient">
                    <h5 class="modal-title" id="matchingModalLabel">Matching Interests</h5>
                </div>
                <div class="col-lg-7 col-md-2 col-sm-3 col-6 g-0">
                    <div class="modal-body d-flex align-items-center">
                        <input type="checkbox" class="notif-checkbox" id="checkboxMobileLegends">
                        <label for="checkboxMobileLegends" class="ms-2">Mobile Legends</label>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <input type="checkbox" class="notif-checkbox" id="checkboxCallOfDuty">
                        <label for="checkboxCallOfDuty" class="ms-2">Call of Duty</label>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <input type="checkbox" class="notif-checkbox" id="checkboxValorant">
                        <label for="checkboxValorant" class="ms-2">Valorant</label>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <input type="checkbox" class="notif-checkbox" id="checkboxLeagueOfLegends">
                        <label for="checkboxLeagueOfLegends" class="ms-2">League Of Legends</label>
                    </div>
                </div>
                
                
            
                <div class="modal-footer">
                    <button type="button" class="matching-btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#ageModal">Next</button>
                </div>
                </div>
            </div>
        </div>


        <!-- Modal Notification -->

        <div class="modal fade" id="ageModal" tabindex="-1" role="dialog" aria-labelledby="ageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class= "startmatching-gradient">
                <h5 class="modal-title" id="ageModalLabel" >Age</h5>
            </div>
            <div class="col-lg-1 g-0">
                <div class="modal-body">
                    <label for="age">Min:</label>
                    <input type="number" id="age" name="age" min="18" max="80">
                </div>
                <div class="modal-body">
                    <label for="age">Max:</label>
                    <input type="number" id="age" name="age" min="18" max="80">
                </div>
            </div>
            
            
        
            <div class="modal-footer">
                <button type="button" class="matching-btn-danger" data-dismiss="modal">Start Matching!</button>
            </div>
            </div>
        </div>
        </div>
        



        

    
        

    

    <footer class="gradient-custom-2 text-light text-center py-2 ">
        <p style>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    
        

    
    
        


        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

        
    </body>
</html>
