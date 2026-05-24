@extends('inc.frontend_layout')
@section('content')


<!-- Banners Start -->
<div class="banner pricing" id="home" style="background-image: url('/assets/img/bg-2.jpg')">
    <!-- hero-area Start -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="banner-content">
                        <h2 class="title">Pricing Plan</h2>
                        <ul class="breadcrumb">
                            <li>
                                <a href=/>Home</a> <i class="flaticon-airplane49"></i>
                            </li>
                            <li>
                                <a href="#">Pages</a> <i class="flaticon-airplane49"></i>
                            </li>
                            <li>
                                Pricing Plan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deposit Start -->
<div class="deposit" id="deposit" style="background-image: url('/assets/img/deposit-bg.png')">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 m-auto wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content text-center">
                    <h4 class="lasthead">Our investment offer</h4>
                    <h2 class="title">Deposit Portfolio</h2>
                    <p class="text">
                        Your total income directly depends on the amount you invest,
                        so the more you contribute, the more you can earn.
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="offer">
                    <h3 class="subtitle wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">We are Offering
                    </h3>
                    <div class="offer-box" style="background-image: url('/assets/img/offer-box-bg.png')">
                        <div class="offer-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="icon">
                                <img src="/assets/img/offer-icon-1.png" alt="" class="offer-icon">
                            </div>
                            <div class="content">
                                <h2 class="pursent">3.00%</h2>
                                <p class="text">Daily Profit</p>
                            </div>
                        </div>
                        <div class="arrow wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <img src="/assets/img/arrow-right.png" alt="" class="arrow-pic">
                        </div>
                        <div class="offer-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="icon">
                                <img src="/assets/img/offer-icon-2.png" alt="" class="offer-icon">
                            </div>
                            <div class="content">
                                <h2 class="pursent">30.00%</h2>
                                <p class="text">Daily Profit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earningpartners Start -->
<div class="earningpartners">
    <div class="bg">
        <img src="/assets/img/profit-bg.png" alt="" class="dp-bg">
    </div>
    <!-- Deposit Amount Start -->
    {{-- <div class="deposit-amounts">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h3 class="subtitle">Minimum Deposit Amounts</h3>
                    <div class="coin-box wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-1.png" alt="">
                            </div>
                            <p class="text">0.00100036 BTC</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-2.png" alt="">
                            </div>
                            <p class="text">0.21220267 LTC</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-3.png" alt="">
                            </div>
                            <p class="text">0.02980346 ETH</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-4.png" alt="">
                            </div>
                            <p class="text">0.02980346 DASH</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-5.png" alt="">
                            </div>
                            <p class="text">0.00100036 ETC</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-6.png" alt="">
                            </div>
                            <p class="text">0.21220267 TRX</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-7.png" alt="">
                            </div>
                            <p class="text">0.02980346 BCH</p>
                        </div>
                        <div class="item">
                            <div class="tumb">
                                <img src="/assets/img/coin-icon-8.png" alt="">
                            </div>
                            <p class="text">1.21220267 USD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Earning Start -->
    {{-- <div class="earning">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center">
                        <div class="content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <h2 class="title">How much you will earn?</h2>
                            <div class="compare-box">
                                <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                    <div class="country">
                                        <img src="/assets/img/coin-icon-1.png" alt="">
                                        <div class="language-select">
                                            <select class="select-bar">
                                                <option value="">BTC</option>
                                                <option value="">LTC)</option>
                                                <option value="">ETH</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                    <form class="account-form">
                                        <div class="form-group">
                                            <input class="lasthead" type="text" placeholder="02 BTC" id="#"
                                                name="#">
                                        </div>
                                    </form>
                                </div>
                                <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                    <a href="#" class="button button-1">Deposit now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Hourly Profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Daily Profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Weekly Profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Monthly Profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>


<!-- Transaction Start -->
{{-- <div class="transaction" id="transaction">
    <div class="bg">
        <img src="/assets/img/table-bg.png" alt="" class="secton-bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content text-center">
                    <h4 class="lasthead">User Statistics</h4>
                    <h2 class="title">Latest Transaction</h2>
                    <p class="text">
                        Our goal is to simplify investing so that anyone can be an investor.Withthis in mind,
                        we hand-pick the investments we offer on our platform.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="transaction-box">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                <img src="/assets/img/icon-1.png" alt=""> Last <br> Deposits
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">
                                <img src="/assets/img/icon-2.png" alt=""> Last <br> withdrawals
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">
                                <img src="/assets/img/icon-3.png" alt=""> Top <br> investors
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">Daily Dividend</th>
                                            <th scope="col">AMOUNTS</th>
                                            <th scope="col">Deposit by</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-1.png" alt="">
                                                <span> Jim Adams</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-1.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-2.png" alt="">
                                                <span> Willie Barton </span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-2.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-3.png" alt="">
                                                <span>Kim Mccoy </span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-3.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-4.png" alt="">
                                                <span>Sheryl Tran</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-4.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-5.png" alt="">
                                                <span>Toby Davis</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-5.png" alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">Daily Dividend</th>
                                            <th scope="col">AMOUNTS</th>
                                            <th scope="col">Deposit by</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-1.png" alt="">
                                                <span> Jim Adams</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-1.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-2.png" alt="">
                                                <span> Willie Barton </span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-2.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-3.png" alt="">
                                                <span>Kim Mccoy </span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-3.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-4.png" alt="">
                                                <span>Sheryl Tran</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-4.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-5.png" alt="">
                                                <span>Toby Davis</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-5.png" alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">Daily Dividend</th>
                                            <th scope="col">AMOUNTS</th>
                                            <th scope="col">Deposit by</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-1.png" alt="">
                                                <span> Jim Adams</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-1.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-2.png" alt="">
                                                <span> Willie Barton </span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-2.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-3.png" alt="">
                                                <span>Kim Mccoy </span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-3.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-4.png" alt="">
                                                <span>Sheryl Tran</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-4.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/assets/img/man-5.png" alt="">
                                                <span>Toby Davis</span>
                                            </td>
                                            <td>
                                                $10.50
                                            </td>
                                            <td>
                                                $0.09
                                            </td>
                                            <td>
                                                $718
                                            </td>
                                            <td>21 DAYS</td>
                                            <td>
                                                <img src="/assets/img/coin-icon-5.png" alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <a href="#" class="button button-1">browse more</a>
            </div>
        </div>
    </div>
</div> --}}

<!-- Process Start -->
{{-- <div class="process pricing">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 m-auto wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content text-center">
                    <h4 class="lasthead">Watch this video presentation to know more</h4>
                    <h2 class="title">Simple Process to Start</h2>
                    <p class="text">Let's See how it work </p>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="videoo">
                    <img src="/assets/img/video-bg.png" alt="" class="video-bg">
                    <div class="video-box">
                        <div class="video-img">
                            <a class="youtube-video mfp-iframe video-play-btn video-icon"
                                href="https://www.youtube.com/watch?v=4DCTTrGjGU4">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-text">
                            <p class="text">Watch Video Now</p>
                            <span><i class="far fa-clock"></i> 2:32 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="invest-area bg-color-2 area-padding-2" style="padding: 110px 0px 80px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 m-auto wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="upper-content text-center">
                    <h4 class="lasthead" style="color:#160d45;">Invest Now</h4>
                    <h2 class="title" style="color:#eee;">Investment plan</h2>
                    <p class="text" style="color:#eee;">
                        Our Investment plans are flexibly crafted to accomodate you, Join now and start earning
                    </p>
                </div>
            </div>
       </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pri_table_list text-center">
                    <div class="top-price-inner">
                        <h3>Bronze Package</h3>
                        <div class="rates">
                            <span class="prices">3%</span><span class="users">daily</span>
                        </div>
                    </div>
                    <ol class="pricing-text">
                        <li class="check">Minimum Invest : $100</li>
                        <li class="check">Maximum Invest : $9,999.9</li>
                        <li class="check">Average Weekly : 15% </li>
                    </ol>
                    <div class="price-btn">
                        <a class="blue" href="/login">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pri_table_list text-center">
                    <div class="top-price-inner">
                        <h3>Silver Package</h3>
                        <div class="rates">
                            <span class="prices">5%</span><span class="users">Daily</span>
                        </div>
                    </div>
                    <ol class="pricing-text">
                        <li class="check">Minimum Invest : $10,000</li>
                        <li class="check">Maximam Invest : $99,999.9</li>
                        <li class="check">Average Bi-weekly :75% </li>
                    </ol>
                    <div class="price-btn">
                        <a class="blue" href="/login">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pri_table_list text-center">
                    <div class="top-price-inner">
                        <h3>Gold Package</h3>
                        <div class="rates">
                            <span class="prices">10%</span><span class="users">Daily</span>
                        </div>
                    </div>
                    <ol class="pricing-text">
                        <li class="check">Minimum Invest : $100,000</li>
                        <li class="check">Maximam Invest : $1,000,000</li>
                        <li class="check">Average Monthly : 300% </li>
                    </ol>
                    <div class="price-btn">
                        <a class="blue" href="/login">Invest Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Faq Start -->
<div class="faq">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">You Have Questions</h4>
                    <h2 class="title">We Have Answers.</h2>
                    <p class="text">
                        Do not hesitate to send us an email if you can't find what you're looking for.
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion">
                    <div class="accordion-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <img src="/assets/img/faq-icon.png" alt="" class="icon">
                                What is the minimum percentage that an investor can earn on Hyipland?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam
                                temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus
                                doloribus? Ratione, molestiae magnam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingSaven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSaven" aria-expanded="false" aria-controls="collapseSaven">
                                <img src="/assets/img/faq-icon.png" alt="" class="icon">
                                Can i invest using cryptocurrency?
                            </button>
                        </h2>
                        <div id="collapseSaven" class="accordion-collapse collapse" aria-labelledby="headingSaven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam
                                temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus
                                doloribus? Ratione, molestiae magnam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <img src="/assets/img/faq-icon.png" alt="" class="icon">
                                What are the minimum and maximum deposit amounts?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam
                                temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus
                                doloribus? Ratione, molestiae magnam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <img src="/assets/img/faq-icon.png" alt="" class="icon">
                                How long will the money arrive in my account after the withdrawal process?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam
                                temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus
                                doloribus? Ratione, molestiae magnam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <img src="/assets/img/faq-icon.png" alt="" class="icon">
                                What payment system can i use to withdraw?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam
                                temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus
                                doloribus? Ratione, molestiae magnam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection