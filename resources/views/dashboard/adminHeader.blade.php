<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/images/logo.png')}}">
<title>victortrade Investments</title>

<link href="{{asset('./dashboard/css/style.css')}}" rel="stylesheet">
<link href="{{asset('./dashboard/css/custom.css')}}" rel="stylesheet">

</head>
<body class="header-fix fix-sidebar ">
    @include('layouts.message')

<div id="main-wrapper">

<div class="header header-custom">
<nav class="navbar top-navbar navbar-expand-md">

<div class="navbar-header">
    <a class="navbar-brand" href="{{route('admin.dashboard')}}">
    
    <b><img src="{{asset('./dashboard/images/favicon.png')}}" alt="homepage" class="dark-logo" style="max-width: 80px;"></b>
    
    
    <span><img src="{{asset('./dashboard/images/logo-text.png')}}" alt="homepage" class="dark-logo" style="width: 50%;"></span>
    </a>
</div>

<div class="navbar-collapse">

<ul class="navbar-nav mr-auto mt-md-0">

<li class="nav-item"> <a class="nav-link toggle-nav hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
<li class="nav-item m-l-10"> <a class="nav-link sidebartoggle hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>


</ul>

<ul class="navbar-nav my-lg-0">


    
<li class="nav-item dropdown mega-menu"> <a class="nav-link dropdown-toggle text-muted" href="{{route('admin.dashboard')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
    {{strtoupper(auth()->user()->name)}}
</a></li>
    

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
<div class="dropdown-menu dropdown-menu-right animated slideInRight">
<ul class="dropdown-user">
<li role="separator" class="divider"></li>
<li><a href="{{route('user.settings')}}"> Profile</a></li>
<li role="separator" class="divider"></li>
<li  id="logout"><a href="#"> Logout</a></li>
</ul>
</div>
</li>
</ul>
</div>
</nav>
</div>


<div class="left-sidebar">

<div class="scroll-sidebar">

<nav class="sidebar-nav">
<ul id="sidebar-menu">
<li class="nav-devider"></li>
<li class="nav-label">Admin Dashboard</li>
<li class="nav-desc">
    
</li>

<li class="li-custom"> <a class="" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a></li>

<li class="li-custom"> <a class="" href="{{route('users.index')}}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">User Management</span></a></li>

<li class="li-custom"> <a class="" href="{{route('admin.investments')}}" aria-expanded="false"><i class="fa fa-pie-chart"></i><span class="hide-menu">Investments</span></a></li>

<li class="li-custom"> <a class="" href="{{route('transaction.index')}}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Transactions</span></a></li>

<li class="li-custom"> <a class="" href="{{route('admin.kycs')}}" aria-expanded="false"><i class="fa fa-copy"></i><span class="hide-menu">KYC Applications</span></a></li>

<li class="li-custom"> <a class="" href="{{route('admin.bulk.emails')}}" aria-expanded="false"><i class="ti ti-email"></i><span class="hide-menu">Send Bulk Emails</span></a></li>


<li class="li-custom"> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-pie-chart"></i><span class="hide-menu">Site Details</span></a>
    <ul aria-expanded="false" class="collapse">
        <li> <a class="" href="{{route('site_wallets.index')}}"><span class="hide-menu">Wallets</span></a></li>

        <li> <a class="" href="{{route('site_wallets.create')}}" ><span class="hide-menu">Add Wallet</span></a></li>
    </ul>
</li>



<li class="li-custom" id="logout"> <a class="" href="#"><i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a></li>

{{ csrf_field() }}

<script>

    let logout =  function(){
        let xhr =  new XMLHttpRequest();
        let param = "_token={{csrf_token()}}";
        let url = `{{route('logout')}}`;
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload =  function(){
            location.reload();
        }
        xhr.send(param);
        
    }

    let logs = document.querySelectorAll('li#logout');
    logs.forEach(log => {
        log.addEventListener('click', logout);
    });
</script>

</ul>
</nav>

</div>

</div>


