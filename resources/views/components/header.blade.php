<input type="hidden" value="ko-KR" id="Culture">
<div class="my-menu">

    <a class="" href="index.html">
        <div class="logo">
            <img src="{{asset('upload/images/Logo/logo-poseidon.png')}}" class="img-responsive">
        </div>
    </a>
    <!--<a class="btn-booking">RESERVATIONS</a>-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="row">
                        <ul class="nav navbar-nav">
                            <li  class="active">
                                <a>{{ __('messages.EXPERIENCE') }}</a>
                                <ul class="nav-child">
                                            <li><a href="/poseidon-experience/about-us{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.EXPABOTUS') }}</a></li>
                                            <li><a href="/poseidon-experience/location{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.EXPLOCATION') }}</a></li>
                                </ul>
                            </li>
                            <li  class="">
                                <a>{{ __('messages.ACCOMMODATION') }}</a>

                                <ul class="nav-child">
                                            <li>
                                                <a href="/room/superior-room{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">
Superior room                                                </a>
                                        </li>
                                            <li>
                                                <a href="/room/premier-cityview{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">
PREMIER CITYVIEW                                                 </a>
                                        </li>
                                            <li>
                                                <a href="/room/deluxe-cityview-with-balcony{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">
DELUXE CITYVIEW WITH BALCONY                                                 </a>
                                        </li>
                                            <li>
                                                <a href="/room/luxury-Cityview{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">
Luxury Cityview                                                </a>
                                        </li>
                                            <li>
                                                <a href="/room/poseidon-suite{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">
Poseidon Suite                                                </a>
                                        </li>
                                            <li>
                                                <a href="/room/family-executive{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">
FAMILY EXECUTIVE                                                </a>
                                        </li>
                                </ul>

                            </li>
                            <li  class="">
                                <a>{{ __('messages.SERVICES AND FACILITIES') }}</a>
                                <ul class="nav-child">
                                            <li><a href="/poseidon-service/quay-dich-vu-van-phong{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.BUSINESS') }}</a></li>
                                            <li><a href="/poseidon-service/gym{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.GYM') }}</a></li>
                                            <li><a href="/poseidon-service/dich-vu-cho-thue-xe{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.TRANS') }}</a></li>
                                            <li><a href="/poseidon-service/ho-boi-ngoai-troi{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.SWIM') }}</a></li>
                                            <li><a href="/poseidon-service/hoi-nghi{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.ROOM') }}</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>{{ __('messages.DINING') }}</a>
                                <ul class="nav-child">
                                            <li><a href="/poseidon-dinning/poseidon-lobby-lounge-lobby{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.HADES') }}</a></li>
                                            <li><a href="/poseidon-dinning/Medusa-restaurant-03rd-floor{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.MEDUSA') }}</a></li>
                                            <li><a href="/poseidon-dinning/Hades-bar-18th-floor{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.LOBBY') }}</a></li>
                                </ul>
                            </li>
                            <li  class="">
                                <a>{{ __('messages.SPECIAL OFFERS') }}</a>
                                <ul class="nav-child">
                                            <li><a href="/poseidon-promotion/family{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">FAMILY FUN PACKAGE</a></li>
                                            <li><a href="/poseidon-promotion/longstay{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">WALK-IN GUEST LONG STAY PACKAGE</a></li>
                                            <li><a href="/poseidon-promotion/honeymoon{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">ROMANTIC HONEYMOON PACKAGE</a></li>
                                </ul>
                            </li>
                            <li  class="">
                                <a>{{ __('messages.EXPLORE NHA TRANG') }}</a>
                                <!-- <ul class="nav-child">
                                            <li><a href="/poseidon-explore/haiduonghoc{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">OCEANOGRAPHIC MUSEUM</a></li>
                                            <li><a href="/poseidon-explore/honchong{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">HON CHONG PROMONTORY</a></li>
                                            <li><a href="/poseidon-explore/thapba{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">PONAGAR CHAM TOWERS </a></li>
                                            <li><a href="/poseidon-explore/chualongson{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">LONG SON PAGODA</a></li>
                                            <li><a href="/poseidon-explore/khuphotay{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">CATHEDRAL OF NHA TRANG</a></li>
                                            <li><a href="/poseidon-explore/dammarket{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">DAM MARKET </a></li>
                                </ul> -->
                            </li>
                            <li  class=""><a class="" href="/gallery{{ session()->get('locale') == '' ? '' : '?lang='.session()->get('locale') }}">{{ __('messages.GALLERY') }}</a></li>
                            <li style="padding:10px"><a class="btn btn-reser" onclick="return booking('en-US')">{{ __('messages.RESERVATIONS') }}</a></li>

                        </ul>


                    </div>

                </div>
            </div>
        </div>
    </nav>

</div>
